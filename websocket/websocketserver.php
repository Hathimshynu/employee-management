<?php

require 'vendor/autoload.php';

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class ChatServer implements MessageComponentInterface
{
    protected $clients;
    protected $userConnections; 

    public function __construct()
    {
        $this->clients = new \SplObjectStorage;
        $this->userConnections = [];
    }

    public function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
        echo "Connection established ({$conn->resourceId})\n";
        $userId = $_SESSION['reguser'];
        
        // Store the WebSocket connection with the user ID in the mapping
        $this->userConnections[$userId] = $conn;
        error_log("Connection on open");
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        // Handle incoming messages
        $messageData = json_decode($msg, true);

        if ($messageData && isset($messageData['receiver_id'], $messageData['message'])) {
            // Get the sender's user ID from the connection (assuming you set it earlier)
            $senderId = $from->resourceId;

            $receiverId = $messageData['receiver_id'];
            $messageContent = $messageData['message'];
            $message_date = date('Y-m-d H:i:s');

            // Database configuration
            $dsn = 'mysql:host=localhost;dbname=register';
            $username = 'root';
            $password = '';

            try {
                // Create a new PDO instance
                $pdo = new PDO($dsn, $username, $password);

                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                if ($pdo) {
                    error_log("Database connection successful.");
                } else {
                    error_log("Database connection failed.");
                }
                // Prepare and execute the SQL statement to insert data
                $sql = "INSERT INTO chat (sender_id, receiver_id, message, message_date) VALUES (:senderId, :receiverId, :messageContent, :messageDate)";
                $stmt = $pdo->prepare($sql);
                
                // Bind the values to the placeholders
                $stmt->bindParam(':senderId', $senderId, PDO::PARAM_INT);
                $stmt->bindParam(':receiverId', $receiverId, PDO::PARAM_INT);
                $stmt->bindParam(':messageContent', $messageContent, PDO::PARAM_STR);
                $stmt->bindParam(':messageDate', $message_date, PDO::PARAM_STR);
                
                // Execute the statement
                $stmt->execute();

                // Broadcast the message to all connected clients
                foreach ($this->clients as $client) {
                    $client->send(json_encode($messageData)); // Send the message data as JSON
                }
            } catch (PDOException $e) {
                // Handle database connection or insertion error
                echo "Database error: " . $e->getMessage() . "\n";
            }
        }
    }


    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
        echo "Connection {$conn->resourceId} has disconnected\n";
        error_log("Connection on close");
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "Error occurred: {$e->getMessage()}\n";
        $conn->close();
    }
}

$server = new \Ratchet\App('localhost', 8080);
$server->route('/chat', new ChatServer, ['*']);
$server->run();

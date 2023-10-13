<?php include 'header.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="<?= BASEURL ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= BASEURL ?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?= BASEURL ?>assets/libs/feather-icons/feather.min.js"></script>
    <script src="<?= BASEURL ?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?= BASEURL ?>assets/js/plugins.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        .container {
            margin-left: 300px !important;
            width: 700px;
            padding: 30px;
        }
        .table{
            color:darkcyan;
        }
        .table:hover {
        background-color: darkblue; 
    }
    </style>

</head>

<body>
<div class="container text-center mt-5">
    <div class="input-group mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Search by User ID or Name">
        <div class="input-group-append ml-3">
            <button id="searchButton" class="btn btn-primary " type="button">Search</button>
        </div>
    </div>

    <div id="searchResults"></div>

    <div id="userTable" style="display: none;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Nationality</th>
                    <th>Date of Joining</th>
                </tr>
            </thead>
            <tbody id="userTableBody"></tbody>
        </table>
    </div>
</div>
</body>

</html>



<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<script>
    $(document).ready(function() {
        $('#searchButton').click(function() {
            var searchTerm = $('#searchInput').val();

            $.ajax({
                type: 'POST',
                url: '<?= BASEURL ?>user/searchUsers',
                data: {
                    searchTerm: searchTerm
                },
                dataType: 'JSON',
                success: function(response) {
                    if (response.status === 'success' && response.user.length > 0) {

                        // Display the table and populate it with user details
                        $('#userTable').show();
                        $('#userTableBody').empty();
                        $.each(response.user, function(index, user) {
                            var userRow = '<tr>';
                            userRow += '<td>' + user.username + '</td>';
                            userRow += '<td>' + user.fname + '</td>';
                            userRow += '<td>' + user.lname + '</td>';
                            userRow += '<td>' + user.email + '</td>';
                            userRow += '<td>' + user.mob + '</td>';
                            userRow += '<td>' + user.dob + '</td>';
                            userRow += '<td>' + user.gender + '</td>';
                            userRow += '<td>' + user.nationality + '</td>';
                            userRow += '<td>' + user.date_of_joining + '</td>';
                            userRow += '</tr>';
                            $('#userTableBody').append(userRow);
                        });
                    } else {
                        $('#userTable').hide();
                        Swal.fire({
                            title: 'Error',
                            text: 'No users found.',
                            icon: 'error'
                        });
                    }
                },
                error: function() {
                    $('#searchResults').html('An error occurred while processing your request.');
                    $('#userTable').hide();
                }
            });
        });
    });
</script>


<?php include 'footer.php'; ?>
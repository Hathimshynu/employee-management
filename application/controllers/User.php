<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'email', 'table', 'session']);
        $this->load->database();
        $this->load->helper(array('string', 'url', 'form'));
        $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');
    }

    public function index()
    {
        if ($this->session->userdata('reguser')) {

            $data['page_name'] = "dashboard";
            $this->load->view('user/dashboard', $data);
        } else {
            $data['page_name'] = "login";
            $this->load->view('user/login', $data);
        }
    }


    public function regist_insert()
    {
        if ($_POST) {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            log_message('error', 'name' . $name);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $cpass = filter_input(INPUT_POST, 'cpass', FILTER_SANITIZE_STRING);

            $this->form_validation->set_rules('name', 'User Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');
            $this->form_validation->set_rules('mobile', 'Phone', 'trim|required|callback_mobile_check');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('cpass', 'Confirm Password', 'matches[password]|trim|required');


            if ($this->form_validation->run()) {

                $inn = $this->user->register_manage();
                if ($inn)
                    $this->session->set_userdata('reguser', $inn['username']);
                $response['status'] = 'success';
                $response['message'] = 'Registered Successfully';
                $response['username'] = $inn['username'];
                $response['password'] = $inn['password'];
            } else {
                $response['status'] = 'error';
                $response['name_error'] = form_error('name');
                $response['email_error'] = form_error('email');
                $response['mobile_error'] = form_error('mobile');
                $response['password_error'] = form_error('password');
                $response['cpass_error'] = form_error('cpass');
            }
            echo json_encode($response);
        }
    }

    public function email_check()
    {
        $email = $this->input->post('email');
        $check = $this->db->where('email', $email)->get('user_role')->row();
        if ($check) {
            $this->form_validation->set_message('email_check', 'Email Already Exists');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function mobile_check()
    {
        $mobile = $this->input->post('mobile');
        $check = $this->db->where('mob', $mobile)->get('user_role')->row();
        if ($check) {
            $this->form_validation->set_message('mobile_check', 'Mobile Number Already Exists');
            return FALSE;
        } else {
            return TRUE;
        }
    }


    public function login()
    {
        if ($_POST) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            log_message('error', 'username' . $username);
            log_message('error', 'Password' . $password);
            $check = $this->user->login($username, $password);
            log_message('error', 'check' . json_encode($check));
            if (isset($check['error'])) {
                $this->session->set_flashdata('error_message', $check['error']);
                redirect('user', 'refresh');
            } elseif ($check !== false) {
                $this->session->set_userdata('reguser', $check['username']);
                $this->session->set_userdata('regemail', $check['email']);
                $this->session->set_userdata('regname', $check['fname']);
                $this->session->set_flashdata('success_message', 'welcome');
                redirect('user', 'refresh');
            } else {
                $this->session->set_flashdata('error_message', 'Please enter valid username and password');
                redirect('user', 'refresh');
            }
        } else {

            $this->load->view('user/login');
        }
    }


    public function emailcheck()
    {

        $email_check = $this->db->where('email', $this->input->post('email'))->where('username!=', $this->session->userdata('reguser'))->get('user_role')->row_array();

        if (!empty($email_check)) {
            $this->form_validation->set_message('emailcheck', 'Email ID already exists');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function phonecheck()
    {

        $email_check = $this->db->where('mob', $this->input->post('mob'))->where('username!=', $this->session->userdata('reguser'))->get('user_role')->row_array();

        if (!empty($email_check)) {
            $this->form_validation->set_message('phonecheck', 'Mobile Number already exists');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function profile_update()
    {
        if (!$this->session->userdata('reguser'))
            redirect('admin', 'refresh');

        if ($_POST) {
            $this->form_validation->set_rules('fname', 'First name', 'trim');
            $this->form_validation->set_rules('lname', 'Last name', 'trim');
            $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|callback_emailcheck');
            $this->form_validation->set_rules('dob', 'Dob', 'trim');
            $this->form_validation->set_rules('pin', 'Pincode', 'trim');
            $this->form_validation->set_rules('mob', 'Mobile', 'trim|numeric|callback_phonecheck');
            $this->form_validation->set_rules('nationality', 'Nationality', 'trim');
            $this->form_validation->set_rules('gender', 'Gender', 'trim');


            if ($this->form_validation->run()) {

                $inn = $this->user->user_profile_update();
                if ($inn) {
                    $response['status'] = 'success';
                    $response['message'] = 'Profile Updated Successfully';
                } else {
                    // Profile update failed
                    $response['status'] = 'Details not Updated';
                }
            } else {
                // Form validation failed
                $response['status'] = 'error';
                $response['message'] = validation_errors();
            }
        }

        // Send JSON response
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }


    public function searchUsers()
    {
        $searchTerm = $this->input->post('searchTerm');

        $result = $this->db->where('username', $searchTerm)->or_where('name', $searchTerm)->get('user_role')->result_array();
        $uu = $this->db->last_query();
        log_message('error', 'query' . $uu);
        if ($result) {
            $response['status'] = 'success';
            $response['user'] = $result;
        } else {
            $response['status'] = 'error';
        }

        // Return the results as JSON
        echo json_encode($response);
    }


    public function register()
    {

        $this->load->view('user/register');
    }

    public function exam()
    {
        if ($this->session->userdata('reguser'))
            $this->load->view('user/exam');
    }
    public function profile()
    {
        if ($this->session->userdata('reguser'))
            $this->load->view('user/profile');
    }


    public function logout()
    {
        if ($this->session->userdata('reguser')) {

            $this->session->set_userdata('reguser', '');
            $this->session->set_userdata('regname', '');
            $this->load->view('user/logout');
        }
    }
}

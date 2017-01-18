<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sign_up extends CI_Controller
{
    public function add_user()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('tel', 'Telephone', 'required|min_length[10]|max_length[15]');
        $this->form_validation->set_rules('username', 'User Name', 'required|min_length[6]|alpha_dash');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|alpha_numeric');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'matches[password]|required|min_length[8]|alpha_numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('page-sign-up');
        } else {

            $data = array(
                'buyer_name' => $this->input->post('name'),
                'buyer_email' => $this->input->post('email'),
                'buyer_tel' => $this->input->post('tel'),
                'buyer_username' => $this->input->post('username'),
                'buyer_password' => $this->input->post('password')
            );
            $this->load->model('user_model');
            $result = $this->user_model->buyer_insert($data);
            if ($result == TRUE) {
                $newdata = array(
                    'buyer_username' => $this->input->post('username'),
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);

                $this->load->view('home', $newdata);
            } else {
                $this->load->view('blank-page');
            }
        }


    }

    public function login()
    {
        $user = $this->input->post('user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('user_model');
        if ($user == 'buyer') {
            $result = $this->user_model->buyer_login($username, $password);
            if ($result == TRUE) {
                $newdata = array(
                    'username' => $this->input->post('username'),
                    'user' => "buyer",
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);

                $this->load->view('home', $newdata);
            } else {
                $this->load->view('blank-page');
            }
        }else{
            $result = $this->user_model->seller_login($username, $password);
            if ($result == TRUE) {
                $newdata = array(
                    'username' => $this->input->post('username'),
                    'user' => "seller",
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);

                $this->load->view('home', $newdata);
            } else {
                $this->load->view('blank-page');
            }

        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('home');
    }
}

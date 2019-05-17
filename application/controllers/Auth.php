<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  private $data;

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Auth_Model');
    $this->data['judul'] = "Sistem KP";
  }

  public function index()
  {
    if ($this->session->userdata('id') and $this->session->userdata['is_active'] == 1) {
      redirect('home');
    }

    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('auth/templates/header', $this->data);
      $this->load->view('auth/login');
      $this->load->view('auth/templates/footer');
    } else {
      $data = [
        "username" => $this->input->post('username'),
        "password" => $this->input->post('password')
      ];

      $this->_login($data);
    }
  }

  public function registration()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|max_length[16]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('auth/templates/header', $this->data);
      $this->load->view('auth/register');
      $this->load->view('auth/templates/footer');
    } else {
      $data = [
        "username" => htmlspecialchars($this->input->post('username', 1)),
        "password" => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
      ];

      $this->_registration($data);
    }
  }

  private function _login($data)
  {
    $this->Auth_Model->login_auth($data);
  }

  private function _registration($data)
  {
    $this->Auth_Model->register_auth($data);
  }

  public function logout()
  {
    $this->session->unset_userdata('id');
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('is_active');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">Anda telah logout!</div>');
    redirect('auth');
  }
}

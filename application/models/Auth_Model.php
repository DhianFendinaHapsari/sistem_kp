<?php

class Auth_Model extends CI_Model
{
  public function login_auth($param)
  {
    $user = $this->db->get_where('user', ['username' => $param['username']])->row_array();
    if ($user) {
      if (password_verify($param['password'], $user['password'])) {
        $data = [
          'id' => $user['id'],
          'username' => $user['username'],
          'is_active' => $user['is_active'],
          'role_id' => $user['role_id']
        ];

        $this->session->set_userdata($data);

        // var_dump($user); echo $user['is_active']; die;

        if ($user['is_active'] == 1) {
          redirect('home');
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun anda belum aktif</div>');

          $this->session->unset_userdata('id');
          $this->session->unset_userdata('username');
          $this->session->unset_userdata('is_active');
          $this->session->unset_userdata('role_id');

          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon periksa kembali kata sandi anda.</div>');

        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username ini tidak pernah ada.</div>');

      redirect('auth/registration');
    }
  }

  public function register_auth($param)
  {
    $data = [
      'username' => $param['username'],
      'password' => $param['password'],
      'role_id' => 2,
      'is_active' => 1,
      'created_at' => time()
    ];

    $user = $this->db->insert('user', $data);

    if ($user) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun berhasil dibuat.</div>');

      redirect('auth');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun gagal dibuat.</div>');

      redirect('auth/registration');
    }
  }
}
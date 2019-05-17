<?php

class User_Model extends CI_Model
{
  public function getUsers()
  {
    return $this->db->get('user')->result_array();
  }

  public function addUser($data, $user)
  {
    $this->db->insert('user', $data);

    $query = "select * from user order by id desc limit 1";
    $res = $this->db->query($query)->row_array();

    $user['user_Id'] = $res['id'];

    return $this->db->insert('dosen', $user);
  }

  public function activate($id)
  {
    $user = $this->db->get_where('user', ['id' => $id])->row_array();

    if ($user['is_active'] == 1) {
      $this->db->set('is_active', 0);
    } else {
      $this->db->set('is_active', 1);
    }

    $this->db->where('id', $id);

    return $this->db->update('user');
  }

  public function getSkema()
  {
    return $this->db->get('skema_kp')->result_array();
  }

  public function getDosen()
  {
    return $this->db->get('dosen')->result_array();
  }

  public function daftarKP($user, $kp)
  {
    $this->db->insert('kp', $kp);

    $query = "select * from kp order by id desc limit 1";
    $id_kp = $this->db->query($query)->row_array();

    $user_id = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    $user['user_id'] = $user_id['id'];
    $user['kode_kp'] = $id_kp['id'];
    $user['created_at'] = time();

    return $this->db->insert('mahasiswa', $user);
  }

  public function isRegistered()
  {
    $user_id = $this->session->userdata('id');

    $query = "select count(kp.id) as jumlah from kp join mahasiswa on kp.id = mahasiswa.kode_kp where mahasiswa.user_id = $user_id and mahasiswa.kode_kp = kp.id";

    return $this->db->query($query)->row_array();
  }

  public function seminarRegistered() {
    $user_id = $this->session->userdata('id');

    $query = "select count(seminar.id_user) as jumlah from seminar join mahasiswa on seminar.id_user = mahasiswa.user_id join user on user.id = mahasiswa.user_id where mahasiswa.user_id = $user_id";

    return $this->db->query($query)->row_array();
  }

  public function getNilai()
  {
    $user_id = $this->session->userdata('id');
    $query = "select kp.nilai_UTS as uts, kp.nilai_UAS as uas from kp join mahasiswa on kp.id = mahasiswa.kode_kp where mahasiswa.user_id = $user_id";

    return $this->db->query($query)->row_array();
  }

  public function getMahasiswa($nim)
  {
    $mahasiswa = $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();

    // var_dump($mahasiswa);
    // die;

    return $this->db->get_where('kp', ['id' => $mahasiswa['kode_kp']])->row_array();
  }

  public function daftar_seminar($data) {
    return $this->db->insert('seminar', $data);
  }
}

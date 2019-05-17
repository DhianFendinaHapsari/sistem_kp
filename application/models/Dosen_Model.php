<?php

class Dosen_Model extends CI_Model
{
  public function getMahasiswa()
  {
    $niy = $this->session->userdata('id');

    $user = $this->db->get_where('dosen', ['user_Id' => $niy])->row_array();

    $query = "select DISTINCT mahasiswa.nim, mahasiswa.nama, kp.judul from kp join mahasiswa on kp.id = mahasiswa.kode_kp join dosen on kp.dosen_niy = dosen.niy where dosen.user_Id = $user[user_Id]";

    return $this->db->query($query)->result_array();
  }

  public function ubahNilai($nilai)
  {
    $kp = $this->db->get_where('mahasiswa', ['nim' => $nilai['nim']])->row_array();

    // var_dump($nilai);
    // var_dump($kp);
    // die;

    $this->db->set('nilai_UTS', $nilai['uts']);
    $this->db->set('nilai_UAS', $nilai['uas']);
    $this->db->where('id', $kp['kode_kp']);
    return $this->db->update('kp');
  }
}

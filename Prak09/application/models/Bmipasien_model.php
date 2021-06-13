<?php
class Bmipasien_model extends CI_Model {
    public $id;
    public $tanggal;
    public $pasien;
    public $bmi;

    public function getAll() {
        $query = $this->db->get('bmi_pasien');
        return $query->result();
    }

    public function getById($id) {
        $query = $this->db->get_where('bmi_pasien', ['id' => $id]);
        return $query->row();
    }
}
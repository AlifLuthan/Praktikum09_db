<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
    public function index() {
        $this->load->model('pasien_model','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode='010001';
        $this->pasien1->nama='Faiz Fikri';
        $this->pasien1->tmp_lahir='Jakarta';
        $this->pasien1->tgl_lahir='1 Januari 2002';
        $this->pasien1->gender='L';
        
        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id=2;
        $this->pasien2->kode='020001';
        $this->pasien2->nama='Pandan Wangi';
        $this->pasien2->tmp_lahir='Bogor';
        $this->pasien2->tgl_lahir='1 Februari 2002';
        $this->pasien2->gender='P';
        
        $this->load->model('pasien_model','pasien3');
        $this->pasien3->id=3;
        $this->pasien3->kode='030001';
        $this->pasien3->nama='Alif Luthan';
        $this->pasien3->tmp_lahir='Jakarta';
        $this->pasien3->tgl_lahir='05 November 2001';
        $this->pasien3->gender='L';

        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $data['list_pasien']=$list_pasien;
        
        $this->load->view('layouts/header');
        $this->load->view('pasien/index', $data);
        $this->load->view('layouts/footer');
    }
    public function list() {
        $this->load->model('pasien_model'); // load model
        $data['pasien']=$this->pasien_model->getAll(); //query

        $this->load->view('layouts/header');
        $this->load->view('pasien/list', $data);
        $this->load->view('layouts/footer');
    }
    public function view($id) {
        $this->load->model('pasien_model');
        $data['pasien'] = $this->pasien_model->findById($id);

        $this->load->view('layouts/header');
        $this->load->view('pasien/view', $data);
        $this->load->view('layouts/footer');
    }
}
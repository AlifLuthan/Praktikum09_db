<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class BMI extends CI_Controller {

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

//=========================================================
        $this->load->model('bmipasien_model', 'bmipasien1');
        $this->bmipasien1->id=1;
        $this->bmipasien1->tanggal='2021-04-11';
        $this->bmipasien1->pasien='Faiz Fikri';
        $this->bmipasien1->bmi='';

        $this->load->model('bmipasien_model', 'bmipasien2');
        $this->bmipasien2->id=2;
        $this->bmipasien2->tanggal='2021-05-11';
        $this->bmipasien2->pasien='Pandan Wangi';
        $this->bmipasien2->bmi='';

        $this->load->model('bmipasien_model', 'bmipasien3');
        $this->bmipasien3->id=3;
        $this->bmipasien3->tanggal='2021-06-11';
        $this->bmipasien3->pasien='Alif Luthan';
        $this->bmipasien3->bmi='';

//=========================================================
        $this->load->model('bmi_model', 'bmi1');
        $this->bmi1->berat=64.2;
        $this->bmi1->tinggi=169;
        $this->bmi1->nilaiBMI();
        $this->bmi1->statusBMI();

        $this->load->model('bmi_model', 'bmi2');
        $this->bmi2->berat=40.2;
        $this->bmi2->tinggi=150;
        
        $this->load->model('bmi_model', 'bmi3');
        $this->bmi3->berat=43;
        $this->bmi3->tinggi=175;
        
        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $list_bmipasien = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3];
        $list_bmi = [$this->bmi1, $this->bmi2, $this->bmi3];
        
        $data['list_pasien']=$list_pasien;
        $data['list_bmipasien']=$list_bmipasien;
        $data['list_bmi']=$list_bmi;
        
        $this->load->view('layouts/header');
        $this->load->view('bmi/index', $data);
        $this->load->view('layouts/footer');
    }
    public function list() {
        $this->load->model('bmi_model'); // load model
        $data['bmi']=$this->bmi_model->getAll(); //query

        $this->load->view('layouts/header');
        $this->load->view('bmi/list', $data);
        $this->load->view('layouts/footer');
    }
    public function view($id) {
        $this->load->model('bmi_model');
        $data['bmi'] = $this->bmi_model->findById($id);

        $this->load->view('layouts/header');
        $this->load->view('bmi/view', $data);
        $this->load->view('layouts/footer');
    }
}
?>
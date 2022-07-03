<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function index()
    {
        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '01010101';
        $this->mhs1->nama = 'Jundi';
        $this->mhs1->gender = 'L';
        $this->mhs1->ipk = 3.85;

        $this->load->model('mahasiswa_model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = '02020202';
        $this->mhs2->nama = 'Fatih';
        $this->mhs2->gender = 'L';
        $this->mhs2->ipk = 3.55;
        
        $this->load->model('mahasiswa_model', 'mhs3');
        $this->mhs3->id = 3;
        $this->mhs3->nim = '03030303';
        $this->mhs3->nama = 'Al';
        $this->mhs3->gender = 'P';
        $this->mhs3->ipk = 3.55;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;

        $this->load->view('header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('footer');
    }
}
<?php
class Siswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Siswa';
        $data['active'] = 'siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Tambah Data Siswa';
        $data['active'] = 'siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/add', $data);
        $this->view('templates/footer');
    }
}

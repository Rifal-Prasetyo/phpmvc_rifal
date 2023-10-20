<?php
class About extends Controller
{
    public function index($nama = 'Rifal', $alamat = 'Srikandang Metropolitan', $umur = 17)
    {
        $data['nama'] = $nama;
        $data['alamat'] = $alamat;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $data['active'] = 'about';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
    public function pdo()
    {
        $data['judul'] = 'Pdo info';
        $this->view('templates/header', $data);
        $this->view('about/pdo');
        $this->view('templates/footer');
    }
}

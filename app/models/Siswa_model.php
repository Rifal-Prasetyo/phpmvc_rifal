<?php
class Siswa_model
{
    // private $siswa = [
    //     [
    //         "nama" => "Muhammad Rifal Prasetyo",
    //         "nis" => "3886",
    //         "email" => "hrdsdms765@gmail.com",
    //         "jurusan" => "Rekayasa Perangkat Lunak"
    //     ],

    //     [
    //         "nama" => "Muhammad Yuanendra",
    //         "nis" => "3887",
    //         "email" => "Yuan090@gmail.com",
    //         "jurusan" => "IPA"
    //     ],

    //     [
    //         "nama" => "Muhammad Soffan Syarofi",
    //         "nis" => "3888",
    //         "email" => "rafiahmad987@gmail.com",
    //         "jurusan" => "IPS"
    //     ]
    // ];
    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc_rifal';
        try {
            $this->dbh = new PDO($dsn, 'cobadeh', 'indonesia');
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }


    public function getAllSiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM siswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

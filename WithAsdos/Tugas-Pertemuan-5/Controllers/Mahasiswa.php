<?php
require_once 'Config/DB.php';

class Mahasiswa
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function index()
    {
        $stmt = $this->pdo->query("SELECT * FROM mahasiswa");
        return $stmt->fetchAll();
    }

    public function show($id)
    {
        
    }

    public function create($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO mahasiswa (nim, nama, tmp_lahir, tgl_lahir, email, thn_masuk, sks_lulus, ipk, prodi_id) VALUES (?,?,?,?,?,?,?,?,?)");
        return $stmt->execute([$data['nim'], $data['nama'], $data['tmp_lahir'], $data['tgl_lahir'], $data['email'], $data['thn_masuk'], $data['sks_lulus'], $data['ipk'], $data['prodi_id']]); 
    }

    public function update($nim, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE mahasiswa SET kode = ?, nama = ?, tmp_lahir = ?, tgl_lahir = ?, email = ?, thn_masuk = ?, sks_lulus = ?, ipk = ?, prodi_id = ? WHERE id = ?");
        return $stmt->execute([$data['nim'], $data['nama'], $data['tmp_lahir'], $data['tgl_lahir'], $data['email'], $data['thn_masuk'], $data['sks_lulus'], $data['ipk'], $data['prodi_id'], $nim]);
    }

    public function delete($nim)
    {
        $stmt = $this->pdo->prepare('DELETE FROM mahasiswa WHERE nim = ?');
        return $stmt->execute([$nim]);
    }
}

$mahasiswa = new Mahasiswa($pdo);

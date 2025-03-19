<?php 
    class Mahasiswa {
        public $nim;
        public $nama;
        public $thn_angkatan;
        public $prodi;
        public $ipk;
        
        public function __construct($nim, $nama, $thn_angkatan, $prodi, $ipk) {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->thn_angkatan = $thn_angkatan;
            $this->prodi = $prodi;
            $this->ipk = $ipk;
        }
        
        public function getNim() {
            return $this->nim;
        }
        
        public function getNama() {
            return $this->nama;
        }
        
        public function getProdi() {
            return $this->prodi;
        }
        
        public function getIpk() {
            return $this->ipk;
        }
        function predikat_ipk() {
            if ($this->ipk < 2.0) {
                return "Cukup";
            } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) {
                return "Baik";
            } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) {
                return "Memuaskan";
            } else {
                return "Cumlaude";
            }
        }    
    }
?>
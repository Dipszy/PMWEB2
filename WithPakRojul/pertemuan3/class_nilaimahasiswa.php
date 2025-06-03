<?php 
/**
 * Class NilaiMahasiswa
 */
class NilaiMahasiswa{
    /**
     * Properties
     * @var string $matakuliah
     */
    public $nama;
    public $matakuliah;
    public $nilai_uts;
    public $nilai_uas;
    public $nilai_tugas;

    public const PERSENTASE_UTS = 0.25;
    public const PERSENTASE_UAS = 0.30;
    public const PERSENTASE_TUGAS = 0.45;
    /**
     * Konstanta KKm = Kriteria Ketuntasan Minimal
     */
    public const KKM = 60;

    public function getNilaiAkhir(){
        $nilai_akhir = ($this->nilai_uts * self::PERSENTASE_UTS) 
        + ($this->nilai_uas * self::PERSENTASE_UAS)
        + ($this->nilai_tugas * self::PERSENTASE_TUGAS);
        return $nilai_akhir;
    }

    public function kelulusan(){
        if($this->getNilaiAkhir() >= self::KKM){
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }
}

?>
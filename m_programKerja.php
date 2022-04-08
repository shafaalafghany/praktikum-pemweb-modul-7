<?php
include_once "koneksiMVC.php";

class m_programKerja
{
    private $nomorProgram;
    private $namaProgram;
    private $suratKeterangan;
    public $hasil = array();

    public function __construct($nomorProgram, $namaProgram, $suratKeterangan)
    {
        $this->setProgramKerja($nomorProgram, $namaProgram, $suratKeterangan);
    }

    public function setProgramKerja($nomorProgram, $namaProgram, $suratKeterangan)
    {
        require("koneksiMVC.php");
        $mysqli->query("INSERT INTO proker VALUES ('$nomorProgram', '$namaProgram', '$suratKeterangan')");
    }

    public function getSemuaProgramKerja()
    {
        require("koneksiMVC.php");
        $rs = $mysqli->query("SELECT * FROM proker");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }
}

<?php

abstract class Reservasi
{
    protected $idReservasi;
    protected $namaPelanggan;
    protected $tanggalBooking;
    protected $durasiJam;
    protected $tarifDasarPerJam;

    public function __construct(
        $idReservasi,
        $namaPelanggan,
        $tanggalBooking,
        $durasiJam,
        $tarifDasarPerJam
    ) {

        $this->idReservasi = $idReservasi;
        $this->namaPelanggan = $namaPelanggan;
        $this->tanggalBooking = $tanggalBooking;
        $this->durasiJam = $durasiJam;
        $this->tarifDasarPerJam = $tarifDasarPerJam;
    }

    public function getIdReservasi()
    {
        return $this->idReservasi;
    }

    public function getNamaPelanggan()
    {
        return $this->namaPelanggan;
    }

    public function getTanggalBooking()
    {
        return $this->tanggalBooking;
    }

    public function getDurasiJam()
    {
        return $this->durasiJam;
    }

    public function getTarifDasarPerJam()
    {
        return $this->tarifDasarPerJam;
    }

    abstract public function hitungTotalBiaya();

    abstract public function selectWhere($koneksi, $idReservasi);
}

?>
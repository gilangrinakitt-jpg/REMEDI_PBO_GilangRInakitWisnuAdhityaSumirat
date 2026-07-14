<?php

require_once 'Reservasi.php';

class ReservasiReguler extends Reservasi
{
    protected $tipeBackground;
    protected $cetakFotoLembar;

    public function __construct(
        $idReservasi,
        $namaPelanggan,
        $tanggalBooking,
        $durasiJam,
        $tarifDasarPerJam,
        $tipeBackground,
        $cetakFotoLembar
    ) {
        parent::__construct(
            $idReservasi,
            $namaPelanggan,
            $tanggalBooking,
            $durasiJam,
            $tarifDasarPerJam
        );

        $this->tipeBackground = $tipeBackground;
        $this->cetakFotoLembar = $cetakFotoLembar;
    }

    public function hitungTotalBiaya()
    {
        return $this->durasiJam * $this->tarifDasarPerJam;
    }

    public function tampilDetailReservasi()
    {
        return "Reservasi Reguler";
    }

    public function selectWhere($conn, $idReservasi)
    {
        $query = "
            SELECT *
            FROM table_reservasi
            WHERE id_reservasi = '$idReservasi'
            AND jenis_paket = 'reguler'
        ";

        return mysqli_query($conn, $query);
    }
}

?>
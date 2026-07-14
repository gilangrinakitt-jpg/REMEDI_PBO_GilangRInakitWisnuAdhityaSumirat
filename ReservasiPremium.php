<?php

require_once 'Reservasi.php';

class ReservasiPremium extends Reservasi
{
    protected $kuotaTalentOrang;
    protected $layananMakeup;

    public function __construct(
        $idReservasi,
        $namaPelanggan,
        $tanggalBooking,
        $durasiJam,
        $tarifDasarPerJam,
        $kuotaTalentOrang,
        $layananMakeup
    ) {
        parent::__construct(
            $idReservasi,
            $namaPelanggan,
            $tanggalBooking,
            $durasiJam,
            $tarifDasarPerJam
        );

        $this->kuotaTalentOrang = $kuotaTalentOrang;
        $this->layananMakeup = $layananMakeup;
    }

    public function hitungTotalBiaya()
    {
        return $this->durasiJam * $this->tarifDasarPerJam;
    }

    public function tampilDetailReservasi()
    {
        return "Reservasi Premium";
    }

    public function selectWhere($conn, $idReservasi)
    {
        $query = "
            SELECT *
            FROM table_reservasi
            WHERE id_reservasi = '$idReservasi'
            AND jenis_paket = 'premium'
        ";

        return mysqli_query($conn, $query);
    }
}

?>
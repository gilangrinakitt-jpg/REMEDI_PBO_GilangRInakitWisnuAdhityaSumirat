<?php

require_once 'Reservasi.php';

class ReservasiEvent extends Reservasi
{
    protected $namaLokasiLuar;
    protected $biayaTransportasiTim;

    public function __construct(
        $idReservasi,
        $namaPelanggan,
        $tanggalBooking,
        $durasiJam,
        $tarifDasarPerJam,
        $namaLokasiLuar,
        $biayaTransportasiTim
    ) {

        parent::__construct(
            $idReservasi,
            $namaPelanggan,
            $tanggalBooking,
            $durasiJam,
            $tarifDasarPerJam
        );

        $this->namaLokasiLuar = $namaLokasiLuar;
        $this->biayaTransportasiTim = $biayaTransportasiTim;
    }

    public function hitungTotalBiaya()
    {
        return ($this->durasiJam * $this->tarifDasarPerJam)
            + $this->biayaTransportasiTim;
    }

    public function selectWhere($koneksi, $idReservasi)
    {
        $query = "SELECT * FROM table_reservasi
                  WHERE id_reservasi = '$idReservasi'
                  AND jenis_paket = 'event'";

        return mysqli_query($koneksi, $query);
    }
}

?>
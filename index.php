<?php

require_once 'koneksi.php';

$filter = isset($_GET['paket']) ? $_GET['paket'] : 'semua';

if ($filter == 'semua') {
    $query = "SELECT * FROM table_reservasi";
} else {
    $query = "SELECT * FROM table_reservasi WHERE jenis_paket = '$filter'";
}

$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Reservasi Studio</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #eef5ff;
            padding: 30px;
        }

        .container {
            width: 95%;
            max-width: 1300px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #0d47a1;
            margin-bottom: 25px;
        }

        .filter-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);

            display: flex;
            justify-content: center;
        }

        .filter-box form {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        label {
            font-weight: bold;
            font-size: 16px;
        }

        select {
            width: 180px;
            height: 42px;
            padding: 8px 12px;
            border: 1px solid #cccccc;
            border-radius: 8px;
            font-size: 15px;
        }

        button {
            height: 42px;
            padding: 0 20px;
            border: none;
            border-radius: 8px;
            background-color: #2196f3;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1976d2;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        th {
            background-color: #2196f3;
            color: white;
            padding: 14px;
        }

        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #eeeeee;
        }

        tr:nth-child(even) {
            background-color: #f7fbff;
        }

        tr:hover {
            background-color: #e3f2fd;
        }

    </style>

</head>

<body>

    <div class="container">

        <h1>📸 Sistem Reservasi Studio</h1>

        <div class="filter-box">

            <form method="GET">

                <label>Pilih Paket:</label>

                <select name="paket">

                    <option value="semua" <?= ($filter == 'semua') ? 'selected' : ''; ?>>
                        Semua Paket
                    </option>

                    <option value="reguler" <?= ($filter == 'reguler') ? 'selected' : ''; ?>>
                        Reguler
                    </option>

                    <option value="premium" <?= ($filter == 'premium') ? 'selected' : ''; ?>>
                        Premium
                    </option>

                    <option value="event" <?= ($filter == 'event') ? 'selected' : ''; ?>>
                        Event
                    </option>

                </select>

                <button type="submit">Tampilkan</button>

            </form>

        </div>

        <table>

            <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Booking</th>
                <th>Durasi</th>
                <th>Tarif/Jam</th>
                <th>Jenis Paket</th>
                <th>Total Biaya</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)) : ?>

                <?php

                if ($row['jenis_paket'] == 'reguler') {

                    $totalBiaya = ($row['durasi_jam'] * $row['tarif_dasar_per_jam']) + 50000;

                } elseif ($row['jenis_paket'] == 'premium') {

                    $totalBiaya = ($row['durasi_jam'] * $row['tarif_dasar_per_jam']) * 1.20;

                } else {

                    $totalBiaya = ($row['durasi_jam'] * $row['tarif_dasar_per_jam']) + $row['biaya_transportasi_tim'];

                }

                ?>

                <tr>

                    <td><?= $row['id_reservasi']; ?></td>
                    <td><?= $row['nama_pelanggan']; ?></td>
                    <td><?= $row['tanggal_booking']; ?></td>
                    <td><?= $row['durasi_jam']; ?> Jam</td>
                    <td>Rp <?= number_format($row['tarif_dasar_per_jam'], 0, ',', '.'); ?></td>
                    <td><?= ucfirst($row['jenis_paket']); ?></td>
                    <td>Rp <?= number_format($totalBiaya, 0, ',', '.'); ?></td>

                </tr>

            <?php endwhile; ?>

        </table>

    </div>

</body>

</html>
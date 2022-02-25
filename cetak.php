<?php
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$sewa = $_POST['sewa'];
$driver = $_POST['driver'];
$nama_mobil = $_POST['nama_mobil'];
$harga = $_POST['harga'];
$sopir = 150000;
$total = ($sewa * $sopir) + ($harga * $sewa);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hasil Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="cetak.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h2>Form Sewa
                <br>Rental Mobil NyeawaIn
            </h2><br>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $nama ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><?= $nik  ?></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>:</td>
                    <td><?= $no_telepon ?></td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>:</td>
                    <td><?= $email  ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $alamat ?></td>
                </tr>
                <tr>
                    <td>Lama Sewa</td>
                    <td>:</td>
                    <td><?= $sewa ?></td>
                </tr>
                <tr>
                    <td>Nama Mobil</td>
                    <td>:</td>
                    <td><?= $nama_mobil ?></td>
                </tr>
                <tr>
                    <td>Tarif / hari</td>
                    <td>:</td>
                    <td>Rp <?= number_format($harga) ?></td>
                </tr>
                <tr>
                    <td>Dengan Driver</td>
                    <td>:</td>
                    <td><?= $driver ?></td>
                </tr>
                <tr>
                    <td>Tarif</td>
                    <td>:</td>
                    <td>Rp <?= number_format($sopir) ?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td>Rp <?= number_format($total); ?></td>
                </tr>
                </fieldset>
        </div>
</body>

</html>
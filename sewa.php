<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="Sewa.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h2>Form Sewa
                <br>Rental Mobil NyeawaIn
            </h2>
            <form action="cetak.php" method="POST">

                <!-- menangkap method get -->
                <input type="hidden" name="nama_mobil" value="<?php echo $_GET['nama_mobil']; ?>">
                <input type="hidden" name="harga" value="<?php echo $_GET['harga']; ?>">

                <table>
                    <tr>
                        <p>Nama</p>
                        <p><input type="text" name="nama" style="width: 500px; height: 30px;" placeholder="Masukkan Nama" required></p>
                    </tr>
                    <tr>
                        <p>NIK</p>
                        <p><input type="text" name="nik" style="width: 500px; height: 30px;" placeholder="Masukkan NIK" required></p>
                    </tr>
                    <tr>
                        <p>No Telepon</p>
                        <p><input type="text" name="no_telepon" style="width: 500px; height: 30px;" placeholder="Masukkan No Telepon" required></p>
                    </tr>
                    <tr>
                        <p>Email</p>
                        <p><input type="email" name="email" style="width: 500px; height: 30px;" placeholder="Masukkan Email" required></p>
                    </tr>
                    <tr>
                        <p>Alamat</p>
                        <textarea style="width: 500px; height: 30px;" placeholder="Masukkan Alamat" name="alamat"></textarea>
                    </tr>
                    <tr>
                        <p>Lama Sewa</p>
                        <p><input type="number" name="sewa" style="width: 500px; height: 30px;" placeholder="Masukkan Lama Sewa"></p>
                    </tr>
                    <tr>
                        <p>Dengan Driver</p>
                        <select name="driver" style="width: 300px; height: 25px;">
                            <option>-Pilih-</option>
                            <option value="Nando">Nando</option>
                            <option value="Minho">Minho</option>
                            <option value="Seonho">Seonho</option>
                        </select>
                    </tr>
                    <tr>
                        <p>
                            <br>
                            <button type="submit" name="kirim" style="width: 70px; height: 35px;"><b>Submit</b></button>
                            <button type="reset" name="reset" style="width: 70px; height: 35px;"><b>Reset</b></button>
                        </p>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
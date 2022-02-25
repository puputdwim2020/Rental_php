<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Rental mobil</title>
</head>

<body>

    <!notif required signIn!>
        <?php
        if (isset($_POST['username']) && isset($_POST['password'])) {
            function validate($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                return $data;
            }

            $username = validate($_POST['username']);
            $pass = validate($_POST['password']);

            if (empty($username)) {
                header("location:signIn.php?error=Username is required");
                exit();
            } else if (empty($pass)) {
                header("location:signIn.php?error=Password is required");
                exit();
            }
        }
        ?>

        <!HEADER!>
            <header class="header">
                <h1>Rental Mobil NyewaIn</h1>
                <nav class="navbar">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#services">services</a>
                    <a href="#driver">Driver</a>
                    <a href="index.php">Sign Out</a>
                </nav>
            </header>

            <!IMG HOME!>
                <section class="home" id="home"></section>

                <!ABOUT US!>
                    <section class="about" id="about">
                        <h1 class="heading"> <span>about us</span> </h1>
                        <div class="row">

                            <div class="image">
                                <img src="images/about.png" alt="">
                            </div>

                            <div class="content">
                                <h3>Rental Mobil NyewaIn</h3>
                                <p>Kami Hadir memberikan solusi, dengan jasa penyewaan mobil dengan kualitas baik serta harga yang pas dikantong. Memberikan solusi kepada klien untuk mempermudah perjalanan bisnis, liburan, event serta yang lainnya</p>
                            </div>
                        </div>
                    </section>

                    <!SERVICES!>
                        <section class="services" id="services">
                            <h1 class="heading"> <span>RENTAL SERVICES</span></h1>
                            <div class="box-container">
                                <div class="box">
                                    <img src="images/car1.jpeg" alt="">
                                    <h3>Alphard Transformer</h3>
                                    <div class="price">Rp 350.000</div>
                                    <?php
                                    $namaMobil = 'Alphard Transformer';
                                    $harga = 350000;
                                    ?>
                                    <a href="sewa.php?nama_mobil=<?= $namaMobil; ?>&harga=<?= $harga; ?>" class="btn"> Sewa Sekarang</a>
                                </div>

                                <div class="box">
                                    <img src="images/car2.jpeg" alt="">
                                    <h3>All New Avanza</h3>
                                    <div class="price">Rp 300.000</div>
                                    <?php
                                    $namaMobil = 'All New Avanza';
                                    $harga = 300000;
                                    ?>
                                    <a href="sewa.php?nama_mobil=<?= $namaMobil; ?>&harga=<?= $harga; ?>" class="btn"> Sewa Sekarang</a>
                                </div>

                                <div class="box">
                                    <img src="images/car3.jpg" alt="">
                                    <h3>Innova Reborn</h3>
                                    <div class="price">Rp 360.000</div>
                                    <?php
                                    $namaMobil = 'Innova Reborn';
                                    $harga = 360000;
                                    ?>
                                    <a href="sewa.php?nama_mobil=<?= $namaMobil; ?>&harga=<?= $harga; ?>" class="btn"> Sewa Sekarang</a>
                                </div>

                                <div class="box">
                                    <img src="images/car4.jpg" alt="">
                                    <h3>Fortuner VRZ</h3>
                                    <div class="price">Rp 310.000</div>
                                    <?php
                                    $namaMobil = 'Fortuner VRZ';
                                    $harga = 310000;
                                    ?>
                                    <a href="sewa.php?nama_mobil=<?= $namaMobil; ?>&harga=<?= $harga; ?>" class="btn"> Sewa Sekarang</a>
                                </div>

                                <div class="box">
                                    <img src="images/car5.jpg" alt="">
                                    <h3>Ayla</h3>
                                    <div class="price">Rp 350.000</div>
                                    <?php
                                    $namaMobil = 'Ayla';
                                    $harga = 350000;
                                    ?>
                                    <a href="sewa.php?nama_mobil=<?= $namaMobil; ?>&harga=<?= $harga; ?>" class="btn"> Sewa Sekarang</a>
                                </div>

                                <div class="box">
                                    <img src="images/car6.jpg" alt="">
                                    <h3>Pajero Sport</h3>
                                    <div class="price">Rp 370.000</div>
                                    <?php
                                    $namaMobil = 'Pajero Sport';
                                    $harga = 370000;
                                    ?>
                                    <a href="sewa.php?nama_mobil=<?= $namaMobil; ?>&harga=<?= $harga; ?>" class="btn"> Sewa Sekarang</a>
                                </div>

                                <div class="box">
                                    <img src="images/car7.jpg" alt="">
                                    <h3>Vellfire Facelift</h3>
                                    <div class="price">Rp 390.000</div>
                                    <?php
                                    $namaMobil = 'Vellfire Facelift';
                                    $harga = 390000;
                                    ?>
                                    <a href="sewa.php?nama_mobil=<?= $namaMobil; ?>&harga=<?= $harga; ?>" class="btn"> Sewa Sekarang</a>
                                </div>

                                <div class="box">
                                    <img src="images/car8.jpg" alt="">
                                    <h3>Nissan Navara Facelift </h3>
                                    <div class="price">Rp 400.000</div>
                                    <?php
                                    $namaMobil = 'Nissan Navara Facelift';
                                    $harga = 400000;
                                    ?>
                                    <a href="sewa.php?nama_mobil=<?= $namaMobil; ?>&harga=<?= $harga; ?>" class="btn"> Sewa Sekarang</a>
                                </div>

                                <div class="box">
                                    <img src="images/car9.jpg" alt="">
                                    <h3>Nissan Kicks E-POWER</h3>
                                    <div class="price">Rp 380.000</div>
                                    <?php
                                    $namaMobil = 'Nissan Kicks E-POWER';
                                    $harga = 380000;
                                    ?>
                                    <a href="sewa.php?nama_mobil=<?= $namaMobil; ?>&harga=<?= $harga; ?>" class="btn"> Sewa Sekarang</a>
                                </div>
                            </div>
                        </section>

                        <!DRIVER!>
                            <section class="driver" id="driver">
                                <h1 class="heading"> <span>Driver</span> </h1>
                                <div class="box-container">
                                    <div class="box">
                                        <div class="image">
                                            <img src="images/driver1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h3>Nando</h3>
                                            <div class="stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <div class="image">
                                            <img src="images/driver2.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h3>Minho</h3>
                                            <div class="stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <div class="image">
                                            <img src="images/driver3.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h3>Seonho</h3>
                                            <div class="stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!REVIEW!>
                                <section class="review" id="review">
                                    <h1 class="heading"> customer's <span>review</span> </h1>
                                    <div class="box-container">
                                        <div class="box">
                                            <img src="images/quote.png" alt="" class="quote">
                                            <p>Setelah melakukan perjalanan bisnis dengan jasa rental mobil NyewaIn saya merasa puas, karena pelayanan driver yang baik serta kulitas mobil yang baik pula. Semoga kualitas ini dapat dipertahankan agar menjadi jasa penyewaan mobil nomor 1 di Surakarta.</p>
                                            <img src="images/cust1.jpeg" class="user" alt="">
                                            <h3>Sea</h3>
                                        </div>

                                        <div class="box">
                                            <img src="images/quote.png" alt="" class="quote">
                                            <p>Selama berada di Surakarta, Jawa Tengah saya menggunakan jasa rental mobil NyewaIn untuk menghadiri event. Mobil yang disewakan sebanding dengan harga dan kualitas yang diberikan pada klien. Sangat bagus dan memuaskan.</p>
                                            <img src="images/cust2.jpg" class="user" alt="">
                                            <h3>karin</h3>
                                        </div>

                                        <div class="box">
                                            <img src="images/quote.png" alt="" class="quote">
                                            <p>Sudah beberapa kali saya melakukan sewa mobil untuk perjalanan bisnis maupun liburan dan disini, di Rental Mobil NyewaIn saya merasa sangat puas karna pelayanan yang sangat baik serta kulitas mobil yang bagus dan sebanding dengan harga yang diberikan.</p>
                                            <img src="images/cust3.jpg" class="user" alt="">
                                            <h3>sky</h3>
                                        </div>
                                    </div>
                                </section>

                                <!FOOTER!>
                                    <section class="footer" id="footer">
                                        <div class="share">
                                            <a href="#footer" class="fab fa-facebook-f"></a>
                                            <a href="#footer" class="fab fa-twitter"></a>
                                            <a href="#footer" class="fab fa-instagram"></a>
                                            <a href="#footer" class="fab fa-linkedin"></a>
                                        </div>
                                        <div class="credit">created by NyewaIn</div>
                                    </section>
</body>

</html>
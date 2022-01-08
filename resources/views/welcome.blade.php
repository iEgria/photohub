<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
    <title>Photohub - Berbagi foto ke semua orang</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- TemplateMo 570 Chain App Dev - https://templatemo.com/tm-570-chain-app-dev -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css" />
    <link rel="stylesheet" href="assets/css/animated.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
    <!-- Kebanyakan asset diambil dari https://freepik.com -->
</head>

<body>
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" alt="Chain App Dev" height="100px" />
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="#top" class="active">Home</a>
                            </li>
                            <li class="scroll-to-section"><a href="#about">Tentang Kami</a></li>
                            <li class="scroll-to-section">
                                <a href="#pricing">Galeri</a>
                            </li>
                            <li>
                                <div class="gradient-button">
                                    <a href="{{ route('dashboard') }}"><i class="fa fa-upload"></i> Upload Sekarang</a>
                                </div>
                            </li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Tunjukan foto terbaikmu kepada seluruh pengunjung</h2>
                                        <p>
                                            Photohub adalah platform untuk berbagi foto ke orang lain untuk saling tolong menolong
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/slider-dec.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/heading-line-dec.png" alt="" />
                        <h4>There's <em>no need to be nervous</em>, we're here with you</h4>
                        <p>
                            Honoka Kousaka
                        </p>
                        <img src="assets/images/heading-line-dec.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h4>Tentang <em>Kami</em></h4>
                        <img src="assets/images/heading-line-dec.png" alt="" />
                        <p>
                            kami adalah komunitas yang berfokus pada pembuatan aset digital secara gratis dan dapat digunakan oleh siapa saja.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">Dapatkan foto terbaik</a></h4>
                                <p>Pilih koleksi terbaik kami</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">Pilih dan unduh foto</a></h4>
                                <p>Pilih dan ambil foto sesukamu</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">Gratis 100%</a></h4>
                                <p>Tanpa biaya sapeserpun</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">Lisensi Free</a></h4>
                                <p>Lisensi bebas apapun</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>
                                Kami percaya bahwa dengan berbagi aset digital kami akan dapat sesuatu yang lebih baik
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image">
                        <img src="assets/images/example.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pricing" class="pricing-tables">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 mb-0">
                    <div class="section-heading">
                        <h4>Lihat <em>Galeri</em> Kami</h4>
                        <img src="assets/images/heading-line-dec.png" alt="" />
                        <input type="hidden" name="shuffle-filter" value="all" checked="checked" />
                    </div>
                </div>
                <div class="col-12 mt-0">
                    <div class="row shuffle-wrapper portfolio-gallery">
                        @foreach($fotos as $index => $foto)
                        <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat1&quot;]">
                            <div class="position-relative doctor-inner-box">
                                <div class="doctor-profile">
                                    <div class="doctor-img">
                                        <img src="{{ 'https://jasalapangan.com/upload/' . $foto->foto }}" alt="doctor-image" class="img-fluid w-100 rounded shadow">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                {{ $foto->judul }}
                                            </div>
                                            <div class="h6">
                                                {{ $foto->user->name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>
                            Karena keinginan gambar gratis membuat kami ada.
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="copyright-text">
                    <p>
                        Copyright © 2021 Chain App Dev Company. All Rights Reserved.
                        <br />Template by : <a href="https://templatemo.com/" target="_blank" title="css templates">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/shuffle.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $(document).ready(function() {
            var Shuffle = window.Shuffle;
            var jQuery = window.jQuery;

            var myShuffle = new Shuffle(document.querySelector('.shuffle-wrapper'), {
                itemSelector: '.shuffle-item',
                buffer: 1
            });

            jQuery('input[name="shuffle-filter"]').on('change', function(evt) {
                var input = evt.currentTarget;
                if (input.checked) {
                    myShuffle.filter(input.value);
                }
            });
        });
    </script>
</body>

</html>
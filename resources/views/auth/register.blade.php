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
    <style>
        .glass {
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37) !important;
            backdrop-filter: blur(20px) !important;
            -webkit-backdrop-filter: blur(20px) !important;
            border-radius: 10px !important;
            border: 1px solid rgba(255, 255, 255, 0.18) !important;
        }
    </style>
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
    <div class="main-banner wow fadeIn pt-5" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <x-jet-validation-errors class="mb-4" />
                                        @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                        @endif
                                        <div class="card glass mt-0">
                                            <div class="card-body">
                                                <div class="logo">
                                                    <img src="assets/images/logo.png" class="img-fluid" style="width: 200px !important;">
                                                </div>
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <div>
                                                        <x-jet-label for="name" class="form-label" value="{{ __('Name') }}" />
                                                        <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                    </div>

                                                    <div class="mt-4">
                                                        <x-jet-label for="email" class="form-label" value="{{ __('Email') }}" />
                                                        <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                                    </div>

                                                    <div class="mt-4">
                                                        <x-jet-label for="password" class="form-label" value="{{ __('Password') }}" />
                                                        <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                                    </div>

                                                    <div class="mt-4">
                                                        <x-jet-label for="password_confirmation" class="form-label" value="{{ __('Confirm Password') }}" />
                                                        <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                                    </div>
                                                    <div class="flex items-center justify-end mt-4">
                                                        <div class="d-flex justify-content-between">
                                                            <span>
                                                                Sudah Punya Akun? <a href="{{ route('login') }}">Masuk</a>
                                                            </span>
                                                            <button type="submit" class="btn btn-primary">Daftar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/shuffle.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
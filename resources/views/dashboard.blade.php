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
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css" />
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
    <!-- Kebanyakan asset diambil dari https://freepik.com -->
</head>

<body style="background-color: #f8f9fa; min-height: 100vh">
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
    <header class="header-area header-sticky wow slideInDown bg-white" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="assets/images/logo.png" alt="Chain App Dev" height="100px" />
                        </a>
                        <ul class="nav">
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="btn-sm btn-warning btn-sm">
                                        <i class="fa fa-sign-out-alt"></i> Keluar
                                    </button>
                                </form>
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

    <div class="pricing-tables wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mb-4">
                        <button type="button" class="btn-success btn-sm" onclick="create()">
                            Tambah
                        </button>
                    </div>
                    <div class="row shuffle-wrapper portfolio-gallery">
                        @foreach($fotos as $index => $foto)
                        <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat1&quot;]">
                            <div class="position-relative doctor-inner-box">
                                <div class="doctor-profile">
                                    <div class="doctor-img">
                                        <div style="position: absolute; border-radius: 0px 0px 20px 0px;" class="bg-white p-2">
                                            <i class="fa fa-pencil-alt text-warning" style="cursor: pointer;" onclick="edit('{{ $foto->id }}', '{{ $foto->judul }}', `{{ asset($foto->foto) }}`)"></i> &nbsp;
                                            <i class="fa fa-trash text-danger" style="cursor: pointer;" onclick="hapus(`{{ route('dashboard-delete', $foto->id) }}`)"></i>
                                        </div>
                                        <img src="{{ asset($foto->foto) }}" class="img-fluid w-100 rounded shadow">
                                        {{ $foto->judul }}
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

    <div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="form-foto" action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-form-label">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-3">
                                <img src="assets/images/template_image.png" name="foto_preview" style="width: 100%;">
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul Foto</label>
                                    <input type="text" name="judul" class="form-control" placeholder="Judul Foto" required="required">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="exampleInputPassword1">Foto</label>
                                    <input type="file" name="foto" class="form-control" placeholder="Foto" onchange="update_preview(this)" required="required">
                                </div>
                                <input type="hidden" name="foto_id">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn-sm btn-primary">Simpan</button>
                    </div>
                </form>
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
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
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

        function update_preview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('img[name="' + $(input).attr('name') + '_preview"]').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function create() {
            new bootstrap.Modal(document.getElementById('modal-form')).show();
            $('#modal-form-label').html('Tambah Foto');
            $('img[name="foto_preview"]').attr('src', `{{ asset('assets/images/template_image.png') }}`);
            $('input[name="judul"]').val('');
            $('#form-foto').attr('action', `{{ route('dashboard-store') }}`);
            $('input[name="foto"]').attr('required', 'required');
        }

        function edit(id, judul, foto) {
            new bootstrap.Modal(document.getElementById('modal-form')).show();
            $('#modal-form-label').html('Edit Foto');
            $('img[name="foto_preview"]').attr('src', foto);
            $('input[name="judul"]').val(judul);
            $('input[name="foto_id"]').val(id);
            $('#form-foto').attr('action', `{{ route('dashboard-update') }}`);
            $('input[name="foto"]').removeAttr('required');
        }

        function hapus(url, back_url = "") {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Langkah ini tidak dapat diurungkan, setelah menekan \"Ya\" maka data akan dihapus secara permanen",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Batalkan'
            }).then((result) => {
                $('#cover-spin').show();
                if (result.isConfirmed) {
                    $.ajax({
                        "url": url,
                        "method": "delete",
                        "data": {
                            '_token': '{{ csrf_token() }}',
                        },
                        "headers": {
                            "Accept": "application/json",
                            "Authorization": 'bearer ' + window.localStorage.getItem('token'),
                        },
                        success: function(response) {
                            if (response.message == 'Failed') {
                                Swal.fire(
                                    'Gagal!',
                                    response.error,
                                    'error'
                                )
                            } else {
                                Swal.fire(
                                    'Sukses!',
                                    'Data berhasil dihapus!',
                                    'success'
                                )
                                if (back_url) {
                                    window.location.href = back_url;
                                } else {
                                    location.reload();
                                }
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Gagal!',
                                'Data tidak berhasil dihapus!',
                                'error'
                            )
                        }
                    });
                }
                $('#cover-spin').hide();
            });
        }
    </script>
</body>

</html>
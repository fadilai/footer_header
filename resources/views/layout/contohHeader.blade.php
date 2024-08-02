<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ez1mqsOz/XDp2zHIctf5iL8Cce3FVoqUUCMFiWcFcD/C2MQ6bMOEMLaV0j2tP2eV" crossorigin="anonymous">

<!-- Meta Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '980074280359918');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=980074280359918&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->


<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <style>
                .search-button {
                    /* Gaya tombol lainnya */
                    cursor: pointer;
                    /* Menambahkan efek kursor tangan saat diarahkan ke tombol */
                    transition: background-color 0.3s ease;
                    /* Efek transisi untuk perubahan warna latar belakang */
                }

                .search-button:hover {
                    background-color: black;
                    /* Warna latar belakang saat kursor diarahkan ke tombol */
                }

                .navbar .nav-link {
                    color: #222222 !important;
                }

                .navbar .nav-link:hover {
                    color: #007bff !important;
                }
            </style>

            <div class="masbro">
                <a href="/index"><img src="{{ asset('assets/img/logo/logo3.png') }}" class="logo" alt="Deskripsi Gambar">
                </a>
            </div>

            <form class="search-form" action="/search" method="get">
                <input class="search-input" type="text" id="query" name="query" placeholder="Apa yang sedang kamu cari?">
                <button class="search-button" type="submit" style="font-weight: 500; font-family: 'Montserrat', sans-serif;">
                    <i class="fas fa-magnifying-glass"></i> CARI
                </button>
            </form>


        </div>
        <div class="social-links d-none d-md-flex align-items-center" style="color: blue;">
            @auth
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#ffffff;">
                    <!--<i class="fas fa-user mr-2"></i> &nbsp;<span>{{ auth()->user()->name }}</span> &nbsp;<i class="icon-submenu lnr lnr-chevron-down"></i>-->
                    <i class="fas fa-user mr-2"></i> &nbsp;<span>{{ Str::limit(auth()->user()->name, 11, '...') }}
                    </span> &nbsp;<i class="icon-submenu lnr lnr-chevron-down"></i>
                </a>
                <!-- Confirmation Modal -->
                <style>
                    .modal .modal-content .he button.btn:hover {
                        color: white !important;
                    }
                </style>
                <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true" style="margin-top:100px;margin-left:-60px; ">
                    <div class="modal-dialog" role="document" style="width:500px; ">
                        <div class="modal-content" style="background-color:#fff;">
                            <div class="modal-body text-center ">
                                <p style="font-family: 'Poppins';font-weight:700;    letter-spacing: 1px;pointer-events: none; font-size:16px !important; color:#000;;">
                                    Apakah kamu ingin menghapus Paket ini?</p>


                            </div>


                            <div class="modal-footer d-flex justify-content-center he" style="padding: 3px;">

                                <button type="button" class="btn" data-bs-dismiss="modal" style="font-family: 'Poppins'; background-color:#adb1b8; width: 18%; padding:2px; color:#09326f; font-weight: 500; margin-right: -5px; padding:1px; padding-top: 2px;">Batal</button>

                                <a id="confirmDeleteBtn" class="btn" style="font-family: 'Poppins'; height: 28px; display: flex; align-items: center; justify-content: center; width: 20%; padding:px; font-weight: 400; background-color:red;">Hapus</a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add this style tag to your existing styles -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 100px; z-index: 1000;">
                    <div class="modal-dialog" style="color: #09326f;">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel" style="    margin-top: -20px;"><i class="nav-icon fas fa-user my-1 btn-sm-1"></i>
                                        &nbsp;Profil Sobat Insans</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-top: -25px;    margin-right: -23px;"></button>
                                </div>
                                <div class="modal-body" style="    margin-bottom: -30px;">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><label for="nama">Nama </label></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <h6><label for="nama"> : {{ auth()->user()->name }}</label></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><label for="nama">Email </label></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <h6><label for="nama"> : {{ auth()->user()->email }}</label></h6>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="showLogoutConfirmation()" style="padding: 5px; padding-bottom: 2px; padding-top: 2px;">
                                    <i class="fas fa-sign-out-alt "></i> Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Konfirmasi Keluar -->
                <style>
                    #konfirmasiModal .modal-content {
                        background: url('{{ asset(' assets/img/bg/bgkeluar.png') }}') center;
                        background-size: cover;
                    }

                    #konfirmasiModal .modal-content {
                        border: none;
                    }

                    .container img {
                        /* width: 100%; */
                        height: auto;
                        display: inline-flex !important;
                    }

                    /*.modal .ha .btn:hover{*/
                    /*    color:white !important;*/
                    /*}*/
                </style>
                <div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="konfirmasiModalLabel" aria-hidden="true" style="margin-top:100px;">
                    <div class="modal-dialog" role="document" style="width:450px;">
                        <div class="modal-content ha">

                            <div class="modal-body text-center ">
                                <p style="font-family: 'Poppins';font-weight:700;    letter-spacing: 1px;pointer-events: none; font-size:16px !important; color:black;">
                                    Apakah kamu yakin ingin keluar?</p>
                                <img src="{{ asset('assets/img/bg/keluar.png') }}" alt="Ikon Keluar" style="width: 25%; height: 25%; margin-bottom: 10px; margin-top:30px;">
                            </div>


                            <div class="modal-footer d-flex justify-content-center" style="padding: 3px;gap:10px;">

                                <button type="button" class="btn" data-bs-dismiss="modal" style="font-family: 'Poppins'; background-color:#adb1b8; width: 18%; padding:2px; color:#09326f; font-weight: 500; margin-right: -5px; padding:1px; padding-top: 2px;">Batal</button>

                                <a href="/logout" class="btn" style="font-family: 'Poppins'; height: 28px; display: flex; align-items: center; justify-content: center; width: 20%; padding:px; font-weight: 400; background-color:#0F469A;">Keluar</a>

                            </div>



                            <script>
                                function showLogoutConfirmation() {
                                    // Menutup model utama
                                    $('#exampleModal').modal('hide');

                                    // Menampilkan model konfirmasi keluar
                                    $('#konfirmasiModal').modal('show');
                                }
                            </script>

                </ul>
                <!-- Button trigger modal -->
                <style>
                    .floating-button {
                        .flo .floating-button {
                            position: fixed;
                            bottom: 20px;
                            /* Sesuaikan dengan jarak dari bawah */
                            right: 20px;
                            /* Sesuaikan dengan jarak dari kanan */
                            z-index: 999;
                            /* Sesuaikan dengan kebutuhan */
                        }
                    }
                </style>
                <button class="bi bi-bell-fill" data-bs-toggle="modal" data-bs-target="#notif"
                    style="color: #ffffff;  font-size:21px; margin-top:15px; background-color:transparent; border-inline: none; border-block:none; position: relative;margin-bottom:10px;">
                    <!-- Ikon lonceng notifikasi -->
                    <span class="iconify" data-icon="bi:bell-fill" style="margin-right: 5px; margin-top:-5  px;"></span>

                <!-- Nomor checkout -->

            </button>

            <style>
                .text {
                    flex: 2;
                    /* padding: 20px; */
                }
            </style>

            <!-- Modal -->
            <div class="modal fade" id="notif" aria-labelledby="notif" style="margin-top:100px;" aria-hidden="true">
                <div class="modal-dialog" style=" max-height: 80vh; ">
                    <div class=" modal-content" style="width: 90vh;">
                        <div class="modal-header">
                            <div class="" style=" border-radius: 50px; background-color: #2660dd; padding: 6px;margin-left:200px;">
                                <h5 class="modal-title" id="konfirmasiModalLabel" style="display: flex; align-items: center; justify-content: center;font-family: 'Poppins'; color:#fff;font-size:14px;">
                                    Paket yang Kamu Pilih</h5>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div class="modal-body">

                        @php
                        $counter = 0;
                        @endphp

                        @if (
                        (auth()->check() && isset($dataPayment) && $dataPayment->isNotEmpty()) ||
                        (isset($dataPaymentEbook) && $dataPaymentEbook->isNotEmpty()))
                        <div style="overflow-y: auto; max-height: 400px; /* set your desired max height */">
                            @foreach ($dataPayment as $payment)
                            {{-- Only consider payments without a photo and matching user email --}}
                            @if (empty($payment->foto) && $payment->email == auth()->user()->email)
                            @if ($payment->harga != 0)
                            <div class="card" style="border: 4px solid #10479B; border-radius: 15px; margin: 50px; margin-top: 30px; margin-bottom: 30px;">
                                <div class="card-body" style="display: flex; align-items: center; margin-bottom: -10px;">
                                    <img src="{{ asset('assets/img/bg/notif.png') }}" class="card-img-top" alt="Card Image 1" style="width: 120px; border-radius: 8px; margin-right: 20px; margin-top: -28px;">

                                    <div class="text">
                                        @if (!empty($payment->program))
                                        <h5 class="card-title" style="margin-bottom: 5px; font-family: 'Roboto', sans-serif; color: #2660dd; font-size: 12px;">
                                            {{ $payment->program }}
                                        </h5>
                                        @endif

                                        @if (!empty($payment->paket))
                                        <h5 class="card-title" style="margin-bottom: 0; font-family: 'Poppins'; color: #414D55; font-size: 20px; font-weight: 800;">
                                            {{ $payment->paket }}
                                        </h5>
                                        @endif
                                        <img src="{{ asset('assets/img/bg/bintang.png') }}" class="card-img-top" alt="Card Image 1" style="width: 100px; border-radius: 8px; margin-right: 20px;">

                                        @if (!empty($payment->harga))
                                        <div style="font-family: 'Poppins'; color: #09326f; font-size: 14px; font-weight: 500; margin-top: px;">
                                            <b>
                                                <p style="display: inline-block;">
                                                    Rp
                                                </p>
                                                <p style="display: inline-block; margin: 0; pointer-events: none;">
                                                    {{ number_format($payment->harga, 0, ',', '.') }}
                                                </p>
                                            </b>
                                        </div>
                                        @endif

                                        <div style="flex: 1; margin-top: 20px;">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" style="font-family: 'Poppins'; background-color: #adb1b8; width: 100%; padding: 7px; border-radius: 10px; color: #09326f; font-weight: 800; font-size: 12px;">
                                                            <a href="" style="color: inherit; text-decoration: none; margin-right:14px;">Bayar
                                                                Sekarang</a>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <style>
                                                            .delete-icon {
                                                                color: #ff6b6b;
                                                                font-size: 24px;
                                                                margin-top: -50px;
                                                                cursor: pointer;
                                                                margin-left: 10px;
                                                                transition: color 0.3s ease;
                                                                /* Adding transition for smooth color change */
                                                            }

                                                            .delete-icon:hover {
                                                                color: #d9534f;
                                                                /* Change color on hover */
                                                            }
                                                        </style>

                                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ez1mqsOz/XDp2zHIctf5iL8Cce3FVoqUUCMFiWcFcD/C2MQ6bMOEMLaV0j2tP2eV" crossorigin="anonymous">

                                                        <i class="fas fa-trash delete-icon" style="color: #ff6b6b; font-size: 25px; margin-top:-50px; cursor: pointer; margin-left: 10px;" onclick="deletePayment({{ $payment->id }})"></i>

                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        @php
                                        $counter++;
                                        @endphp
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                            @endforeach

                            {{-- Iterasi untuk pembayaran ebook --}}
                            @foreach ($dataPaymentEbook as $paymentEbook)
                            {{-- Hanya mempertimbangkan pembayaran ebook tanpa foto dan email pengguna yang cocok --}}
                            @if (empty($paymentEbook->foto) && $paymentEbook->id_users == auth()->id())
                            @if ($paymentEbook->harga != 0)
                            <div class="card" style="border: 4px solid #10479B; border-radius: 15px; margin: 50px; margin-top: 30px; margin-bottom: 30px;">
                                <div class="card-body" style="display: flex; align-items: center; margin-bottom: -10px;">

                                    @if ($paymentEbook->voucher->gambar_1)
                                    <img src="foto_upload/{{ $paymentEbook->voucher->gambar_1 }}" class="card-img-top" alt="Card Image 1" style="width: 120px; border-radius: 8px; margin-right: 20px; margin-top: -10px;">
                                    @endif
                                    <div class="text">
                                        @if ($paymentEbook->voucher->judul_ebook)
                                        <h5 class="card-title" style="margin-bottom: 5px; font-family: 'Roboto', sans-serif; color: #2660dd; font-size: 12px;">
                                            {{ $paymentEbook->voucher->judul_ebook }}
                                        </h5>
                                        @endif

                                        <h5 class="card-title" style="margin-bottom: 0; font-family: 'Poppins'; color: #414D55; font-size: 20px; font-weight: 800;">
                                            Ebook
                                        </h5>
                                        <img src="{{ asset('assets/img/bg/bintang.png') }}" class="card-img-top" alt="Card Image 1" style="width: 100px; border-radius: 8px; margin-right: 20px;">
                                        @if (!empty($paymentEbook->harga))
                                        <div style="font-family: 'Poppins'; color: #09326f; font-size: 14px; font-weight: 500; margin-top: px;">
                                            <b>
                                                <p style="display: inline-block;">Rp</p>
                                                <p style="display: inline-block; margin: 0; pointer-events: none;">
                                                    {{ number_format($paymentEbook->harga, 0, ',', '.') }}
                                                </p>
                                            </b>
                                        </div>
                                        @endif

                                        {{-- Bagian tombol dan ikon hapus --}}
                                        <div style="flex: 1; margin-top: 20px;">
                                            <table>
                                                <tr>
                                                    {{-- Tombol bayar --}}
                                                    <td>
                                                        <button type="button" class="btn btn-primary" style="font-family: 'Poppins'; background-color: #adb1b8; width: 100%; padding: 7px; border-radius: 10px; color: #09326f; font-weight: 800; font-size: 12px;">
                                                            <a href="" style="color: inherit; text-decoration: none; margin-right:14px;">Bayar
                                                                Sekarang</a>
                                                        </button>
                                                    </td>

                                                    {{-- Ikon hapus --}}
                                                    <td>
                                                        <style>
                                                            .delete-icon {
                                                                color: #ff6b6b;
                                                                font-size: 24px;
                                                                margin-top: -50px;
                                                                cursor: pointer;
                                                                margin-left: 10px;
                                                                transition: color 0.3s ease;
                                                            }

                                                            .delete-icon:hover {
                                                                color: #d9534f;
                                                            }
                                                        </style>

                                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ez1mqsOz/XDp2zHIctf5iL8Cce3FVoqUUCMFiWcFcD/C2MQ6bMOEMLaV0j2tP2eV" crossorigin="anonymous">

                                                        <i class="fas fa-trash delete-icon" style="color: #ff6b6b; font-size: 25px; margin-top:-50px; cursor: pointer; margin-left: 10px;" onclick="deletePaymentEbook({{ $paymentEbook->id }})"></i>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        {{-- Hitung jumlah notifikasi --}}
                                        @php
                                        $counter++;
                                        @endphp
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                            @endforeach
                        </div>

                        @if ($counter == 0)
                        {{-- Tidak ada notifikasi --}}
                        <style>
                            /* Adjust the size of the icon */
                            #movingIcon {
                                font-size: 100px;
                                /*text-align: center;*/
                            }
                        </style>

                        <div class="icon-container" style="margin-top: 50px; margin-left: 250px; ">
                            <i class="fas fa-shopping-cart" id="movingIcon" style="font-size: 80px; color: black;"></i>
                        </div>
                        <br>
                        <p style="margin-top: 10px; text-align: center; font-size: 20px; margin-bottom: 20px; pointer-events: none; color: black;">
                            Kamu tidak memiliki riwayat apapun</p>
                        @endif
                        @else
                        {{-- Tampilkan keranjang belanja jika data kosong --}}
                        <div class="icon-container" style="margin-top: 50px;     margin-left: 250px;">
                            <i class="fas fa-shopping-cart" id="movingIcon" style="font-size: 80px; color: black;"></i>
                        </div>

                        <br>
                        <p style="margin-top: 10px; text-align: center; font-size: 20px; margin-bottom: 20px; pointer-events: none; color: black;">
                            Kamu tidak memiliki riwayat apapun</p>
                        @endif

                    </div>

                </div>
                <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>



                <!-- Add the script to open the modal and handle confirmation -->
                @else
                <ul class="navbar-nav ml-auto">
                    <li class="login-button">
                        <div class="login-btn" style="margin-left:10px;"><a href="/login">Masuk</a></div>
                    </li>
                </ul>
                @endauth
            </div>
            @php
            $totalCounter = 0;
            @endphp

            @if (auth()->check())
            {{-- Hitung pembayaran paket --}}
            @if (isset($dataPayment) && $dataPayment->isNotEmpty())
            @foreach ($dataPayment as $payment)
            {{-- Hanya mempertimbangkan pembayaran tanpa foto dan email pengguna yang cocok --}}
            @if (empty($payment->foto) && $payment->email == auth()->user()->email)
            {{-- Periksa field yang tidak kosong dan increment counter --}}
            @if (!empty($payment->program) || !empty($payment->paket) || !empty($payment->harga))
            @php
            $totalCounter++;
            @endphp
            @endif
            @endif
            @endforeach
            @endif

            {{-- Hitung pembayaran ebook --}}
            @if (isset($dataPaymentEbook) && $dataPaymentEbook->isNotEmpty())
            @foreach ($dataPaymentEbook as $paymentEbook)
            {{-- Hanya mempertimbangkan pembayaran ebook tanpa foto dan email pengguna yang cocok --}}
            @if (empty($paymentEbook->foto) && $paymentEbook->id_users == auth()->id())
            {{-- Periksa field yang tidak kosong dan increment counter --}}
            @if (!empty($paymentEbook->paket) || !empty($paymentEbook->harga))
            @php
            $totalCounter++;
            @endphp
            @endif
            @endif
            @endforeach
            @endif

            {{-- Tampilkan counter jika lebih dari 0 --}}
            @if ($totalCounter > 0)
            <div style="position: absolute; top: 7px; padding-left: 135px;">
                <span class="checkout-number" style="background-color: red; color: white; border-radius: 100%; padding: 3px 6px; font-size: 12px;">
                    {{ $totalCounter }}
                </span>
            </div>
            @endif
            @endif

        </div>
    </div>
</section>

<style>
    .navbar .nav-link {
        color: none !important;
    }
</style>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto{{ Request::is('/') ? ' active' : '' }}" href="/index" style="margin-right:30px">Home</a></li>
                <li class="dropdown scrollto {{ Request::is('bimbingan-skripsi-online*', 'bimbangan-mata-kuliah-jurusan*', 'nonaktif*') ? ' ' : '' }}">
                    <a style="cursor: pointer;"><span>Program</span> <i class=" nav-link scrollto fas fa-caret-down" style="margin-left:-10px;"></i></a>
                    <ul style="border-radius: 15px;">
                        <li><a class="nav-link scrollto" href="">Bimbingan
                                Skripsi
                                Online (BSO)</a></li>
                        <li><a class="nav-link scrollto" href="">Bimbingan Mata
                                Kuliah Jurusan (BMJ)</a></li>
                        <li><a class="nav-link scrollto" href="">Kelas Tugas Kuliah (KTK)</a>
                        </li>
                        <li><a class="nav-link scrollto" href="">Kelas Persiapan Karir
                                (KPK)</a></li>
                    </ul>
                </li>
                <li class="dropdown{{ Request::is('skripsi*', 'nonaktif*') ? ' ' : '' }}">
                    <a style="cursor: pointer;"><span>Workshop</span> <i class="nav-link scrollto fas fa-caret-down" style="margin-left:-10px;"></i></a>
                    <ul style="border-radius: 15px;">
                        <li><a class="nav-link scrollto" href="">Skripsi</a></li>
                        <li><a class="nav-link scrollto" href="">KTI</a></li>
                    </ul>
                </li>

                <li class="dropdown{{ Request::is('nonaktif*') && !Request::is('skripsi*') ? ' ' : '' }}">
                    <a style="cursor: pointer;"><span>Creative Class</span> <i class=" nav-link scrollto fas fa-caret-down" style="margin-left:-10px;"></i></a>
                    <ul style="border-radius: 15px;">
                        <li><a class="nav-link scrollto" href="">Kelas Adobe Photoshop</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown{{ Request::is('nonaktif*') && !Request::is('skripsi*') ? ' ' : '' }}">
                    <a style="cursor: pointer;"><span>Ebook</span> <i class=" nav-link scrollto fas fa-caret-down" style="margin-left:-10px;"></i></a>
                    <ul style="border-radius: 15px;">
                        <li><a class="nav-link scrollto" href="/halaman-ebook">Ebook Class Program</a>
                        </li>
                        <li><a class="nav-link scrollto" href="">Ebook Lainnya</a>
                        </li>

                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="javascript:void(0)" onclick="scrollToAlur('konsultasi')" style="margin-right:30px">Alur bimbingan</a></li>

                <li><a class="nav-link scrollto" href="#testimonials" style="margin-right:30px">Mentor</a></li>
                <li><a class="nav-link scrollto" href="javascript:void(0)" onclick="scrollToTesti('testibaru')" style="margin-right:30px">Testimoni</a></li>
                <li><a class="nav-link scrollto" href="javascript:void(0)" onclick="scrollToFAQ('faq')" style="margin-right:30px">FAQ</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle" style="color: white;"></i>
        </nav>
    </div>

    <!-- Digunakan untuk section FAQ -->
    <script>
        function scrollToFAQ(sectionId) {
            var section;
            // Cek halaman mana yang sedang dibuka
            if (window.location.pathname === '/index' || window.location.pathname === '/skripsi' || window.location
                .pathname === '/bimbingan-skripsi-online' || window.location.pathname === '/bimbangan-mata-kuliah-jurusan'
            ) {
                section = document.getElementById('faq'); // Jika di halaman home
            } else if (window.location.pathname === '/halaman-ebook') {
                section = document.getElementById('pertanyaan'); // Jika di halaman ebook
            }

            if (sectionId === 'faq' && section) {
                var offset = section.getBoundingClientRect().top + window.scrollY -
                    100; // Kurangi 50px sebagai contoh, sesuaikan dengan kebutuhan
                window.scrollTo({
                    top: offset,
                    behavior: 'smooth'
                });
            } else if (sectionId === 'pertanyaan' && section) {
                var judulPertanyaan = document.querySelector('#pertanyaan');
                if (judulPertanyaan) {
                    var offset = judulPertanyaan.getBoundingClientRect().top + window.scrollY -
                        50; // Kurangi 50px sebagai contoh, sesuaikan dengan kebutuhan
                    window.scrollTo({
                        top: offset,
                        behavior: 'smooth'
                    });
                }
            }
        }
    </script>
    <!-- Digunakan untuk section Alur Bimbingan -->
    <script>
        function scrollToAlur(sectionId) {
            var section;
            // Cek halaman mana yang sedang dibuka
            if (window.location.pathname === '/index' || window.location.pathname === '/skripsi' || window.location
                .pathname === '/bimbingan-skripsi-online' || window.location.pathname === '/bimbangan-mata-kuliah-jurusan'
            ) {
                section = document.getElementById('konsultasi'); // Jika di halaman home
            } else if (window.location.pathname === '/halaman-ebook') {
                section = document.getElementById('alur-pembelian'); // Jika di halaman ebook
            }

            if (sectionId === 'konsultasi' && section) {
                var offset = section.getBoundingClientRect().top + window.scrollY -
                    100; // Kurangi 50px sebagai contoh, sesuaikan dengan kebutuhan
                window.scrollTo({
                    top: offset,
                    behavior: 'smooth'
                });
            } else if (sectionId === 'alur-pembelian' && section) {
                var judulPertanyaan = document.querySelector('#alur-pembelian');
                if (judulPertanyaan) {
                    var offset = judulPertanyaan.getBoundingClientRect().top + window.scrollY -
                        50; // Kurangi 50px sebagai contoh, sesuaikan dengan kebutuhan
                    window.scrollTo({
                        top: offset,
                        behavior: 'smooth'
                    });
                }
            }
        }
    </script>
    <!-- Digunakan untuk section Testimoni -->
    <script>
        function scrollToTesti(sectionId) {
            var section;
            // Cek halaman mana yang sedang dibuka
            if (window.location.pathname === '/index' || window.location.pathname === '/skripsi' || window.location
                .pathname === '/bimbingan-skripsi-online' || window.location.pathname === '/bimbangan-mata-kuliah-jurusan'
            ) {
                section = document.getElementById('testibaru'); // Jika di halaman home
            } else if (window.location.pathname === '/halaman-ebook') {
                section = document.getElementById('reviews'); // Jika di halaman ebook
            }

            if (sectionId === 'testibaru' && section) {
                var offset = section.getBoundingClientRect().top + window.scrollY -
                    100; // Kurangi 50px sebagai contoh, sesuaikan dengan kebutuhan
                window.scrollTo({
                    top: offset,
                    behavior: 'smooth'
                });
            } else if (sectionId === 'reviews' && section) {
                var judulPertanyaan = document.querySelector('#reviews');
                if (judulPertanyaan) {
                    var offset = judulPertanyaan.getBoundingClientRect().top + window.scrollY -
                        50; // Kurangi 50px sebagai contoh, sesuaikan dengan kebutuhan
                    window.scrollTo({
                        top: offset,
                        behavior: 'smooth'
                    });
                }
            }
        }
    </script>
</header>


<style>
    /* Gaya tambahan untuk elemen hasil pencarian */
    #searchResults {
        position: absolute;
        top: 80px;
        /* Sesuaikan dengan tinggi elemen #topbar dan elemen header Anda */
        left: 0;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 1001;
        /* Lebih tinggi dari z-index elemen #header */
        display: none;
        /* Sembunyikan secara default */
    }

    #searchResults.active {
        display: block;
        /* Tampilkan ketika memiliki kelas "active" */
    }

    #topbar {
        position: fixed;
        top: 0;
        width: 100%;
        background: linear-gradient(to right, #015cc7 49%, #012e8d 100%) !important;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    #header {
        background: linear-gradient(to right, #015cc7 49%, #012e8d 100%) !important;
        transition: all 0.5s;
        z-index: 997;
        height: 60px;
        /* box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1); */
    }



    .modal-backdrop {
        1050;
        display: none !important;
        /* Ensure a higher z-index than the modal */
    }

    .modal {
        z-index: 1000;
        /* Ensure a higher z-index than the modal backdrop */
    }

    #header {
        position: fixed;
        top: 60px;
        /* Adjust this value based on the height of your #topbar */
        z-index: 1000;
        width: 100%;
    }

    #marquee-container {
        position: fixed;
        top: 120px;
        width: 100%;
        z-index: 2;
    }
</style>
</div>

<script>
    // Untuk Menampilkan Button kembali
    function viewKembali() {
        var button = document.getElementById("kembali");

        if (button.style.display === "none") {
            button.style.display = "block";
        } else {
            button.style.display = "none";
        }
    }
    // end Untuk Menampilkan Button kembali

    // Untuk Menampilkan Button Bayar
    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById("pilih[]");
        // Get the output text
        var text = document.getElementById("bayar");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
    // end Untuk Menampilkan Button Bayar

    $(function() {
        $("#tabelSuratmasuk").DataTable();
        $("#tabelSuratkeluar").DataTable();
        $("#tabelAgendaMasuk").DataTable();
        $("#tabelAgendaKeluar").DataTable();
        $("#tabelTagihan").DataTable();
        $("#tabelKlasifikasi").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        });
        $("#tabelTagihanInvoice1").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });
        $("#tabelTagihanInvoice2").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });

        $("#agenda").DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });
        $("#agenda2").DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });
        $("#notOrdering").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });
    });

    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({
            gutterPixels: 3
        });
        $('.btn[data-filter]').on('click', function() {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    });

    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cartItems = document.getElementById('cart-items');
        const cartButton = document.getElementById('cart-button');
        const cartDropdown = document.getElementById('cart-dropdown');

        cartButton.addEventListener('mouseover', function() {
            openCart();
        });

        cartDropdown.addEventListener('mouseover', function() {
            openCart();
        });

        cartDropdown.addEventListener('mouseleave', function(event) {
            if (!cartButton.contains(event.relatedTarget)) {
                closeCart();
            }
        });

        function openCart() {
            cartDropdown.style.display = 'block';
            setTimeout(function() {
                cartDropdown.style.opacity = '1';
                cartDropdown.style.transform = 'translateY(0)';
            }, 10);
        }

        function closeCart() {
            cartDropdown.style.opacity = '0';
            cartDropdown.style.transform = 'translateY(10px)';
            setTimeout(function() {
                cartDropdown.style.display = 'none';
            }, 300);
        }
        cartButton.addEventListener('click', function() {
            toggleCart();
        });

        function toggleCart() {
            if (cartDropdown.style.display === 'block') {
                cartDropdown.style.opacity = '0';
                cartDropdown.style.transform = 'translateY(10px)';
                setTimeout(function() {
                    cartDropdown.style.display = 'none';
                }, 300);
            } else {
                cartDropdown.style.display = 'block';
                setTimeout(function() {
                    cartDropdown.style.opacity = '1';
                    cartDropdown.style.transform = 'translateY(0)';
                }, 10);
            }
        }

        function addItemToCart(itemName) {
            const newItem = document.createElement('div');
            newItem.textContent = itemName;
            newItem.className = 'cart-item'; // Menambahkan kelas CSS
            cartItems.appendChild(newItem); // Menambahkan item di akhir daftar
        }

        // Contoh penggunaan
        const addButton = document.getElementById('add-to-cart-button');
        addButton.addEventListener('click', function() {
            const itemName = prompt('Masukkan nama item:');
            if (itemName) {
                addItemToCart(itemName);
            }
        });
    });




    var marquee = document.getElementById("marquee");
    var marqueeContainer = document.getElementById("marquee-container");

    function resetMarqueePosition() {
        marquee.style.transform = "translateX(100%)";
        setTimeout(function() {
            var transitionDuration =
                "10s"; // Ganti dengan durasi yang diinginkan (misalnya, "30s" untuk 30 detik)
            marquee.style.transition = "transform " + transitionDuration;
            marquee.style.transform = "translateX(0)";
            void marquee.offsetWidth; // Trigger reflow
            marquee.style.transition = "transform " + transitionDuration; // Remove the transition
        }, 1);
    }


    function handleScroll() {
        var header = document.getElementById("header");
        var headerHeight = header.offsetHeight;

        if (window.scrollY > headerHeight) {
            marqueeContainer.style.position = "fixed";
            marqueeContainer.style.top = "-20px";
        } else {
            marqueeContainer.style.position = "relative";
            marqueeContainer.style.top = "";
        }
    }


    // Panggil resetMarqueePosition() saat halaman dimuat
    window.addEventListener("load", resetMarqueePosition);

    // Panggil handleScroll() saat halaman dimuat (untuk menyesuaikan tampilan awal)
    window.addEventListener("load", handleScroll);

    // Panggil resetMarqueePosition() saat marquee selesai berjalan
    marquee.addEventListener("animationiteration", resetMarqueePosition);

    // Tambahkan event listener untuk memantau scroll
    window.addEventListener("scroll", handleScroll);
</script>


<script>
    function deletePayment(paymentId) {
        // Tutup modal notif
        $('#notif').modal('hide');

        // Set the paymentId as a data attribute to retrieve later
        $('#confirmationModal').data('paymentId', paymentId);

        // Show the confirmation modal
        $('#confirmationModal').modal('show');
    }

    // Handle confirmation modal button click
    $('#confirmDeleteBtn').on('click', function() {
        // Retrieve paymentId from data attribute
        var paymentId = $('#confirmationModal').data('paymentId');

        // Add your deletion logic here using Axios
        axios.delete(`/payments/${paymentId}`)
            .then(response => {
                if (response.data.success) {
                    // Reload the page after successful deletion
                    location.reload();
                } else {
                    console.error(response.data.message);
                }
            })
            .catch(error => {
                console.error('Error deleting payment:', error);
            });

        // After deletion, close the modal
        $('#confirmationModal').modal('hide');
    });
</script>

<script>
    function deletePaymentEbook(paymentId) {
        // Tutup modal notif
        $('#notif').modal('hide');

        // Set the paymentId as a data attribute to retrieve later
        $('#confirmationModal').data('paymentId', paymentId);

        // Show the confirmation modal
        $('#confirmationModal').modal('show');
    }

    // Handle confirmation modal button click
    $('#confirmDeleteBtn').on('click', function() {
        // Retrieve paymentId from data attribute
        var paymentId = $('#confirmationModal').data('paymentId');

        // Add your deletion logic here using Axios
        axios.delete(`/paymentsEbook/${paymentId}`)
            .then(response => {
                if (response.data.success) {
                    // Reload the page after successful deletion
                    location.reload();
                } else {
                    console.error(response.data.message);
                }
            })
            .catch(error => {
                console.error('Error deleting payment:', error);
            });

        // After deletion, close the modal
        $('#confirmationModal').modal('hide');
    });
</script>




<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("searchInput");
        const searchResults = document.getElementById("searchResults");

        // Fungsi untuk melakukan pencarian di dalam hero section
        function searchInHeroSection() {
            const searchTerm = searchInput.value.toLowerCase();
            const heroSection = document.getElementById("hero");
            const heroOffset = heroSection.offsetTop + heroSection.offsetHeight;

            // Membersihkan hasil pencarian sebelumnya
            searchResults.innerHTML = "";

            let hasResults = false;

            const text = heroSection.textContent.toLowerCase();
            if (text.includes(searchTerm)) {
                const clone = heroSection.cloneNode(true);
                searchResults.appendChild(clone);
                hasResults = true;
            }

            if (!hasResults) {
                // Tambahkan logika untuk menampilkan pesan "tidak ada hasil" jika diperlukan
            }

            // Gulir ke bawah section content
            window.scrollTo({
                top: heroOffset,
                behavior: 'smooth'
            });
        }

        // Fungsi untuk melakukan pencarian di seluruh konten
        function search() {
            const searchTerm = searchInput.value.toLowerCase();
            const contentSections = document.querySelectorAll("[data-section='index']");
            const firstSection = contentSections[0];
            const firstSectionOffset = firstSection.offsetTop;

            // Membersihkan hasil pencarian sebelumnya
            searchResults.innerHTML = "";

            let hasResults = false;

            contentSections.forEach(section => {
                const text = section.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    const clone = section.cloneNode(true);
                    searchResults.appendChild(clone);
                    hasResults = true;
                }
            });

            if (!hasResults) {
                searchInHeroSection();
            }

            // Gulir ke bawah section content jika tidak ada hasil di section index
            if (!hasResults) {
                window.scrollTo({
                    top: firstSectionOffset,
                    behavior: 'smooth'
                });
            }
        }

        // Menjalankan fungsi pencarian setiap kali nilai input berubah
        searchInput.addEventListener("input", search);

        // Check if there's a query parameter in the URL
        const urlParams = new URLSearchParams(window.location.search);
        const queryFromURL = urlParams.get('query');
        if (queryFromURL) {
            // Set the search input value to the query parameter
            searchInput.value = decodeURIComponent(queryFromURL);
            // Perform search on page load
            search();
        }

        // jQuery code to handle form submission
        $('#searchForm').submit(function(event) {
            event.preventDefault();

            // Get the value from the input field
            var query = $('#searchInput').val();

            // Update the URL with the new query parameter
            history.pushState(null, null, '/index?query=' + encodeURIComponent(query));

            // Perform search
            search();
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchForm = document.getElementById('searchForm');
        const searchInput = document.getElementById('query');

        searchForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            const query = searchInput.value.trim();

            if (query !== '') {
                // Redirect to the search endpoint with the query parameter
                window.location.href = `/search?query=${query}`;
            }
        });
    });
</script>




<main>
    @yield('content')
</main>

@if (Request::is('halaman-ebook', 'detail-ebook/*', 'pembayaranEbook/*', 'mimaEbook', 'transferEbook/*', 'katalog'))
@include('layout.footerEbook')
@else
@include('layout.footer')
@endif
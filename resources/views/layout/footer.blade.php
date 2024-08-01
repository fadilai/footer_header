<main>
    @yield('footer')
</main>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->
    <style>
        .footer-top {
            font-family: poppins;

        }

        .tombol_contact_us {
            position: fixed;
            right: 10px;
            bottom: 44px;
        }

        .tombol_contact_us img {
            height: 44px;
            width: auto;
        }

        .link-container {
            position: relative;
            width: 450px !important;
            height: auto !important;
            margin-left: 800px;
            margin-top: -380px;
            overflow: hidden;
            z-index: 1;
        }

        .link-container a {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
            color: black;
        }

        .link-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .youtube:hover {
            transform: translateY(-8px);
            /* Adjust the bouncing distance as needed */
        }

        .tiktok:hover {
            transform: translateY(-8px);
            /* Adjust the bouncing distance as needed */
        }

        .instagram:hover {
            transform: translateY(-8px);
            /* Adjust the bouncing distance as needed */
        }
    </style>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Left Section with Logo and Text -->
                <div class="col-2">
                    <a href="index.php"><img src="{{ asset('assets/img/logo/logo3.png') }}" style="width:100%"
                            alt=""></a>
                </div>

                <div class="col-lg-4 col-md-3">
                    <div class="text-container">
                        <p>Bimbingan Belajar Online Perkuliahan dan Persiapan Karir dengan Sistem Kenaikan Kelas Pertama
                            di Indonesia.</p>
                    </div>
                </div>

                <!-- Right Section with Social Media Links -->

                <div class="col-lg-4 col-md-3 ml-auto" style=" z-index:1;">
                    <!-- <div class="social-links" style="text-align: right;">
                        <img src="assets/img/logo/yt.png" class="youtube rounded-circle" style="border-radius: 100%;  width: 50px;" alt="">
                        <img src="assets/img/logo/instagram.webp" class="youtube rounded-circle" style="border-radius: 100%; width: 50px;" alt="">
                        <img src="assets/img/logo/tiktok.png" class="youtube rounded-circle" style="border-radius: 100%; width: 50px;  " alt="">
                    </div> -->
                    <div class="social-links" style="margin-left: 180px; z-index:1;">
                        <a href="https://www.youtube.com/channel/UCjpX70gVQp0iUfHjrDxFhqQ"
                            class="youtube rounded-circle" style="padding: 10px; z-index:1;">
                            <i class="bx bxl-youtube" style="font-size: 30px;"></i>
                        </a>
                        <a href="https://www.tiktok.com/@classprogram" class="tiktok rounded-circle"
                            style="padding: 10px; z-index:1;">
                            <i class="bx bxl-tiktok" style=" color:black; font-size: 28px;"></i>
                        </a>
                        <a href="https://www.instagram.com/classprogram.id/" class="instagram rounded-circle"
                            style="padding: 10px;z-index:1;">
                            <i class="bx bxl-instagram"
                                style="font-size: 30px; background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D, #F56040, #F77737, #FCAF45, #FFDC80); background-clip: text; -webkit-background-clip: text;   color: transparent;"></i>
                        </a>
                    </div>

                </div>

                <img src="{{ asset('assets/img/bg/footergaris.png') }}" alt="Background Image" class="garis1"
                    style="
                stroke: #003EB5;
               position: absolute;
               width: 1100px;
               margin-inline-start: -130px;
               margin-top: -30px;
               left:0;
               height: 400px;
               display: block;
              ">
            </div>
        </div>


        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <!-- Background Image -->

                <!-- Program Links -->
                <div class="col-lg-4 col-md-3 footer-links">
                    <h4>Hubungi Kami</h4>
                    <ul>
                        <li><a style="pointer-events: none; " href="#"><b>Alamat:</b> Jalan Bandara
                                Palmerah IV No. D-11B, <br> <br> Cemorokandang, Kedungkandang, Kota Malang, <br> <br>
                                Jawa Timur <br> </a></li>
                        <li><a href="mailto:info@classprogram.id"><b>Email: </b>info@classprogram.id
                                <br></a></li>
                        <li><a href="javascript:void(0);" onclick="openWhatssApp()"> <b>Whatsapp: </b> 0812-3436-1959
                                <br></a>
                        </li>
                        <li><a href="mailto:marketing@classprogram.id"> <b>Partnership:
                                </b>marketing@classprogram.id<br> </a></li>
                        </li>

                    </ul>
                </div>

                <!-- Classprogram Address -->
                <div class="col-lg-4 col-md-3 footer-links">
                    <h4>Program Kelas</h4>
                    <ul>
                        <li> <a href=""> Bimbingan Skripsi Online (BSO)</a></li>
                        <li> <a href="">Bimbingan Mata Kuliah Jurusan (BMJ)
                            </a></li>
                        <li><a href="">Kelas Tugas Kuliah (KTK) </a></li>
                        <li> <a href="">Kelas Persiapan Karir (KPK) </a></li>
                        <li> <a href="">Creative Class <br> </a></li>

                        {{-- <li>
                            <a href="https://maps.app.goo.gl/Qx8hR99kDTW1mEQx7"  target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11.5 5c0 2.49-4.5 8.5-4.5 8.5S2.5 7.49 2.5 5a4.5 4.5 0 0 1 9 0Z" />
                                        <circle cx="7" cy="5" r="1.5" />
                                    </g>
                                </svg>
                                Jalan Bandara Palmerah IV No. D-11B,
                                Cemorokandang, Kedungkandang
                                Kota Malang, Jawa Timur
                            </a>
                                </li> --}}
                        <!-- ... (lanjutan elemen li) -->
                    </ul>
                </div>

                <div class="col-lg-4 col-md-3 footer-links" style="z-index: 2">
                    <h4>Workshop</h4>
                    <ul>
                        <li><a href="">Skripsi<br></a></li>
                        <li><a href=""> Karya Tulis Ilmiah (KTI) <br></a></li>
                    </ul>
                    <br>
                    <h4>Ebook</h4>
                    <ul>
                        <li><a href="">Ebook Class Program<br></a></li>
                    </ul>
                    <!--<h4>Daftar Sekarang</h4>-->
                    <style>
                        #registerModal .modal-footer .modal-backdrop,
                        #loginModal .modal-footer .modal-backdrop {
                            display: opacity:0;
                            !important;
                        }

                        .modal-content p:hover {
                            color: #000 !important;
                        }
                    </style><!-- Register Modal -->
                    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog"
                        aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="margin-top:150px;">
                            <div id="registerContent" class="modal-content">
                                <div class="modal-header" style="color:#000">
                                    @auth
                                        @if (isset(auth()->user()->name))
                                            @php
                                                $userName = auth()->user()->name;
                                            @endphp
                                            <h5 class="modal-title" id="registerModalLabel">Hai, {{ $userName }}</h5>
                                        @endif
                                    @else
                                        <h5 class="modal-title" id="registerModalLabel">Hai, Sobat Insans.</h5>
                                    @endauth
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @auth
                                        @if (isset(auth()->user()->name))
                                            <p style="color:#000">Kamu sudah daftar menggunakan akun
                                                <strong>{{ $userName }}</strong>.
                                            </p>
                                        @endif
                                    @else
                                        <p style="color:#000">Kamu belum daftar. Silakan <a href="/register">daftar</a>.
                                        </p>
                                    @endauth
                                    <!-- Tambahan isi formulir jika diperlukan -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Login Modal -->
                    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
                        aria-labelledby="loginModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="margin-top:150px;">
                            <div class="modal-content">
                                <div class="modal-header" style="color:#000">
                                    @auth
                                        @if (isset(auth()->user()->name))
                                            @php
                                                $userName = auth()->user()->name;
                                            @endphp
                                            <h5 class="modal-title" id="loginModalLabel">Hai, {{ $userName }}</h5>
                                        @endif
                                    @else
                                        <h5 class="modal-title" id="loginModalLabel">Hai, Sobat Insans.</h5>
                                    @endauth
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @auth
                                        @if (isset(auth()->user()->name))
                                            <p style="color:#000">Kamu sudah masuk menggunakan akun
                                                <strong>{{ $userName }}</strong>.
                                            </p>
                                        @endif
                                    @else
                                        <p style="color:#000">Kamu belum masuk. Silakan <a href="/login">masuk</a>.</p>
                                    @endauth
                                    Tambahan isi formulir jika diperlukan
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<ul>-->
                    <!--    @auth-->
                        <!--        <li><a href="#" data-toggle="modal" data-target="#registerModal">Daftar</a></li>-->
                        <!--        <li><a href="#" data-toggle="modal" data-target="#loginModal" style="margin-top: -10px;">Masuk</a></li>-->
                    <!--    @else-->
                        <!--        <li><a href="/register">Daftar</a></li>-->
                        <!--        <li><a href="/login" style="margin-top: -10px;">Masuk</a></li>-->
                    <!--    @endauth-->
                    <!--</ul>-->

                </div>
                <style>
                    .link-container {
                        /* Atur tinggi container sesuai kebutuhan */
                        height: 300px;
                        /* Atur posisi relative untuk child absolute (cover-image) */
                        position: relative;
                        overflow: hidden;
                        /* Agar gambar yang melebihi container di potong */
                    }

                    .cover-image {
                        /* Atur lebar dan tinggi gambar */
                        width: 100%;
                        height: 100%;
                        /* Jadikan gambar sebagai latar belakang dan sesuaikan properti cover */
                        object-fit: cover;
                        object-position: center;
                        /* Atur posisi tengah gambar */
                        position: absolute;
                        /* Positikan gambar di dalam container */
                        top: 0;
                        left: 0;
                        z-index: 1;
                    }

                    /* Media query untuk tampilan tablet (misalnya, layar dengan lebar maksimal 768px) */
                    @media (max-width: 768px) {
                        .link-container a {
                            pointer-events: none !important;
                            text-decoration: none !important;
                            color: black !important;
                        }

                        .link-container img.cover-image {
                            display: none !important;
                            /* Menyembunyikan gambar */
                        }
                    }
                </style>
                <div class="link-container">
                    <a style="pointer-events: none; "
                        href="https://www.instagram.com/reel/C1eDXOAPKPI/?igsh=NTc4MTIwNjQ2YQ=="
                        style="text-decoration: none; color: black;">
                        <img class="cover-image" src="{{ asset('assets/img/bg/hp.png') }}" alt="Workshop Image"
                            style="z-index:3">
                    </a>
                </div>



                <!-- <div class="col-lg-3 col-md-3 footer-links">
                    <h4>Daftar Sekarang</h4>
                    <ul>
                        <li><a href="#">Daftar</a></li>
                        <li><a href="#">Masuk</a></li>
                        <img src="{{ asset('assets/img/bg/hp.png') }}" alt="Workshop Image">
                    </ul>
                </div> -->

                <!-- Download App Section -->
                <div class="col-lg-2     col-md-3 footer-links">
                    {{-- <h4>Download aplikasinya</h4> --}}

                </div>
            </div>
        </div>


        <div class="container" style="margin-top: -50px;">
            <hr
                style="   border: none;
                height: 2px; /* Default height */
                background-color: white; margin-bottom: -300;">
        </div>
        <!--<div class="container py-4">-->
        <!--    <div class="copyright">-->
        <!--        <strong><span></span></strong>Copyright © 2023-2024 Class Program-->

        <!--    </div>-->
        <!--      <div class="container" style="">-->
        <!--    <hr-->
        <!--        style="   border: none;-->
        <!--        height: 2px; /* Default height */-->
        <!--        background-color: white; ">-->
        <!--</div>-->
        <style>
            #footer .credits a {
                text-decoration: none;
                color: #ffffff;
                /* font-weight: bold; */
                margin-right: 0px !important;
                transition: color 0.2s;
            }

            .credits a:hover {
                color: #fd7e14 !important;
                /* Warna tautan saat dihover */
            }
        </style>


        <div class="container py-4">
            <div class="copyright">
                <strong><span></span></strong>Copyright © 2024 Class Program
            </div>
            <div class="credits" style="margin-right:  4px !importan; margin-left:  4px !importan;">
                <a href="/disclaimer">Disclaimer</a>

                -

                <a href="/tentang">Tentang</a>
                -

                <a href="/policy">Privacy Policy</a>
                -

                <a href="/condition">Terms and Condition</a>
            </div>
        </div>

    </div>
    </div>

    <style>
        #welcome-message {
            display: none;
            position: fixed;
            bottom: 80px;
            left: 20px;
            margin-top: -10%;
            max-width: 300px;
            width: 100%;
            height: 30%;
            border-radius: 20%;
            z-index: 1000;
        }

        #popup-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: ##25D366;
            margin-top: 10px;

        }

        #popup-header h3 {
            margin: 0;
            font-size: 16px;
        }

        #close-popup-button {
            background: none;
            border: none;
            font-size: 20px;
            color: #888;
            cursor: pointer;
        }

        #chat-dialog {
            display: flex;
            flex-direction: column;

            background-color: white;
            border-radius: 0 0 10px 10px;

        }

        .chat-bubble {
            background-color: ##25D366;

            border-radius: 10px;
            margin-top: 20px;
            margin-left: 10px;
            padding: 10px;
            margin-bottom: 10px;
            max-width: 80%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 1);
            /* Added box shadow */
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }




        .chat-bubble p {
            margin: 0;
            font-size: 14px;
            color: #333;
        }

        .chat-bubble a {
            color: #25D366;

            text-decoration: none;
            font-weight: bold;

        }

        .send-logo {
            width: 40px;
            height: 40px;
            /* background-color: #25d366; */
            background-color: #23bdee;
            border-radius: 20px;
            margin-left: 10px;
            position: relative;
            overflow: hidden;
            /* To ensure the "Kirim" text stays within the circle */
        }

        .chat-bubblee {
            display: flex;
            align-items: center;
            /* background-color: #25d366; */
            background-color: #25D366;
            border-radius: 50px;
            margin-top: 20px;
            margin-left: 8px;
            margin-right: 8px;
            padding: 0.1px;
            margin-bottom: 10px;
            width: 170px;
            height: 40px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 1);
            /* Added box shadow */
            transition: box-shadow 0.3s ease, background-color 0.3s ease;


        }

        .chat-bubblee:hover {
            color: #000000;
        }

        .joinchat__button__send {
            width: 40px;
            height: 40px;
            fill: #fff;
            margin-right: 10px;
        }

        .btn-get-started {
            background-color: #128c7e;
            color: #fff;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-get-started:hover {
            background-color: #075e54;
        }

        .program-info {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }


        .program-info p {
            margin: 0;
            font-size: 16px;
            /* Set your desired font size */
            color: #333;
            /* Set your desired text color */
        }

        @keyframes floatAnimation {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .fa-regular {
            font-size: 30px;
            margin-left: 8px;
            margin-right: 10px;
            animation: floatAnimation 2s ease-in-out infinite;
            /* Adjust duration and timing function as needed */
        }

        #whatsapp-button .second-image {
            display: none;
            /* Hide the second image by default */
        }

        #whatsapp-button.active .first-image {
            display: none;
            /* Hide the first image when active */
        }

        #whatsapp-button.active .second-image {
            display: inline;
            /* Show the second image when active */
        }

        #help-message {
            display: none;
            position: fixed;
            bottom: 20px;
            /* right: 20px; */
            margin-left: 120px;
            /* margin-top: -500px; */
            /* background-color: orange; */
            background-color: #23bdee;
            color: #fff;
            padding: 10px;
            border-radius: 50px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: opacity 0.5s ease-in-out;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .tombol:hover {
            color: #003EB5;
        }




        #whatsapp-button::before {
            content: attr(title);
            display: none;
            position: absolute;
            margin-left: 150px;
            transform: translateX(-50%);
            height: 28px;
            line-height: 28px;
            /* Center the text vertically */
            padding: 0 12px;
            /* Add horizontal padding */
            background-color: #23bdee;
            color: #fff;
            border-radius: 25px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            white-space: nowrap;
            width: 120px;
        }

        #whatsapp-button:hover::before {
            display: block;
        }
    </style>

    </head>

    <body>
        <!--<div id="help-message"-->
        <!--    style="font-family:'Manrope';box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); margin-top:50px;-->
        <!--">Butuh bantuan?</div>-->
        <div id="whatsapp-button" onclick="showWelcomeMessage();" title="Butuh bantuan?">

            <img src="{{ asset('assets/img/bg/whatsappp.png') }}" alt="WhatsApp" class="first-image" />
            <img src="{{ asset('assets/img/bg/cs.png') }}" alt="WhatsApp" class="second-image" />
            <!-- <img src="{{ asset('assets/img/bg/wa2.png') }}" alt="WhatsApp" class="second-image" /> -->
            <!--<span id="whatsapp-text">Ada Pertanyaan? <br> Hubungi Kak Dewi</span>-->
        </div>



        <div id="welcome-message" style="">
            <div id="popup-header" class="header-container">
                <h3 style="font-family:'Manrope';">Class Program</h3>
                <button
                    style="font-size: 25px; color: #ffffff; background-color: transparent; border: none; margin-bottom:0px !important;"
                    class="bi bi-x-circle tombol" onclick="closeWelcomeMessage()"></button>
            </div>
            <div id="chat-dialog">
                <div class="chat-bubble">
                    <!-- <p>Jika ada yang ingin ditanyakan, silakan <a id="contact" onclick="openWhatsApp()">hubungi Minma di sini</a>.</p> -->
                    <p style="font-family:'Manrope';pointer-events: none; ">Selamat datang di Class Program. <br>Jika
                        ada yang ingin
                        ditanyakan, silahkan hubungi Kak Dewi <a style="color:#444444; font-weight:200;"
                            href="javascript:void(0);" onclick="openWhatssApp()">di sini</a>.</p>
                </div>

                <!-- <div class=" send-logo">Class Program
                </div>
                User -->
                <style>
                    .bubble-effect {
                        position: relative;
                        animation: bubbleAnimation 1s ease-in-out infinite alternate;
                    }

                    @keyframes bubbleAnimation {
                        0% {
                            transform: translateY(0);
                        }

                        100% {
                            transform: translateY(-5px);
                        }
                    }
                </style>


                <div class="chat-bubblee" onclick="openWhatssApp()" style="cursor: pointer !important;">
                    <img class="bubble-effect" src="{{ asset('assets/img/bg/send-pesawat.png') }}"
                        alt="Alternate Text" style="width: 30px; margin-left: 8px; margin-right: 10px;">

                    <p
                        style="margin-top:18px; font-size:16px; font-weight:700; font-family:'Manrope'; pointer-events: none;">
                        Class Program
                    </p>
                </div>


            </div>
        </div>

        <script>
            var isSecondImageVisible = false;

            function changeImage() {
                var button = document.getElementById("whatsapp-button");
                isSecondImageVisible = !isSecondImageVisible;

                if (isSecondImageVisible) {
                    button.classList.add("active");
                } else {
                    button.classList.remove("active");
                }
            }

            // Auto-change image every 10 seconds
            setInterval(changeImage, 10000);
        </script>



        <script>
            function showWelcomeMessage() {
                var welcomeMessage = document.getElementById("welcome-message");
                var whatsappButton = document.getElementById("whatsapp-button");
                var helpMessage = document.getElementById("help-message");

                welcomeMessage.style.display = "block";
                whatsappButton.style.display = "none";
                helpMessage.style.display = "none";

                // Toggle the images after the welcome message is displayed
                toggleImages();
            }

            function closeWelcomeMessage() {
                var welcomeMessage = document.getElementById("welcome-message");
                var whatsappButton = document.getElementById("whatsapp-button");
                var helpMessage = document.getElementById("help-message");

                welcomeMessage.style.display = "none";
                whatsappButton.style.display = "flex";
                helpMessage.style.display = "inline-block"; // Menampilkan kembali help-message
            }


            function toggleImages() {
                var button = document.getElementById("whatsapp-button");
                var firstImage = button.querySelector(".first-image");
                var secondImage = button.querySelector(".second-image");

                // Toggle the active class to switch between images
                button.classList.toggle("active");
            }
        </script>






        <div class="popup-bro" id="popup-bro">
            <p>
                <strong
                    style="color: black;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        margin:bottom 50px">Selamat
                    Sobat Insans Telah Mendaftar</strong>
            </p>
            <div class="month-box" id="month-box">
                <p id="popup-month">Oct</p>
                <div class="date-box" id="date-box">
                    <p id="popup-date">21</p>
                </div>
            </div>
            <div class="row">
                <row>
                    <div class="popup-text" id="popup-text">
                        <p><strong>Nama:</strong> Vabindra Bimasvara</p>
                        <p>Paket: Silver</p>
                        <p>5 menit yang lalu</p>
                    </div>
            </div>
        </div>
        <script src="script.js"></script>

        <script>
            function togglePopup() {
                var popup = document.getElementById("message-popup");
                popup.classList.toggle("show-popup");
            }

            function closePopup() {
                var popup = document.getElementById("message-popup");
                popup.classList.remove("show-popup");
            }

            function openWhatssApp() {
                var message =
                    "Halo Kak Dewi. Saya mau tanya-tanya nih mengenai bimbingan di Class Program."; // Pesan yang ingin Anda kirim
                var phoneNumber = "6282141549373"; // Nomor WhatsApp yang dituju (tanpa tanda '+')

                // Membuat URL untuk mengarahkan pengguna ke halaman WhatsApp
                var whatsappURL = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);

                window.open(whatsappURL, "_blank");
            }
        </script>


        <script>
            const months = [
                "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
            ];
            const currentDate = new Date();
            const currentMonth = months[currentDate.getMonth()];
            const currentDay = currentDate.getDate();
            const popupMessages = [{
                    date: currentDay,
                    month: currentMonth,
                    text: "Sobat Insans<br><strong>Andika Putra Adi</strong> <br>Mendaftar di Paket Bronze Bimbingan Mata...",
                },

                {
                    date: currentDay,
                    month: currentMonth,
                    text: "Sobat Insans<br><strong>Zahra Aminatuz Zahro</strong> <br>Mendaftar di Paket Complete Bimbingan...",
                },
                {
                    date: currentDay,
                    month: currentMonth,
                    text: "Sobat Insans<br><strong>Fadil Junaidi </strong> <br>Mendaftar di Paket Diamond Bimbingan Mata...",
                },
                {
                    date: currentDay,
                    month: currentMonth,
                    text: "Sobat Insans<br><strong>Friska Cahyu</strong> <br>Mendaftar di Paket Silver Bimbingan Skripsi...",
                },
                {
                    date: currentDay,
                    month: currentMonth,
                    text: "Sobat Insans<br><strong>Yohanes Hermandes</strong> <br>Mendaftar di Paket Reguler",
                },
                {
                    date: currentDay,
                    month: currentMonth,
                    text: "Sobat Insans<br><strong>Liyunzira Rohmah</strong> <br>Mendaftar di Paket Emerald Bimbingan Mata...",
                },
                {
                    date: currentDay,
                    month: currentMonth,
                    text: "Sobat Insans<br><strong>Dimas Wildan</strong> <br>Mendaftar di Paket Complete Bimbingan...",
                },
                {
                    date: currentDay,
                    month: currentMonth,
                    text: "Sobat Insans<br><strong>Riska Triyandini</strong> <br>Mendaftar di Paket Diamond Bimbingan Mata...",
                }, {
                    date: currentDay,
                    month: currentMonth,
                    text: "Sobat Insans<br><strong>Fandi Ahmad</strong> Mendaftar di Paket Silver Bimbingan Skripsi Online",
                },
            ];

            const popupbro = document.getElementById('popup-bro');
            const popupDate = document.getElementById('popup-date');
            const popupMonth = document.getElementById('popup-month');
            const popupText = document.getElementById('popup-text');

            let currentIndex = 0;


            function getRandomIndex() {
                return Math.floor(Math.random() * popupMessages.length);
            }

            function showPopup() {
                const message = popupMessages[currentIndex];
                popupDate.textContent = message.date;
                popupMonth.textContent = message.month;
                popupText.innerHTML = message.text;
                popupbro.style.display = 'block';

                currentIndex = (currentIndex + 1) % popupMessages.length;
            } // Ensure that the initial call is outside of the function definition
            showPopup();

            // Set interval to showPopup every 5 seconds
            setInterval(showPopup, 8000);
        </script>
        {{-- Animasi angka --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>

    <script>
        // Fungsi untuk kembali ke halaman BSO
        function kembaliKeBSO() {
            window.location.href = "";
        }
    </script>
</footer>

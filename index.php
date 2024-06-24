<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Side menu -->
            <div class="row col-2 vh-100 position-fixed">
                <p class="fw-bold">Portofolio</p>
                <div class="">
                    <div class="col">
                        <a href="#tentang" class="fw-light text-decoration-none">>Tentang</a>
                    </div>
                    <br>
                    <div class="col">
                        <a href="#pengalaman" class="fw-light text-decoration-none">>Pengalaman</a>
                    </div>
                    <br>
                    <div class="col">
                        <a href="#proyek" class="fw-light text-decoration-none">>Proyek</a>
                    </div>
                    <br>
                    <div class="col">
                        <a href="https://www.linkedin.com/in/yogga-aji-pratama-b275141b4/" target="_blank" class="fw-light text-decoration-none">>LinkedIn</a>
                    </div>
                    <br>
                    <div class="col">
                        <a href="https://drive.google.com/file/d/1lF8qSyvM_8FnoUINvTCByD5UdpizZlAJ/view" target="_blank" class="fw-light text-decoration-none">>CV</a>
                    </div>
                </div>
            </div>
            <!-- Main menu -->
            <div class="main-menu col overflow-auto">
                <div class="jumbotron">
                    <img src="img/bg.jfif" alt="" srcset="" class="text-center" width="100%">
                </div>
                <div class="minus-position text-center d-flex justify-content-center">
                    <!-- <h1 class=" p-5 rounded-circle bg-danger">test</h1> -->
                    <img src="img/formal.jpg" width="100px" class="rounded-circle" alt="">
                </div>
                <div class="text-center">
                    <h1 class="fw-bold">Yogga Aji Pratama</h1>
                    <h5 class="fw-light">Fullstack Web Developer</h5>
                </div>
                <!-- Resume about -->
                <div class="m-5" id="tentang">
                    <h5 class="font-weight-bold">Tentang</h5>
                    <br>
                    <p class="text-justify">
                        Halo semua! 👋🏼
                    </p>
                    <p class="text-justify">
                        Saya Yogga Aji Pratama
                    </p>
                    <p class="text-justify">
                        Lulusan UIN Sunan Gunung Djati Bandung
                    </p>
                    <p class="text-justify">
                        Domisili Bandung
                    </p>
                    <p class="text-justify">
                        Saya seorang fullstack web developer dengan keahlian bahasa pemrograman utama adalah Javascript
                        (Node.js dan Vue.js). Bahasa pemrograman lain yang saya tekuni diantaranya adalah PHP
                        dengan frameworknya Laravel.
                    </p>
                </div>
                <hr>
                <!-- Experience -->
                <div class="m-5" id="pengalaman">
                    <h5 class="font-weight-bold">Pengalaman</h5>
                    <br>
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="img/pindad.png" alt="" srcset="" width="80px">
                        </div>
                        <div class="col text-justify">
                            <p class="fw-bold">Software Engineer</p>
                            <p class="fw-light">PT. Pindad (Persero) Magang</p>
                            <p>Sep 2019 - Okt 2019 · 2 bln</p>
                            <p>Bandung, Jawa Barat, Indonesia</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <img src="" alt="CV. Buana Studio" srcset="" width="80px">
                        </div>
                        <div class="col text-justify">
                            <p class="fw-bold">Software Engineer</p>
                            <p class="fw-light">CV. Buana Studio Magang</p>
                            <p>Mei 2019 - Jun 2019 · 2 bln</p>
                            <p>Bandung, Jawa Barat, Indonesia</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <img src="img/len.jfif" alt="" srcset="" width="80px">
                        </div>
                        <div class="col text-justify">
                            <p class="fw-bold">IT Support Technician</p>
                            <p class="fw-light">PT. Len Industri (Persero) Magang</p>
                            <p>Jan 2015 - Mar 2015 · 3 bln</p>
                            <p>Bandung, Jawa Barat, Indonesia</p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Projects -->
                <div class="m-5" id="proyek">
                    <h5 class="font-weight-bold">Proyek</h5>
                    <br>
                    <table class="table">
                        <thead class="text-center">
                            <th>Tipe</th>
                            <th>Proyek</th>
                            <th>Fitur</th>
                            <th>Deskripsi</th>
                            <th>Link</th>
                        </thead>
                        <tbody>
                            <td>Unpublish Project</td>
                            <td>Point of sales</td>
                            <td>Login, pembayaran, penjualan, pembelian, cetak struk pembelian</td>
                            <td>Aplikasi desktop yang dibuat dengan teknologi Electron js dengan UI dibuat dengan Vuejs
                                dan server side dengan Nodejs</td>
                            <td class="text-center">
                                <video src="video/pos.mp4" width="320px" controls></video>
                            </td>
                        </tbody>
                        <tbody>
                            <td>Unpublish Project</td>
                            <td>Market Price Report</td>
                            <td>Login, email service, accepted report menu</td>
                            <td>Aplikasi yang bertujuan menerima laporan kenaikan harga serta laporan tersebut dapat
                                ditinjau pada halaman administrator pelapor akan mendapat email balasan jika laporan
                                diterima.</td>
                            <td><a
                                    href="https://github.com/yoggaajipratama/TUBES-LARAVEL-PAW">https://github.com/yoggaajipratama/TUBES-LARAVEL-PAW</a>
                            </td>
                        </tbody>
                        <tbody>
                            <td>Unpublish Project</td>
                            <td>E-KTP and fingerprint biometric authentication in E-voting with AES 128 encryption</td>
                            <td>Login, AES encryption, microcontroller and sensor with integration to Web,
                                administration menu, e-voting</td>
                            <td>E-Voting dengan fitur autentikasi pemindaian menggunakan E-KTP dan sidik jari yang
                                dilengkapi enkripsi AES 128</td>
                            <td>
                                <a
                                    href="https://drive.google.com/drive/folders/1ECf5UY7nWzt860JYNhCQdBOl9KDTq7r5?usp=drive_link">https://drive.google.com/drive/folders/1ECf5UY7nWzt860JYNhCQdBOl9KDTq7r5?usp=drive_link</a>
                            </td>
                        </tbody>
                        <tbody>
                            <td>Unpublish Project</td>
                            <td>Waterplant (Web pengontrol kelembapan air pada tanaman dan siram otomatis)</td>
                            <td>Login, microcontroller and sensor with integration to Web, humidity report</td>
                            <td>Aplikasi Web yang terintegrasi dengan microcontroller dan sensor yang bertujuan untuk
                                meninjau kelembapan tanah dan melakukan penyiraman tanaman secara otomatis</td>
                            <td>
                                <a
                                    href="https://drive.google.com/drive/folders/1LO6DqhfSdMPFeplVVknwJPifLxmdt0jE?usp=sharing">https://drive.google.com/drive/folders/1LO6DqhfSdMPFeplVVknwJPifLxmdt0jE?usp=sharing</a>
                            </td>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
---
layout: post
title: Kerangka Starter Template Bootstrap Version 4.4.1
permalink: /starter-template-bootstrap-vesri-4-4-1
description: Kini Bootstrap hadir dengan versi terbaru yang lebih simple yang bisa kita gunakan di saat kita ingin membuat website dengan cepat sangat mudah dan lebih simple
date: 2019-12-05 23:21
category: Template
author: Acha81
images: /images/bootstrap-versi-4.4.1.png
alt: template bootstrap 4.4.1
tags: []
summary: 
---
[SUMBER INFORMASI](https://getbootstrap.com/docs/4.4/about/overview/)

Kini Bootstrap hadir dengan versi terbaru yang lebih simple yang bisa kita gunakan di saat kita ingin membuat website dengan cepat sangat mudah dan lebih simple

Perjalanan awal bootstrap diciptakan oleh seorang desainer dan pengembang di Twitter, dan kini Bootstrap telah menjadi salah satu kerangka kerja template front-end dan proyek sumber terbuka paling populer di dunia.

Bootstrap awalnya dibuat di Twitter pada pertengahan 2010 oleh @mdo dan @fat. Sebelum menjadi kerangka thema bersumber publis, Bootstrap dikenal sebagai Twitter Blueprint.

Berselang Beberapa bulan kemudian setelah pengembangan, Twitter mengadakan Pekan Hack pertama dan proyeknya meledak ketika pengembang dari semua tingkat keterampilan bimbingan eksternal.

Ini akan berfungsi sebagai panduan gaya untuk pengembangan alat internal di perusahaan selama lebih dari setahun sebelum rilis publik, dan terus melakukannya hingga saat ini.

Awalnya dirilis pada hari Jumat, 19 Agustus 2011, dan telah memiliki lebih dari dua puluh rilis, termasuk dua penulisan ulang utama dengan v2 dan v3. Dengan Bootstrap 2, dan menambahkan fungsionalitas responsif ke seluruh kerangka template sebagai stylesheet opsional.

Berdasarkan hal itu dengan Bootstrap 3, telah menulis ulang perpustakaan sekali lagi untuk membuatnya responsif secara default dengan pendekatan pertama yang mobile. Dengan Bootstrap 4, sekali lagi menulis ulang proyek untuk memperhitungkan dua perubahan arsitektur utama: migrasi ke Sass dan pindah ke flexbox CSS.

{% include baca.html %}

Tujuannya adalah membantu dengan cara kecil untuk memajukan komunitas pengembangan web dengan mendorong properti CSS yang lebih baru, lebih sedikit ketergantungan, dan teknologi baru di seluruh browser yang lebih modern.

## Kerangka Dasar Starter Template Bootstrap Version 4.4.1 untuk Sebuah Blog dan Website

Di bawah ini kode HTML dan CSS bootstrap-versi-4

<figure class="highlight"><span class="code-pil"><i class="fa fa-code font-weight-bold" aria-hidden="true"></i>
    HTML &amp; CSS</span>
{% highlight html %}
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.
            </p>
        </div>
    </div>

    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
{% endhighlight html %}
</figure>

Silahka copy file di atas dengan format index.xml atau index.html kemuadian open in browser dan lihat hasilnya, inilah kerangaka dasar template dari bootstrap-versi-4

Jika anda ingin mengembangkan dan memodifikasi, silahkan sebab kerangka dasar ini gratis anda download

Dan jika Anda menginginkan template yang saya pakai silahkan di clone [SUMBER GITHUB](https://github.com/copas-seo/copas-seo.github.io)

Kesimpulannya :

Jadi semua tergantung Anda
Terima Kasih sudah Berkunjung, Semoga Postingan ini bermanfaat.

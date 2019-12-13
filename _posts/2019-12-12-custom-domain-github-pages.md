---
layout: post
title: Cara Setting Custom Domain Github Pages di rumahweb
permalink: custom-domain-github-pages
description: Github pages salah satu layanan hosting berbasis web yang terbesar dan populer di kalangan komunitas repositori yang mengembangkan proyek perangkat lunak dengan...
date: 2019-12-13 08:00
category: Blog
author: Acha81
images: /images/Membuat-Blog-Github-Kurang-dari-5-Menit.png
alt: Cara Setting Custom Domain Github Pages di rumahweb
tags: []
summary: 
---
Github pages salah satu layanan hosting berbasis web yang terbesar dan populer di kalangan komunitas repositori yang mengembangkan proyek perangkat lunak dengan System git.

Github pages juga memberikan fasilitas bagi repositori untuk membuat web page static untuk di miliki, yang di hosting oleh github sendiri, Anda dapat membuat repositori dengan format username.github.io untuk membuat halaman static, portfolio dll.

Ada Begitu Banyak komunitas repositori yang menggunakan github pages, di antaranya, saya pribadi menggunakan hosting github pages dengan theme atau template platform jekyll dan gabungan platform bootstrap 4 design sendiri.

Jika Anda ingin menggunakan Platform Github pages, sebagai web blog pribadi, dan belum memilikinya, Anda dapat membaca halaman Article [Membuat Blog Github Pages Kurang dari 5 Menit](membuat-blog-github-kurang-dari-5-menit). 

Dan bila Anda telah memiliki halaman github pages yang sudah di siapkan untuk di custom domain silahkan ikuti tutorial di bawah ini.

Ikuti langkah berikut ini untuk custom domain github pages Anda:

1. Buka
<code>github.com</code>
dan login.
2. Buka
<code>repository</code>
Github Pages milik Anda.
3. Pilih
<code>Settings</code>
4. kemudian scrol sampai pada bagian **Github Pages**, dan masukan nama domain yang telah Anda siapkan pada kolom
<code>Custom Domain</code>
lalu pilih save.
![custom-domain-github-pages](/images/custom-domain-github-pages.png)

## Setting DNS Repository Github Pages
Kini Anda telah [menambahkan custom domain](custom-domain-github-pages) di pengaturan github, kita lanjut ke panel dari penyedia Domain tempat Anda membeli, Di sini saya membeli domain .my.id di [rumahweb](rumahweb.com) harganya hanya 12.000 ribu pertahun.

1. Login terlebih dahulu kemudian pilih Domain.
2. Klik tanda panah yang ada di sebelah kanan. 
3. Pilih kelola Domain jika sudah terbuka. 
4. Silahkan pilih DNS Management di sebelah kiri.
5. Tambahkan beberapa Add Record **A** TTL 3600 dari IP github,
<br><br>
<figure class="highlight">
    <pre>
    <span class="nt">1. 185.199.108.153</span>
    <span class="nt">2. 185.199.109.153</span>
    <span class="nt">3. 185.199.110.153</span>
    <span class="nt">4. 185.199.111.153</span>
</pre>
</figure>
[SUMBER RECORD IP GITHUB](https://help.github.com/en/github/working-with-github-pages/managing-a-custom-domain-for-your-github-pages-site)
### Setting CNAME Repository Github Pages
_1._ Tambahkan Record CNAME.
<br>
<figure class="highlight">
    <pre>
    <span class="cp">Domain</span> <span class="s">      username github</span> -<span class="nt">domain.com</span>
    <span class="cp">TTL</span> <span class="s">         3600</span>
    <span class="cp">Class</span> <span class="s">       IN</span>
    <span class="cp">Destination</span> <span class="s"> github.com</span>
</pre>
</figure>
_2._ Tambahkan Lagi Record CNAME.
<br>
<figure class="highlight">
    <pre>
    <span class="cp">Domain</span> <span class="s">      www</span> -<span class="nt">domain.com</span>
    <span class="cp">TTL</span> <span class="s">         3600</span>
    <span class="cp">Class</span> <span class="s">       IN</span>
    <span class="cp">Destination</span> <span class="s"> repositor.github.io</span>
</pre>
</figure>
Kemudian Save

Hasil semua Record akan tampak seperti di bawah ini.

![Setting-CNAME-Domain-Github-Pages](/images/Setting-CNAME-Domain-Github-Pages.png)

* Untuk  perubahan DNS di perlukan waktu 15 menit, terantung penyedia domain.
* Untuk  perubahan https di github di butuhkan waktu 1x24 jam.
<br><br>

Nah itulah sedikit tutorial dari saya [Cara Custom Domain Blog Github Pages](custom-domain-github-pages),
Jika Anda kurang paham silahkan tinggalkan comentarnya.

Terima Kasih sudah berkunjung, Wassalam.

---
layout: post
title: HTML dan Css Scroll Up dan Scroll Down Blog
permalink: scroll-up-dan-scroll-down-blog
description: Di Artikel kali ini saya akan berbagi cara membuat Tombol Scroll Up dan Tombol Scroll Down di Blog github pages namun ini bisa juga kita di pasang di blog lainnya
date: 2019-12-17 14:47
category: Blog
author: Acha81
images: /images/Scroll-up-Scroll-down.png
alt: Scroll-up-Scroll-down
tags: []
summary: 
---
Di Artikel kali ini saya akan berbagi cara membuat HTML dan Css Tombol Scroll Up dan Tombol Scroll Down di Blog github pages namun ini bisa juga kita di pasang di blog lainnya' dan biasanya di blogspot biasa di namakan back to top.

Menu scroll up ini juga sangat di perlukan oleh setiap pengunjung, sebab di saat mereka sedang membaca sebuah postingan yang kita tulis sampai pada akhir artikel, bila ingin kembali ke atas tidak perlu lagi menggunakan mouse untuk sroll up dan sroll down, mereka hanya tinggal klik Menu scroll yang telah kita buat.

[Scroll Up dan Scroll Down](scroll-up-dan-scroll-down-blog) memang banyak sekali model yang kita temui di blog!!! namun di kesempatan ini saya memberikan tampilan yang berbeda dan pastinya responsive yang letaknya di sebalah kanan dengan posisi fixed, sangat berbeda dengan yang lainnya dan dan di sini saya tdaik menggunakan jquery atau javascript.

Ikuti langkah ini untuk memasang di blog atau di github pages Anda:
## Membuat HTML dan Css Tombol Scroll Up dan Tombol Scroll Down

_1_. Buka [blogspot](https://www.blogger.com/) atau [github](https://www.github.com/) pages dan login.

_2_. Copy file Scroll Up dan Scroll Down di bawah ini dan simpan di bawah footer HTML lalu save.
<br>
<figure class="highlight">
    <span class="code-pil">
    <i aria-hidden="true" class="fa fa-code font-weight-bold"></i>
    HTML</span>
    {% highlight html %}
    <a class="scroll up" href="#">
    <i aria-hidden="true" class="fa fa-arrow-up"></i>
    </a>
    <a class="scroll down" href="#finish">
    <i aria-hidden="true" class="fa fa-arrow-down"></i>
    </a>
    {% endhighlight %}
</figure>

_3_. Copy file CSS di bawah ini dan simpan di dalam file css Anda Dan save.
<br><br>

<figure class="highlight">
<span class="code-pil">
    <i aria-hidden="true" class="fa fa-code font-weight-bold"></i>
    CSS</span>
{% highlight html %}
/* Scroll */
html {
    scroll-behavior: smooth;
}

.scroll {
    position: fixed;
    top: 50%;
    right: 0;
    width: 30px;
    height: 30px;
    display: block;
    background: #000;
    text-align: center;
    line-height: 30px;
    z-index: 10000;
}

a.scroll {
    color: #fff;
    font-size: 14px;
    text-decoration: none;
}

.scroll.up {
    top: calc(50% - 30px);
    background: #44e839;
}

.scroll.down {
    top: calc(50% - 0px);
    background: #f53d68;
}
{% endhighlight %}
</figure>

_4_. Setelah semua di lakukan dengan baik silahkan buka blog Anda dan lihat hasilnya, letaknya berada di sebelah kanan.

Doneee kini Anda telah sukses menambahkan tombol to top dan to bottom di blog, jika Anda masih kurang paham silakan tinggalkan komentarnya, Saya akan secepatnya merespon.

Nah itulah sedikit Tutorial dari Saya mengenai Cara membuat dan menambahkan [Scroll Up dan Scroll Down Blog](scroll-up-dan-scroll-down-blog) Terima Kasih sudah berkunjung dan Wassalam.


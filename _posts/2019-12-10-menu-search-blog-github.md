---
layout: post
title: Cara Membuat Kotak search Box di blog github
permalink: menu-search-blog-github
description: saat kita membuat blog di github dan menggunakan custom theme jekyll, tidak menyediakan fasilitas menu search Engine untuk mencari sebuah artikel untuk pengunjung...
date: 2019-12-10 14:54
category: blog
author: Acha81
images: /images/search-copas-seo.svg
alt: Custom search github
tags: []
summary: 
---
Berikut ini artikel membuat menu custom search di blog github, kenapa ini di bahas, sebab saat kita membuat blog di github dan menggunakan custom theme jekyll, tidak menyediakan fasilitas menu search Engine untuk mencari sebuah artikel untuk pengunjung.

Namun kita dapat membuatnya dengan manual dan otomatis melalui Online dengan sangat mudah dengan Google custom search Engine.

[Google custom search](menu-search-blog-github) ini saya sangat merecomendasikan yang blog / web nya sudah di monetisasi Adsense sebab akan meningkatkan penghasilan dari search Engine ini, Namun saya tidak akan membahas cara monetisasi.

Ok kita lansung saja.

**ikuti langkah-langkah berikut:**

1.Klik tautan ini [Goggle Cse](https://cse.google.com) Anda akan di arahkan ke google seperti gambar di bawah ini.

![search Box di blog github](/images/search-copas-seo.png)

2.Isi kolom situs yang akan di telusuri dengan nama blog atau website Anda

3.ganti bahasa yang Anda inginkan

4.isi kolom nama mesin telusur, Anda bebas memberi nama

5.klik created atau buat, Anda akan mendapatkan tautan seperti gambar ini

![Alternate text](/images/custom-search-copas-seo.png)

6.klik dapatkan kode, akan tampil seperti ini

![Alternate text](/images/copas-seo-custom-search.png)

7.copy kode berikut cx=xxxxxxxxxxxxx:8mhlv7zvsh9 yang telah Anda buat untuk kita custom.

## Cara membuat box penelusuran di blog github

1.Copy file di bawah ini di html theme atau template Anda tepatnya di bawah header atau di sidebar

<br>
<figure class="highlight">
    <span class="code-pil">
        <i aria-hidden="true" class="fa fa-code font-weight-bold"></i>HTML</span>
    <pre><code class="language-html" data-lang="html">
<span class="nt">&lt;script&gt;</span>
  <span class="p">(</span><span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
    <span class="kd">var</span> <span class="nx">cx</span> <span class="o">=</span> <span class="s1" style="
    color: red;
">'000124122121016203706:yoijr22b2m8'</span><span class="p">;</span>
    <span class="kd">var</span> <span class="nx">gcse</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="s1">'script'</span><span class="p">);</span>
    <span class="nx">gcse</span><span class="p">.</span><span class="nx">type</span> <span class="o">=</span> <span class="s1">'text/javascript'</span><span class="p">;</span>
    <span class="nx">gcse</span><span class="p">.</span><span class="k">async</span> <span class="o">=</span> <span class="kc">true</span><span class="p">;</span>
    <span class="nx">gcse</span><span class="p">.</span><span class="nx">src</span> <span class="o">=</span> <span class="s1">'https://cse.google.com/cse.js?cx='</span> <span class="o">+</span> <span class="nx">cx</span><span class="p">;</span>
    <span class="kd">var</span> <span class="nx">s</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementsByTagName</span><span class="p">(</span><span class="s1">'script'</span><span class="p">)[</span><span class="mi">0</span><span class="p">];</span>
    <span class="nx">s</span><span class="p">.</span><span class="nx">parentNode</span><span class="p">.</span><span class="nx">insertBefore</span><span class="p">(</span><span class="nx">gcse</span><span class="p">,</span> <span class="nx">s</span><span class="p">);</span>
  <span class="p">})();</span>
<span class="nt">&lt;/script&gt;</span>
<span class="nt">&lt;gcse:search&gt;&lt;/gcse:search&gt;</span></code></pre>
</figure>

2.Kemudian ganti kode yang warna merah dengan kode Anda dapatkan tadi

3.Lalu Save Doneee

hasilnya akan seperti di bawah ini

{% include search.html %}

Kini Anda telah berhasil membuat [box search Engine](menu-search-blog-github).

Semoga Artikel ini dapat membantu, jika Anda masih kebingungan silahkan tinggalkan komentar.

Terima Kasih sudah berkunjung, Wassalam.

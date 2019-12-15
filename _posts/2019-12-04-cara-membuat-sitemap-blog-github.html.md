---
layout: post
title: Cara Membuat Sitemap untuk Blog Github Page
permalink: cara-membuat-sitemap-blog-github
description: Disini kita akan sama-sama belajar bagaiamana cara membuat Sitemap untuk blog github page agar dapat terindex oleh google webmaster tools GWS....
date: 2019-12-04 00:38
category: Blog
author: Acha81
images: /images/sitemap_github_page.jpg
alt: sitemap github
tags: []
summary: 
---
[SUMBER INFORMASI](https://blog.webjeda.com/jekyll-sitemap)

Disini kita akan sama-sama belajar bagaiamana cara membuat Sitemap untuk blog github page agar dapat terindex oleh google webmaster tools GWS....

Membuat sitemap untuk mesin pencari google adalah yang paling penting agar semua artikel blog / web kita dapata ter-indeks dan mendapatkan peringkat yang lebih baik.

Di saat kita membuat Blog Jekyll di github kita tidak akan mendapatkan sitemap secara default, namun kita dapat membuatnya menggunakan metode yang saya dapatkan dari link [ini.](https://blog.webjeda.com/jekyll-sitemap)

Dalam salah satu artikelnya yang telah membahas tentang Cara membuat Blog Jekyll di github. Namun jika Anda telah membuat blog atau jika Anda sudah memiliki blog Jekyll, silakan ikuti tutorial ini untuk mengetahui [cara membuat sitemap](cara-membuat-sitemap-blog-github.html) secara otomatis dan manual dengan sangat mudah.

Peta situs atau sitemap adalah susunan daftar tautan ke semua halaman posting web Anda. yang akan menjadi format .xml. Ini akan membantu robot mesin pencari google mendeteksi dan menjelajah ke situs web Anda. Itu juga akan memiliki metadata seperti tanggal posting, halaman, tanggal modifikasi terakhir dan seberapa sering diperbarui dll. Ini terlihat seperti file feed.xml Anda tetapi dengan tag yang berbeda.

## Apakah Peta Situs sitemap.xml sangat penting digunakan di blog  

Jika Anda memiliki situs web dan Anda tidak memiliki posting atau halaman apa pun, Anda mungkin tidak akan memerlukan peta situs atau sitemap. Tetapi untuk blog yang memiliki beberapa postingan artikel, peta situs ini sangatlah diperlukan (jika Anda ingin peringkat yang lebih baik di mesin pencari google search enggine).

Anda dapat mengirimkan sitemap Anda ke mesin pencari utama seperti Google, Bing, Yahoo dll., Sehingga bot masing-masing merayapi situs Anda dan mengindeksnya. Hanya setelah pengindeksan, tautan situs web Anda muncul di hasil pencarian.!

Mengirim tautan peta situs Anda di dalam situs web Anda juga merupakan ide yang bagus. Katakanlah jika ada seseorang yang merujuk pada posting Anda di blog mereka yang berperingkat baik. kemungkinan besar bot akan merayapi tautan itu dan mendarat di pos Anda. Anda tidak boleh melewatkan kesempatan untuk memberikan tautan ke peta situs Anda saat bot merayapi pos blog Anda

Kirim peta situs sitemap Anda ke Google console jika Anda telah membuat blog atau artikel. Saya biasanya mengirimkan peta situs saya ke alat Webmaster Google, Bing, dan Yahoo. Saya menggunakan pemeriksaan SEO untuk memeriksa apakah situs web saya mematuhi parameter SEO umum. Saya mengetahui bahwa saya tidak memiliki peta situs dengan menggunakan aplikasi ini.

{% include baca.html %}

Saya akan menulis posting rinci tentang beberapa alat on-line yang berguna untuk mengoptimalkan situs web Anda agar berkinerja baik dan ramah mesin pencari.

### Bagaimana cara membuat sitemap untuk blog Jekyll

Di blog WordPress, membuat peta situs menggunakan plugin sangatlah mudah! Namun Bagaimana jika saya memberi tahu Anda bahwa membuat peta situs di Jekyll jauh lebih mudah! Blog Jekyll tidak akan memiliki sitemap secara default. Anda selalu dapat membuatnya menggunakan potongan kecil kode. Tambahkan kode di bawah ini ke file _config.yml Ini akan membuat peta situs untuk Anda dengan tautan /sitemap.xml.

<br>
<figure class="highlight">
    <span class="code-pil">
        <i aria-hidden="true" class="fa fa-code font-weight-bold"></i>
        CSS</span>
    <pre><code class="language-css" data-lang="css"><span class="nt">plugins</span><span class="o">:</span>
        <span class="nt">-</span> <span class="nt">jekyll-sitemap</span></code></pre>
</figure><br>

Anda tidak akan dapat melihat file XML yang dibuat untuk sitemap di dalam direktori Anda. Sekarang, komit perubahan dan tekan URL yourwebsite.com/sitemap.xml. Anda akan melihat semua tautan Anda tercantum di sana

### Cara sulit untuk memasukkan sitemap di blog Jekyll

Anda juga dapat membuat daftar semua tautan sendiri. Jangan khawatir, kami akan menggunakan ul sehingga mendapat dan mengatur tautan satu per satu. Buat file di root repositori dan beri nama whatever.xml. Salin kode ini di dalamnya

<br>
<figure class="highlight"><span class="code-pil"><i class="fa fa-code font-weight-bold"
    aria-hidden="true"></i>
HTML</span>
<pre><code class="language-html" data-lang="html"></code></pre>
{% highlight html %}
---
---
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {% raw %}{% for post in site.posts %}{% endraw %}
    <url>
        <loc>{% raw %}{{site.url}}{% endraw %}{% raw %}{{ post.url | remove: 'index.html' }}{% endraw %}</loc>
    </url>
    {% raw %}{% endfor %}{% endraw %}

    {% raw %}{% for page in site.pages %}{% endraw %}
    {% raw %}{% if page.layout != nil %}{% endraw %}
    {% raw %}{% if page.layout != 'feed' %}{% endraw %}
    <url>
        <loc>{% raw %}{{site.url}}{% endraw %}{% raw %}{{ page.url | remove: 'index.html' }}{% endraw %}</loc>
    </url>
    {% raw %}{% endif %}{% endraw %}
    {% raw %}{% endif %}{% endraw %}
    {% raw %}{% endfor %}{% endraw %}
</urlset>
{% endhighlight %}
</figure>
<br>

Ini adalah file umpan yang ditulis dalam tag cair. yang akan merujuk di blog Anda dan akan mencari semua posting yang telah Anda buat, dan halaman yang Anda miliki dan daftar mereka di dalam file sitemap.xml. Itu juga akan diperbarui dengan menambahkan posting dan halaman baru. Dalam metode ini, Anda akan memiliki kontrol penuh atas peta situs Anda.

Anda dapat mengecualikan apa pun yang menurut Anda tidak penting dan menyertakan tautan yang Anda inginkan ada di dalam sitemap. Saya harap itu membantu. Jika Anda mengalami masalah dalam menghasilkan peta situs, silakan tinggalkan komentar. Saya akan mencoba memperbaikinya.

Setelah Anda membuat file sitemap silahkan send di google webmaster.

Sekian Terima kasih sudah membaca!

Semoga artikel ini bermanfaat dan dapat membantu anda.
Terima Kasih sudah berkunjung dan Wassalam.

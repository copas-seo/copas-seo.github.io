---
layout: post
title: Cara Memasang Menu Share Box pada Postingan Blog Github Pages
permalink: share-box-github-pages
description: Cara Memasang Menu Share Box pada Postingan Blog Github Pages - Pasti kalian sering melihat menu share box sosial media yang terpasang di setiap blog atau website
date: 2019-12-15 17:24
category: Blog
author: Acha81
images: /images/share-box-github-pages.png
alt: share-box-github-pages
tags: []
summary: 
---
**Cara Memasang Menu Share Box pada Postingan Blog Github Pages -** Pasti kalian sering melihat menu share box media sosial yang terpasang di setiap blog atau website, dan biasanya terletak di samping dan di atas, namun yang paling sering kita lihat dan paling banyak di pasang tepat di akhir postingan sebuah artikel.

[menu share box](share-box-github-pages) ini bertujuan agar setiap postingan artikel kita bisa di share ke media sosial seperti Facebook, twitter, reddit, linkedin, pinterest, whatsapp, instagram, email dll.

Share box juga salah satu solusi terbaik meningkatkan traffic blog / web, Apabila setiap artikel yang kita tulis bermanfaat kepada setiap pengunjung blog, dan bisa di katakan lebih SEO, sebab setiap pengunjung yang merasa puas dengan konten artikel yang dia baca dan berguna, saya yakin mereka akan men-share postingan kita dengan menu share box yang telah di sediakan di akhir postingan.

Di kesempatan kali ini saya ingin berbagi tutorial cara membuat menu share yang akan kita pasang tepatnya di bawah postingan blog, dan tentunya share box ini SEO Friendly dan fast loading.

## Cara Memasang Menu Share Box Github Pages
<center>Contoh</center>
![share-box-github](/images/share-box-github.png)

1. Buka [github.com](github.com) dan login

2.Copy file HTML di bawah ini ke directory _includes dan save dengan format share-box.html
<br><br>

<figure class="highlight">
<span class="code-pil">
<i aria-hidden="true" class="fa fa-code font-weight-bold"></i>
HTML</span>
{% highlight html %}
<div id="share-box-container">
<div class="label-line-c">
<p class="share-this">Share this post</p>
</div>
<div id="share-box">
<a href="https://www.facebook.com/sharer/sharer.php?u={% raw %}{{ site.url }}{{ page.url }}{% endraw %}" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
<i class="fa fa-facebook-official fa share-button">
facebook</i>
</a>
<a href="https://twitter.com/intent/tweet?text={% raw %}{{ page.title }}&url={{ site.url }}{{ page.url }}{% endraw %}" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
<i class="fa fa-twitter fa share-button">
twitter</i>
</a>
<a href="http://www.reddit.com/submit?url={% raw %}{{ site.url }}{{ page.url }}{% endraw %}" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=900,height=500,toolbar=1,resizable=0'); return false;">
<i class="fa fa-reddit fa share-button">
reddit</i>
</a>
<a href="https://www.linkedin.com/shareArticle?mini=true&url={% raw %}{{ site.url }}{{ page.url }}{% endraw %}&title={% raw %}{{ page.title }}{% endraw %}&summary={% raw %}{{ page.desc }}{% endraw %}&source=webjeda" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
<i class="fa fa-linkedin fa share-button">
linkedin</i>
</a>
<a href="mailto:?subject={% raw %}{{ page.title }}{% endraw %}&amp;body=Check out this site {% raw %}{{ site.url }}{{ page.url }}{% endraw %}">
<i class="fa fa-envelope fa share-button">
email</i>
</a>
</div>
</div>
{% endhighlight %}
</figure>

{% include baca.html %}

3.Copy lagi file CSS di bawah ini ke directory style.css dan save
<br><br>

<figure class="highlight">
<span class="code-pil">
<i aria-hidden="true" class="fa fa-code font-weight-bold"></i>
CSS</span>
<pre><span class="nt">
/** Share **/
#share-box-container {
    margin: 20px auto 30px;
    overflow: hidden;
}
</span></pre>

<pre><span class="nt">
.label-line-c {
  text-align: center;
  margin-bottom: 6px;
}
</span></pre>

<pre><span class="nt">
.share-this {
    display: inline-block;
    margin: 0;
    color: #4e4a4a;
    text-transform: uppercase;
    font-size: 16px;
    background: #fff;
    z-index: 1;
    position: relative;
    padding: 0 10px;
    font-weight: bold;
}
</span></pre>

<pre><span class="nt">
.label-line::before, .label-line-c::before {
    z-index: 1;
    content: "";
    width: 100%;
    height: 2px;
    background: #313741;
    position: absolute;
    top: 50%;
    left: 0;
    margin-top: -2px;
}
</span></pre>

<pre><span class="nt">
.label-line, .label-line-c {
    position: relative;
}
</span></pre>

<pre><span class="nt">
#share-box {
    width: 100%;
    text-align: center;
}
</span></pre>

<pre><span class="nt">
#share-box a {
    width: 20%;
    display: block;
    font-size: 24px;
    color: #353131;
    transition: opacity 0.15s linear;
    float: left;
}
</span></pre>

<pre><span class="nt">
@media (max-width: 767px) {
  #share-box a {
    width: 20%;
    display: block;
    font-size: 18px;
    color: #353131;
    transition: opacity 0.15s linear;
    float: left;
  }
}
</span></pre>
</figure>

4.Copy lagi file di bawah ini ke post.html untuk memanggil file html share box
<br><br>

<figure class="highlight">
<span class="code-pil"><i aria-hidden="true" class="fa fa-code font-weight-bold"></i>post.html</span>
<pre><span class="nt">
{% raw %}{% include share-box.html %}{% endraw %}
</span></pre>
</figure>

Kemudian save dan lihat hasilnya.

Jika anda masih bingung silahkan tinggalkan komentar di bawah ini atau bisa melalui contact us, secepatnya saya akan merespon.

Nah itulah sedikit tutorial dari saya mengenai [cara membuat share box media soasial di github pages](share-box-github-pages) cukup sekian dan terima kasih sudah berkunjung, Wassalam. 

[SUMBER](https://jekyllcodex.org/without-plugin/share-buttons/)

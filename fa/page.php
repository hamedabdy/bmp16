<!DOCTYPE html lang="fa">
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
	<title>موسسه بهار مهاجران پارسی | ویزای ایران</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta name="theme-color" content="#08509E" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="msapplication-navbutton-color" content="#08509E" />
    <link rel="icon" href="../images/favicon/favicon32.png" sizes="32x32">
    <link rel="icon" href="../images/favicon/favicon192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="../images/favicon/favicon180.png">
    <meta name="msapplication-TileImage" content="../images/favicon/favicon270.png">
</head>
<body id="home">
<header>
    <nav class="header-nav">
        <div class="logo">
            <img src="/images/logo/logo_s_whiteBg.png">
            <a href="/"><h1 id="site-title">موسسه بهار مهاجران پارسی</h1></a>
            <h5 id="site-description">اخذ ویزای ایران</h5>
        </div>
        <ul class="nav-helper">
            <li><a href=".">خانه</a></li>
            <li><a href="./#sect1">درباره موسسه</a></li>
            <li><a href="./#sect2">ویزای ایران</a></li>
            <li><a href="./#sect3">خدمات</a></li>
            <li><a href="#sect5">تماس با ما</a></li>
            <li>
                <a class="cur-lang">‍‍‍‌‌‌پارسی</a>
                <ul class="dropdown-menu header-lang">
                    <li><a href="/">English</a></li>
                    <li><a href="/fr/">Français</a></li>
                    <li><a href="/de/">Deutsche</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<main>
    <div class="container">
        <section id="sectx" class="">
            <aside>
                <div class="heading"><h2><h2></div>
                <article></article>
            </aside>
        </section>
        <section id="sect5" class="">
            <aside>
                <div class="heading"><h2>تماس با ما<h2></div>
                <article></article>
                <div class="contact-form">
                    <div id="alertmsg"></div>
                    <form action="/sendmail.php" method="POST" id="sendmailform">
                        <input type="text" name="name" id="name" placeholder="نام"><!--
                        --><input type="email" name="email" id="email" placeholder="ایمیل">
                        <textarea name="message" id="message" placeholder="پیام"></textarea>
                        <button type="submit" id="submit">ارسال</button>
                    </form>
                </div>
            </aside>
        </section>
    </div>
</main>
<footer>
    <nav id="footer-nav" class="widget">
        <a href="./#home">خانه</a>
        <a href="./#sect1">درباره موسسه</a>
        <a href="./#sect2">ویزای ایران</a>
        <a href="./#sect3">خدمات</a>
        <a href="#sect5">تماس با ما</a>
    </nav>
    <nav id="widget2" class="widget">
        <a rel="nofollow" href="http://www.iranair.se/fa" target="_blank">ایران ایر</a>
        <a rel="nofollow" href="http://www.irica.gov.ir/" target="_blank">اداره گمرک</a>
        <a rel="nofollow" href="http://econsulate.mfa.ir/" target="_blank">سامانه کنسولی</a>
        <a rel="nofollow" href="http://www.sabteahval.ir/Default.aspx" target="_blank">سازمان ثبت احوال</a>
        <a rel="nofollow" href="http://police.ir/Portal/Home/Default.aspx?CategoryID=a1e98947-f745-40c1-83c2-578db36d1e55" target="_blank">سازمان نظام وظیفه</a>
        <a rel="nofollow" href="http://www.police.ir/Portal/Home/Default.aspx?CategoryID=b4bc0189-eb76-4060-a935-5a5507881a68" target="_blank">اداره گذرنامه نیروی انتظامی</a>
    </nav>
    <nav id="widget3" class="widget shareBtns">
        <p>دیگران را در جریان بگذارید</p>
        <a href="https://www.facebook.com/sharer.php?u=http://bmpinst.ir">Facebook</a>
        <a href="https://twitter.com/share?url=http://bmpinst.ir&text=Visa%20Iran&hashtags=BmpInst">Twitter</a>
    </nav>
    <div class="foot-logo">
    </div>
    <div class="copyright">Copyright 2019 BMP Institute. All rights reserved.</div>
</footer>
    <script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!-- Markdown loader -->
    <script src="../js/marked.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-40498004-7', 'auto');
      ga('send', 'pageview');
    </script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#sectx article').load('txt/' + "<?php echo $_GET['id'] ?>" + '.md', function(data){
            $(this).html(marked(data));
        });
        $('#sect5 article').load('txt/contact.md', function(data){
        	$(this).html(marked(data));
    	});
    });
</script>

</body>
</html>
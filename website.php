<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="ip" content="202.62.20.19">
	<meta name=
	"post_id" content="11334">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Aditya Rahmatullah Pratama">
	<title>Membuat Navbar pada HTML dan CSS - CodePolitan.com</title>
	
	<!-- FAVICON -->
	<link rel="apple-touch-icon" sizes="57x57" href="https://www.codepolitan.com/assets/img/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="https://www.codepolitan.com/assets/img/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="https://www.codepolitan.com/assets/img/icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="https://www.codepolitan.com/assets/img/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="https://www.codepolitan.com/assets/img/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="https://www.codepolitan.com/assets/img/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="https://www.codepolitan.com/assets/img/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="https://www.codepolitan.com/assets/img/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="https://www.codepolitan.com/assets/img/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="https://www.codepolitan.com/assets/img/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://www.codepolitan.com/assets/img/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="https://www.codepolitan.com/assets/img/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://www.codepolitan.com/assets/img/icon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="https://www.codepolitan.com/assets/img/icon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Yoast -->
	<link rel="canonical" href="https://www.codepolitan.com/membuat-navbar-sederhana-html-dan-css">
	<meta property="og:locale" content="id_ID">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Membuat Navbar pada HTML dan CSS - CodePolitan.com">
	<meta property="og:description" content="Hallo semua, kali ini Kami akan membuat sebuah tutorial untuk membuat navbar sederhana pada HTML dan CSS. Sebelumnya, Kamu harus paham dulu konsep dari HTML itu sendiri. Kamu bisa membaca...">
	<meta property="og:url" content="https://www.codepolitan.com/membuat-navbar-sederhana-html-dan-css">
	<meta property="og:site_name" content="CodePolitan.com">
	<meta property="article:publisher" content="https://www.facebook.com/codepolitan">
	
		
			<meta property="article:section" content="Tutorial">
		
	<meta property="og:image" content="https://static.cdn-cdpl.com/wp-images/2016/07/Untitled-2-image(700x350-crop).jpg">
	<meta property="og:image:width" content="700">
	<meta property="og:image:height" content="350">
	<!-- / Yoast SEO plugin. -->
	
	<link rel="alternate" type="application/rss+xml" title="Membuat Navbar pada HTML dan CSS - CodePolitan.com" href="https://www.codepolitan.com/membuat-navbar-sederhana-html-dan-css/feed/">
	<meta property="og:title" content="Membuat Navbar pada HTML dan CSS - CodePolitan.com">
	<meta property="og:type" content="article">
	<meta property="og:site_name" content="CodePolitan.com">
	<meta property="og:description" content="Hallo semua, kali ini Kami akan membuat sebuah tutorial untuk membuat navbar sederhana pada HTML dan CSS. Sebelumnya, Kamu harus paham dulu konsep dari HTML itu sendiri. Kamu bisa membaca...">
	<meta name="description" content="Hallo semua, kali ini Kami akan membuat sebuah tutorial untuk membuat navbar sederhana pada HTML dan CSS. Sebelumnya, Kamu harus paham dulu konsep dari HTML itu sendiri. Kamu bisa membaca...">
	<meta property="description" content="Hallo semua, kali ini Kami akan membuat sebuah tutorial untuk membuat navbar sederhana pada HTML dan CSS. Sebelumnya, Kamu harus paham dulu konsep dari HTML itu sendiri. Kamu bisa membaca...">
	<meta property="language" content="Indonesia">
	<meta property="revisit-after" content="7">
	<meta property="webcrawlers" content="all">
	<meta property="rating" content="general">
	<meta property="spiders" content="all">
	<meta property="robots" content="all">
	
	<!-- Dependency -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,300,500,700,100|Lora:400,700" rel="stylesheet" type="text/css">
	<link href="https://www.codepolitan.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" type="text/css" media="all">
	<link href="https://www.codepolitan.com/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://www.codepolitan.com/assets/vendor/cp-tutspaging/tutspaging.css" rel="stylesheet" type="text/css">
	<link href="https://www.codepolitan.com/assets/css/mainstyle.min.css" rel="stylesheet" type="text/css">
	<link href="https://www.codepolitan.com/assets/css/mainstyle.custom.css" rel="stylesheet" type="text/css">

			<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/monokai-sublime.min.css">
	
    <!-- Google -->
	<script src="https://connect.facebook.net/signals/config/496143660723921?v=2.8.30&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-51093490-1', 'codepolitan.com');
	ga('send', 'pageview');
	</script>
    
    <!-- OneSignal -->
	<link rel="manifest" href="/manifest.json">
  	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
  	<script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
      appId: "a2540447-5236-4ac5-b5b3-b2b8d027e0c9",
      autoRegister: false,
      notifyButton: {
        enable: true /* Set to false to hide */
      }
    }]);
  	</script>

    <!-- Feedbacklite -->
	<script type="text/javascript">
	var h = document.getElementsByTagName('head')[0];
	(function(){
	var fc = document.createElement('link'); fc.type = 'text/css'; fc.rel = 'stylesheet';
	fc.href = 'https://product.feedbacklite.com/feedbacklite.css'; h.appendChild(fc);
	})();
	var fbl = {'campaign':{'id':1932, 'type':2, 'size':2, 'position':5, 'tab':4, 'control':1}};
	(function(){
	var fj = document.createElement('script'); fj.type = 'text/javascript';
	fj.async = true; fj.src = 'https://product.feedbacklite.com/feedbacklite.js'; h.appendChild(fj);
	})();
	</script><link type="text/css" rel="stylesheet" href="https://product.feedbacklite.com/feedbacklite.css"><script type="text/javascript" async="" src="https://product.feedbacklite.com/feedbacklite.js"></script>
	<!-- end Feedbacklite -->

    <!-- Codepolitan Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '496143660723921');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=496143660723921&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    
<script src="//codepolitan.disqus.com/embed.js" data-timestamp="1540681886674"></script><link rel="prefetch" as="style" href="https://c.disquscdn.com/next/embed/styles/lounge.d49f53e192b9080ef8880a7c9b24f1c3.css"><link rel="prefetch" as="script" href="https://c.disquscdn.com/next/embed/common.bundle.18932c85febf9520158697cdc31f08ae.js"><link rel="prefetch" as="script" href="https://c.disquscdn.com/next/embed/lounge.bundle.a37e9f105a9fe1b02a5c69bd7b2d0ec9.js"><link rel="prefetch" as="script" href="https://disqus.com/next/config.js"><style type="text/css">.fancybox-margin{margin-right:17px;}</style><script src="https://c.disquscdn.com/next/embed/alfalfa.4a5fcca1fe50a757044dfd331b660625.js" async="" charset="UTF-8"></script><link rel="stylesheet" href="https://onesignal.com/sdks/OneSignalSDKStyles.css?v=667d417dfeaee00d71566761c096042f"></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  width: 50%;
}



.container:hover .overlay {
  opacity: 1;
}

.image {
background:url(index.jpg)
 
}
</style>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top navbar-cp">
	<!--
	<div id="head-alert" style="padding:5px;background:#e88b8b;color:#FFF;font-size:5px:" class="text-center">
		<b>Pemberitahuan</b>, Jam 2 siang kami akan menonaktifkan Codepolitan. Bagi teman-teman yang sedang menulis silahkan save draft terlebih dahulu. &nbsp;&nbsp;<a href="#" id="btn-close-head-alert" class="btn-xs btn-danger">Close</a>
	</div> -->
	<div class="container-fluid">
		
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="https://www.codepolitan.com" title="CodePolitan"><img src="Untitled-3.jpg" class="logo-img" alt="CodePolitan"></a>
		</div>
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			

			<ul class="nav navbar-nav navbar-right">
									<li class="nav-btn"><a href="">LOGIN</a></li>
					<li class="nav-btn nav-signup"><a href="" class="record-data" data-action="register-account" data-position="general-navbar">SIGN UP</a></li>
								</ul>
		</div>
	</div>
</nav>
<section class="cp-jumbotron jumbotron-banner" style="background: url(https://static.cdn-cdpl.com/source/b8e29e8f0b15aab3473fed5df06c9186/bg_premium_banner_dvd.jpg); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="container">
       <h1 align="center">Welcome To KSGroup</h1>
	   

       
    </div>
</section>
    </div>
</section>
<div class="container-fluid">
<div class="row">
    <div class="col-sm-4" style="background:url(79040602_1f33a402-4378-4b8f-bde3-8c02f257dee5.jpg);"><img src="sqabun.jpg" /></div>
    <div class="col-sm-4" style="background:url(index.jpg);"><img src="index.jpg" /></div>
    <div class="col-sm-4" style="background:url(sqabun.jpg);"><img src="79040602_1f33a402-4378-4b8f-bde3-8c02f257dee5.jpg" /></div>
  </div>
</div>	
		
</body>
</html>

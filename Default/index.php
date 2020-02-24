<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	{metakod}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{description}">
    <meta name="author" content="ProductCMS">
    <meta name="keywords" content="{keywords}">
    <title>{sitebaslik}</title>
	<base href="{siteadresi}">
    <link rel="icon" href="{favicon}">
    <link rel="apple-touch-icon" href="{favicon}">
    <link rel="apple-touch-icon" sizes="72x72" href="{favicon}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{favicon}" />
    <link rel="stylesheet" type="text/css" href="Themes/Default/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Themes/Default/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="Themes/Default/css/style.css">
    <link rel="stylesheet" type="text/css" href="Themes/Default/css/slick.css"/>
    <link rel="stylesheet" href="Themes/Default/css/venobox.css">
    <link rel="stylesheet" type="text/css" href="Themes/Default/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" type="text/css" href="Themes/Default/css/owl.carousel.min.css"/>
    <link href="Themes/Default/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="Themes/Default/css/responsive.css">
    <script src="Themes/Default/js/vendor/modernizr.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="se-pre-con"></div>
    <nav class="navbar navbar-expand-lg fixed-top center-brand static-nav home2">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{logo}" alt="logo" height="40" width="120" class="logo-default">
            </a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xeronav">
                <i class="fas fa-bars fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse" id="xeronav">
                <ul class="navbar-nav ml-auto">
				{menuust}
                    <li class="nav-item">
                        <a class="nav-link" href="{menulink}">{menu}</a>
                    </li>
				{menualt}
                    
                    
					<li class="nav-item">
                        <a class="nav-link btn" href="#">Sipariş</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	{ustkisimust}
    <header class="hero-banner-sec home2" id="homes">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <div class="banner-inside text-center">
                        <h1>{ustbaslik}</h1>
                        <p>{ustaciklama}</p>
                        <div class="group-btn">
						{ustbutonon1}<a href="{ustlink1}" class="btn btn1">{ustbuton1}</a>{ustbutonarka1}
                        {ustbutonon2}<a href="{ustlink2}" class="btn btn2">{ustbuton2}</a>{ustbutonarka2}
                        </div>
                    </div>
                    <div class="hero-image-all">
                        <img src="{ustresim1}" class="banner-left" alt=""/>
                        <img src="{ustresim2}" class="banner-right" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </header>
	{ustkisimalt}
	{urunozellikust}
    <section class="small-device-sltn">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-6 col-lg-6">
                    <div class="small-dvc-inside">
                        <h2>{ozellikbaslik}</h2>
                        <p>{ozellikaciklama}</p>
							{ozellikbutonon}<a href="{ozelliklink}" class="btn">{ozellikbuton}</a>{ozellikbutonarka}
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="small-dvc-img">
                        <img src="{ozellikresim}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
	{urunozellikalt}
	{urunvideoust}
    <section class="video-play-promo">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="inside-video-txt">
                        <h2>{videobaslik}</h2>
                        <p>{videoaciklama}</p>
                        <a class="btn venobox vbox-item" data-vbtype="video" href="{videolink}"> <i class="fas fa-play fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	{urunvideoalt}
	{urunsiparisust}
	<section class="our-product-sec" id="product_id">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="title text-center">
                        <h2>Ürün Seçeneklerimiz</h2>
                        <p>Görülebilmesi Açısından Aşağıda Örnek Ürün Listeleme Sayfası Oluşturulmuştur.</p>
                    </div>
                </div>
                <div class="w-100"></div>
				{siparislisteust}
                <div class="col-md-4 col-lg-3">
                    <div class="single-product-show">
                        <div class="product-img">
                            <img src="{urunsiparisresim}" alt=""/>
                        </div>
                        <div class="product-info">
                            <h5>{urunsiparisad}</h5>
                            
                            <h4>{urunsiparisfiyat}</h4>
                            <a href="#"  class="btn">{urunsiparisbuton}<i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
				{siparislistealt}
            </div>
        </div>
    </section>
	{urunsiparisalt}
	{bankahesapust}
    <section class="where-we-are-map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="anni-title text-center">
                        <h3>Demo Banka Hesaplarımız</h3>
                    </div>
                </div>
                <div class="w-100"></div>
				{bankalisteust}
                <div class="col-md-4">
                    <div class="single-anni-inside text-light">
                        <h4>{bankaadi}</h4>
                        <p>{bankaadsoyad}</p>
                        <p>{hesapno}</p>
                        <p>{iban}</p>
                    </div>
                </div>
               {bankalistealt}                
                <div class="w-100"></div>
                <div class="col-md-12">
                    <div class="anni-shop-btn">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
	{bankahesapalt}
	{musteriyorumust}
    <section class="testimonials-sec mt-4" id="testi_id">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title text-center">
                        <h2>Müşteri Yorumları</h2>
                        <p>Müşterilerimizin Ürünlerimiz Hakkında Yaptığı Yorumlar Aşağıda Listelenmiştir.</p>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-10 offset-md-1">
                    <div class="slider-content-feed">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="slider slider-single">
								{musterilisteleust}
                                    <div>
                                        <div class="text-inside">
                                            <p>{musteriyorum}</p>
                                        </div>
                                    </div>
									{musterilistealt}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="slider-thumb">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="slider slider-nav">
								{musterilisteleust1}
                                    <div>
                                        <div class="client-thumb-nav">
                                            <img src="{musteriresim}" alt=""/>
                                            <div class="client-name">
                                                <h4>{musteriad}</h4>
                                            </div>
                                        </div>
                                    </div>
									{musterilistealt1}
									
                                </div>
                            </div>
                        </div>
                        
        
                    </div>
                </div>
            </div>
        </div>
    </section>
	{musteriyorumalt}
    <section class="help-desk-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="help-inside-full">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <div class="title text-center">
                                    <h2>İletişim</h2>
                                    <p>Belirttiğimiz Adreslerinden Bizlere Ulaşabilirsiniz</p>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-3 offset-md-3">
                                <div class="single-link">
                                    
                                        <div class="icon">
                                            <img src="Themes/Default/img/icon/help1.png" alt=""/>
                                        </div>
                                        <h4>{whatsapp}</h4>
                                   
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-link two">
                                   
                                        <div class="icon">
                                            <img src="Themes/Default/img/icon/help2.png" alt=""/>
                                        </div>
                                        <h4>{mailadres}</h4>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {galeriust}
    <section class="user-gl-nd-fun">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="title text-center">
                      
                        <h2>Ürün Fotoğrafları</h2>
                        <p class="mb-4">Ürünümüze Ait Fotoğraf Galerisi Aşağıda Listelenmiştir</p>
                    </div>
                </div>
                <div class="w-100"></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel" id="gallerys-owl">
                         {galerilisteust}
                        <div>
                            <div class="gl-img">
                                <img src="{galeriresim}" alt="{galerialt}"/>
                            </div>
                        </div>
						{galerilistealt}
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    {galerialt}
    <section class="contactud-sec" id="contact_id">
        <div class="container">
		{iletisimformust}
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-inside-title title">
                        <h2>Size Ulaşalım</h2>
                        <p>Aşağıdaki Formu Doldurup Size Ulaşmamızı Sağlayabilirsiniz.</p>
                    </div>
                    <div class="contact-form-in">
                        <form>
                            <input type="text" name="ad" placeholder="Ad soyad"/>
                            <input type="email" name="mail" placeholder="Mail Adresi"/>
							<input type="text" name="tel" placeholder="Telefon Numarası"/>
                            <textarea rows="4" name="mesaj" placeholder="Mesajınız"></textarea>
							{iletisimcevap}
                            <button type="submit" class="btn" onclick="iletisimkaydet();">Gönder</button>
							
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-right-img text-center">
                        <img src="Themes/Default/img/contact-right.png" alt=""/>
                    </div>
                </div>
            </div>
			{iletisimformalt}
            <div class="w-100"></div>
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>{footeryazi}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="social-footer">
                            <li><a href="{facebook}" class="btn"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{twitter}" class="btn"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{instagram}" class="btn"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{youtube}" class="btn"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
	{footerkod}
    <!--jquery-->
    <script src="Themes/Default/js/jquery-1.12.4.min.js"></script>
    <!--bootstrap v4 js-->
    <script src="Themes/Default/js/vendor/bootstrap.min.js"></script>
    <!--popper js-->
    <script src="Themes/Default/js/vendor/popper.min.js"></script>
    <!--video popup-->
    <script src="Themes/Default/js/vendor/video.popup.js"></script>    
    <!--slick slider-->
    <script  src="Themes/Default/js/vendor/slick-min.js"></script>  
    <script src="Themes/Default/js/venobox.min.js"></script>   
    <!-- counter js -->
    <script  src="Themes/Default/js/vendor/counter.js"></script>
    <!--owl js-->
    <script  src="Themes/Default/js/vendor/owl-carousel.js"></script>
    <!--easing js-->
    <script src="Themes/Default/js/vendor/easing.js"></script>
    <!--main script-->
    <script src="Themes/Default/js/main.js"></script>

</body>

</html>
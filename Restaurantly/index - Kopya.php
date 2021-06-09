<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cafe Sipariş Sistemi</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v1.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> 0555 555 55 55
      </div>
    
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">BERNİS Cafe</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Anasayfa</a></li>
          <li><a href="#about">Hakkımızda</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#specials">Özel Tariflerimiz</a></li>
          <li><a href="#gallery">Galeri</a></li>
          <li><a href="#contact">İletişim</a></li>
          <li class="book-a-table text-center"><a href="#book-a-table">Admin Paneli</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>BERNİS'e <span>Hoşgeldiniz</span></h1>
        

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">MENÜ</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">REZERVASYON</a>
          </div>
        </div>
        

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/1.jpg" alt="">
            </div>
          </div>
                <?php
       //include("baglan.php"); 
      $aVar = mysqli_connect('localhost','root','','bernisdb');
          $aVar-> Set_charset("utf8");       
        $sql="select * from hakkımızda";
       $bilgiler = mysqli_query($aVar,"$sql");
  mysqli_set_charset($aVar,"utf8");
                while($row=mysqli_fetch_array($bilgiler))
                {
                    $baslık=$row['baslik'];
                    $icerik=$row['icerik'];
                
                echo "<div class='col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content'>";
                echo  "<h3>".$baslık."</h3>";
                echo '<p>".$icerik."</p>';
                echo '</div>';
                }
                ?>
         

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Neden Biz</h2>
          <p>Neden Bizi Seçmelisiniz</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h4>Hızlı ve Güleryüzlü Servis</h4>
              <p>Hızlı ve Güleryüzlü Servis Hizmetimiz Sizleri Memnun Edecek.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h4>Konfor</h4>
              <p>Mekanımız dizaynı bakımından ferah çok rahattır.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              
              <h4>Lezzet</h4>
              <p>Zengin ve Görsel Sunumuyla Özel Menülerimiz</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Lütfen Menümüzü Kontrol Ediniz</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Hepsi</li>
              <li data-filter=".filter-starters">Başlangıç</li>
              <li data-filter=".filter-salads">Salatalar</li>
              <li data-filter=".filter-specialty">Özel Tariflerimiz</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/bamya.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bamya Çorbası</a><span>10 TL</span>
            </div>
            <div class="menu-ingredients">
              Konyanın yemek kültüründe önemli bir yere sahiptir.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/içli.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">İçli Köfte</a><span>13 TL</span>
            </div>
            <div class="menu-ingredients">
              Çeşitli baharatlarla harmanlanmış iç harcı ile istediğinize göre kızarmış yada haşlanmış olarak servis edilir.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/etli.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Etli Yaprak Sarma</a><span>15 TL</span>
            </div>
            <div class="menu-ingredients">
              Özenle seçilmiş en ince yaprakları muhteşem bir iç harcıyla buluşturup servis edilir.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/mevsim.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mevsim Salata</a><span>10 TL</span>
            </div>
            <div class="menu-ingredients">
              Kırmızı Lahana, Marul, Roka, Havuç, Nar Ekşisi, Zeytin Yağı, Mısır
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/ton.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Ton Balıklı Salata</a><span>13 TL</span>
            </div>
            <div class="menu-ingredients">
              Marul Çeşitleri, Salatalık, Domates, Dilimli Zeytin, Kapya Biber, Mısır, Mor Soğan
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/çoban.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Çoban Salatası</a><span>10 TL</span>
            </div>
            <div class="menu-ingredients">
              Domates, Salatalık, Biber, Soğan, Zeytinyağı
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/norveç.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Norveç Izgara Somon</a><span>30 TL</span>
            </div>
            <div class="menu-ingredients">
              Özel Sunumu ve Sos Eşliğinde servis edilir.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/konya.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Konya Fırın Kebabı</a><span>30 TL</span>
            </div>
            <div class="menu-ingredients">
              Sıcacık pidenin üzerine nar gibi kızarmış kuzu etinin eklenmesi ile yapılan fırın kebabına, közlenmiş biber ve domates eklenerek servis edilir.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/dondurma.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Dondurma Kızartması</a><span>15 TL</span>
            </div>
            <div class="menu-ingredients">
              Özel sos eşliğinde servis edilir.
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Özel Tarifler</h2>
          <p>Size Özel Tarifler</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Şiş Köfte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Cheddarlı Bonfile Sandviç</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Cevizli Erişte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Bezelyeli Pilav</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Mafiş Tatlısı</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Şiş Köfte Tarifi</h3>
                    <p class="font-italic">500 gr dana kıyma, 1 Orta boy kuru soğan(rendelenmiş ve suyu sıkılmış),1 Avuç kuru ekmek kırıntısı, 1 küçük yumurta, 2 Diş sarımsak, Bir tutam doğranmış maydanoz, Yarım çay kaşığı Karabiber, kimyon, tuz, kekik, 2-3 Adet kırmızı veya yeşil biber, Köfteleri yağlamak için 1 Yemek kaşığı sıvıyağ kullanılır.</p>
                    <p>Kıymaya ekmek kırıntılarını ilave ettikten sonra yumurtasını kırıp baharatları ekleyin. Kuru soğanı ayrı bir kaba rendeledikten sonra kıymanın üzerine ilave edin. Rendelenmiş sarımsaklarını ve doğradığınız maydanozunu da aynı kaba alın ve güzelce yoğurun. 2 saat buzdolabında dinlendirdikien sonra şekil verin ve 200C de kızarıncaya kadar pişirin. Afiyet olsun. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/sis.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cheddarlı Bonfile Sandviç Tarifi</h3>
                    <p class="font-italic">1 adet baget ekmek, 300 – 350 gr. bonfile – kuyruk tarafı, 3 adet soğan – jülyen doğranmış, Cheddar peyniri kullanılır.</p>
                    <p>Bonfilenizi 30 – 40 dakika dondurucuda bekletin.
                      Not: Etinizi daha rahat kesmek için soğuk olması önemlidir.
                      Etinizi ince ince doğrayın ve donukluğunun çözülmesi için biraz bekletin. Soğanlarınızı ince jülyen olacak şekilde doğrayın. Tavanızın ya da varsa tost makinenizin düz zeminini ısıtın.
                      Zeytinyağı ekleyin ve soğanlarınızı ekleyip soteleyin.
                      Etlerinizi pişirin ve pişen etlerinizi soğanın üzerine alın.
                      Etlerinizin üzerine cheddar peyniri koyun ve erimesini bekleyin.
                      Cheddar peyniriniz eriyince baget ekmeğinizi ortadan ikiye bölüp tek kenarından açın.
                      Hazırladığınız iç harcı ekmeğinizin içerisine koyun ve sıcak servis edin.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/cheddarlı.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cevizli Erişte Tarifi</h3>
                    <p class="font-italic">500 gr. erişte, 2 avuç ceviz, 10 – 12 adet kurutulmuş domates ,2 yemek kaşığı tereyağı, Tuz, Karabiber, 200 gr. keçi peyniri kullanılır.</p>
                    <p>Erişteleri yağsız bir tavada kavurun ve renk verin.
                      Kaynayan tuzlu suda erişteleri haşlayın.
                      Süzüp aynı tencereye tereyağını ekleyin, eriyince cevizleri tavaya alın ve kavurun, erişteleri ekleyin ve kavurmaya devam edin.
                      1 kepçe erişteleri haşladığınız sudan tencereye aktarın.
                      Kurutulmuş domatesleri ince doğrayın ve tavaya ekleyip bir tur çevirip, kenara alın.
                      Ateşten aldıktan sonra lor peynirini ekleyip servis edin.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/eriste.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Bezelyeli Pilav Tarifi</h3>
                    <p class="font-italic">3 yemek kaşığı tereyağı, 1 – 2 yemek kaşığı zeytinyağı, 2 su bardağı baldo pirinç1 su bardağı bezelye – haşlanmış, Tuz, Beyaz biber, 2,5 su bardağı su, 1 adet limonun kabuğu – rende, 1 adet defne yaprağı</p>
                    <p>Pilav tencerenizin içerisine tereyağı ve zeytinyağını ekleyip ısıtın. Ardından yıkadığınız pirinçleri ekleyin ve kavurun. Bezelyeleri ekleyin bir tur çevirin. Tuz, beyaz biber ve suyunu ekleyin. Limon kabuğu rendesi ve defne yaprağını ekleyin ve kaynayana kadar orta ateşte, kaynadıktan sonra kısık ateşte pişirin. Pilavınız pişince içerisindeki defne yaprağını bir tur karıştırarak havalandırın ve havlu kağıt serin. Tencerenizin kapağını kapatın ve demlenmeye bırakın.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/pilav.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Mafiş Tatlısı</h3>
                    <p class="font-italic">Şerbeti : 2 su bardağı toz şeker, 1 su bardağı su,3 – 4 damla limon suyu
                     Hamuru için Malzemeler : 2 – 2,5 su bardağı un, 1 paket kabartma tozu, ½ su bardağı yoğurt, 1 adet yumurta, ½ su bardağı ayçiçek yağı 
                     Hamuru Açmak için Malzemeler : Buğday nişastası
                     Kızartmak için Malzemeler : Ayçiçek yağı
                     Üzeri için Malzemeler : Ceviz içi – iri kıyılmış</p>
                    <p>Yukarıdaki malzemelerden önce şerbeti için olanlar bir tencereye alıp pişirilir. Hamuru için yazılan malzemelerin hepsi bir kaba alıp yoğrulur. Hazırlanan hamura şekil verilir ve fırına 180C de verilir. Pişen hamura sıcakken soğuk olan şerbet üzerine dökülür. Afiyet olsun.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img style="width:270px; margin-top: 70px;" src="assets/img/mafis1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
   

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Rezervasyon</h2>
          <p>Bilgilerinizi Giriniz</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="İsminiz" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Mail Adresiniz" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefon Numaranız" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="date" class="form-control" id="date" placeholder="Tarih" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="time" id="time" placeholder="Zaman" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="people" id="people" placeholder="Kişi Sayısı" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Siparişleriniz"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Yükleniyor</div>
            <div class="error-message">Tekrar Deneyiniz.</div>
            <div class="sent-message">Rezervasyon talebiniz gönderildi. Rezervasyonunuzu onaylamak için geri arayacağız veya bir e-posta göndereceğiz.</div>
          </div>
          <div class="text-center"><button type="submit">Siparişleri Kaydet</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Görüşler</h2>
          <p>Bizim Hakkımızda ne Diyorlar</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Arkadaş tavsiyesiyle yemek sonrası tercih ettiğimiz bir mekan. Ambiyansı son derece hoş,keyifle sohbetinizi sürdüreceğiniz bir mekan.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/mustafa.jpeg" class="testimonial-img" alt="">
            <h3>Mustafa İş</h3>
            <h4>Girişimci</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Bulunduğu konum ve sakin oluşuyla hep tercih edeceğim bir mekan oldu. Aynı zamanda yemeklerini çok beğendim. Herkese tavsiye ederim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/kazım.png" class="testimonial-img" alt="">
            <h3>Kazım Can Özsan</h3>
            <h4>E-Spor Oyuncusu</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Tatlılarına bayıldığım bir mekan! Bence Fiyatları da oldukça uygun. Çalışanların güleryüzü ve ilgisi inanılmaz güzeldi. Herkese tavsiye ederim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/betul.jpeg" class="testimonial-img" alt="">
            <h3>Betül Baş</h3>
            <h4>Tasarımcı</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Mekanın ambiyansı çok güzeldi.Kullanılan aksesuarlar oldukça uyumluydu. Arka fonda çalan müzikler hoş, hizmet kaliteliydi.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/nur.jpeg" class="testimonial-img" alt="">
            <h3>Şerife Nur Korkmaz</h3>
            <h4>Grafiker</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             Fiyat, performans açısından bakıldığında gayet beğendiğim bir mekan oldu. Bundan sonra da sık sık geleceğim. Herkese tavsiye ederim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/ebubekir.jpeg" class="testimonial-img" alt="">
            <h3>Ebubekir Bayram</h3>
            <h4>Bilgisayar Mühendisi</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             Sunum hoş, fiyatlar iyi, çalışanlar son derece nazik, ortam da gayet nezih ve oturulabilir. Sürekli geleceğim bir mekan. Herkese tavsiye ederim. 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/seyda.jpeg" class="testimonial-img" alt="">
            <h3>Lamia Şeyda Yerlikaya</h3>
            <h4>Yazılımcı</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Yemekleri ve servis hızını beğendim. Mekanın tasarımı da çok güzeldi. Arkadaşlarımla beraber yeniden geleceğim. Tavsiye ederim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/yase.jpeg" class="testimonial-img" alt="">
            <h3>Yasemin Eyüpoğlu</h3>
            <h4>Akademisyen</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Mekana gittiğimde çok kalabalıktı. 
              Sanırım hafta sonu olmasından kaynaklıydı. Buna rağmen servis hızı gayet iyiydi. 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/onur.jpeg" class="testimonial-img" alt="">
            <h3>Onur İnan</h3>
            <h4>Fotoğrafçı</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Galleri</h2>
          <p>BERNİS'ten Resimler</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/esraf1.jpg" class="venobox" data-gall="gallery-item">
                <img   src="assets/img/gallery/esraf1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>


          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/esraf3.jpg" class="venobox" data-gall="gallery-item">
                <img style="width: 400px; src="assets/img/gallery/esraf3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/esraf4.jpg" class="venobox" data-gall="gallery-item">
                <img   src="assets/img/gallery/esraf4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/esraf5.jpeg" class="venobox" data-gall="gallery-item">
                <img   src="assets/img/gallery/esraf5.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/esraf6.jpg" class="venobox" data-gall="gallery-item">
                <img   src="assets/img/gallery/esraf6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

 

 

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>İLETİŞİM</h2>
          <p>Bize Ulaşın</p>
        </div>
      </div>

      <div data-aos="fade-up">
       
        <iframe style="border:0; width: 100%; height: 350px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.301561239923!2d32.51349701528248!3d37.9934259797202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d08d95ce666d59%3A0x5059157df7e8e65!2zS3JlZGkgWXVydGxhciBNw7xkw7xybMO8xJ_DvCBNZWxpa2UgQ2loYW4gS8SxeiDDlsSfcmVuY2kgWXVyZHU!5e0!3m2!1str!2str!4v1592757894411!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>YER:</h4>
                <p>Fırat Caddesi Melike Cihan Kız Öğrenci Yurdu Altı Selçuklu/Konya</p>
              </div>

              <div class="open-hours">
                <i class="icofont-clock-time icofont-rotate-90"></i>
                <h4>Açık Olduğumuz Saatler:</h4>
                <p>
                  Pazartesi-Pazar:<br>
                  09.00 - 00.00
                </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>berniscafe@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telefon:</h4>
                <p>0555 555 55 55</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="İsminiz" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Mail Adresiniz" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Mesaj"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Yükleniyor</div>
                <div class="error-message">Tekrar Deneyiniz.</div>
                <div class="sent-message">Mesajınız iletildi. Teşekkür ederiz.</div>
              </div>
              <div class="text-center"><button type="submit">Mesaj Gönder</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>BERNİS Cafe</h3>
              <p>
                Fırat Caddesi Melike Cihan Yurdu Altı<br>
                Selçuklu/Konya<br><br>
                <strong>Telefon:</strong>0555 555 55 55<br>
                <strong>Email:</strong> berniscafe@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Bağlantılar</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Anasayfa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Hakkımızda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hizmetler</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kullanım Şartları</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gizlilik Politikası</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Bültenimiz</h4>
            <p>Bizden haberdar olmak için abone olun!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Telif Hakkı <strong><span>BERNİS Cafe</span></strong>. Tüm hakları saklıdır.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="">Nisanur DEMİRCİ - Bermal AK</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
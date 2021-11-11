<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="icon" type="image/png" href="/img/web/Logo.png"> 
  <link rel="stylesheet" href="/css/contact/kontak.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!-- IziToast -->
  <link rel="stylesheet" href="/plugins/izitoast/dist/css/iziToast.min.css">
  <script src="/plugins/izitoast/dist/js/iziToast.min.js" type="text/javascript"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" style="font-size: 35px;" href="#">Hitara</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse scroller" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link non-active" href="/">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item" data-page="ab">
            <a class="nav-link non-active" href="/recipe">Recipe<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item" data-page="gal">
            <a class="nav-link non-active" href="/gallery">Gallery<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item" data-page="fac">
            <a class="nav-link active" href="/contact">Contact Us<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jumbotron -->
  <div class="jumbotron jumbotrons jumbotron-fluid">
    <div class="container-fluid">
      <h1 class="display-4 font-weight-bolder">Contact Us</h1>
    </div>
  </div>
  @if(session('add'))
  <script>
    iziToast.success({
        title: 'Success',
        message: "{{session('add')}}",
    });
</script>
  @endif
  <div class="container">
    <div class="row col-lg-12">
      <div class="col-lg-6">
        <h1 class="Judul">Contacting Us <br> Just Got <br> Easier!</h1>
      </div>
      <div class="col-lg-6">
        <p class="judulKecil">Please Contact Us :</p>
        <a href="{{ourContact()->instagram}}" target="_blank" class="linkKontak mx-1"><img src="/icon/7.png" alt="instagram"></a>
        <a href="{{ourContact()->twitter}}" class="linkKontak mx-3" target="_blank"><img src="/icon/8.png" alt="twitter"></a>
        <a href="{{ourContact()->facebook}}" class="linkKontak mx-1" target="_blank"><img src="/icon/9.png" alt="facebook"></a>
      </div>
    </div>
    <div class="row col-lg-12 my-5">
      <div class="col-lg-6">
        <h1 class="Judul1">Contact Details</h1>
        <img src="/icon/6.png" class="iconKontak my-3">
        <p class="judulAlamat">Address</p>
        <p class="isiKontak">Cimanggu Permai Bogor <br> Bogor, Jawabarat <br> Indonesia 16161</p>
        <img src="/icon/4.png" class="iconKontak mt-3">
        <p class="judulEmail">Email</p>
        <a href="mailto:{{ourContact()->email}}" class="isiKontak1">
          <p> {{ourContact()->email}}</p>
        </a>
        <img src="/icon/5.png" class="iconKontak mt-3">
        <p class="judulNo">WhatsApp or Telephone</p>
        <a href="https://www.whatsapp.com/catalog/{{ourContact()->whatsapp}}/?app_absent=0" class="isiKontak1" target="_blank">
          <p>+{{ourContact()->whatsapp}}</p>
        </a>
      </div>
      <div class="col-lg-6">
        <h1 class="Judul1">Send us message</h1>
        <form action="/contact/message" method="post">
          @csrf
          <input type="text" name="name" class="input mt-3" placeholder="Name" required>
          <input type="email" name="email" class="input my-3" placeholder="Email" required>
          <input type="teks" name="subject" class="input mb-3" placeholder="Subject" required>
          <textarea name="message" class="teksArea " placeholder="Message"></textarea required>
                  <button class="btn btn-dark" type="submit">Contact Us</button>
            </form>
        </div>
    </div>
</div>
  <!-- footer -->
  <div class="footer mt-5">
    <div class="bg-light py-5 footer-top">
        <div class="container">
            <div class="row d-flex align-items-center mx-auto">
                <div class="col-lg-6">
                    <p class="footerJudul">Quick Links</p>
                    <a href="/brochure" class="nav-link px-0 pt-0 linkFooter1">Get Brochure</a>
                    <a href="/recipe" class="nav-link px-0 pt-0 linkFooter1">Menu combined with black garlic</a>
                    <a href="/gallery" class="nav-link px-0 pt-0 linkFooter1">Our collections</a>
                </div>
                <div class="col-lg-6">
                  <p class="footerJudul">Our Store</p>
                  <a href="{{store()->shopee}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="https://cf.shopee.co.id/file/34d7f8da0414d2c6c7c0c2ed1c26a12d" class="iconFooter">Shopee MY</a>
                  <a href="{{store()->tokopedia}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/tokopedia.png" class="iconFooter">Tokopedia</a>
                  <a href="{{store()->alibaba}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/Alibaba.png" class="iconFooter">Alibaba</a>
                  <a href="{{store()->blibli}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/blibli.png" class="iconFooter">Blibli</a>
                </div>
            </div>
          </div>
        </div>
        <div class="copyright text-white text-center py-4 footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                Copyright &copy; 2021 hitarablackgarlic.com &middot; All Right Reserved
              </div>
            </div>
          </div>
        </div>
<script src="../js/main.js"></script>
<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<!-- Akhir Bootstrap -->
<script>
  $(window).on("scroll", function(){
    if($(window).scrollTop()){
      $('nav').addClass('nav-scroll');
    }
    else{
      $('nav').removeClass('nav-scroll');
    }
  })
</script>
</body>
</html>
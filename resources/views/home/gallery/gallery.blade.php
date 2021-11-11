<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitara's Collections</title>
  <link rel="icon" type="image/png" href="/img/web/Logo.png"> 
  <link rel="stylesheet" href="/css/gallery/gallery.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="/plugins/aos/aos-master/dist/aos.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" integrity="sha512-WEQNv9d3+sqyHjrqUZobDhFARZDko2wpWdfcpv44lsypsSuMO0kHGd3MQ8rrsBn/Qa39VojphdU6CMkpJUmDVw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="/plugins/lightbox/dist/css/lightbox.css">
  <style>
    @media (min-width:992px) {
      body {
        background: url(/img/web/jumbo3.jpg);
        background-size: contain;
      }
    }
  </style>
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
          <li class="nav-item ">
            <a class="nav-link non-active" href="/recipe">Recipe<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="/gallery">Gallery<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link non-active" href="/contact">Contact Us<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jumbotron -->
  <div class="tempatGallery">
    <div class="jumbotron jumbotrons jumbotron-fluid">
      <div class="container-fluid">
        <p class="lead">Welcome to Our Collections</p>
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <div class="container">
      <div class="judulAbout mb-3">
        <p class="judulAbout">Hitara Exhibition</p>
      </div>
      <div class="row mx-auto">
        @foreach($galeries as $gallery)
        <div class="gallery col-lg-4 col-6 mb-3" data-aos="fade-up" data-aos-duration="800">
          <a href="/img/gallery/{{$gallery->image}}" data-title="Hitara's Colletions" data-lightbox="roadtrip">
            <img src="/img/gallery/{{$gallery->image}}" class="rounded shadow imgGallery" alt="">
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- footer -->
  <div class="footer mt-2">
    <div class="bg-light py-5 footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p class="footerJudul">Contact Us</p>
            <a href="mailto:{{ourContact()->email}}" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/email.png" class="iconFooter">intan@hitarablackgarlic.com</a>
            <a href="{{ourContact()->facebook}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/facebook.png" class="iconFooter">Hitara Kitchen</a>
            <a href="{{ourContact()->instagram}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/instagram.png" class="iconFooter">Black Garlic Bogor</a>
            <a href="{{ourContact()->twitter}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/twitter.png" class="iconFooter">Hitara Kitchen</a>
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
    <script src="/plugins/aos/aos-master/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <!-- Gallery -->
    <script src="/plugins/lightbox/dist/js/lightbox.js"></script>
    <script>
      lightbox.option({
        'resizeDuration': 200,
        albumLabel: 'Image %1 of %2',
        wrapAround: true,
      })
    </script>
    <script>
      $(window).on("scroll", function() {
        if ($(window).scrollTop()) {
          $('nav').addClass('nav-scroll');
        } else {
          $('nav').removeClass('nav-scroll');
        }
      })
    </script>
    <!-- Akhir Gallery -->
</body>

</html>
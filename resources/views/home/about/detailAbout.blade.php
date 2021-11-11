<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="icon" type="image/png" href="/img/web/Logo.png"> 
    <link rel="stylesheet" href="/css/about/detailAbout.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
      @media (min-width: 992px){
      body{
        background-color: #2B2B2B;
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
            <li class="nav-item" data-page="ab">
              <a class="nav-link non-active" href="/recipe">Recipe<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" data-page="gal">
              <a class="nav-link non-active" href="/gallery">Gallery<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" data-page="fac">
              <a class="nav-link non-active" href="/contact">Contact Us<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 
  <!-- Jumbotron -->
<div class="carousel mb-3 banner">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="/img/banner/{{$banner->image}}" style="object-fit: cover;" class="d-block imgJumbo" alt="...">
    </div>
    <div class="container-fluid isiCarousel">
      <h1 class="display-4 d-none d-lg-block font-weight-bolder">The Healthy Magic In Hitara Black Garlic</h1>
      <h1 class="display-4 d-block d-lg-none font-weight-bolder">The Healthy Magic In Hitara Black Garlic</h1>
      <p class="lead">In Black Garlic, S-allylcystein assists with the absorpsion of allicin, helping it metabolize more easily, which could offer boosted protection againts infection. </p>
      <div class="phone d-block d-lg-none" >
        <a href="brosur/brosur.php" class="explore">Get Brochure</a>
      </div>
      <div class="dekstop d-none d-lg-block" id="what">
        <a href="brosur/brosur.php" class="btn btn-light" >Get Brochure</a>
      </div>
    </div>
  </div>
</div>

<div class="container" >
  <div class="row col-lg-12 mx-0">
        <div class="col-lg-6">
            <p class="judulAbout">
              {{$aboutgarlic->title1}}
            </p>
            <img src="/img/web/produksi.png" class="imgAbout d-block d-lg-none">
            <br>
            <div class="isiAbout">
            <p>
              {!!$aboutgarlic->description1!!}
            </p>
            </div>
            <br>
            <p class="judulAbout">
                {{$aboutgarlic->title2}}
            </p>
            <img src="/img/web/bawang.png" class="imgAbout d-block d-lg-none">
            <br>
            <div class="isiAbout">
            <p>
              {!!$aboutgarlic->description2!!}
            </p>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="/img/web/bawang.png" class="imgAbout d-none d-lg-block">
            <img src="/img/web/bawang2.png" class="imgAbout my-4 d-none d-lg-block">
            <img src="/img/web/produksi.png" class="imgAbout my-1 d-none d-lg-block">
        </div>
    </div>
    <!-- Other Benefits -->
    <div class="judul d-flex justify-content-center my-5">
        <p class="judul">Other Benefits</p>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <img src="/img/web/otherBenefits1.png" width="100%">
        </div>
        <div class="col-6">
            <img src="/img/web/otherBenefits2.png" width="100%" height="100%">
        </div>
    </div>
  </div>
  <hr class="my-5 bg-secondary">
  @if(!empty($aboutHitara->id))
  <div class="container" id="detail">
    <div class="judul d-flex justify-content-center my-5">
        <p class="judul">Hitara Black Garlic</p>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <img class="img-fluid shadow img-thumbnail" src="/img/hitara/{{$aboutHitara->image}}" style="border-radius: 25px; height: 450px; width: 100%; object-fit: cover;" alt="">
              </div>
              <div class="col-md-6">
                <div class="text-bold textDetail" style="height: 90px;">
                  <p>{{Str::limit($aboutHitara->title, '45' ,'')}}</p>
                </div>
                <hr>
                <div class="isiDetail">
                  <p>{!!$aboutHitara->description!!}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif


  <!-- footer -->
  <div class="footer mt-5">
    <div class="bg-light py-5 footer-top">
        <div class="container">
            <div class="row d-flex align-items-center mx-auto">
                <div class="col-lg-4">
                    <p class="footerJudul">Contact Us</p>
                    <a href="mailto:{{ourContact()->email}}" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/email.png" class="iconFooter">intan@hitarablackgarlic.com</a>
                    <a href="{{ourContact()->facebook}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/facebook.png" class="iconFooter">Hitara Kitchen</a>
                    <a href="{{ourContact()->instagram}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/instagram.png" class="iconFooter">Black Garlic Bogor</a>
                    <a href="{{ourContact()->twitter}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/twitter.png" class="iconFooter">Hitara Kitchen</a>
                </div>
                <div class="col-lg-4">
                    <p class="footerJudul">Quick Links</p>
                    <a href="/brochure" class="nav-link px-0 pt-0 linkFooter1">Get Brochure</a>
                    <a href="/recipe" class="nav-link px-0 pt-0 linkFooter1">Menu combined with black garlic</a>
                    <a href="/gallery" class="nav-link px-0 pt-0 linkFooter1">Our collections</a>
                </div>
                <div class="col-lg-4">
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
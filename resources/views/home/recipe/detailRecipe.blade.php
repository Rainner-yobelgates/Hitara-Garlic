<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitara's Recipe</title>
    <link rel="icon" type="image/png" href="/img/web/Logo.png"> 
    <link rel="stylesheet" href="/css/recipe/detailRecipe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" integrity="sha512-WEQNv9d3+sqyHjrqUZobDhFARZDko2wpWdfcpv44lsypsSuMO0kHGd3MQ8rrsBn/Qa39VojphdU6CMkpJUmDVw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />
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
            <li class="nav-item " data-page="gal">
              <a class="nav-link non-active" href="/gallery">Gallery<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item " data-page="fac">
              <a class="nav-link non-active" href="/contact">Contact Us<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 
  <!-- Jumbotron -->
<div class="jumbotron jumbotrons jumbotron-fluid">
    <div class="container-fluid" >
      <p class="lead" id="mayo">Selected menus combined <br> with Black Garlic.</p>
    </div>
</div>
<!-- Akhir Jumbotron -->
<div class="container">
    <div class="judulAbout">
        <p class="judulAbout">{{$recipe->name}}</p>
    </div>
    <div class="row col-lg-12 my-3">
        <div class="col-lg-6">
            <img src="/img/recipe/{{$recipe->image}}" class="mx-auto d-block d-lg-none imgRecipe">
            <h4>{!! $recipe->description !!}</h4>
        </div>
        <div class="col-lg-6">
            <img src="/img/recipe/{{$recipe->image}}" class="imgRecipe d-none d-lg-block">
        </div>
    </div>
    <a href="/recipe" class="d-flex justify-content-center bek"><img src="/img/web/bek.png"></a>
</div>
<hr class="my-5">
  <!-- footer -->
  <div class="footer">
    <div class="bg-light py-5 footer-top">
        <div class="container">
            <div class="row d-flex align-items-center mx-auto">
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
<!-- Akhir Gallery -->
</body>
</html>
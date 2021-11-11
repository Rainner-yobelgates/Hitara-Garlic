<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitara's Recipe</title>
    <link rel="icon" type="image/png" href="/img/web/Logo.png"> 
    <link rel="stylesheet" href="/css/recipe/recipe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/plugins/aos/aos-master/dist/aos.css" />
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
              <a class="nav-link active" href="/recipe">Recipe<span class="sr-only">(current)</span></a>
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
    <h1 class="display-4 d-none d-lg-block font-weight-bolder">Menus combined with <br> Black Garlic.</h1>
    <p class="lead">Healthy and Delicious</p>
    </div>
</div>
<!-- Akhir Jumbotron -->

<div class="container">
  <div class="judulAbout mb-5">
    <p class="judulAbout">Menu</p>
  </div>
  <div class="row mx-auto">
  @foreach($recipes as $recipe)
    <div class="col-lg-4 mb-5">
      <div class="card shadow" style="width: 20rem;" data-aos="zoom-in-up" data-aos-duration="1000">
        <img src="/img/recipe/{{$recipe->image}}" class="card-img-top imgResep" alt="...">
        <div style="height: 90px;" class="px-1">
          <p class="judulCard">{{Str::limit($recipe->name,'35', '')}}</p>
        </div>
      <a href="/recipe/detail/{{$recipe->id}}" class="text-white cardBTN" style="text-decoration: none;"><p class="cardBTN">View Recipe</p></a>
      </div>
    </div>
    @endforeach
    
  </div>
</div>
  <!-- footer -->
  <div class="footer">
    <div class="bg-light py-5 footer-top">
        <div class="container">
            <div class="row d-flex align-items-center mx-auto">
                <div class="col-lg-6">
                    <p class="footerJudul">Contact Us</p>
                    <a href="mailto:{{ourContact()->email}}" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/email.png" class="mr-3 iconFooter">intan@hitarablackgarlic.com</a>
                    <a href="{{ourContact()->facebook}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/facebook.png" class="mr-3 iconFooter">Hitara Kitchen</a>
                    <a href="{{ourContact()->instagram}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/instagram.png" class="mr-3 iconFooter">Black Garlic Bogor</a>
                    <a href="{{ourContact()->twitter}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/twitter.png" class="mr-3 iconFooter">Hitara Kitchen</a>
                </div> 
                <div class="col-lg-6">
                    <p class="footerJudul">Our Store</p>
                    <a href="{{store()->shopee}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="https://cf.shopee.co.id/file/34d7f8da0414d2c6c7c0c2ed1c26a12d" class="mr-3 iconFooter">Shopee MY</a>
                    <a href="{{store()->tokopedia}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/tokopedia.png" class="mr-3 iconFooter">Tokopedia</a>
                    <a href="{{store()->alibaba}}" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/alibaba.png" class="mr-3 iconFooter">Alibaba</a>
                    <a href="{{store()->blibli}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/blibli.png" class="mr-3 iconFooter">Blibli.com</a>
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
<script>
  lightbox.option({
    'resizeDuration': 200,
    albumLabel:'Image %1 of %2',
    wrapAround:true,
  })
</script>
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
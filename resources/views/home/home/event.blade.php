<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitara's Home Page</title>
    <link rel="stylesheet" href="/css/event/event.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body class="bg-white">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a class="navbar-brand" style="font-size: 35px;" href="#">Hitara</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse scroller" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" data-page="ab">
              <a class="nav-link non-active" href="recipe.php">Recipe<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" data-page="gal">
              <a class="nav-link non-active" href="gallery.php">Gallery<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" data-page="fac">
              <a class="nav-link non-active" href="kontak.php">Contact Us<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="judulArtikel">
      <p class="judulArtikel">{{$event->name}}</p>
    </div>
<div class="container">
<div class="card shadow">  
  <div class="imgArtikel">
      <img style="object-fit: cover;" src="/img/event/{{$event->image}}" class="imgArtikel">
    </div>
    <div class="isiArtikel">
      <p>{!!$event->description!!}</p>
    </div>
</div>
<a href="/" class="d-flex justify-content-center mt-4 bek"><img src="/img/web/buttonBack.png"></a>
</div>


  <!-- footer -->
  <div class="footer mt-5">
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
                    <a href="{{store()->alibaba}}" target="_blank" class="nav-link px-0 pt-0 linkFooter"><img src="/icon/alibaba.png" class="iconFooter">Alibaba</a>
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
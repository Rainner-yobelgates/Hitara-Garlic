<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitara's Home Page</title>
  <link rel="icon" type="image/png" href="/img/web/Logo.png">
  <link rel="stylesheet" href="/css/home/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="/plugins/aos/aos-master/dist/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" integrity="sha512-WEQNv9d3+sqyHjrqUZobDhFARZDko2wpWdfcpv44lsypsSuMO0kHGd3MQ8rrsBn/Qa39VojphdU6CMkpJUmDVw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="/plugins/lightbox/dist/css/lightbox.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Owlcarousel -->
  <link rel="stylesheet" href="/plugins/owlcarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/plugins/owlcarousel/dist/assets/owl.theme.default.min.css">

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
            <a class="nav-link aktip" href="/">Home<span class="sr-only">(current)</span></a>
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
        <div class="phone d-block d-lg-none">
          <a href="brosur/brosur.php" class="explore">Get Brochure</a>
        </div>
        <div class="dekstop d-none d-lg-block">
          <a href="brosur/brosur.php" class="btn btn-light">Get Brochure</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Jumbotron -->
  <!-- Shape Hiasan -->
  <div class="bulet d-none d-lg-block" style="width: 80px; height:80px; position:absolute; border-radius:50%; background-color:#656565; margin-left:6%; margin-top:21%; z-index:-1; opacity:15%;"></div>
  <div class="bulet d-none d-lg-block" style="width: 80px; height:80px; position:absolute; border-radius:50%; background-color:#656565; margin-left:88%; margin-top:21%; z-index:-1; opacity:15%;"></div>
  <div class="bulet d-none d-lg-block" style="width: 80px; height:80px; position:absolute; border-radius:50%; background-color:#656565; margin-left:46%; margin-top:21%; z-index:-1; opacity:15%;"></div>
  <div class="bulet d-none d-lg-block" style="width: 250px; height:250px; position:absolute; border-radius:50%; background-color:#656565; margin-left:6%; margin-top:41%; z-index:-1; opacity:15%;"></div>
  <div class="bulet d-none d-lg-block" style="width: 80px; height:80px; position:absolute; border-radius:50%; background-color:#656565; margin-left:46%; margin-top:41%; z-index:-1; opacity:15%;"></div>
  <div class="bulet d-none d-lg-block" style="width: 150px; height:150px; position:absolute; border-radius:50%; background-color:#656565; margin-left:82%; margin-top:40%; z-index:-1; opacity:15%;"></div>
  <!-- Akhir Shape Hiasan -->

  <div class="container">
    <div class="event">
      <p class="event">Our Closest Event</p>
    </div>
    <div class="row mb-4">
      <div class="owl-carousel col-lg-9">
        @if(!empty($e->id))
        @foreach($events as $event)
        <div class="card rounded shadow artikel">
          <a href="/event/detail/{{$event->id}}" class="linkEvent text-decoration-none">
            <img src="/img/event/{{$event->image}}" style="object-fit: cover;" class="imgEvent rounded" alt="">
            <div class="card-body px-2 py-3 eventBody">
              <p class="judulEvent my-0">{{Str::limit($event->name, '55', '...')}}</p>
            </div>
          </a>
        </div>
        @endforeach
        @else
        <div class="card rounded shadow">
          <div class="card-body">
            <div class="font-italic text-danger text-center font-weight-bold">No Event Are Ongoing</div>
          </div>
        </div>
        @endif
      </div>
      <div class="col-lg-3">
        <iframe class="d-none d-lg-block rounded " style="width: 240px; height:220px" src="https://www.youtube.com/embed/{{$video->link}}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="container mb-3">
    <div class="row justify-content-center" data-aos="zoom-in-up" data-aos-duration="1000">
      <div class="col-12 info-panel p-3">
        <div class="card border-0">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-5 text">
                <h3>{{Str::limit($aboutgarlic->title1, '50', '')}}</h3>
                <p>{!!Str::limit($aboutgarlic->description1, '400', '...')!!}</p>
              </div>
              <div class="col-lg-2 d-none d-lg-block">
                <div class="line mx-auto"></div>
                <a href="/about#what" class=" btn btn-outline-dark d-flex justify-content-center text-dark text-center" style="text-decoration: none;">
                  Read More
                </a>
              </div>
              <div class="col-lg-5 text">
                <h3>{{Str::limit($aboutgarlic->title2, '50', '')}}</h3>
                <p>{!!Str::limit($aboutgarlic->description2, '400', '...')!!}</p>
              </div>
              <div class="col-lg-2 d-block d-lg-none">
                <a href="/about#what" class="btn btn-outline-dark d-flex justify-content-center text-dark text-center" style="text-decoration: none;">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Info Panel -->
  <!-- About -->
  <div class="container">
    <div class="row hr">
      <div class="col-md-6 p-2">
        <img src="/img/web/process.png" class="imgProcess">
        <img src="/img/web/sertifikat.png" class=" imgSertifikat d-block d-lg-none mt-1 float-left" height="130px">
        <iframe class="mt-1 d-block d-lg-none float-right" width="260px" height="130px" src="https://www.youtube.com/embed/{{$video->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-md-6 p-2">
        <img src="/img/web/sertifikat.png" class=" imgSertifikat d-none d-lg-block float-right" height="250px">
      </div>
    </div>
  </div>
  <hr class="my-5">

  <div class="container">
    <div class="judulAbout">
      <p class="judulAbout">Hitara Black Garlic</p>
    </div>
    <div class="row my-3">
      @foreach($abouthitara as $hitara)
      <div class="col-lg-6 d-flex justify-content-center mb-4">
        <div class="card shadow p-4" style="width: 25rem;" data-aos="fade-up" data-aos-duration="2000">
          <img src="/img/hitara/{{$hitara->image}}" style="height: 250px; object-fit: cover;" class="card-img-top" alt="...">
          <div class="card-body">
          <div style="height: 70px;">
            <p class="judulCard text-center mb-0">{{Str::limit($hitara->title, '30', '')}}</p>
          </div>
          <div style="height: 135px;">
            <p class="isiCard mb-1">{!!Str::limit($hitara->description, '200', '...')!!}</p>
          </div>
          </div>
          <div class="">
            <a href="/about/hitara/{{$hitara->id}}#detail" class="text-white d-flex justify-content-center btn btn-dark">View Detail</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
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
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- Akhir Bootstrap -->
    <!-- Event -->
    <script src="/plugins/owlcarousel/dist/owl.carousel.min.js"></script>
    <script src="/plugins/owlcarousel/dist/setting.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
        margin: 10,
        items: 4,
        responsiveClass: false,
        responsive: {
          0: {
            items: 2,
            nav: true
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 4,
            nav: true,
            loop: false
          }
        }
      })
    </script>
    <script src="/plugins/aos/aos-master/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
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
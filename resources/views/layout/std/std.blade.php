<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Artlinco</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
  />
    <!-- <link rel="stylesheet" href="css/mdb.min.css" /> -->
    <!-- Custom styles -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
</head>
<body >
      <!--Main Navigation-->
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand logo-img" style="width: 15%;" href="{{url('/')}}">
         <img src="{!! asset('public/images/logo.svg') !!}" width="100%" class="d-inline-block align-top" alt="">
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
              <a class="nav-link" href="#"  style="color: #212529 !important;
    font-weight: 600;">
Username
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">
                  <img src="{!! asset('public/images/womenavatar.png') !!}" class="d-inline-block align-top logoimg" style="  width: 35px;
  height: 35px;
  border-radius: 50%;transform: translateX(-13px) translateY(-5px);" alt="">
              </a>
            </li>
    </ul>
  </div>
</nav>
    <!-- Navbar -->

    <!-- Background image -->

    <!-- Background image -->
  </header>

  @yield('content')

    <!--Footer-->
    <footer class="text-lg-start" style="background: #FCF176;">
    <!-- Copyright -->
    <div class="text-right p-3">
      <a class="text-dark" href=""M> <img src="{!! asset('public/images/footerlogo.svg') !!}" width="14%" class="d-inline-block align-top footer-logo-img" alt=""></a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
 <script>
    $(function () {
  var galleryThumbs = new Swiper(".gallery-thumbs", {
    centeredSlides: true,
    centeredSlidesBounds: true,
    direction: "horizontal",
    spaceBetween: 10,
    slidesPerView: 1,
    freeMode: false,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    watchOverflow: true,
    breakpoints: {
      480: {
        direction: "vertical",
        slidesPerView: 3
      }
    }
  });
  var galleryTop = new Swiper(".gallery-top", {
    direction: "horizontal",
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    a11y: {
      prevSlideMessage: "Previous slide",
      nextSlideMessage: "Next slide",
    },
    keyboard: {
      enabled: true,
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });
  galleryTop.on("slideChangeTransitionStart", function () {
    galleryThumbs.slideTo(galleryTop.activeIndex);
  });
  galleryThumbs.on("transitionStart", function () {
    galleryTop.slideTo(galleryThumbs.activeIndex);
  });
});
    </script>

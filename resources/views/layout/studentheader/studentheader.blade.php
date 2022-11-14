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
    <style>
      .translator > div > div > select {
      height: 2rem;
      border: 1px solid lightgray;
      border-radius: 5px;
    }
    .goog-logo-link {
    display:none !important;
} 
    
.goog-te-gadget{
    color: transparent !important;
}
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
</head>
<body >
      <!--Main Navigation-->
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @if(session()->get('role_id') == 1)
        <a class="navbar-brand logo-img" style="width: 15%;" href="{{url('/admindashboard')}}">
        @elseif(session()->get('role_id') ==2)
        <a class="navbar-brand logo-img" style="width: 15%;" href="{{url('/studentlist')}}">
        @else
        <a class="navbar-brand logo-img" style="width: 15%;" href="{{url('/studenttestlist')}}">
        @endif
         <!-- <a class="navbar-brand logo-img" style="width: 15%;" href="{{url('/studenttestlist')}}"> -->
         <img src="{!! asset('public/images/logo.svg') !!}" width="100%" class="d-inline-block align-top" alt="">
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="translator" style="margin-right: 5rem" id="google_translate_element"></div>
    <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
              <a class="nav-link" href="#"  style="color: #212529 !important;
    font-weight: 600;">
{{session()->get('firstname')}}
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">
                @if(session()->get('picture') == NULL)
                  <img src="{!! asset('public/images/womenavatar.png') !!}" class="d-inline-block align-top logoimg" style="  width: 35px;
                  height: 35px;
                  border-radius: 50%;transform: translateX(-13px) translateY(-5px);" alt="">
                @else
                  <img src="{!! asset('public/profileimage/') !!}/{{session()->get('picture')}}" class="d-inline-block align-top logoimg" style="  width: 35px;
                  height: 35px;
                  border-radius: 50%;transform: translateX(-13px) translateY(-5px);" alt="">
                @endif
              </a>
            </li>
             <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent;border:none !important;margin-top: 5px;color:#043740;
                transform: translateX(-22px);"></button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="transform: translateX(-131px)translateY(6px);}">
                <a class="dropdown-item" href="{{url('/profile')}}">My Profile</a>
                <a class="dropdown-item" href="{{url('/')}}">Logout</a>
              </div>
            </div>
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
    slidesPerView: 2,
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
        <script>
        var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("activee");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "300px";
    }
  });
}

        </script>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
setInterval(function(){ 
sum();
}, 2000);
function sum(){
$(".goog-te-combo option[value=af]").remove();
$(".goog-te-combo option[value=sq]").remove();
$(".goog-te-combo option[value=am]").remove();
$(".goog-te-combo option[value=ar]").remove();
$(".goog-te-combo option[value=hy]").remove();
$(".goog-te-combo option[value=as]").remove();
$(".goog-te-combo option[value=ay]").remove();
$(".goog-te-combo option[value=az]").remove();
$(".goog-te-combo option[value=bm]").remove();
$(".goog-te-combo option[value=eu]").remove();
$(".goog-te-combo option[value=be]").remove();
$(".goog-te-combo option[value=bn]").remove();
$(".goog-te-combo option[value=bho]").remove();
$(".goog-te-combo option[value=bs]").remove();
$(".goog-te-combo option[value=bg]").remove();
$(".goog-te-combo option[value=my]").remove();
$(".goog-te-combo option[value=ca]").remove();
$(".goog-te-combo option[value=ceb]").remove();
$(".goog-te-combo option[value=ny]").remove();
$(".goog-te-combo option[value=zh-CN]").remove();
$(".goog-te-combo option[value=zh-TW]").remove();
$(".goog-te-combo option[value=co]").remove();
$(".goog-te-combo option[value=hr]").remove();
$(".goog-te-combo option[value=cs]").remove();
$(".goog-te-combo option[value=dv]").remove();
$(".goog-te-combo option[value=doi]").remove();
$(".goog-te-combo option[value=nl]").remove();
$(".goog-te-combo option[value=eo]").remove();
$(".goog-te-combo option[value=et]").remove();
$(".goog-te-combo option[value=ee]").remove();
$(".goog-te-combo option[value=tl]").remove();
$(".goog-te-combo option[value=fi]").remove();
$(".goog-te-combo option[value=fr]").remove();
$(".goog-te-combo option[value=fy]").remove();
$(".goog-te-combo option[value=gl]").remove();
$(".goog-te-combo option[value=ka]").remove();
$(".goog-te-combo option[value=de]").remove();
$(".goog-te-combo option[value=el]").remove();
$(".goog-te-combo option[value=gn]").remove();
$(".goog-te-combo option[value=gu]").remove();
$(".goog-te-combo option[value=ht]").remove();
$(".goog-te-combo option[value=ha]").remove();
$(".goog-te-combo option[value=haw]").remove();
$(".goog-te-combo option[value=iw]").remove();
$(".goog-te-combo option[value=hi]").remove();
$(".goog-te-combo option[value=hi]").remove();
$(".goog-te-combo option[value=hu]").remove();
$(".goog-te-combo option[value=is]").remove();
$(".goog-te-combo option[value=ig]").remove();
$(".goog-te-combo option[value=ilo]").remove();
$(".goog-te-combo option[value=id]").remove();
$(".goog-te-combo option[value=ga]").remove();
$(".goog-te-combo option[value=it]").remove();
$(".goog-te-combo option[value=ja]").remove();
$(".goog-te-combo option[value=jw]").remove();
$(".goog-te-combo option[value=kn]").remove();
$(".goog-te-combo option[value=kk]").remove();
$(".goog-te-combo option[value=km]").remove();
$(".goog-te-combo option[value=rw]").remove();
$(".goog-te-combo option[value=gom]").remove();
$(".goog-te-combo option[value=ko]").remove();
$(".goog-te-combo option[value=kri]").remove();
$(".goog-te-combo option[value=ku]").remove();
$(".goog-te-combo option[value=ckb]").remove();
$(".goog-te-combo option[value=ky]").remove();
$(".goog-te-combo option[value=lo]").remove();
$(".goog-te-combo option[value=la]").remove();
$(".goog-te-combo option[value=lv]").remove();
$(".goog-te-combo option[value=ln]").remove();
$(".goog-te-combo option[value=lt]").remove();
$(".goog-te-combo option[value=lg]").remove();
$(".goog-te-combo option[value=lb]").remove();
$(".goog-te-combo option[value=mk]").remove();
$(".goog-te-combo option[value=mai]").remove();
$(".goog-te-combo option[value=mg]").remove();
$(".goog-te-combo option[value=ms]").remove();
$(".goog-te-combo option[value=ml]").remove();
$(".goog-te-combo option[value=mt]").remove();
$(".goog-te-combo option[value=mi]").remove();
$(".goog-te-combo option[value=mr]").remove();
$(".goog-te-combo option[value=mni-Mtei]").remove();
$(".goog-te-combo option[value=lus]").remove();
$(".goog-te-combo option[value=mn]").remove();
$(".goog-te-combo option[value=ne]").remove();
$(".goog-te-combo option[value=no]").remove();
$(".goog-te-combo option[value=or]").remove();
$(".goog-te-combo option[value=om]").remove();
$(".goog-te-combo option[value=ps]").remove();
$(".goog-te-combo option[value=fa]").remove();
$(".goog-te-combo option[value=pl]").remove();
$(".goog-te-combo option[value=pt]").remove();
$(".goog-te-combo option[value=pa]").remove();
$(".goog-te-combo option[value=qu]").remove();
$(".goog-te-combo option[value=ro]").remove();
$(".goog-te-combo option[value=ru]").remove();
$(".goog-te-combo option[value=sm]").remove();
$(".goog-te-combo option[value=sa]").remove();
$(".goog-te-combo option[value=gd]").remove();
$(".goog-te-combo option[value=nso]").remove();
$(".goog-te-combo option[value=sr]").remove();
$(".goog-te-combo option[value=st]").remove();
$(".goog-te-combo option[value=sn]").remove();
$(".goog-te-combo option[value=sd]").remove();
$(".goog-te-combo option[value=si]").remove();
$(".goog-te-combo option[value=sk]").remove();
$(".goog-te-combo option[value=sl]").remove();
$(".goog-te-combo option[value=so]").remove();
$(".goog-te-combo option[value=es]").remove();
$(".goog-te-combo option[value=su]").remove();
$(".goog-te-combo option[value=sw]").remove();
$(".goog-te-combo option[value=sv]").remove();
$(".goog-te-combo option[value=tg]").remove();
$(".goog-te-combo option[value=ta]").remove();
$(".goog-te-combo option[value=tt]").remove();
$(".goog-te-combo option[value=te]").remove();
$(".goog-te-combo option[value=th]").remove();
$(".goog-te-combo option[value=ti]").remove();
$(".goog-te-combo option[value=ts]").remove();
$(".goog-te-combo option[value=tr]").remove();
$(".goog-te-combo option[value=tk]").remove();
$(".goog-te-combo option[value=ak]").remove();
$(".goog-te-combo option[value=uk]").remove();
$(".goog-te-combo option[value=ur]").remove();
$(".goog-te-combo option[value=ug]").remove();
$(".goog-te-combo option[value=uz]").remove();
$(".goog-te-combo option[value=vi]").remove();
$(".goog-te-combo option[value=cy]").remove();
$(".goog-te-combo option[value=xh]").remove();
$(".goog-te-combo option[value=yi]").remove();
$(".goog-te-combo option[value=yo]").remove();
$(".goog-te-combo option[value=zu]").remove();
$(".goog-te-combo option[value=hmn]").remove();
}
</script>
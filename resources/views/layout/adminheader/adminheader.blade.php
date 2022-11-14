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
    <!-- <link rel="stylesheet" href="css/mdb.min.css" /> -->
    <!-- Custom styles -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
      <style>
    .thumbnail{
      border: 3px solid #043740;
      width: 40%;
    }
    .quizimgdiv{
      width: 20%;
    margin-top: 10px;
    }
    .gallery > img{
      width: 20%;
    }
    .translator > div > div > select {
      height: 2rem;
      border: 1px solid lightgray;
      border-radius: 5px;
    }
    input[type=checkbox], input[type=radio] {
 margin-left:20px;
}
.goog-logo-link {
    display:none !important;
} 
    
.goog-te-gadget{
    color: transparent !important;
}
  </style>
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
         <img src="{!! asset('public/images/logo.svg') !!}" width="100%" class="d-inline-block align-top" alt="">
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active d-flex">
              <a class="nav-link" href="#"  style="color: #212529 !important;
    font-weight: 600;">
              {{session()->get('firstname')}}
                      @if(session()->get('picture') == NULL)
                  <img src="{!! asset('public/images/womenavatar.png') !!}" class="d-inline-block align-top logoimg" style="  width: 35px;
                  height: 35px;
                  border-radius: 50%;transform: translateX(-1px) translateY(-7px);" alt="">
                @else
                  <img src="{!! asset('public/profileimage/') !!}/{{session()->get('picture')}}" class="d-inline-block align-top logoimg" style="  width: 35px;
                  height: 35px;
                  border-radius: 50%;transform: translateX(-13px) translateY(-5px);" alt="">
                @endif
              </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v" style="color:#000"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
 <a class="dropdown-item" href="{{url('/profile')}}">My Profile</a>
                <a class="dropdown-item" href="{{url('/')}}">Logout</a>
        </div>
      </li>
            <li class="nav-item">
          <a class="nav-link" href="#">
 
                </a>
      </li>
            <li class="nav-item">
          <a class="nav-link" href="#">
 
                </a>
      </li>
                  <li class="nav-item">
          <a class="nav-link" href="#">
 
                </a>
      </li>
                  <li class="nav-item">
          <a class="nav-link" href="#">
 
                </a>
      </li>
                  <li class="nav-item">
          <a class="nav-link" href="#">
 
                </a>
      </li>
                  <li class="nav-item">
          <a class="nav-link" href="#">
 
                </a>
      </li>
                        <li class="nav-item">
          <a class="nav-link" href="#">
 
                </a>
      </li>
                        <li class="nav-item">
          <a class="nav-link" href="#">
 
                </a>
      </li>
                        <li class="nav-item">
          <a class="nav-link" href="#">
 
                </a>
      </li>
                        <li class="nav-item">
          <a class="nav-link" href="#">
 
                </a>
      </li>
                        <li class="nav-item">
          <a class="nav-link" href="#">
 
                </a>
      </li>
    </ul>
  </div>
</nav>
    <!-- Navbar -->

    <!-- Background image -->
    <!-- Background image -->
  </header>
  <!--Main Navigation-->
@yield('content')

  <!--Footer-->
  <footer class="text-lg-start" style="background: #FCF176;margin-top:130px">
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
  <script type="text/javascript">
$(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_btns'); //Add button selector
        var wrappeersr = $('.fields_wrappers'); //Input field wrapper
        var fieldssHTML = '<div class="mt-3"><input type="text" name="field_name[]" class="quizquestion" placeholder="Write Your Question" value=""/><input type="file" id="files" class="quizmultiuploadd ml-1" name="files[]" multiple><div class="gallery"></div><a href="javascript:void(0);" class="removess_buttonss"><button class="quizremovebtn">Remove Field</button></a></div>'; //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrappeersr).append(fieldssHTML); //Add field html
            }
        });
       $(wrappeersr).on('click', '.quizmultiuploadd', function(e){
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('.quizmultiuploadd').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});


         });
        //Once remove button is clicked
        $(wrappeersr).on('click', '.removess_buttonss', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });


      window.onload = function() {
      //Check File API support
      if (window.File && window.FileList && window.FileReader) {
        var filesInput = document.getElementById("files");
        filesInput.addEventListener("change", function(event) {
          var files = event.target.files; //FileList object
          var output = document.getElementById("result");
          var cr=0;
          for (var i = 0; i < files.length; i++) {
            var file = files[i];
            //Only pics
            if (!file.type.match('image'))
              continue;
            var picReader = new FileReader();
            picReader.addEventListener("load", function(event) {
              var picFile = event.target;
              var div = document.createElement("div");
              div.classList.add('quizimgdiv');
              div.innerHTML = "<img  class='thumbnail' src='" + picFile.result + "'" +
                "title='" + picFile.name + "'/><input type='radio' name='correctanswer' value='" + cr + "'>";
                cr = parseInt(cr);
                cr = cr+1;
              output.insertBefore(div, null);
            });
            //Read the image
            picReader.readAsDataURL(file);
          }
        });
      } else {
        console.log("Your browser does not support File API");
      }
    }
</script>
<script>
      $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
  </script>

</script>
 <script>
//     $('#multi').mdbRange({
//   single: {
//     active: true,
//     multi: {
//       active: true,
//       rangeLength: 1
//     },
//   }
// });
// </script>
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
</body>
</html>
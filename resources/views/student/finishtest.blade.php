@extends('layout.studentheader.studentheader') @section('content')
<link
    rel="stylesheet"
    type="text/css"
    href="{!! asset('public/css/studentcss/index.css') !!}"
/>
<style>
  .submitbtn{
    background: #043740;
    border-color: #043740;
    color: #fff;
  }
  .submitbtn:hover{
    background: #043740;
    color: yellow;
  }
  .checkbtn{
      margin-right: 8px !important;
  }
  @media (max-width: 480px) {
    .questionheading{
        padding-left: 85px;
    }
    .inputbtn{
      width: 80%;
      margin-top: 10px;
      margin-left: 5px;
    }
    .checkbtn{
      margin-right: 0px !important;
margin-left: 15px;
    }
    .submitbtn{
    transform: translateX(31px);
    }
    .swiper-button-prev, .swiper-rtl .swiper-button-next {
   left: 13% !important;
    right: auto !important;
}
.swiper-button-next, .swiper-rtl .swiper-button-prev {
   right: 13% !important;
    left: auto !important;
}
    .swiper-button-next, .swiper-button-prev {
    top: 71% !important;
}
    .swiper-wrapper{
      margin-top: 20px;
    }
  }
</style>
<main class="mains">
    <div class="container" style="margin-top: 310px">
        @if(session('message'))
          <div><p class="alert alert-info mt-3" >{{session('message')}}</p> </div>
        @endif
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <div><h4><li>{{ $error }}</li></h4> </div>
              @endforeach
            </ul>
          </div>
        @endif
      <div class="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background: #043740; color: #fff;">
            <div class="modal-body">
     <p>We Recommended taking the test again in a couple of months to track your progress</p>
            </div>
            <div class="modal-footer">
              <button type="button" onclick="lock()" class="btn clostbtn" style="background-color: #fcf176" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
            </div>
            <div class="swiper-container-wrapper fade">
            <div class="swiper-container gallery-thumbs">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                       <div class="swiper-slide">
                        <div class="row">
                            <h5 style="color: #043740;font-weight: bold;">Personality Test</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="row">
                          <h5 style="color: #043740;font-weight: bold;">Thankyou</h5>
                      </div>
                  </div>
                </div>
            </div>
            <!-- Slider main container -->
            <div class="swiper-container gallery-top">
                <!-- Additional required wrapper -->
                         <form action="{{ URL::to('/submitstudenttest')}}" method="POST" class="form-horizontal swiper-wrapper"  enctype="multipart/form-data"> 
                                {{ csrf_field() }} 
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="title" style="font-size:45px;color: #043740;font-weight: bold;">Please Give Personality Test</div>
                        <div class="description">
                            </div>
                            </div>
                            <input type="hidden" name="hdnlength" value="0">>
                            <div class="swiper-slide">
                                <div class="title" style="color: #043740;font-weight: bold;">Question</div>
                                <div class="description">
                                    <div class="row mt-3">
                                        <h6 class="questionheading">-</h6>
                                    </div>
                                   <div class="row mt-3">
                                        <div class="col-12 col-lg-6 d-flex">
                                            <input type="radio" required class="checkbtn" name="answers"  />
                                            <input type="text" class="form-control inputbtn" value="0"/>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                     </div>
                                </div>
                                  <div class="row mt-5">
                                        <button class="btn submitbtn" type="submit">Submit</button>
                                   </div>
                            </div>
                        </div>
                         </form> 
                  <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
    </div>
</main>
<script>
    function lock(){
        window.location.replace("{{ URL::to('/studenttestlist')}}");
    }
</script>
@endsection

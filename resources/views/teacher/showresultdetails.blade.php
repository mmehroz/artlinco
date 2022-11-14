@extends('layout.adminheader.adminheader')
@section('content')
    <!-- Link Swiper's CSS -->
    <link
    rel="stylesheet"
    type="text/css"
    href="{!! asset('public/css/studentcss/studentquiz.css') !!}"
/>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- Demo styles -->
    <style>
        a{
            text-decoration: none !important;
        }
.slidecontainer {
  width: 100%;
}
.a{
  position:relative;
}
.one{
  position:absolute;
  top:44%;
  width: 10px;
  height: 10px;
  background: purple;
  cursor: pointer;
  border-radius:50%;
}
.two{
  position:absolute;
  top:44%;
  left:25%;
  width: 10px;
  height: 10px;
  background: purple;
  cursor: pointer;
  border-radius:50%;
}
.three{
  position:absolute;
  top:44%;
    left:50%;
  width: 10px;
  height: 10px;
  background: purple;
  cursor: pointer;
  border-radius:50%;
}
.four{
  position:absolute;
 top:44%;
    left:75%;
  width: 10px;
  height: 10px;
  background: purple;
  cursor: pointer;
  border-radius:50%;
}
.five{
  position:absolute;
  top:44%;
    left:99%;
  width: 10px;
  height: 10px;
  background: purple;
  cursor: pointer;
  border-radius:50%;
}






.six{
  position:absolute;
  top:44%;
  width: 10px;
  height: 10px;
  background: #2089f8;
  cursor: pointer;
  border-radius:50%;
}
.seven{
  position:absolute;
  top:44%;
  left:25%;
  width: 10px;
  height: 10px;
  background: #2089f8;
  cursor: pointer;
  border-radius:50%;
}
.eight{
  position:absolute;
  top:44%;
    left:50%;
  width: 10px;
  height: 10px;
  background: #2089f8;
  cursor: pointer;
  border-radius:50%;
}
.nine{
  position:absolute;
 top:44%;
    left:75%;
  width: 10px;
  height: 10px;
  background: #2089f8;
  cursor: pointer;
  border-radius:50%;
}
.ten{
  position:absolute;
  top:44%;
    left:99%;
  width: 10px;
  height: 10px;
  background: #2089f8;
  cursor: pointer;
  border-radius:50%;
}



.eleven{
  position:absolute;
  top:44%;
  width: 10px;
  height: 10px;
  background: #7c0410;
  cursor: pointer;
  border-radius:50%;
}
.twelve{
  position:absolute;
  top:44%;
  left:25%;
  width: 10px;
  height: 10px;
  background: #7c0410;
  cursor: pointer;
  border-radius:50%;
}
.thirteen{
  position:absolute;
  top:44%;
    left:50%;
  width: 10px;
  height: 10px;
  background: #7c0410;
  cursor: pointer;
  border-radius:50%;
}
.fourteen{
  position:absolute;
 top:44%;
    left:75%;
  width: 10px;
  height: 10px;
  background: #7c0410;
  cursor: pointer;
  border-radius:50%;
}
.fifteen{
  position:absolute;
  top:44%;
    left:99%;
  width: 10px;
  height: 10px;
  background: #7c0410;
  cursor: pointer;
  border-radius:50%;
}




.sixteen{
  position:absolute;
  top:44%;
  width: 10px;
  height: 10px;
  background: #05ada2;
  cursor: pointer;
  border-radius:50%;
}
.seventeen{
  position:absolute;
  top:44%;
  left:25%;
  width: 10px;
  height: 10px;
  background: #05ada2;
  cursor: pointer;
  border-radius:50%;
}
.eighteen{
  position:absolute;
  top:44%;
    left:50%;
  width: 10px;
  height: 10px;
  background: #05ada2;
  cursor: pointer;
  border-radius:50%;
}
.nineteen{
  position:absolute;
 top:44%;
    left:75%;
  width: 10px;
  height: 10px;
  background: #05ada2;
  cursor: pointer;
  border-radius:50%;
}
.twenteen{
  position:absolute;
  top:44%;
    left:99%;
  width: 10px;
  height: 10px;
  background: #05ada2;
  cursor: pointer;
  border-radius:50%;
}





.twentyone{
  position:absolute;
  top:44%;
  width: 10px;
  height: 10px;
  background: #187c04;
  cursor: pointer;
  border-radius:50%;
}
.twentytwo{
  position:absolute;
  top:44%;
  left:25%;
  width: 10px;
  height: 10px;
  background: #187c04;
  cursor: pointer;
  border-radius:50%;
}
.twentythree{
  position:absolute;
  top:44%;
    left:50%;
  width: 10px;
  height: 10px;
  background: #187c04;
  cursor: pointer;
  border-radius:50%;
}
.twentyfour{
  position:absolute;
 top:44%;
    left:75%;
  width: 10px;
  height: 10px;
  background: #187c04;
  cursor: pointer;
  border-radius:50%;
}
.twentyfive{
  position:absolute;
  top:44%;
    left:99%;
  width: 10px;
  height: 10px;
  background: #187c04;
  cursor: pointer;
  border-radius:50%;
}














.twentysix{
  position:absolute;
  top:44%;
  width: 10px;
  height: 10px;
  background: #5a551c;
  cursor: pointer;
  border-radius:50%;
}
.twentyseven{
  position:absolute;
  top:44%;
  left:25%;
  width: 10px;
  height: 10px;
  background: #5a551c;
  cursor: pointer;
  border-radius:50%;
}
.twentyeight{
  position:absolute;
  top:44%;
    left:50%;
  width: 10px;
  height: 10px;
  background: #5a551c;
  cursor: pointer;
  border-radius:50%;
}
.twentynine{
  position:absolute;
 top:44%;
    left:75%;
  width: 10px;
  height: 10px;
  background: #5a551c;
  cursor: pointer;
  border-radius:50%;
}
.thirty{
  position:absolute;
  top:44%;
    left:99%;
  width: 10px;
  height: 10px;
  background: #5a551c;
  cursor: pointer;
  border-radius:50%;
}



































.slider1 {
  -webkit-appearance: none;
  width: 100%;
  height: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
  margin-bottom: 50px;
}
.slider2 {
  -webkit-appearance: none;
  width: 100%;
  height: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
  margin-bottom: 50px;
}
.slider3 {
  -webkit-appearance: none;
  width: 100%;
  height: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
  margin-bottom: 50px;
}
.slider4 {
  -webkit-appearance: none;
  width: 100%;
  height: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
  margin-bottom: 50px;
}
.slider5 {
  -webkit-appearance: none;
  width: 100%;
  height: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
  margin-bottom: 50px;
}
.slider6 {
  -webkit-appearance: none;
  width: 100%;
  height: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
  margin-bottom: 50px;
}

.slider:hover {
  opacity: 1;
}

.slider1::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border:3px solid purple;
  cursor: pointer;
  border-radius:50%;
}
.slider2::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border:3px solid #2089f8;
  cursor: pointer;
  border-radius:50%;
}
.slider3::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border:3px solid #7c0410;
  cursor: pointer;
  border-radius:50%;
}
.slider4::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border:3px solid #05ada2;
  cursor: pointer;
  border-radius:50%;
}
.slider5::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border:3px solid #187c04;
  cursor: pointer;
  border-radius:50%;
}
.slider6::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border:3px solid #5a551c;
  cursor: pointer;
  border-radius:50%;
}
</style>

  
    <!-- Swiper -->
    <main class="mains">
        <div class="container" style="margin-top:450px">
           <h4 class="d-flex justify-content-center" style="font-weight: bold;
padding-bottom: 30px;">Student Result Details</h4>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6" style="border: 3px solid purple;">
                    <a href="{{url('/studentresultdetails')}}">
                    <h5 class="mt-1" style="color: purple;">Test Title: {{$testtitle}}</h5>
                    <h5 class="mt-1" style="color: purple;">Total No. Of Questions: {{$totalquestions}}</h5>
                    <h5 class="mt-1" style="color: purple;">Total No. Of Correcect Answers: {{$iscorrect}}</h5>
                    <h5 class="mt-1" style="color: purple;">Total No. Of Wrong Answers: {{$iswrong}}</h5>
                    <h5 class="mt-1" style="color: purple;">Overall Percentage: {{$overallpercentage}} %</h5>
                    </a>
</div>
</div>
</div>
    </main>
@endsection

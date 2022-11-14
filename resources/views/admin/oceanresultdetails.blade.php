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
        <div class="container" style="margin-top:415px">
           <h4 style="font-weight: bold;
padding-bottom: 30px;text-align:center">Result</h4>
@if(session()->get("role_id") == 1)
<div class="row">
<div class="col-lg-4">
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
       <option value="1">Select Age</option>
    <option value="1">14</option>
    <option value="1">15</option>
 <option value="1">16</option>
  <option value="1">17</option>
   <option value="1">18</option>
    <option value="1">19</option>
     <option value="1">20</option>
      <option value="1">21</option>
       <option value="1">22</option>
        <option value="1">23</option>
         <option value="1">24</option> 
         <option value="1">25</option>
          <option value="1">26</option>
           <option value="1">27</option>
            <option value="1">28</option>
             <option value="1">29</option>
              <option value="1">30</option>
               <option value="1">31</option>
                <option value="1">32</option>
                 <option value="1">33</option>
                  <option value="1">34</option>
                   <option value="1">35</option>
                    <option value="1">36</option>
                     <option value="1">37</option>
                      <option value="1">38</option>
                       <option value="1">39</option>
                        <option value="1">40</option>
                         <option value="1">41</option>
                          <option value="1">42</option>
  </select>
</div>
<div class="col-lg-4"><div class="dropdown">

  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
       <option value="1">Select Gender</option>
    <option value="1">Male</option>
    <option value="2">Female</option>
    <option value="3">Other</option>
  </select>
</div></div>
<div class="col-lg-4"><button type="submit btn btn-lg" style="border: 2px solid #043740 !important;
    width: 20%;
    color: #fff;
    border-radius: 6px;
    width: 145px;
    height: 40px;
    font-weight: 500 !important;
    transition: 0.3s;
    background:#043740;
    text-align: center;">Search</button></div>
</div>
@endif
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6" style="border: 3px solid purple;margin-top:60px">
                    <a href="{{url('/oceanresultdetails')}}">
                    <h5 class="mt-1" style="color: purple;">O-Openness(Abehnhed)</h5>
                    <div class="a">
                        <input type="range" min="1" max="100" value="{{$oo}}" class="slider1 mt-5" id="myRange">
                        <div class="one">  <p class="mt-3 vl">0</p></div>
                        <div class="two"><p class="mt-3 vl">10</p></div>
                        <div class="three"><p class="mt-3 vl">20</p></div>
                         <div class="four"><p class="mt-3 vl">30</p></div>
                          <div class="five"><p class="mt-3 vl">40</p></div>
                      </div>
                    </a>
</div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-lg-6 mt-3" style="border: 3px solid #2089f8;">
        <a href="{{url('/Conscientiousnessdetails')}}">
        <h5 class="mt-1" style="color: #2089f8;">C-Conscientiousness(Samvittighedsfuldhed)</h5>
        <div class="a">
            <input type="range" min="1" max="100" value="{{$cc}}" class="slider2 mt-5" id="myRange">
            <div class="six">  <p class="mt-3 vl">0</p></div>
            <div class="seven"><p class="mt-3 vl">10</p></div>
            <div class="eight"><p class="mt-3 vl">20</p></div>
             <div class="nine"><p class="mt-3 vl">30</p></div>
              <div class="ten"><p class="mt-3 vl">40</p></div>
          </div>
        </a>
</div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-lg-6 mt-3" style="border: 3px solid #7c0410;">
        <a href="{{url('/Extroversiondetails')}}">
        <h5 class="mt-1" style="color: #7c0410;">E-Extroversion(Udadvendthed)</h5>
        <div class="a">
            <input type="range" min="1" max="100" value="{{$ee}}" class="slider3 mt-5" id="myRange">
            <div class="eleven">  <p class="mt-3 vl">0</p></div>
            <div class="twelve"><p class="mt-3 vl">10</p></div>
            <div class="thirteen"><p class="mt-3 vl">20</p></div>
             <div class="fourteen"><p class="mt-3 vl">30</p></div>
              <div class="fifteen"><p class="mt-3 vl">40</p></div>
          </div>
          </a>
</div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-lg-6 mt-3" style="border: 3px solid #05ada2;">
        <a href="{{url('/Agreeablenessdetails')}}">
        <h5 class="mt-1" style="color: #05ada2;">A-Agreeableness(lmØdekommenhed)</h5>
        <div class="a">
            <input type="range" min="1" max="100" value="{{$aa}}" class="slider4 mt-5" id="myRange">
            <div class="sixteen">  <p class="mt-3 vl">0</p></div>
            <div class="seventeen"><p class="mt-3 vl">10</p></div>
            <div class="eighteen"><p class="mt-3 vl">20</p></div>
             <div class="nineteen"><p class="mt-3 vl">30</p></div>
              <div class="twenteen"><p class="mt-3 vl">40</p></div>
          </div>
        </a>
</div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-lg-6 mt-3" style="border: 3px solid #187c04;">
        <a href="{{url('/Neuroticismdetails')}}">
        <h5 class="mt-1" style="color: #187c04;">N-Neuroticism(Bekymret)</h5>
        <div class="a">
            <input type="range" min="1" max="100" value="{{$nn}}" class="slider5 mt-5" id="myRange">
            <div class="twentyone">  <p class="mt-3 vl">0</p></div>
            <div class="twentytwo"><p class="mt-3 vl">10</p></div>
            <div class="twentythree"><p class="mt-3 vl">20</p></div>
             <div class="twentyfour"><p class="mt-3 vl">30</p></div>
              <div class="twentyfive"><p class="mt-3 vl">40</p></div>
          </div>
        </a>
</div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-lg-6 mt-3" style="border: 3px solid #5a551c;">
        <a href="{{url('/selfesteemdetails')}}">
        <h5 class="mt-1" style="color: #5a551c;">SE-Self esteem(Selvvaerd)</h5>
        <div class="a">
            <input type="range" min="1" max="100" value="{{$se}}" class="slider6 mt-5" id="myRange">
            <div class="twentysix">  <p class="mt-3 vl">0</p></div>
            <div class="twentyseven"><p class="mt-3 vl">10</p></div>
            <div class="twentyeight"><p class="mt-3 vl">20</p></div>
             <div class="twentynine"><p class="mt-3 vl">30</p></div>
              <div class="thirty"><p class="mt-3 vl">40</p></div>
          </div>
        </a>
</div>
</div>
<div class="row">
    <div class="col-lg-12" style="display: flex;
    justify-content: center;
    margin-top: 35px;">
    @if(session()->get('role_id') == 3)
      <a href="{{url('studentquiz')}}">
        <button type="submit btn btn-lg" style="border: 2px solid #043740 !important;
    width: 20%;
    color: #fff;
    border-radius: 6px;
    width: 145px;
    height: 40px;
    font-weight: 500 !important;
    transition: 0.3s;
    background:#043740;
    text-align: center;">Start quiz</button>
      </a>
    @endif
    </div>
</div>
</div>
    </main>
@endsection

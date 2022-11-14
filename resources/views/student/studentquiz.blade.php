@extends('layout.studentheader.studentheader') @section('content')

 <style>
body {
    background-image: url(http://globaldigitizers.com/adminpanel/public/images/updated.png);
    background-repeat: no-repeat;
    overflow-x: hidden;
}
     html{
              overflow-x: hidden;
      }
.mains{
    min-height: calc(100vh - 40px);
}
input[type=checkbox], input[type=radio] {
    transform: translateX(60px);
}
.grid{
  display: none;
}
 .de {
    display: flex;
    justify-content:center;
}
  .quizimages{
    height: 100px;
    object-fit: cover;
    margin-left: 20px;
    width: 100px;
    border: 2px solid#043740;
  }
  .quiztitle{
    margin-top:0px;
    
}
.submitbtndiv{
    justify-content:center;
}

.submitbtndiv{
    justify-content:center;
}
.submitbtn{
background: #043740;
    border-color: #043740;
    color: #fff;
margin-left: 24px; 
    width: 350px;
    height: 46px;
  }
  #formsubmit{
      
  }

   .submitbtn:hover{
    background: #043740;
    color: yellow;
  }
  .mynextbtn{
      margin-right: 152px !important;
      margin-left:10px !important;
  }
    .nextbtn{
    
    background: #043740;
    border-color: #043740;
    color: #fff;
    margin-right: 77px;
    margin-left: 10px;
        width: 170px;
  }
  .nextbtn:hover{
    background: #043740;
    color: yellow;
  }
 .myprevbtn{
 width: 350px !important;
    height: 46px !important;
    margin-left: 60px !important;
 }
 .myprevbtn:hover{
     color:yellow;
 }
  .previousbtn {
display: block;
    width: 170px !important;
    height: auto !important;
    background: #043740;
    color:#fff;
}
.previousbtn:hover{
    color:yellow;
}
  .checkbtn{
      margin-right: 8px !important;
  }
  .questiontitle{
    color: #043740;
    font-size: 30px;
    font-weight: bold;
    text-align:center;
  }
  .questionheading{
    color: #043740;
    font-size: 20px;
    padding-left: 15px;
  }
  .inputbtns{
    width: 350px;
    border: 2px solid #043740;
    background: #043740 !important;
    font-size: 19px;
    color: yellow;
  }
    .buttonsdiv{
      transform: translateX(670px);
  }
  
  

  
    @media screen and (max-width: 1280px) and (min-width: 701px) {
       html{
              overflow-x: hidden;
      }
      
    .questiontitle {
    text-align: center;
   padding-left: 0px; 
}
.buttonsdiv {
    transform: translateX(268px);
}
   }
   
   
   
   
   
  @media (max-width: 700px) {
      html{
              overflow-x: hidden;
      }
       .de {
    display: block;
}
  
      .quizimages {
    height: 70px;
    object-fit: cover;
   margin-left: 30px;
    width: 70px;
    border: 2px solid#043740;
}
      .questiontitle {
    color: #043740;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
   padding-left: 0px; 
}
      .previousbtn {
  margin-left: 0px;
}
 .nextbtn{
    margin-left: 22px;
}
.submitbtndiv{
    justify-content:center;
}
.submitbtn{
margin-left: 55px;
}
.mysubmitbtn{
     position: absolute;
    left: 31%;
    top: 752px;
  }
.buttonsdiv {
    transform: translateX(80px);
}
  }


</style>
<main class="mains">
    <div class="container" style="margin-top: 400px;">
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
    <div class="row d-flex justify-content-center">
     
<!-- Slides -->
 <?php
                                $opindex = 1;
                                $getleangth = count($detail)+1;
                                $questionlength = count($detail);
                            ?>
                    @foreach($detail as $details)
    <div class="col-lg-12 grid">
    <div class="c">
        <div class="title questiontitle">Question{{$details->quizquestion_question}}</div>
        <div class="description">
            <div class="row mt-3">
            </div>
            <div class="de">
 <?php
                          $image = DB::table('quizattachment')
                         ->where('status_id','=',1)
                         ->where('quizquestion_id','=',$details->quizquestion_id)
                         ->select('*')
                         ->get();
                         ?>
                         @foreach($image as $images)
                           <div style="">
                                 <img src="{!! asset('public/order/') !!}/{{$images->quizattachment_name}}" class="quizimages"><br>
                                 <input type="radio" class="quizcheckbox" name="{{$details->quizquestion_id}}">
                               </div>
                                    @endforeach
            
        </div>
         </div>
   <?php $opindex ++;?>
                                @if($getleangth == $opindex)
           <div id="formsubmit" class="row d-flex submitbtndiv mt-3">
                <button class="btn submitbtn" onclick="redirect()">Submit</button>
           </div>
        @endif
    </div>
    </div>
    @endforeach

</div>

      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-12 d-flex buttonsdiv">
       <button id="prev" class="btn previousbtn" onClick="prev()" style="display: none;">Previous</button>
        <button id="next" class="btn nextbtn mynextbtn" onClick="next()">Next</button>
      </div>
    </div>
    </div>
    </div>
</main>
<script>
    function lock(){
        window.location.replace("{{ URL::to('/studenttestlist')}}");
    }
</script>
<script>
  var visibleDiv = 0;
  function showDiv()
  {
    $(".grid").hide();
    $(".grid:eq("+ visibleDiv +")").show();
  }
  showDiv()

function next()
{
    if (visibleDiv == $(".grid").length-2) {
        document.getElementById('next').style.display = 'none';
        document.getElementById('formsubmit').classList.add( "mysubmitbtn" );
        document.getElementById('prev').classList.add( "myprevbtn" );
    }
if ($(".grid").length-1 != visibleDiv) {
    document.getElementById('next').classList.remove("mynextbtn");
    document.getElementById('prev').style.display = 'block';
    if(visibleDiv == $(".grid").length-1)
  {
    visibleDiv = 0;
  }
  else {
    visibleDiv ++;
  }
  showDiv();
}else{
    document.getElementById('next').style.display = 'none';
}
}


function prev()
{
if (visibleDiv == 1) {
    document.getElementById('prev').style.display = 'none';
}
if (visibleDiv <= $(".grid").length-1) {
    document.getElementById('prev').classList.remove("myprevbtn");
    document.getElementById('next').classList.add("mynextbtn");
    document.getElementById('next').style.display = 'block';
    if (visibleDiv == 0)
  {
    visibleDiv= $(".grid").length-1
  }
  else {
    visibleDiv --;
  }
  showDiv();
}else{
    document.getElementById('next').style.display = 'none';
}
}

</script>
<script>
    function redirect(){
    window.location.replace('{{url('/studenttestlist')}}');
  }
</script>
@endsection
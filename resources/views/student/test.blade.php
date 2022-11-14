@extends('layout.studentheader.studentheader') 
@section('content')

 <style>
body {
    background-image: url(http://globaldigitizers.com/adminpanel/public/images/updated.png);
    background-repeat: no-repeat;
    overflow-x: hidden;
}
.grid{
  display: none;
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
      margin-left:0px !important;
  }
 .myprevbtn{
 width: 350px !important;
    height: 46px !important;
    margin-left: 20px !important;
 }
 .myprevbtn:hover{
     color:yellow;
 }
  .previousbtn {
display: block;
    width: 170px !important;
    height: auto !important;
    margin-left: 97px;
    background: #043740;
    color:#fff;
}
.previousbtn:hover{
    color:yellow;
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
  .checkbtn{
      margin-right: 8px !important;
  }
  .questiontitle{
    color: #043740;
    font-size: 40px;
    font-weight: bold;
    
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
     justify-content:center;
  }
  @media (max-width: 480px) {
      html{
          overflow: hidden;
      }
      .previousbtn {
  margin-left: 65px;
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
    left: 44%;
    top: 167px;
  }
.buttonsdiv {
    transform: translateX(67px);
}
  }
  /* .submitbtn{
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
  } */

</style>
<main class="mains">
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
      @if($result == "0")
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
      @endif
      @if($result == "0")
      <div class="container fade" style="margin-top: 10px"></div>
      @else
      <div class="container" style="margin-top: 380px">
      @endif

    <div class="row d-flex justify-content-center">
      <form action="{{ URL::to('/submitstudenttest')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
<!-- Slides -->
    <?php
        $opindex = 1;
        $lastindex = 2;
        $getleangth = count($question)+1;
        $questionlength = count($question);
    ?>
    <input type="hidden" name="hdnlength" value="{{$questionlength}}">
    @foreach($question as $questions)
    <div class="col-lg-12 grid">
    <div class="c">
        <div class="title questiontitle">Question <?php echo($opindex);?></div>
        <div class="description">
            <div class="row mt-3">
                <h6 class="questionheading">{{$questions->testquestions_question}}</h6>
            </div>
            <?php
            $answer = DB::table('testanswers')
            ->where('status_id','=',1)
            ->where('testquestions_id','=',$questions->testquestions_id)
            ->select('*')
            ->get();
            ?>
            @foreach($answer as $answers)
            <div class="row mt-3">
                <div class="col-12 col-lg-12 d-flex justify-content-center ref">
                    <input type="radio" required class="checkbtn" name="answers{{$opindex}}" onClick="next()" value="{{$answers->testanswers_id}}~{{$answers->testquestions_id}}" />
                    <input type="text" class="form-control inputbtns" value="{{$answers->testanswers_answer}}" readonly="readonly"/>
                </div>
            </div>
            @endforeach
        </div>
        <?php $opindex ++; $lastindex++;?>
        @if($getleangth == $opindex)
           <div id="formsubmit" class="row d-flex submitbtndiv mt-3">
                <button class="btn submitbtn"  type="submit">Submit</button>
           </div>
        @endif
    </div>
    </div>
    @endforeach

</div>
 </form>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-12 d-flex buttonsdiv">
        <button id="prev" class="btn previousbtn" onClick="prev()" style="display: none;">Previous</button>
        <button id="next" class="btn nextbtn mynextbtn" onClick="next()">Next</button>
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
   $('#formsubmit').on("click", function(){
      let valid = true;
      $('[required]').each(function() {
        if ($(this).is(':invalid') || !$(this).val()) valid = false;
      })
      if (!valid) alert("Please Answer All Questions!");
      // else alert('Evaluating');
    })
</script>
@endsection
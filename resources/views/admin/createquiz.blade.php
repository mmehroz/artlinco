@extends('layout.adminheader.adminheader')
@section('content')
<style>
button:active {
    border:none !important;
    border-style:none !important;
}
    .quizaddbtn{
        background: #043740;
    color: #fff;
    border-color: #043740;
    border-radius: 6px;
    }
    .quizaddbtn:hover{
        color:yellow;
    }
    .quizremovebtn{
         background: red;
    color: #fff;
    border-color: red;
    border-radius: 6px;
    }
    .quizquestion{
        width: 35%;
    background: #043740;
    border: 1px solid #043740;
    border-radius: 9px;
    padding: 15px;
    color: yellow;
    }

    .quizmultiupload{
    margin-left: 30px;
    margin-top: 14px;
    }
    .quizdiv{
        margin-top: 12px;
    width: 30%;
    }
.quizimg{
    width: 30%;
    border: 3px solid #043740;
}
.dynamicdivs{
    display: flex;
}
@media only screen and (max-width: 600px) {
    .dynamicdivs{
   display: block;
}
    .quizquestion {
    width: 100%;
}
    .quizmultiupload {
    margin-left: 0px;
}
}
</style>
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/admincss/quizmanage.css') !!}">
<main class="mains">
    <div class="container" style="margin-top:430px">
        <div class="" style="height: 700px;overflow:scroll">
          <div class="fields_wrappers mt-5">

                @if(isset($details))
                    @foreach($details as $val)
                        <input type="text" class="quizquestion mt-3" placeholder="Write Your Question" name="prev_question" value="{{$val->quizquestion_question}}"/>
                        <?php
                        $attachment = DB::table('quizattachment')
                        ->where('status_id','=',1)
                        ->where('quizquestion_id','=',$val->quizquestion_id)
                        ->select('quizattachment_name')
                        ->get();
                        ?>
                        @foreach($attachment as $attachments)
                        <div class="quizdiv">
                            <img class="quizimg" src="{!! asset('public/order/') !!}/{{$attachments->quizattachment_name}}">
                            <input type="checkbox">
                        </div>
                        @endforeach
                    @endforeach
                @endif

        </div>
        <form action="{{ URL::to('/submitquiz')}}" method="POST" class="signup-form" enctype="multipart/form-data">
            {{ csrf_field() }}
             <input type="hidden" name="quiz_id" value="{{$quiz_id}}">
            <!-- <h2 style="color:#043740;font-weight:bold">Create Quiz</h2> -->
            <div class="fields_wrappers mt-5">
                <div class="dynamicdivs">
                    <input type="text" class="quizquestion" placeholder="Write Your Question" name="quizquestion_question" />
                    <div>
                        <input type="file" require class="quizmultiupload" id="files" name="attachment[]" multiple>
                    </div>

                    <!-- <a href="javascript:void(0);" class="add_btns" title="Add field"><button class="quizaddbtn">Add Field</button></a> -->
                </div>
                <output id="result" style=""></output>
            </div>
            <div class="text-left">
            <button class="materialbtn submitbtn btn  mt-4" type="submit">Go To Next Question</button>
            <button class="materialbtn submitbtn btn  mt-4" type="button" onclick="next()">Submit</button>
            </div>
        </form>
    </div>
</div>
</main>
<script>
    function next(){
        window.location.replace("{{ URL::to('/quizlist')}}");
    }
</script>
@endsection

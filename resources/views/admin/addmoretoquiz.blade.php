@extends('layout.adminheader.adminheader')
@section('content')
<style>
    ::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    background-color: #f5f5f5;
}

::-webkit-scrollbar {
    width: 3px;
    background-color: #043740;
    margin-left: 20px;
}

::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: #043740;
}

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
        width:19%;
    }
</style>
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/admincss/quizmanage.css') !!}">
<main class="mains">
    <div class="container" style="margin-top:290px">
        <form action="{{ URL::to('/submitquiz')}}" method="POST" class="signup-form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="qiz_token" value="{{$quiz_token}}">
            <h2 style="color:#043740;font-weight:bold">Create Quiz</h2>
            <div class="fields_wrappers mt-5">
                <div>
                    <input type="text" class="quizquestion" placeholder="Write Your Question" name="field_name[]" value=""/>
                    <input type="file" class="quizmultiupload" id="files" name="files" multiple>
                    <!-- <a href="javascript:void(0);" class="add_btns" title="Add field"><button class="quizaddbtn">Add Field</button></a> -->
                </div>
                <output id="result" style="display:flex;"></output>
            </div>
            <div class="text-left">
            <button class="materialbtn submitbtn btn  mt-4" type="submit">Go To Next Question</button>
            <button class="materialbtn submitbtn btn  mt-4" type="button" onclick="next()">Submit</button>
            </div>
        </form>
    </div>
</main>
<script>
    function next(){
        window.location.replace("{{ URL::to('/quizlist')}}");
    }
</script>
@endsection

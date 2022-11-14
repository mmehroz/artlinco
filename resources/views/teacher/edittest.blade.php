@extends('layout.teacherheader.teacherheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/teachercss/question.css') !!}">
        <!--Main layout-->
        <main class="mains">
            <div class="container" style="margin-top:420px">
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
<form action="{{ URL::to('/submittestadmin')}}" method="POST" class="form-horizontal" enctype="multipart/form-data" style="width: 100%;">
  {{ csrf_field() }}
  <input type="hidden" name="updateorsave" value="save">
<h2 style="color:#043740;font-weight:bold">Create Personality Test</h2>
<div class="row mt-3">
    <div class="col-12 col-lg-4">
        <label for="" class="labelstyle">Test Title</label>
      <input type="text" class="form-control" name="test_title" value="{{$data->test_title}}" required placeholder="Test Title">
    </div>
    <div class="col-12 col-lg-4">
        <label for="" class="labelstyle">Test Duration</label>
      <input type="text" class="form-control" name="test_duration" value="{{$data->test_duration}}" required placeholder="Test Duration">
    </div>
    <div class="col-12 col-lg-4">
        <label for="" class="labelstyle">Test Date</label>
      <input type="date" class="form-control" name="test_date" value="{{$data->test_date}}" required placeholder="Test Date">
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
        <label for="" class="labelstyle">Test Description</label>
      <textarea type="text" class="form-control" name="test_description" required rows="7" placeholder="Test Description">
        {{$data->test_description}}
      </textarea>
    </div>
  </div>
  <div class="field_wrapper text-left mt-5">
      <div class="inner_field aop">
          <?php
            $question = DB::table('testquestions')
            ->where('test_id','=',$data->test_id)
            ->where('status_id','=',1)
            ->select('*')
            ->get();
          ?>
          @foreach($question as $questions)
          <h5 style="margin-top: 20px;
          height: 8px;font-size:17px;
          font-weight:bold;color:red">Question</h5>
          <input type="text" class="questiondivs" placeholder="Write Question" name="que{{$questions->testquestions_id}}" id='question_name' value="{{$questions->testquestions_question}}" required/>
          <?php
            $answer = DB::table('testanswers')
            ->where('testquestions_id','=',$questions->testquestions_id)
            ->where('status_id','=',1)
            ->select('*')
            ->get();
          ?>
                <h5 style="margin-top: 20px;
    height: 8px;font-size:17px;
    font-weight:bold;color:#043740">Answer</h5>
          @foreach($answer as $answers)
          <input type="radio" name="rd{{$questions->testquestions_id}}" value="{{$answers->testanswers_id}}">
          <input type="text" style="margin: 8px" class="answerdivs mt-3" placeholder="Write Answer" name="ans{{$answers->testanswers_id}}" value="{{$answers->testanswers_answer}}" required/>
          @endforeach
          @endforeach
      </div>
  </div>
     <div class="text-left">
        <button
            class="materialbtn submitbtn btn  mt-4"
            type="submit"
        >
            Submit
        </button>
    </div>
        </form>
    </div>
</main>
@endsection
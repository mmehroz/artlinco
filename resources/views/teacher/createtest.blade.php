@extends('layout.teacherheader.teacherheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/teachercss/question.css') !!}">
        <!--Main layout-->
        <main class="mains">
            <div class="container" style="margin-top:290px">
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
<form action="{{ URL::to('/submittest')}}" method="POST" class="form-horizontal" enctype="multipart/form-data" style="width: 100%;">
  {{ csrf_field() }}
<h2 style="color:#043740;font-weight:bold">Personality Test</h2>
<div class="row mt-3">
    <div class="col-12 col-lg-4">
        <label for="" class="labelstyle">Test Title</label>
      <input type="text" class="form-control" name="test_title" required placeholder="Test Title">
    </div>
    <div class="col-12 col-lg-4">
        <label for="" class="labelstyle">Test Duration</label>
      <input type="text" class="form-control" name="test_duration" required placeholder="Test Duration">
    </div>
    <div class="col-12 col-lg-4">
        <label for="" class="labelstyle">Test Date</label>
      <input type="date" class="form-control" name="test_date" required placeholder="Test Date">
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
        <label for="" class="labelstyle">Test Description</label>
      <textarea type="text" class="form-control" name="test_description" required rows="7" placeholder="Test Description"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="text-white mt-5">
        <label for="actual-btn1" class="btn materialbtn uploadbtns">Upload Audio</label>
        <input type="file" id="actual-btn1" name="testattachment_name" hidden="">
        <span class="span1" id="file-chosen1">No file chosen</span>
      <label for="actual-btn2" class="btn materialbtn leftbtn documentbtn uploadocument">Upload Document</label>
      <input type="file" id="actual-btn2" name="testattachment_name" hidden="">
      <span class="span2" id="file-chosen2">No file chosen</span>
      <label for="actual-btn" class="btn materialbtn uploadvideobtn">Upload Video</label>
      <input type="file" id="actual-btn" name="testattachment_name" hidden="">
      <span id="file-chosen" class="span3">No file chosen</span>
        </div>
  </div>

                    <div
                        class="field_wrapper text-left mt-5">
                        <div class="inner_field aop">
                            <input
                                type="text"
                                class="materialbtn inputwidth"
                                placeholder="Write Question"
                                name="question_name[]"
                                id='question_name'
                                value=""
                                required
                            />
                            <input
                                type="text"
                                class="materialbtn inputwidth answer_field"
                                placeholder="Write Answer"
                                name="staticanswer_name[]"
                                value=""
                                required
                            />
                          <input type="checkbox" class="checkboxinput" value="0" name="staticcorrect_answer[]">
                            <button class="add_answer" type="button" title="Add Answer">Add Answers</button>
                            <button
                                href="javascript:void(0);"
                                class="add_button"
                                type="button"
                                title="Add field"
                                >Add More Questions/Answers
                            </button>
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
        <!--Main layout-->

@endsection

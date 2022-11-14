@extends('layout.teacherheader.teacherheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/teachercss/question.css') !!}">
        <!--Main layout-->
        <main class="mains">
            <div class="container" style="margin-top:390px">
                <form onsubmit="return false" class="text-white" style="width: 100%;">
<h2 style="color:#043740;font-weight:bold">Personality Test</h2>
<div class="row mt-3">
    <div class="col-12 col-lg-4">
        <label for="" class="labelstyle">Test Title</label>
      <input type="text" class="form-control" placeholder="Test Title" value="Test#1">
    </div>
    <div class="col-12 col-lg-4">
        <label for="" class="labelstyle">Test Duration</label>
      <input type="text" class="form-control" placeholder="Test Duration" value="1 hour">
    </div>
    <div class="col-12 col-lg-4">
        <label for="" class="labelstyle">Test Date</label>
      <input type="text" class="form-control" placeholder="Test Date" value="06-08-1997">
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
        <label for="" class="labelstyle">Test Description</label>
      <textarea type="text" class="form-control" rows="7" placeholder="Test Description" value="This is for student">This is for student</textarea>
    </div>
  </div>
  <div class="row">
    <div class="text-white mt-5" style="width: 100%;position:relative;">
        <label for="actual-btn1" class="btn materialbtn uploadbtns">Upload Audio</label>
        <input type="file" id="actual-btn1" hidden="">
        <span class="span1" id="file-chosen1">mysound.mp3</span>
      <label for="actual-btn2" class="btn materialbtn leftbtn documentbtn uploadocument">Upload Document</label>
      <input type="file" id="actual-btn2" hidden="">
      <span class="span2" id="file-chosen2">mypersonalpdf.doc</span>
      <label for="actual-btn" class="btn materialbtn">Upload Video</label>
      <input type="file" id="actual-btn" hidden="">
      <span id="file-chosen" class="span3">myvideo.mp4</span>
        </div>
  </div>

                    <div
                        class="field_wrapper text-left mt-5"
                    >
                        <div class="inner_field aop">
                            <input
                                type="text"
                                class="materialbtn inputwidth"
                                placeholder="Write Question"
                                name="field_name[]"
                                value="What is Your Name"
                                style="width: 340px;"
                            />
                            <input
                                type="text"
                                class="materialbtn inputwidth answer_field"
                                placeholder=""
                                name="field_name[]"
                                value="My Name is Roger"
                                style="width: 340px;"
                            />
                            <!-- <input type="checkbox" class="checkboxinput"> -->
                        </div>
                        <div class="inner_field aop mt-3">
                            <input
                                type="text"
                                class="materialbtn inputwidth"
                                placeholder="Write Question"
                                name="field_name[]"
                                value="What is Your Country Name"
                                style="width: 340px;"
                            />
                            <input
                                type="text"
                                class="materialbtn inputwidth answer_field"
                                placeholder=""
                                name="field_name[]"
                                value="USA"
                                style="width: 340px;"
                            />
                            <!-- <input type="checkbox" class="checkboxinput"> -->
                        </div>
                        <div class="inner_field aop mt-3">
                            <input
                                type="text"
                                class="materialbtn inputwidth"
                                placeholder="Write Question"
                                name="field_name[]"
                                value="What is Pet Name"
                                style="width: 340px;"
                            />
                            <input
                                type="text"
                                class="materialbtn inputwidth answer_field"
                                placeholder="My Name is Mohsin"
                                name="field_name[]"
                                value="DODO"
                                style="width: 340px;"
                            />
                            <!-- <input type="checkbox" class="checkboxinput"> -->
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <!--Main layout-->

@endsection

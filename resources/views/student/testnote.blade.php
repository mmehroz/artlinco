@extends('layout.studentheader.studentheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/teachercss/testnote.css') !!}">

<div class="mains">
<div class="container" style="margin-top: 50px;">
<div class="row">
  <div class="col-12">


  <div class="headingandtextdiv">
  <h2 class="headingstyle">personality test</h2>
    <p class="parastyle">
        This is a test designed to help you better understand who you are as a person in a work context. You should answer the questions based on how you would react or feel on your job. There are no right or wrong answers.
In the following columns you should mark a number from 1-5 based on how and in what degree you agree with the statement. the number 1 = disagree, 2 = slightly disagree, 3 = neutral, 4 = slightly agree 5 = agree.  </p>
  </div>

<div class="mt-2 text-center">
  <img class="personalityimg" src="{!! asset('public/images/personality.png') !!}">
</div>

<div class="text-center mt-4">
  <button class="btn startestbtn"><a href="{{url('startstudenttest')}}/{{$testid}}">Start Test</a></button>
  </div>


</div>
  </div>
  </div>
  </div>
@endsection
@extends('layout.adminheader.adminheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/admincss/index.css') !!}">
<style>
.test-list-btn{
  transform: translate(-115px);
}



  @media only screen and (max-width: 600px) {
    .test-list-btn {
    transform: translate(0px);
  }
  .test-question-btn{
  margin-top:15px;
}
}
</style>
  <!--Main layout-->
  <main class="mains">
    <div class="container d-flex align-items-center justify-content-center text-center" style="margin-top: 390px;">
      <script>
          setTimeout(function() {
              $('#messagediv').hide('smooth');
          }, 1000); // <-- time in milliseconds
      </script>
      <div id="messagediv">
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
        </div>
      <div class="text-white mt-5" style="width: 100%;">
       <button for="actual-btn" class="btn materialbtn">   <a href="{{url('/userlist')}}">User Registration</a></button>

        <div class=" justify-content-center secondbtnrow">
      <!-- <button for="actual-btn" class="btn materialbtn "> <a href="{{url('/quizlist')}}">Quiz Manager</a></button> -->
      <button for="actual-btn" class="btn materialbtn userstatisbtn"><a href="{{url('/statistics')}}">Statistics </a></button>
      <!-- <button for="actual-btn" class="btn materialbtn userstatisbtn"><a href="{{url('/teacherstats')}}">Dashboard</a></button> -->
        </div>
        <div class=" justify-content-center secondbtnrow">
        <!-- <button for="actual-btn" class="btn materialbtn"><a href="{{url('/personalitydatabase')}}">Personality Database</a></button> -->
        <button for="actual-btn" class="btn materialbtn userstatisbtn"><a href="{{url('/personalityandquizmanager')}}">Personality Test and Quiz Manager</a></button>
        <!-- <button for="actual-btn" class="btn materialbtn test-question-btn"><a href="{{url('/testquestions')}}">Test Questions</a></button> -->
          </div>
          <div class=" justify-content-center secondbtnrow">
            <!-- <button for="actual-btn " class="btn materialbtn test-list-btn"><a href="{{url('/testlist')}}">Test List</a></button> -->
              </div>
      </div>

    </div>
  </main>
  <!--Main layout-->

  @endsection
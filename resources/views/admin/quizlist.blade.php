@extends('layout.adminheader.adminheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/public/css/admincss/quizmanage.css') }}"></link>
  <main class="mains">
      <div class="container align-items-center justify-content-center text-center" style="margin-top: 390px;">
        <div class="row justify-content-between">
          <h2 style="font-weight: bold;text-align:left">QUIZ'S LIST</h2>
          <!--<button class="btn materialbtn addstudentbtn" style=""><a href="{{url('/createquiz')}}">Create Quiz</a></button>-->
        </div>
        <div class="row">
          <div class="col-md-12">
          <div class="table-wrap">
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
          <table class="table mytable">
          <thead class="thead-primary">
            <tr class="theadrow-primary">
              <th>Quiz Date</th>
              <th>Created By</th>
              <th>No Of Question</th>
              <th>View Quiz</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $val)
            <?php
            $noofquestions = DB::table('quizquestion')
            ->where('quiz_id','=',$val->quiz_id)
            ->select('quizquestion_id')
            ->count();
            ?>
            <tr>
              <td>{{$val->quiz_date}}</td>
              <td>{{$val->users_firstname}}</td>
              <td>{{$noofquestions}}</td>
              <td><a href="{{url('quizdetails/')}}/{{$val->quiz_id}}" class="btn editbtn">View Quiz</a></td>
            </tr>
            @endforeach
          </tbody>
          </table>
          </div>
          </div>
          </div>
      </div>
  </main>
@endsection
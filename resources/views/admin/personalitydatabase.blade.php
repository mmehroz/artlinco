@extends('layout.adminheader.adminheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/admincss/personalitydb.css') !!}">
  <!--Main layout-->
  <main class="mains">
    <div class="container align-items-center justify-content-center text-center" style="margin-top: 390px;">
        <div class="row" id="newpost">
          <div class="col-md-12">
          <div class="table-wrap">
          <table class="table mytable">
          <thead class="thead-primary">
            <tr class="theadrow-primary">
              <th>Test Title</th>
              <th>Test Duration</th>
              <th>Test Date</th>
              <th>No of Questions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $val)
            <tr>
              <td>{{$val->test_title}}</td>
              <?php
                $noofquestions = $task = DB::table('testquestions')
                ->where('test_id','=',$val->test_id)
                ->select('test_id')
                ->count();
              ?>
              <td>{{$val->test_duration}}</td>
              <td>{{$val->test_date}}</td>
              <td>{{$noofquestions}}</td>
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
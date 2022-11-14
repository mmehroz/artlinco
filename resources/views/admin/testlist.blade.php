@extends('layout.teacherheader.teacherheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/teachercss/testlist.css') !!}">
<div class="container align-items-center justify-content-center text-center" style="margin-top: 390px;">
<div class="row justify-content-between">
<h2 style="font-weight: bold;text-align:left">TEST'S LIST</h2>
          <button class="btn materialbtn addstudentbtn"><a href="{{url('/createtest')}}">Create Test</a></button>
</div>
        <div class="row">
          <div class="col-md-12">
          <div class="table-wrap">
          <table class="table mytable">
          <thead class="thead-primary">
          <tr class="theadrow-primary">
          <th>Test Title</th>
          <th>Test Duration</th>
          <th>Test Date</th>
          <th>No of Questions</th>
          <th>View</th>
          <th>Delete</th>
          </tr>
          </thead>
          <tbody>
            @foreach($data as $val)
            <?php
            $noofquestions = DB::table('testquestions')
            ->where('status_id','=',1)
            ->where('test_id','=',$val->test_id)
            ->select('testquestions_id ')
            ->count();
            ?>
            <tr>
              <td>{{$val->test_title}}</td>
              <td>{{$val->test_duration}}</td>
              <td>{{$val->test_date}}</td>
              <td>{{$noofquestions}}</td>
              <td><a href="{{url('/viewtest')}}/{{$val->test_id}}" class="btn btn-success">View</a></td>
              <td><a href="{{url('/deletetest')}}/{{$val->test_id}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
          </table>
          </div>
          </div>
          </div>
      </div>
      @endsection
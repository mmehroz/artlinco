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
          <th>View / Edit</th>
          <th>Delete</th>
          <th>Result</th>
          <th>Share Link</th>
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
              @if($val->created_by == session()->get('id'))
              <td><a href="{{url('/viewtest')}}/{{$val->test_id}}" class="btn btn-success">View / Edit</a></td>
              <td><a href="{{url('/deletetest')}}/{{$val->test_id}}" class="btn btn-danger">Delete</a></td>
              @else
              <td>-</td>
              <td>-</td>
              @endif
              <td><a href="{{url('/showresult')}}/{{$val->test_id}}" class="btn btn-primary">Show Result</a></td>
 <input type="text" style="display: none;" name="hdncopy" id="hdn{{$val->test_id}}" value="{{url('/studenttestshare')}}/{{$val->test_id}}/{{session()->get('id')}}">
              <td><button title="Click To Copy Link" class="btn btn-info" onclick="copylink({{$val->test_id}})">Copy Link</button></td>
            </tr>
            @endforeach
          </tbody>
          </table>
          </div>
          </div>
          </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script type="text/javascript">
           function copylink($id) {
                var copyText = document.getElementById("hdn"+$id);
                copyText.select();
                copyText.setSelectionRange(0, 99999); /* For mobile devices */
                navigator.clipboard.writeText(copyText.value);
            }
      </script>
      @endsection
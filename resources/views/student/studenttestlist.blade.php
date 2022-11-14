@extends('layout.studentheader.studentheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/teachercss/testlist.css') !!}">
<div class="container align-items-center justify-content-center text-center" style="margin-top: 410px;">
        <div class="row">
          <div class="col-md-12">
          <div class="table-wrap">
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
          </div>
          <div class="row justify-content-between">

              <h2 style="font-weight: bold;text-align:left">TEST'S LIST</h2>

          </div>

<div class="row">
          <table class="table mytable">
          <thead class="thead-primary">
          <tr class="theadrow-primary">
          <th>Test Title</th>
          <th>Test Duration</th>
          <th>Test Date</th>
          <th>No of Questions</th>
          <th>Start Test</th>
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
            $istestsubmited = DB::table('testsubmited')
            ->where('status_id','=',1)
            ->where('test_id','=',$val->test_id)
            ->where('users_id','=',session()->get('id'))
            ->select('testsubmited_id ')
            ->count();
            ?>
            <tr>
              <td>{{$val->test_title}}</td>
              <td>{{$val->test_duration}}</td>
              <td>{{$val->test_date}}</td>
              <td>{{$noofquestions}}</td>
              @if($istestsubmited == 0)
                <td><a href="{{url('/testnote')}}/{{$val->test_id}}" class="btn btn-success">Start Test</a></td>
              @else
                <td>Already Submited</td>
              @endif
            </tr>
            @endforeach
          </tbody>
          </table>
          </div>
          </div>
          </div>
      </div>
      @endsection
@extends('layout.teacherheader.teacherheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/teachercss/testlist.css') !!}">
<div class="container align-items-center justify-content-center text-center" style="margin-top: 390px;">
        <div class="row">
          <div class="col-md-12">
            <div class="row justify-content-between align-items-center">
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
            <h2 class="studentlistheading" style="font-weight: bold;text-align:left">STUDENT'S LIST</h2>
            <button class="btn materialbtn addstudentbtn"><a href="{{url('/addstudent')}}">Add Student</a></button>
            </div>
          <div class="table-wrap ter">
          <table class="table mytable">
          <thead class="thead-primary">
          <tr class="theadrow-primary">
          <th>First Name</th>
          <th>Last Name</th>
          <th>E-mail</th>
          <th>Mobile#</th>
          <th>Gender</th>
          <th>D.O.B</th>
          <th>Edit</th>
          <th>Delete</th>
          </tr>
          </thead>
          <tbody>
          @foreach($data as $val)
          <tr>
            <td>{{$val->users_firstname}}</td>
            <td>{{$val->users_lastname}}</td>
            <td>{{$val->users_email}}</td>
            <td>{{$val->users_mobileno}}</td>
            <td>{{$val->users_gender}}</td>
            <td>{{$val->users_dob}}</td>
            <td><a href="{{url('/editstudent')}}/{{$val->users_id}}" class="btn editbtn">Edit</a></td>
            <td><a href="{{url('/deletestudent')}}/{{$val->users_id}}" class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
          </tbody>
          </table>
          </div>
          </div>
          </div>
      </div>
      @endsection
@extends('layout.adminheader.adminheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/public/css/admincss/pupilregistration.css') }}"></link>
  <!--Main layout-->
  <main class="mains">
    <div class="container" style="margin-top:390px;">
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

        <div class="row justify-content-between align-items-baseline">
          <h2 style="font-weight: bold;text-align: left;">USERS LIST</h2>
          <button for="actual-btn" class="btn materialbtn"><a href="{{url('/adduser')}}"> Add User</a></button>
        </div>


        <div class="align-items-center justify-content-center text-center">
        <div class="row" id="newpost">
          <div class="col-md-12">
          <div class="table-wrap">

          <table class="table mytable">
          <thead class="thead-primary">
          <tr class="theadrow-primary">
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Mobile No</th>
          <th>Role</th>
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
              <td>{{$val->role_name}}</td>
              <td><a href="{{url('/edituser')}}/{{$val->users_id}}" class="btn editbtn">Edit</a></td>
              <td><a href="{{url('/deleteuser')}}/{{$val->users_id}}" class="btn btn-danger">Delete</a></td>
            </tr>
          @endforeach
          </tbody>
          </table>
          </div>
          </div>
          </div>
      </div>
    </div>
  </main>
  <!--Main layout-->
  @endsection
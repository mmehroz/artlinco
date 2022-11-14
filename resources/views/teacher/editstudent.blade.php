@extends('layout.teacherheader.teacherheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/teachercss/testlist.css') !!}">
<style>
    .form-control:focus{
        outline: 0 !important;
        border-color: none !important;
        box-shadow: none !important;
        border: 1px solid #ced4da !important;
    }
 .showhidepass {
  
}
</style>
<main class="mains">
<div class="container" style="margin-top: 390px;">
    <h1 style="color:#043740;font-weight:bold">Edit Student</h1>
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
  <form action="{{ URL::to('/submiteditstudent')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
  {{ csrf_field() }}
  <input type="hidden" name="users_id" value="{{$data->users_id}}">
  <div class="row mt-4">
    <div class="col">
        <label style="color:#043740;font-weight:600">Enter First Name</label>
      <input type="text" name="users_firstname" value="{{$data->users_firstname}}" class="form-control" placeholder="First Name" style="height:60px">
    </div>
    <div class="col">
        <label style="color:#043740;font-weight:600">Enter Last Name</label>
      <input type="text" name="users_lastname" value="{{$data->users_lastname}}" class="form-control" placeholder="Last Name" style="height:60px">
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
        <label style="color:#043740;font-weight:600">Enter Email</label>
      <input type="email" name="users_email" value="{{$data->users_email}}" class="form-control" placeholder="E-Mail" style="height:60px">
    </div>
    <div class="col">
        <label style="color:#043740;font-weight:600">Enter Mobile Number</label>
      <input type="number" name="users_mobileno" value="{{$data->users_mobileno}}" class="form-control" placeholder="Mobile" style="height:60px">
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
        <label style="color:#043740;font-weight:600">Select Gender</label>
        <select id="inputState" name="users_gender" class="form-control" style="height:60px">
            @if($data->users_gender == "Male")
            <option selected>Male</option>
            <option>Female</option>
            <option>Other</option>
            @elseif($data->users_gender == "Female")
            <option selected>Female</option>
            <option>Male</option>
            <option>Other</option>
            @else
            <option selected>Other</option>
            <option>Female</option>
            <option>Male</option>
            @endif
          </select>
    </div>
    <div class="col" id="show_hide_password">
        <label style="color:#043740;font-weight:600">Enter Date of Birth</label>
      <input type="date" name="users_dob" value="{{$data->users_dob}}" class="form-control" placeholder="Date of Birth" style="height:60px">
      
    </div>
  </div>
  <div class="row mt-4">
    <div class="col" id="show_hide_password">
        <label style="color:#043740;font-weight:600">Enter Password</label>
      <input type="password" name="users_password" value="{{$data->users_password}}" class="form-control showhidepass" placeholder="Password" style="height:60px"><a href="" class="showhidepass"><i class="fa fa-eye-slash" aria-hidden="true" style="position: absolute;
    right: 3%;
    top: 57%;"></i></a>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
      <button type="submit" class="btn materialbtn"><a href="{{url('/teacher')}}"></a>Submit</button>
    </div>
  </div>
</form>
</div>
</main>
      @endsection
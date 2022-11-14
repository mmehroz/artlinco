@extends('layout.adminheader.adminheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/public/css/admincss/pupilregistration.css') }}"></link>
  <!--Main layout-->
  <main class="mains">
    <div class="container" style="margin-top:390px;">
        <script>
            setTimeout(function() {
                $('#messagediv').hide('smooth');
            }, 3000); // <-- time in milliseconds
        </script>
        <div id="messagediv">
          @if(session('message'))
            <div><p class="alert alert-info mt-3" >{{session('message')}}</p> </div>
          @endif
        </div>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <div><h4><li>{{ $error }}</li></h4> </div>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="align-items-center justify-content-center text-center">
        <div class="row" id="newpost">
          <div class="col-md-12">
          <div class="table-wrap">
          <h2 style="font-weight: bold;text-align: left;">User Statistics</h2>
          <table class="table mytable">
          <thead class="thead-primary">
          <tr class="theadrow-primary">
          <th>Picture</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Mobile No</th>
          <th>Gender</th>
          <th>Date Of Birth</th>
          <th>Show Result</th>
          </tr>
          </thead>
          <tbody>
          @foreach($data as $val)
            <tr>
              @if($val->users_picture == NULL)
              <td><img style="  width: 35px;
                  height: 35px;
                  border-radius: 50%;" src="{{ asset('/public/profileimage/noimage.png') }}"></td>
              @else
              <td><img style="  width: 35px;
                  height: 35px;
                  border-radius: 50%;" src="{{ asset('/public/profileimage/') }}/{{$val->users_picture}}"></td>
              @endif
              <td>{{$val->users_firstname}}</td>
              <td>{{$val->users_lastname}}</td>
              <td>{{$val->users_email}}</td>
              <td>{{$val->users_mobileno}}</td>
              <td>{{$val->users_gender}}</td>
              <td>{{$val->users_dob}}</td>
              <td><a href="{{url('/showstudentresult')}}/{{$val->users_id}}" class="btn btn-primary">Show Result</a></td>
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
@extends('layout.adminheader.adminheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/public/css/admincss/pupilregistration.css') }}"></link>
  <!--Main layout-->
  <main class="mains">
    <div class="container" style="margin-top:390px;">
        <div class="row justify-content-between align-items-baseline">
          <h2 style="font-weight: bold;text-align: left;">Result List</h2>
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
          <th>Result</th>
          </tr>
          </thead>
          <tbody>
            @foreach($data as $val)
            <tr>
              <td>{{$val->users_firstname}}</td>
              <td>{{$val->users_lastname}}</td>
              <td>{{$val->users_email}}</td>
              <td><a href="{{url('/showresultdetails')}}/{{$val->testsubmited_id}}" class="btn editbtn">show result</a></td>
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
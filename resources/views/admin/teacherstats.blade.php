@extends('layout.adminheader.adminheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/admincss/dashboard.css') !!}">
  <!--Main layout-->
  <main class="mains">
    <div class="container align-items-center justify-content-center text-center" style="margin-top: 390px;">
        <div class="row" id="newpost">
          <div class="col-md-12">
          <div class="table-wrap">
          <table class="table mytable">
          <thead class="thead-primary">
          <tr class="theadrow-primary">
          <th>Teacher Name</th>
          <th>No Of Test Created</th>
          </tr>
          </thead>
          <tbody>
            @foreach($data as $val)
            <tr>
              <td style="text-transform: capitalize;">{{$val->users_firstname}}</td>
              <?php
                $nooftestcreated = $task = DB::table('test')
                ->where('status_id','=',1)
                ->where('created_by','=',$val->users_id)
                ->select('test_id')
                ->count();
              ?>
              <td>{{$nooftestcreated}}</td>
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
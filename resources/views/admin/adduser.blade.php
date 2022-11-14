@extends('layout.adminheader.adminheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/public/css/admincss/useregister.css') }}"></link>
  <!--Main layout-->
  <main class="mains">
    <div class="container-fluid align-items-center justify-content-center text-center" style="margin-top: 190px;">
      <div class="d-flex align-items-center justify-content-center text-center">
        <div class="signup-heading">
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
          <h4>Create Account</h4>
            <div class="signup-block mt-3">
                <form action="{{ URL::to('/submitadduser')}}" method="POST" class="signup-form" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input type="text" class="form-control" name="users_firstname" required value="" id="firstname" placeholder="First Name">
                                                                        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input type="text" class="form-control" name="users_lastname" value="" id="lastname" required placeholder="Last Name">
                                                                        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <input type="email" class="form-control" name="users_email" value="" id="email" required placeholder="Email">
                                                                        </div>
                        </div>
                        <div class="col-lg-6">
                                                                    <div class="form-group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <input type="text" class="form-control" name="users_mobileno" value="" id="mobile" required placeholder="Mobile">
                                                                        </div>
                                                                </div>
                        <div class="col-lg-6">
                                                                <div class="form-group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <input type="date" class="form-control" name="users_dob" value="" id="mobile" required placeholder="Mobile">
                                                                    </div>
                                                            </div>
                       <div class="col-lg-6">
                                                            <div class="form-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <select id="inputState" required name="role_id" class="form-control" style="height: calc(0.5em + 3.75rem + 9px) !important">
                              <option value="" selected>Select Role</option>
                              <option value="1">Admin</option>
                              <option value="2">Teacher</option>
                              <option value="3">Student</option>
                            </select>
                                                                </div>
                                                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" id="show_hide_password">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <input type="password" class="form-control" name="users_password" id="password" required placeholder="Password">
                                <a href="" class="showhidepass"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                                        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" id="show_hide_password">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <input id="password-confirm" type="password" class="form-control" name="users_confirmpassword" required placeholder="Confirm Password" required="">
                                <a href="" class="showhidepass"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="term" id="term" required="">

                            <label class="form-check-label" for="term">
                                <div class="signin-link  btm-20">
                                    <b required style="padding-left:30px">I Agree To Terms & Condition, Privacy Policy.</b>
                                </div>
                            </label>
                        </div>
                    </div>
                    <button type="submit" title="Add User" class="btn materialbtn">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
  </main>
  @endsection
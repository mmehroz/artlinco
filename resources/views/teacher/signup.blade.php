<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Artlinco</title>
    <style>
      .form-control  {
    padding: .375rem 1.95rem !important;
}
input:focus{
    box-shadow: none !important;
}
    </style>
</head>
<body style="background-color: #FCF176;">
<section class="vh-100">
  <div class="container mt-4 mb-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="{!! asset('public/images/abc.jpg')!!}"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;height:338px;transform:translateY(58px)translateX(15px);" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="{{ URL::to('/submitsignup')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="testid" value="{{$test}}">
                <input type="hidden" name="teacherid" value="{{$teacher}}">
                <div class="d-flex align-items-center mb-3 pb-1">
                    <img src="{!! asset('public/images/artlincologo.svg') !!}"></img>
                  </div>
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
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Signup Your Account</h5>
                  <div class="row">
                    <div class="col-lg-6 col-12" style="position: relative;">
                      <input type="text" name="users_firstname" class="form-control" placeholder="First name" required>
                      <i class="fa fa-envelope" style="position: absolute;
                      left: 26px;
                      top: 36%;
                      font-size: 13px;"></i>
                    </div>
                    <div class="col-lg-6 col-12" style="position: relative;">
                        <input type="text" name="users_lastname" class="form-control" placeholder="Last name" required>
                        <i class="fa fa-envelope" style="position: absolute;
                        left: 26px;
                        top: 36%;
                        font-size: 13px;"></i>
                      </div>
                  </div>



                  <div class="row mt-3">
                    <div class="col-lg-6 col-12" style="position: relative;">
                      <input type="email" name="users_email" class="form-control" placeholder="E-Mail" required>
                      <i class="fa fa-user" style="position: absolute;
                      left: 26px;
                      top: 36%;
                      font-size: 13px;"></i>
                    </div>
                    @if($test == "-")
                    <div class="col-lg-6 col-12" style="position: relative;">
                        <input type="text" name="users_mobileno" class="form-control" placeholder="Mobile #" required>
                        <i class="fa fa-mobile" style="position: absolute;
                        left: 26px;
                        top: 36%;
                        font-size: 13px;"></i>
                    </div>
                    @else
                    <div class="col-lg-6 col-12" style="position: relative;">
                        <select id="inputState" name="users_gender" class="form-control" required>
                          <option value="" selected>Select Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                        </select>
                    </div>
                    @endif
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-6 col-12" style="position: relative;">
                      <input type="password" name="users_password" class="form-control" placeholder="Password" required>
                      <i class="fa fa-lock" style="position: absolute;
                      left: 26px;
                      top: 36%;
                      font-size: 13px;"></i>
                    </div>
                    <div class="col-lg-6 col-12" style="position: relative;">
                        <input type="password" name="users_confirmpassword" class="form-control" placeholder="Confirm Password" required>
                        <i class="fa fa-lock" style="position: absolute;
                        left: 26px;
                        top: 36%;
                        font-size: 13px;"></i>
                      </div>
                  </div>

<div class="row mt-3 mb-3">
  @if($test != "-")
   <div class="col-lg-6 col-12" style="position: relative;">
    <label for="inputState" style="font-weight: 500;padding-left:4px">Select Date Of Birth</label>
     <input type="date" name="users_dob" class="form-control" placeholder="Date of Birth">
  </div>
  @endif
    <div class="col-lg-6 col-12">
        <label for="inputState" style="font-weight: 500;padding-left:4px">User Type</label>
        @if($test == "-")
          <select id="inputState" name="role_id" class="form-control" required>
            <option value="2" selected>Teacher</option>
             <option value="3">Student</option>
          </select>
        @else
          <select id="inputState" name="role_id" class="form-control">
            <option value="3" selected>Student</option>
          </select>
        @endif
      </div>
</div>
<div class="row">
  <div class="form-check d-flex justify-content-start mb-4">
    @if($test == "-")
    <label class="form-check-label" for="form1Example3"> Already a Member <a href="{{url('/')}}">Login</a> </label>
    @else
    <label class="form-check-label" for="form1Example3"> Already a Member <a href="{{url('/studenttestshare')}}/{{$test}}/{{$teacher}}">Login</a> </label>
    @endif
  </div>
</div>

                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn btn-lg btn-block text-white" type="button" style="background:#0A3740">SIGN UP</button>
                  </div>

 <!-- Checkbox -->
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
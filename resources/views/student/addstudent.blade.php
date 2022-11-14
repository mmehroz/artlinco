@extends('layout.studentheader.apptheme')
@extends('layout.studentheader.mainheader')
@section('content')
        <!-- Sign Up Start -->
        <!-- Content Start -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">


                        <div class="align-items-center justify-content-between mb-3">
                            <h3 class="text-center">Add Student</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                                    <label for="floatingText">First Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                                    <label for="floatingText">Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                                    <label for="floatingText">E-mail</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                                    <label for="floatingText">Mobile</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <select class="form-control" id="exampleFormControlSelect1" style="    padding-top: 0.625rem;background:#fff">
                                        <option>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingText" placeholder="jhondoe">
                                    <label for="floatingText">Date of Birth</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                                    <label for="floatingText">Password</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                                    <label for="floatingText">Confirm Password</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-4 col-lg-1">
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    @endsection
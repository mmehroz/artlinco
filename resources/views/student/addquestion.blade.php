@extends('layout.studentheader.studentheader')
@section('content')

<style>
.myDiv{
	display:none;
}
.ticon{
    color: red;
}
.remove_button{
        transform: translateX(22px) translateY(21px);
        color:red;
    }
    .remove_button:hover{
        color:red;
    }
    .mainloopdiv{
        margin-bottom: 0.5rem !important;
    }
    .checkboxinput1{
        transform: translateX(10px);
    }
</style>
        <!-- Sign Up Start -->
        <!-- Content Start -->

        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">


                        <div class="align-items-center justify-content-between mb-3">
                            <h3 class="text-center">Ask Question</h3>
                        </div>

                        <div class="row mt-4 mb-3">
                            <div class="col-lg-6">
                                <!-- <div class="form-floating mb-3">
                                    <select id="myselection" class="form-floating mb-3">
                                        <option>Select Option</option>
                                        <option value="One">Ask Question</option>
                                        <option value="Two">Upload Video</option>
                                        <option value="Three">Upload Audio</option>
                                    </select>
                                </div> -->
                                        <div class="form-floating mb-3">
                                    <select class="form-control" id="myselection" style="    padding-top: 0.625rem;background:#fff">
                                        <option>Select Question Type</option>
                                        <option class="selectoption" value="One">Ask Question</option>
                                        <option class="selectoption" value="Two">Upload Video</option>
                                        <option class="selectoption" value="Three">Upload Audio</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-lg-5">

                                <div id="showTwo" class="myDiv form-floating">
                                    <div class="col-12 d-flex">
                                        <input type="file" style="padding-top: 0.925rem;" class="form-control" id="floatingText" placeholder="jhondoe">
                                        <div class="form-floating" style="    width: 100%;
                                        margin-left: 10px;">
                                            <input type="text" style="width: 100%;" class="form-control" id="floatingText" placeholder="jhondoe">
                                            <label for="floatingText">Write Answer</label>
                                        </div>
                                        </div>

                                </div>
                                <div id="showThree" class="myDiv form-floating">
<div class="col-12 d-flex">
<input type="file" style="padding-top: 0.925rem;" class="form-control" id="floatingText" placeholder="jhondoe">
<div class="form-floating" style="    width: 100%;
margin-left: 10px;">
    <input type="text" style="width: 100%;" class="form-control" id="floatingText" placeholder="jhondoe">
    <label for="floatingText">Write Answer</label>
</div>
</div>


                                </div>
                            </div>
                        </div>
                        <div id="showOne" class="row myDiv">
                            <div class="col-12">
                              <div class="field_wrapper">
                                <div class="d-lg-flex">
                                <div class="form-floating col-12 col-lg-6 mb-3">
                                    <input type="text" style="width: 99%;" class="form-control" id="floatingText" placeholder="jhondoe">
                                    <label for="floatingText">Write Question</label>
                                </div>
                                <div class="form-floating col-12 col-lg-6 mb-3">
                                    <input style="width: 99%;" type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                                    <label for="floatingText">Write Answer</label>
                                    <a style="position: absolute;
                                    right: -19px;
                                    top: 22px;" class="add_button" title="Add field"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                              </div>
                            </div>
                          </div>
                        <div class="col-6 col-lg-1">
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>


    @endsection

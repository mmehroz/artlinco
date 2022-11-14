@extends('layout.adminheader.adminheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/public/css/admincss/viewquiz.css') }}"></link>
        <!--Main layout-->
        <main class="mains">
            <div class="container-fluid" style="margin-top: 390px;">
                <form onsubmit="return false" class="text-white maindivquiz">
                    <div
                        class="field_wrapper text-center"
                    >
                        <div class="inner_field aop">
                            <input
                                type="text"
                                class="materialbtn questiondiv inputwidth"
                                placeholder="Who is the president of US"
                                name="field_name[]"
                                value=""
                            />
                            <input
                                type="text"
                                class="materialbtn rightanswer inputwidth answer_field"
                                placeholder="Joe Biden"
                                name="field_name[]"
                                value=""
                            />
                            <!-- <input type="checkbox" class="checkboxinput"> -->

                        </div>
                              <div class="inner_field aop mt-3">
                            <input
                                type="text"
                                class="materialbtn questiondiv inputwidth"
                                placeholder="Who is the president of Russia"
                                name="field_name[]"
                                value=""
                            />
                            <input
                                type="text"
                                class="materialbtn rightanswer inputwidth answer_field"
                                placeholder="Vladimir Putin"
                                name="field_name[]"
                                value=""
                            />
                            <!-- <input type="checkbox" class="checkboxinput"> -->

                        </div>
                              <div class="inner_field aop mt-3">
                            <input
                                type="text"
                                class="materialbtn questiondiv inputwidth"
                                placeholder="Which animal is known as the 'Ship of the Desert?"
                                name="field_name[]"
                                value=""
                            />
                            <input
                                type="text"
                                class="materialbtn rightanswer inputwidth answer_field"
                                placeholder="Camel"
                                name="field_name[]"
                                value=""
                            />
                            <!-- <input type="checkbox" class="checkboxinput"> -->

                        </div>
                        <div class="inner_field aop mt-3">
                            <input
                                type="text"
                                class="materialbtn questiondiv inputwidth"
                                placeholder="How many days are there in a week?"
                                name="field_name[]"
                                value=""
                            />
                            <input
                                type="text"
                                class="materialbtn rightanswer inputwidth answer_field"
                                placeholder="7 days"
                                name="field_name[]"
                                value=""
                            />
                            <!-- <input type="checkbox" class="checkboxinput"> -->

                        </div>
                        <div class="inner_field aop mt-3">
                            <input
                                type="text"
                                class="materialbtn questiondiv inputwidth"
                                placeholder="How many vowels are there in the English alphabet and name them?"
                                name="field_name[]"
                                value=""
                            />
                            <input
                                type="text"
                                class="materialbtn rightanswer inputwidth answer_field"
                                placeholder="5 vowels namely a, e, i, o, and u."
                                name="field_name[]"
                                value=""
                            />
                            <!-- <input type="checkbox" class="checkboxinput"> -->

                        </div>
                        <div class="inner_field aop mt-3">
                            <input
                                type="text"
                                class="materialbtn questiondiv inputwidth"
                                placeholder="Name the National bird of India?"
                                name="field_name[]"
                                value=""
                            />
                            <input
                                type="text"
                                class="materialbtn rightanswer inputwidth answer_field"
                                placeholder="The Peacock"
                                name="field_name[]"
                                value=""
                            />
                            <!-- <input type="checkbox" class="checkboxinput"> -->

                        </div>
                        <div class="inner_field aop mt-3">
                            <input
                                type="text"
                                class="materialbtn questiondiv inputwidth"
                                placeholder="Name the national flower of India?"
                                name="field_name[]"
                                value=""
                            />
                            <input
                                type="text"
                                class="materialbtn wronganswer inputwidth answer_field"
                                placeholder="Rose flower"
                                name="field_name[]"
                                value=""
                            />
                            <!-- <input type="checkbox" class="checkboxinput"> -->

                        </div>
                        <div class="inner_field aop mt-3">
                            <input
                                type="text"
                                class="materialbtn questiondiv inputwidth"
                                placeholder="Name the National tree of India?"
                                name="field_name[]"
                                value=""
                            />
                            <input
                                type="text"
                                class="materialbtn wronganswer inputwidth answer_field"
                                placeholder="Mango Tree"
                                name="field_name[]"
                                value=""
                            />
                            <!-- <input type="checkbox" class="checkboxinput"> -->

                        </div>
                    </div>
   </form>
   </div>
        </main>
        <!--Main layout-->
        @endsection
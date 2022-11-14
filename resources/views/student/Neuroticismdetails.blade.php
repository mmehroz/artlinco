@extends('layout.studentheader.studentheader')
@section('content')
    <!-- Link Swiper's CSS -->
    <link
    rel="stylesheet"
    type="text/css"
    href="{!! asset('public/css/studentcss/studentresultdetails.css') !!}"
/>


    <!-- Demo styles -->
    <style>
.hidden{
display : none;
}
</style>

    <!-- Swiper -->
    <main class="mains">
        <div class="container" style="margin-top:450px">
<h3 style="font-weight: bold;
padding-bottom: 30px;text-align:center">Student Result Details</h4>
            <button class="accordion">N - Neuroticism</button>
            <div class="panel">
                
                
                
                <div class="row">
                <div class="col-12 col-lg-12">
                    <p>
The trait neuroticism is a measure of a person’s emotional
stability and self-confi dence. Those who have a
higher Neuroticism score tend to get upset and stressed
more easily and are less satisfi ed with themselves.
Those who have a lower neuroticism score tend not
to stress easily and are more secure and balanced.
When someone scores higher in this category, they
are more likely to be sensitive, shy, and pessimistic.
They are naturally nervous and may have a diffi cult
time in less predictable situations. Neuroticism usually
leads to higher levels of stress and worry. Easily
stressed people tend to do well in environments that
off er them safety and security, while allowing them
space to breathe and express themselves.
When someone scores lower on neuroticism, they
tend to be more relaxed and easy-going. They are
generally more adventurous and confi dent and easily
adapt to change. Being low in Neuroticism means
they are naturally more positive and at peace. Those
who experience less stress and worry tend to do good
well in crises. They thrive in environments that off er
new experiences and utilize their stable, composed
temperament.


                    </p>
                </div>
                </div>
                  <div class="row mt-2">
                <div class="col-12 col-lg-12 d-flex" onclick="showhidess()">
                           <h4 >Description</h4>
                           <i class="fa fa-caret-up ml-2"></i>
                           </div>
                      </div>
                <div class="row mt-3 hidden" id="newpost3">
                       <div class="col-6 col-lg-6">
                    <h6>People Who are Easily Stressed </h6>
                    <ul>
<li>Lack confi dence and be self-critical</li>
<li> Struggle with anxiety and negative thinking</li>
<li> Experience stronger emotions</li>
<li> Stress easily in times of change</li>
 
                    </ul>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>Less Easily Stressed People</h6>
                     <ul>
<li>Remain level-headed and logical</li>
<li> Be relaxed and confi dent</li>
<li>Have a more positive outlook</li>
<li> Adapt easily to new situations</li>
                    </ul>
                </div>
                        <div class="col-6 col-lg-6">
                    <h6>People Who are Easily Stressed </h4>
<p>Be supportive and encouraging; off er help, when needed,
and understand the hardship they may be experiencing.</p>
                </div>
                <div class="col-6 col-lg-6">
                    <h6>Less Easily Stressed People</h6>
<p>Be open and communicate clearly; remain positive and
upbeat, encouraging them to spread their positive thinking.
</p>
                </div>
                                       <div class="col-6 col-lg-6">
                    <h6>People Who are Easily Stressed </h6>
                    <ul>
<li> Writer</li>
<li> Artist</li>
<li> Accountant</li>
<li>Florist</li>
<li> Yoga Instructor</li>
<li> Freelance Designer</li>
                    </ul>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>Less Easily Stressed People</h6>
                     <ul>
<li> Police Officer</li>
<li> Surgeon</li>
<li> Fire Fighter</li>
<li> Lawyer</li>
<li> Diplomat</li>
<li> Social Worker</li>
<li> Psychiatrist</li>
                    </ul>
                </div>
                    </div>
            

                  
                    </div>
                
            
            </div>
</div>
    </main>
@endsection
<script>
    function showhidess() {
  var div = document.getElementById("newpost3");
  div.classList.toggle('hidden'); 
}
</script>

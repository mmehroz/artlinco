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
            <button class="accordion">C - conscientiousness</button>
            <div class="panel">
                
                
                
                <div class="row">
                <div class="col-12 col-lg-12">
                    <p>
            The trait conscientiousness shows how deliberate,
goal-oriented and controlled someone is. Those who
are more conscientious tend to be more self-disciplined
and persistent. Those who score lower on
Conscientiousness tend to be more spontaneous and
procrastinate.<br>
People with higher scores in this category are more
likely to be ambitious, prepared, and reliable. They
are considerate and carefully considers how their
actions aff ect those around them. They are highly
self-disciplined, which empowers them to eff ectively
achieve their goals. Because people who are more
conscientious may fi nd it easier to stay focused and
on track. They can make great leaders or independent
workers and thrive in environments where they are
expected to meet high standards.
Those who score lower in this trait tend to dislike
structure and are less organized. They generally prefer
to make last-minute plans and may have a diffi cult
time completing their assignments without encouragement
from others. They sometimes act without
thinking, which can have a negative eff ect on those
around them. Environments that are less predictable
and require more manual work may benefi t people
who are less conscientious, as it allows them room to
both improvise and grow. They generally work well
when pursuing a passion under strong leadership

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
                    <h6>More Conscientious People</h6>
                    <ul>
<li> Enjoy setting plans and schedules</li>
<li> Keep their environment clean and organized</li>
<li> Finish assignments and projects in advance</li>
<li> Be attentive to details and specifics</li>

                    </ul>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>Less Conscientious People</h6>
                     <ul>
<li> Procrastinate fi nishing tasks</li>
<li> Dislike routine and scheduling</li>
<li> Be relatively unorganized</li>
<li> Have less energy and internal motivation</li>
                    </ul>
                </div>
                        <div class="col-6 col-lg-6">
                    <h6>More Conscientious People</h4>
<p>Respect their time and schedule, communicate your
thoughts directly, and share your appreciation for their
considerate, hard-working attitude.
</p>
                </div>
                <div class="col-6 col-lg-6">
                    <h6>Less Conscientious People</h6>
<p>Offer them support and hold them accountable to their
responsibilities; respect their need for spontaneity but
encourage them to consider the consequences of their
decisions.</p>
                </div>
                                       <div class="col-6 col-lg-6">
                    <h6>More Conscientious People</h6>
                    <ul>
<li> Freelance writer</li>
<li> Marketing Consultant</li>
<li> Doctor</li>
<li> Actor</li>
<li> Business Owner</li>
<li> Advertising Executive</li>
<li> Politician</li>


                    </ul>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>Less Conscientious People</h6>
                     <ul>
<li>Firefighter</li>
<li>Sales Representative</li>
<li> Technical Support</li>
<li> Mechanic</li>
<li>Landscaper</li>
<li>Janitor</li>
<li>Driver</li>

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

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
            <button class="accordion">E - extroversion</button>
            <div class="panel">
                
                
                
                <div class="row">
                <div class="col-12 col-lg-12">
                    <p>
        The trait extroversion is a measure of how energetic,
friendly, and sociable a person is. Those who are more
extroverted are more likely to draw their energy from
being with others. Those who are less extroverted
prefer to be alone.<br>
People with higher scores in this category tend to
be comfortable speaking to larger groups of people,
dynamic, and bold. They are confi dent and outgoing,
thriving in situations that off er opportunities to
socialize. Extroversion generally makes them more
talkative and more comfortable being the center of
attention. People who are more extroverted tend to
communicate easily with others and may make great
leaders, thriving in environments that allow them the
opportunity to build genuine connections with others.
Those who score lower in this trait tend to, or introverted,
tend to dislike being around large groups of
people. They generally draw energy from being alone
and prefer to think and process internally. Introverts
don’t enjoy attention and are usually more reserved.
Because introverts thrive in environments that off er
them space, careers that allow them to pursue a passion,
while allowing them to spend time alone, help
them fl ourish and grow.
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
                    <h6>More Extroverted People</h6>
                    <ul>
<li> Be energetic and confi dent</li>
<li> Process their thoughts externally</li>
<li> Have a variety of peers and friends</li>
<li> Seek out time for socializing</li>

                    </ul>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>Less Extroverted People</h6>
                     <ul>
<li> Avoid large groups of people</li>
<li> Dislike attention from others</li>
<li> Seek time alone to think and recharge</li>
<li> Be more emotionally reserved</li>

                    </ul>
                </div>
                        <div class="col-6 col-lg-6">
                    <h6>More Extroverted People</h4>
<p>Connect with them on a personal level by asking questions
and being engaging, allowing them to process their
thoughts out loud. Make sure they feel they’ve been heard
by repeating their main points back to them.</p>
                </div>
                <div class="col-6 col-lg-6">
                    <h6>Less Extroverted People</h6>
<p>Allow them to have their space when they feel overwhelmed;
avoid small-talk and appreciate their careful,
thought-out communication.
</p>
                </div>
                                       <div class="col-6 col-lg-6">
                    <h6>More Extroverted People</h6>
                    <ul>
                      <li>Counselor</li>
<li> Event Planner</li>
<li> Bartender</li>
<li> Actor</li>
<li> Motivational Speaker</li>
<li> Photographer</li>
<li> Journalist</li>




                    </ul>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>Less Extroverted People</h6>
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

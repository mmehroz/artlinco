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
            <button class="accordion">O-Openness(Abehnhed)<span class="scoreresult">(28)</span></button>
            <div class="panel">
                
                
                
                <div class="row">
                <div class="col-12 col-lg-12">
                    <p>
                        The trait openness assesses how open-minded, imaginative,
creative, and empathetic a person is. Those
who are more open-minded are more willing to listen
to diff erent points of view or try new things. They
are more likely to be adaptable, accept change, and
appreciate innovative technology. They are intuitive
and original, off ering new ideas every day.
Openness allows people to be vulnerable and honest,
which can off er them emotional understanding and
deep friendships. They tend to work best in environments
that allow them to experience new things
every day. Openness to experience has been found to
be associated with higher scores on intelligence tests.
Those who exhibit less openness are more averse to
change and skeptical of new ideas. They have a more
diffi cult time being honest about how they feel and
may feel isolated at times. Those people who score
lower in this trait tend to dislike change, so prefer
environments that are consistent and stable. They
usually prefer routine and tradition and generally
think more logically and concretely. This allows them
to focus one or a few areas and help them to stay
balanced.

                    </p>
                </div>
                </div>
                  <div class="row mt-2">
                <div class="col-12 col-lg-12 d-flex" onclick="showhidess()">
                           <h4 >Tendencies</h4>
                           <i class="fa fa-caret-up ml-2"></i>
                           </div>
                      </div>
                <div class="row mt-3 hidden" id="newpost3">
                       <div class="col-6 col-lg-6">
                    <h6>More Open People</h6>
                    <ul>
                        <li>Prefer variety and diversity</li>
                        <li>Seek new experiences and adventures</li>
                        <li>Think and express themselves creatively</li>
                        <li>Are curious about their environment</li>
                    </ul>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>Less Open People</h6>
                     <ul>
                        <li>Avoid change and new events</li>
                        <li>Dislike conceptual or abstract thinking</li>
                        <li>Uphold traditional values and beliefs</li>
                        <li>Focus on a few specifi c interests</li>
                    </ul>
                </div>
                    </div>
                <div class="row mt-2">
                    <div class="col-12 col-lg-12 d-flex" onclick="showhide()">
                <h4 id="buttons">How to communicate</h4>
                <i class="fa fa-caret-up ml-2"></i>
                           </div>
                      </div>
                <div class="row mt-3 hidden" id="newpost">
                       <div class="col-6 col-lg-6">
                    <h6>More Open People</h4>
<p>Be direct, attentive, and vulnerable, when necessary.Offerinsightful ideas or observations and allow them to share their perspective honestly.</p>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>Less Open People</h6>
<p>Respect their values and traditions, allowing them to live
in a comfortable routine; off er them support and encourage
them to feel comfortable expressing themselves when
they need to do so.
</p>
                </div>
                    </div>
                    <div class="row mt-2">
                    <div class="col-12 col-lg-12 d-flex" onclick="showhides()">
                           <h4>Suitable Careers</h4>
                                   <i class="fa fa-caret-up ml-2"></i>
                           </div>
                      </div>
                <div class="row mt-3 hidden" id="newpost2">
                       <div class="col-6 col-lg-6">
                    <h6>More Open People</h6>
                    <ul>
                        • Artist
<li> Travel Writer</li>
<li>Pilot</li>
<li>Lawyer</li>
<li>Publicist</li>
<li>Entrepreneur</li>
<li>Graphic Designer</li>
<li>Philosopher</li>

                    </ul>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>Less Open People</h6>
                     <ul>
<li>Banker</li>
<li>Professor</li>
<li>Financial Analyst</li>
<li>Real Estate Agent</li>
<li>Scholar</li>
<li>Auditor</li>
<li>Accountant</li>
<li>Contractor</li>

                    </ul>
                </div>
                    </div>
            </div>
</div>
    </main>
@endsection
<script>
    function showhide() {
  var div = document.getElementById("newpost");
  div.classList.toggle('hidden'); 
}
    function showhides() {
  var div = document.getElementById("newpost2");
  div.classList.toggle('hidden'); 
}
    function showhidess() {
  var div = document.getElementById("newpost3");
  div.classList.toggle('hidden'); 
}
</script>

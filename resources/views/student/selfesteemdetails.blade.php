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
            <button class="accordion">SE – self esteem</button>
            <div class="panel">
                
                
                
                <div class="row">
                <div class="col-12 col-lg-12">
<p>
    The term self-esteem is used in psychology to describe
a person’s overall sense of personal worth or value.
In other words, self-esteem may be defi ned as how
much you appreciate and like yourself regardless of
the circumstances. Self-esteem is defi ned by many
factors including: self-confi dence, feeling of security,
identity, sense of belonging, and feeling of competence.
Other terms that are often used interchangeably
with self-esteem include self-worth, self-regard, and
self-respect.
Diff erent factors contribute to infl uence our self-esteem
such as: genetics, personalities, life experiences,
thoughts, age, health, comparing self to others, social
circumstances, and the reaction of others.
Self-esteem is one of the determinants of success or
failure in life. It is very important because it infl uences
your life choices. It plays a signifi cant role in
motivating you in life. Having a high self-esteem can
help you navigate through life with a positive attitude
and outlook. On the other hand, having a low
self-esteem may hold you back from achieving to your
goals and from maximizing your potential: you feel
that you are not good enough or you don’t have what
it takes to succeed both at school or work. Some of
the eff ects of low self-esteem are poor relationships,
addiction, depression and anxiety. Self-esteem is also
very important for good mental health.
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
                    <h6>People With High Self Esteem  </h6>
                    <ul>
<li> Love and accept themselves</li>
<li> Believe in themselves and their abilities</li>
<li>Face challenges with confidence</li>
<li> Can be themselves without fear of being judged</li>
<li> Eager to accept new challenges and learn new things</li>
<li> Don’t need approval from others</li>
<li>Accept that they do not know everything</li>
<li> Are open to constructive criticism</li></li>
<li> Are generally more pleasant to be around</li>
                    </ul>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>People With Low Self esteem</h6>
                     <ul>
<li>Think of themselves as below average</li>
<li> Do not believe in themselves</li>
<li> Do not trust in their abilities</li>
<li> Do not place value on themselves. Low self-esteem can</li>
<li>affect a lot of things in one’s life</li>
<li> Seek validation & approval from others</li>
<li> Are at high risk for alcohol abuse and drug addictions</li>
<li> High risk for developing depression and anxiety</li>

                    </ul>
                </div>
                        <div class="col-6 col-lg-6">
<p>1. Identify and Challenge Your Negative Beliefs</p>
<p>2. Identify the Positive About Yourself</p>
<p>3. Build Positive Relationships—and Avoid Negative Ones</p>
<p>4. Give Yourself a Break - You don’t have to be perfect every hour of every day, and you don’t have to feel good about yourself all the time.</p>
<p>5. Become More Assertive and Learn to Say No.</p>
<p>6. Improve Your Physical Health – Exercise and meditate.</p>
<p>7. Take on Challenges – Don’t avoid diffi cult situations, confront them.</p>
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

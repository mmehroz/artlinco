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
The trait agreeableness is a measure of how well a
person can get along with others. Those who are more
agreeable tend to be more patient and empathetic
towards others. Those who score lower in agreeableness
tend to be blunt in their opinions.
People with higher scores in this category are more
likely to be sensitive, polite, and cheerful. They are
loyal and considerate of others’ feelings, tending to
off er support and sympathy to those in need. They are
generally well-liked and appreciated by other people.
People who are more agreeable tend to empathize
easily with others. They thrive in environments that
encourage them to build connections and make a positive
contribution to their community.
People with lower scores in this category tend to have
a difficult time connecting with others and understanding
others’ emotions. They are usually more
upfront about their personal opinions and may be
perceived as rude. They are less inclined to empathize
with other people. Less agreeable people tend
to do a better job in environments that don’t expect
them to connect emotionally with others. They thrive
in careers that are objective and logical, as it allows
them to be direct.

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
                    <h6>More Agreeable People</h6>
                    <ul>
<li> Be more naturally altruistic</li>
<li> Go with the fl ow more easily</li>
<li> Cooperate and work well with others</li>
<li>Feel concern for their community</li>
                    </ul>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>Less Agreeable People</h6>
                     <ul>
<li>Be innately competitive and candid</li>
<li> Take less interest in others’ lives</li>
<li> Express themselves through sarcasm</li>
<li> Prefer working independently</li>
                    </ul>
                </div>
                        <div class="col-6 col-lg-6">
                    <h6>More Agreeable People</h4>
<p>Be open and vulnerable, working to build an honest connection;
encourage them to consider their own needs, as
well. Ask for their honest opinion.</p>
                </div>
                <div class="col-6 col-lg-6">
                    <h6>Less Agreeable People</h6>
<p>Be direct and clear when sharing your perspective, remaining
patient and encouraging them to express themselves
more gently; allow them space to refl ect, if necessary.
</p>
                </div>
                                       <div class="col-6 col-lg-6">
                    <h6>More Agreeable People</h6>
                    <ul>
<li> Counselor</li>
<li>Nurse</li>
<li> Teacher</li>
<li> Religious Leader</li>
<li> Veterinarian</li>
<li> Non-Profi t Organizer</li>
<li> Judge</li>





                    </ul>
                </div>
                  <div class="col-6 col-lg-6">
                    <h6>Less Agreeable People</h6>
                     <ul>
<li> Accountant</li>
<li>Engineer</li>
<li> Scientist</li>
<li> Surgeon</li>
<li> Computer Programmer</li>
<li> Author</li>
<li> Venture Capitalist</li>

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

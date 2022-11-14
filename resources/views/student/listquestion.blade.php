@extends('layout.studentheader.apptheme')
@extends('layout.studentheader.mainheader')
@section('content')

<!-- Navbar End -->


<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">












        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Question/Answer List</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Question</th>
                                <th scope="col">Answer</th>
                                <th scope="col">Audio</th>
                                <th scope="col">Video</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>What is Your Name?</td>
                                <td>Bryan</td>
                                <td>
<audio controls>
  <source src="https://www.w3schools.com/html/horse.ogg" type="audio/ogg">
  <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
                                </td>
                                <td>
                                    <video width="320" height="70" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                    </video>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>What is Your age?</td>
                                <td>24</td>
                                <td>
<audio controls>
  <source src="https://www.w3schools.com/html/horse.ogg" type="audio/ogg">
  <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
                                </td>
                                <td>
                                    <video width="320" height="70" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                    </video>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>What is Your favouraite color?</td>
                                <td>Blue</td>
                                <td>
<audio controls>
  <source src="https://www.w3schools.com/html/horse.ogg" type="audio/ogg">
  <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
                                </td>
                                <td>
                                    <video width="320" height="70" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                    </video>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>What is Your Batch ID?</td>
                                <td>1375</td>
                                <td>
<audio controls>
  <source src="https://www.w3schools.com/html/horse.ogg" type="audio/ogg">
  <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
                                </td>
                                <td>
                                    <video width="320" height="70" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                    </video>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection
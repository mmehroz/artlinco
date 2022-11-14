@extends('layout.studentheader.apptheme')
@extends('layout.studentheader.mainheader')
@section('content')

            <!-- Navbar End -->
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Student List</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Mobile No</th>
                                            <th scope="col">Date of Birth</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Irvin C.</td>
                                            <td>McClelland</td>
                                            <td>McClelland123@gmail.com</td>
                                            <td>090078601</td>
                                            <td>06-08-1997</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Deborah J.</td>
                                            <td>Keil</td>
                                            <td>Keil321@gmail.com</td>
                                            <td>090078601</td>
                                            <td>06-08-1997</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Camille S.</td>
                                            <td>Chen</td>
                                            <td>Chen123@gmail.com</td>
                                            <td>090078601</td>
                                            <td>06-08-1997</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Jessie K.</td>
                                            <td>Bryan</td>
                                            <td>Bryan123@gmail.com</td>
                                            <td>090078601</td>
                                            <td>06-08-1997</td>
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

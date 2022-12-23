@extends('layouts.app')
@section('content')
    <div class="pricing p-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-month" role="tabpanel" aria-labelledby="nav-month-tab">
                            <div class="row align-items-center justify-content-center">

                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="single-box">
                                        <div class="top">
                                            <div style="background-color: black">
                                                <img src="{{ asset('data/logo.jpg') }}" alt=""
                                                    style="width: 100%; height: 90px; background-size: center; object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="">
                                            <br>
                                            <p style="font-size: 19px; text-align: center; font-wight: bold">
                                                Our Vision
                                            </p>
                                            <ul>
                                                <li style="font-size:16px; font-family:Times New Roman;">
                                                    To build better job
                                                    opportunities for our people
                                                    and make their life
                                                    easier.</li>
                                            </ul>
                                            <br><br><br><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="single-box center">
                                        <div class="top">
                                            <div style="background-color: black">
                                                <img src="{{ asset('data/logo.jpg') }}" alt=""
                                                    style="width: 100%; height: 90px; background-size: center; object-fit: contain;">
                                            </div>
                                        </div>

                                        <div class="">
                                            <br>
                                            <p style="font-size: 19px; text-align: center; font-wight: bold">
                                                Our Mission
                                            </p>
                                            <ul>
                                                <li style="font-size:16px; font-family:Times New Roman;">To create
                                                    employment for skilled and unskilled
                                                    Myanmar workers in the
                                                    international market.
                                                </li>
                                                <li style="font-size:16px; font-family:Times New Roman;"> To reduce the
                                                    number of jobless workers in our
                                                    country.
                                                </li>
                                                <li style="font-size:16px; font-family:Times New Roman;"> To fulfill
                                                    workforce requirements for our
                                                    clients.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="single-box ">
                                        <div class="top">
                                            <div style="background-color: black">
                                                <img src="{{ asset('data/logo.jpg') }}" alt=""
                                                    style="width: 100%; height: 90px; background-size: center; object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="">
                                            <br>
                                            <p style="font-size: 19px; text-align: center; font-wight: bold">
                                                Our Values
                                            </p>
                                            <ul>
                                                <li style="font-size:16px; font-family:Times New Roman;">Respect & Ethic
                                                </li>
                                                <li style="font-size:16px; font-family:Times New Roman;"> Responsibility &
                                                    Accountability
                                                </li>
                                                <li style="font-size:16px; font-family:Times New Roman;"> Professionalism
                                                </li>
                                                <li style="font-size:16px; font-family:Times New Roman;"> Long-term working
                                                    relationships
                                                </li>
                                            </ul>
                                        </div>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

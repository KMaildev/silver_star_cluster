@extends('layouts.app')
@section('content')
    <div class="def-breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="part-txt">
                        <h1>ABOUT <span>US</span></h1>
                        <ul>
                            <li>HOME</li>
                            <li><i class="flaticon-right-arrow-1"></i></li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about pt-60 pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-7">
                    <div class="part-txt">
                        <div style="background-color: black">
                            <img src="{{ asset('data/logo.jpg') }}" alt=""
                                style="width: 100%; height: 90px; background-size: center; object-fit: contain;">
                        </div>
                        <br>
                        <p style="font-size:15.5px; ">
                            <span style="color:#0e5585; font-weight:500">
                                SILVER STAR CLUSTER COMPANY LIMITED
                            </span> is a
                            Government approved
                            manpower recruiting
                            agency in Myanmar
                            established in 2022.
                            It has expanded the services to meet the needs of clients and candidates.
                            The main objective of Shwe Lann Hpwint is to create global job opportunities so that they can
                            contribute in the national economy and become seld dependent.
                            And this is the point for which we work for skilled, semi skilled and unskilled job seekers and
                            also ensure experienced employment that meets the skills set requirements and fit into the
                            culture of our clients.
                            We aim to uplift the quality of life of the people we deploy and that can only be achieved by
                            matching them with the best opportunity providers who have the need of their services.
                        </p>
                        <div class="boxes
                            d-md-flex">
                            <ul>
                                <li><span><i class="flaticon-check"></i></span> Capability</li>
                                <li><span><i class="flaticon-check"></i></span>Competency</li>
                                <li><span><i class="flaticon-check"></i></span>Knowledge</li>
                                <li><span><i class="flaticon-check"></i></span>Experience</li>
                            </ul>
                            <ul>
                                <li><span><i class="flaticon-check"></i></span> Innovation</li>
                                <li><span><i class="flaticon-check"></i></span>Organization and Culture</li>
                                <li><span><i class="flaticon-check"></i></span>Integrity</li>
                                <li><span><i class="flaticon-check"></i></span>Efficiency</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="part-img">
                        <img src="{{ asset('data/dica.jpg') }}" alt="image"
                            style="width: 100%; height: 700px; background-size: center; object-fit: cover; object-position: top;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-fact-2 pt-60 pb-60">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-12 col-lg-12 col-sm-12">
                    <center>
                        <h2>
                            Our Office Activities
                        </h2>
                    </center>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6" style="padding:10px">
                    <img src="{{ asset('data/2.jpg') }}" alt="icon"
                        style="width: 100%; height: 300px; background-size: center; object-fit: cover; object-position: center;">
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6" style="padding:10px">
                    <img src="{{ asset('data/3.jpg') }}" alt="icon"
                        style="width: 100%; height: 300px; background-size: center; object-fit: cover; object-position: center;">
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6" style="padding:10px">
                    <img src="{{ asset('data/4.jpg') }}" alt="icon"
                        style="width: 100%; height: 300px; background-size: center; object-fit: cover; object-position: center;">
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6" style="padding:10px">
                    <img src="{{ asset('data/5.jpg') }}" alt="icon"
                        style="width: 100%; height: 300px; background-size: center; object-fit: cover; object-position: center;">
                </div>
            </div>
        </div>
    </div>

    <div class="feature feature-inner pt-120 pb-60">
        <div class="container">
            <div class="bg">
                <div class="row no-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-box first">
                            <div class="part-icon">
                                <span><i class="flaticon-support"></i></span>
                            </div>
                            <div class="part-txt">
                                <h3>Fast Support</h3>
                                <p>There are many variations of passageis Ours available, but the majority have suffere as
                                    some form by injected humour</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-box color">
                            <div class="part-icon">
                                <span><i class="flaticon-seo"></i></span>
                            </div>
                            <div class="part-txt">
                                <h3>Site Optimisation</h3>
                                <p>There are many variations of passageis Ours available, but the majority have suffere as
                                    some form by injected humour</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-box">
                            <div class="part-icon">
                                <span><i class="flaticon-shuttle"></i></span>
                            </div>
                            <div class="part-txt">
                                <h3>Page Rankings</h3>
                                <p>There are many variations of passageis Ours available, but the majority have suffere as
                                    some form by injected humour</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-box last color">
                            <div class="part-icon">
                                <span><i class="flaticon-network"></i></span>
                            </div>
                            <div class="part-txt">
                                <h3>Team Communication</h3>
                                <p>There are many variations of passageis Ours available, but the majority have suffere as
                                    some form by injected humour</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

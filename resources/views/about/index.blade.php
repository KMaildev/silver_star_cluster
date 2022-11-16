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
                        <h2 style="color:#0e5585; text-shadow:2px 4px 4px;">SHWE LANN HPWINT <span
                                style="font-size:19px;">Overseas Employment
                                Agency</span></h2>
                        <p style="font-size:15.5px; "><span style="color:#0e5585; font-weight:500">SHWE LANN HPWINT
                                CO.,LTD</span> is a
                            Government approved
                            manpower recruiting
                            agency in Myanmar
                            established in 15th March 2005.
                            It has expanded the services to meet the needs of clients and candidates.
                            The main objective of Shwe Lann Hpwint is to create global job opportunities so that they can
                            contribute in the national economy and become seld dependent.
                            And this is the point for which we work for skilled, semi skilled and unskilled job seekers and
                            also ensure experienced employment that meets the skills set requirements and fit into the
                            culture of our clients.
                            We aim to uplift the quality of life of the people we deploy and that can only be achieved by
                            matching them with the best opportunity providers who have the need of their services. </p>
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
                        <a href="about.html" class="def-btn">Read More</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="part-img">
                        <img src="{{ asset('assets/images/about.png') }}" alt="image">
                        <div class="counter">
                            <h2><span class="odometer" data-count="17">0</span>+</h2>
                            <p>Years Experiences</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="fun-fact-2 pt-60 pb-60">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="assets/images/f-fact-icn-1.png" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="1542">0</span>+</h2>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="assets/images/f-fact-icn-2.png" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="182">0</span>+</h2>
                            <p>Expert Team Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="assets/images/f-fact-icn-3.png" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="878">0</span>+</h2>
                            <p>Activate Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="assets/images/f-fact-icn-4.png" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="105">0</span>+</h2>
                            <p>Awards Winning</p>
                        </div>
                    </div>
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

    <div class="timeline p-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-7 col-md-8">
                    <div class="heading">
                        <h2>Story of Shopnu</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the in some form, by injected
                            humour, or randomised words</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="single-box">
                        <div class="title">
                            <h3>2004 - 2005</h3>
                        </div>
                        <div class="part-txt">
                            <h3>Project Idea</h3>
                            <p>There are many variationi of passages of Lorem Ips as alteration in some form, by injected
                                humour, or a slightly believable.If you are gong to use a passage isn't anything
                                embarrassing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-2 d-lg-block d-none">
                    <div class="line-shape">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="single-box">
                        <div class="title">
                            <h3>2021 - 2022</h3>
                        </div>
                        <div class="part-txt">
                            <h3>Business Conception</h3>
                            <p>There are many variationi of passages of Lorem Ips as alteration in some form, by injected
                                humour, or a slightly believable.If you are gong to use a passage isn't anything
                                embarrassing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

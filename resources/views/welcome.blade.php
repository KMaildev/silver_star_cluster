@extends('layouts.app')
@section('content')
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
                            The main objective of SILVER STAR CLUSTER is to create global job opportunities so that they can
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
                        <a href="{{ route('about.index') }}" class="def-btn">Read More</a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-5">
                    <div class="part-img">
                        <img src="{{ asset('data/about.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-fact pt-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/images/f-fact-icn-1.png') }}" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="1542">0</span> +</h2>
                            <p>Sending Employees</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/images/f-fact-icn-2.png') }}" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="17">0</span> +</h2>
                            <p>Our Experiences</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/images/f-fact-icn-3.png') }}" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="878">0</span> +</h2>
                            <p>Our Partners</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/images/f-fact-icn-4.png') }}" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="105">0</span> +</h2>
                            <p>Jobs Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service pt-120 pb-90">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="heading">
                        <h2 style="color:#125787;text-shadow:1px 3px 3px;">Our Services</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the in some form, by injected
                            humour, or randomised words</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($countryies as $country)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <a href="{{ route('overseas_jobs.show', $country->id) }}">
                            <div class="single-box">
                                <div class="part-icon">
                                    <span>
                                        <i class="fa fa-flag"></i>
                                    </span>
                                </div>
                                <div class="part-txt">
                                    {{ $country->title ?? '' }}
                                    <p>
                                        <a href="{{ route('overseas_jobs.show', $country->id) }}">
                                            <img src="{{ $country->photo }}" alt="LOGO"
                                                style="weight:50px;height:50px;">
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="blog-2 pt-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-12 col-md-8">
                    <div class="heading">
                        <h2 style="color:#125787;text-shadow:1px 3px 3px;">
                            Our Recruitment Activities
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($activities as $activitie)
                    <div class="col-md-12 col-sm-12 col-lg-12 py-3">
                        <h4 class="gallary-group-title text-black">
                            {{ $activitie->title ?? '' }}
                        </h4>
                        <p class="text-black">
                            {!! $activitie->description ?? '' !!}
                        </p>
                        <div class="row">
                            @php
                                $values = explode(',', $activitie->photo);
                            @endphp
                            @foreach ($values as $photo)
                                <div class="col-md-3 col-lg-3 col-sm-12">
                                    <div class="gallary-item"
                                        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                                        <img src="{{ $photo }}" alt="SILVER STAR CLUSTER COMPANY LIMITED"
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

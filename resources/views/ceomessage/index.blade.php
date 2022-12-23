@extends('layouts.app')
@section('content')
    <div class="team-details ">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="profile">
                        <div class="part-img">
                            <img src="{{ asset('data/ceo.jpg') }}" alt="image" style="width: 100%; height: 300px; background-size: center; object-fit: cover; object-position: center;">
                        </div>
                        <div class="txt" style="background-color:#FFF632;">
                            <h3 style="font-family:Times New Roman; text-shadow:1px 1px 1px;">Mr.Kyaw Bhone Naing</h3>
                            <i><span style="font-weight:bold ;font-family:Times New Roman;">Managing Director</span></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="part-txt">
                        <div class="biography">
                            <h2>
                                Message From CEO
                            </h2>
                            <p>
                                <span style="font-size: 17px; font-family:Times New Roman;">
                                    SILVER STAR CLUSTER COMPANY LIMITED
                                </span>
                                CO.,LTD has been established to facilitate
                                overseas employment of Myanmar human
                                resources.
                                Our motto is to provide the "Educated and Skilled" human resources to our clients.
                                We believe that this would help them to get a suitable employment.
                                I'm confident; SILVER STAR CLUSTER COMPANY LIMITED will play a significant role in this
                                sector to provide
                                services
                                with minimum costs.
                            </p>
                            <p style="font-size:18px;  font-family:Times New Roman;">
                                As part of SILVER STAR CLUSTER COMPANY LIMITED Agency, I wish continuous success in the days
                                to comes.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection

@extends('layouts.app')
@section('content')
    <style>
        @import url(https://fonts.googleapis.com/css?family=Hind);
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);

        body {
            font-family: 'Open Sans', sans-serif;
            color: #31383d;
            font-size: 1.1rem;
        }

        section {
            padding: 30px 0;
            background: #fff;
        }

        p {
            line-height: 1.5;
            margin: 30px 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Hind', sans-serif;
            font-weight: 800;
        }

        a {
            color: #31383d;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            transition: all 0.2s;
        }

        a:hover,
        a:focus {
            color: #73a5fc;
        }

        ul.job-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        ul.job-list>li.job-preview {
            background: #fff;
            border: 1px solid #d7e2e9;
            -webkit-border-radius: 0.4rem;
            -moz-border-radius: 0.4rem;
            border-radius: 0.4rem;
            padding: 1.5rem 2rem;
            margin-bottom: 1rem;
            float: left;
            width: 100%;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        ul.job-list>li.job-preview:hover {
            cursor: pointer;
            -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
        }

        .job-title {
            margin-top: 0.6rem;
        }

        .company {
            color: #96a4b1;
        }

        .job-preview .btn {
            margin-top: 1.1rem;
        }

        .btn-apply {
            text-transform: uppercase;
            font-size: 0.875rem;
            font-weight: 800;
            letter-spacing: 1px;
            background-color: transparent;
            color: #393a5f;
            border: 2px solid #393a5f;
            padding: 0.6rem 2rem;
            -webkit-border-radius: 2rem;
            -moz-border-radius: 2rem;
            border-radius: 2rem;
        }

        .btn-apply:hover {
            background-color: #393a5f;
            color: #fff;
            border: 2px solid #393a5f;
        }

        @media (max-width: 575px) {
            .job-preview .content {
                width: 100%;
            }
        }
    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h2>
                        Jobs in {{ $country->title ?? '' }}
                    </h2>
                    <ul class="job-list">
                        @foreach ($jobs as $key => $job)
                            <li class="job-preview">
                                <div class="content float-left">
                                    <h4 class="job-title">
                                        {{ $job->title ?? '' }}
                                    </h4>
                                    <h5 class="company">
                                        {{ $country->title ?? '' }}
                                    </h5>
                                </div>
                                <a href="{{ route('cv.index') }}" class="btn btn-apply float-sm-right float-xs-left">
                                    Apply
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

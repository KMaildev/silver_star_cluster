@extends('layouts.app')
@section('title', ' - Submit CV')
@section('content')
    <style>
        body {
            margin: auto;
            background: #eaeaea;
            font-family: 'Open Sans', sans-serif;
        }

        .info p {
            text-align: center;
            color: #999;
            text-transform: none;
            font-weight: 600;
            font-size: 15px;
            margin-top: 2px
        }

        .info i {
            color: #161615;
        }

        form h1 {
            font-size: 18px;
            background: #1a1919 none repeat scroll 0% 0%;
            color: rgb(255, 255, 255);
            padding: 22px 25px;
            border-radius: 5px 5px 0px 0px;
            margin: auto;
            text-shadow: none;
            text-align: left
        }

        form {
            border-radius: 5px;
            max-width: 700px;
            width: 100%;
            margin: 5% auto;
            background-color: #FFFFFF;
            overflow: hidden;
        }

        p span {
            color: #F00;
        }

        p {
            margin: 0px;
            font-weight: 500;
            line-height: 2;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #666;
            text-shadow: 1px 1px 0px #FFF;
            margin: 50px 0px 0px 0px
        }

        input {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #eee;
            margin-bottom: 15px;
            width: 75%;
            height: 40px;
            float: left;
            padding: 0px 15px;
        }

        a {
            text-decoration: inherit
        }

        textarea {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #EEE;
            margin: 0;
            width: 75%;
            height: 130px;
            float: left;
            padding: 0px 15px;
        }

        .form-group {
            overflow: hidden;
            clear: both;
        }

        .icon-case {
            width: 35px;
            float: left;
            border-radius: 5px 0px 0px 5px;
            background: #eeeeee;
            height: 42px;
            position: relative;
            text-align: center;
            line-height: 40px;
        }

        i {
            color: #555;
        }

        .contentform {
            padding: 40px 30px;
        }

        .bouton-contact {
            background-color: #fff632;
            color: black;
            text-align: center;
            width: 100%;
            border: 0;
            padding: 17px 25px;
            border-radius: 0px 0px 5px 5px;
            cursor: pointer;
            margin-top: 40px;
            font-size: 18px;
        }

        .leftcontact {
            width: 49.5%;
            float: left;
            border-right: 1px dotted #CCC;
            box-sizing: border-box;
            padding: 0px 15px 0px 0px;
        }

        .rightcontact {
            width: 49.5%;
            float: right;
            box-sizing: border-box;
            padding: 0px 0px 0px 15px;
        }

        .validation {
            display: none;
            margin: 0 0 10px;
            font-weight: 400;
            font-size: 13px;
            color: #DE5959;
        }

        #sendmessage {
            border: 1px solid #fff;
            display: none;
            text-align: center;
            margin: 10px 0;
            font-weight: 600;
            margin-bottom: 30px;
            background-color: #EBF6E0;
            color: #5F9025;
            border: 1px solid #B3DC82;
            padding: 13px 40px 13px 18px;
            border-radius: 3px;
            box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
        }

        #sendmessage.show,
        .show {
            display: block;
        }
    </style>
    <h1>
        Employer Application Form
    </h1>
    <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
        @csrf
        <h1>Should you have any questions, please do not hesitate to contact me :</h1>
        <div class="contentform">
            <div class="leftcontact">

                <div class="form-group">
                    <p>Company Name<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-male"></i></span>
                    <input autocomplete="off" type="text" class="@error('company_name') is-invalid @enderror"
                        placeholder="Company Name" name="company_name" value="{{ old('company_name') }}">
                    @error('company_name')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Type of Company <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-user"></i></span>
                    <input autocomplete="off" type="text" class=" @error('company_type') is-invalid @enderror"
                        placeholder="Type Of Company" name="company_type" value="{{ old('company_type') }}">
                    @error('company_type')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Company Location</p>
                    <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                    <input autocomplete="off" type="text" class="@error('location') is-invalid @enderror"
                        placeholder="Company Location" name="location" value="{{ old('location') }}">
                    @error('location')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Job Category</p>
                    <span class="icon-case"><i class="fa fa-home"></i></span>
                    <input autocomplete="off" type="text" class="@error('job_category') is-invalid @enderror"
                        placeholder="Job Category" name="job_category" value="{{ old('job_category') }}">
                    @error('job_category')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Age Limit</p>
                    <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                    <input autocomplete="off" type="text" class="@error('age_limit') is-invalid @enderror"
                        placeholder="Age Limit: 20-40" name="age_limit" value="{{ old('age_limit') }}">
                    @error('age_limit')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Gender: Male = 10, Female = 5</p>
                    <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                    <input autocomplete="off" type="text" class=" @error('gender') is-invalid @enderror"
                        placeholder="Gender: Male = 10, Female = 5" name="gender" value="{{ old('gender') }}">
                    @error('gender')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Estimate Salary Offer</p>
                    <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                    <input autocomplete="off" type="text" class="@error('estimate_salary_offer') is-invalid @enderror"
                        placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                        value="{{ old('estimate_salary_offer') }}">
                    @error('estimate_salary_offer')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Other Allowance</p>
                    <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                    <input autocomplete="off" type="text" class="@error('other_allowance') is-invalid @enderror"
                        placeholder="Other Allowance" name="other_allowance" value="{{ old('other_allowance') }}">
                    @error('other_allowance')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>

            <div class="rightcontact">

                <div class="form-group">
                    <p>Company Email Address <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-building-o"></i></span>
                    <input type="email" class="@error('email') is-invalid @enderror" placeholder="Company Email Address"
                        name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Phone number <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-phone"></i></span>
                    <input autocomplete="off" type="text" class="@error('phone') is-invalid @enderror"
                        placeholder="Company Phone Number" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Website</p>
                    <span class="icon-case"><i class="fa fa-info"></i></span>
                    <input autocomplete="off" type="text" class="@error('website') is-invalid @enderror"
                        placeholder="Company Website" name="website" value="{{ old('website') }}">
                    @error('website')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Educational Requirement</p>
                    <span class="icon-case"><i class="fa fa-comment"></i></span>
                    <textarea class="@error('educational_requirement') is-invalid @enderror" name="educational_requirement"
                        placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                    @error('educational_requirement')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Working Experience Requirement</p>
                    <span class="icon-case"><i class="fa fa-comments"></i></span>
                    <textarea class="@error('working_experience_requirement') is-invalid @enderror" name="working_experience_requirement"
                        placeholder="Working Experience">{{ old('working_experience_requirement') }}</textarea>
                    @error('working_experience_requirement')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Interview Type</p>
                    <span class="icon-case"><i class="fa fa-phone"></i></span>
                    <input autocomplete="off" type="text" class="@error('interview_type') is-invalid @enderror"
                        placeholder="Interview Type: Online" name="interview_type" value="{{ old('interview_type') }}">
                    @error('interview_type')
                        <div class="help-block with-errors text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="bouton-contact">
            Apply Now
        </button>
    </form>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEmployer', '#create-form') !!}
@endsection

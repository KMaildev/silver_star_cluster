@extends('layouts.app')
@section('content')
    <div class="contact p-120">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8 col-sm-12" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; padding: 40px;">
                    <div class="contact-form">
                        <div class="title">
                            <h2>
                                Interested in <span>discussing?</span>
                            </h2>
                            <p>
                                Alternatively, you may contact us by filling up the contact form. Our team will response
                                you shortly.
                            </p>
                        </div>
                        <form autocomplete="off" action="{{ route('contact.store') }}" method="POST" id="create-form">
                            @csrf
                            <div class="contact-form-wrap">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="custom-input-group">
                                            <label for="name">Name</label>
                                            <input type="text" value="{{ old('name') }}" placeholder="Your Name*"
                                                name="name">
                                            @error('name')
                                                <div class="form-control-feedback" style="color: red;">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="custom-input-group">
                                            <label for="name">Phone</label>
                                            <input type="text" value="{{ old('phone') }}" placeholder="Your Phone*"
                                                name="phone">
                                            @error('phone')
                                                <div class="form-control-feedback" style="color: red;">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="custom-input-group">
                                            <label for="name">Email</label>
                                            <input name="email" type="text" value="{{ old('email') }}"
                                                placeholder="Email Address">
                                            @error('email')
                                                <div class="form-control-feedback" style="color: red;">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="custom-input-group">
                                            <label for="name">Subject</label>
                                            <input name="subject" type="text" value="{{ old('subject') }}"
                                                placeholder="Subject*">
                                            @error('subject')
                                                <div class="form-control-feedback" style="color: red;">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="custom-input-group">
                                    <textarea cols="10" rows="2" placeholder="Your message" name="message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="custom-input-group">
                                    <div class="part-btn">
                                        <button type="submit" class="def-btn def-btn-2">SUBMIT NOW</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-sm-12">
                    <div class="contact-info">
                        <div class="title">
                            <h2>Contact Info</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="icon">
                                        <span><i class="flaticon-placeholder"></i></span>
                                    </div>
                                    <div class="txt">
                                        <h3>Myanmar</h3>
                                        <p>
                                            No.511/B, 5th Street (South), East Gyogone Ward, Insein Tsp, Yangon.
                                        </p>
                                    </div>
                                </div>

                                <div class="single-box">
                                    <div class="icon">
                                        <span><i class="flaticon-placeholder"></i></span>
                                    </div>
                                    <div class="txt">
                                        <h3>Thailand</h3>
                                        <p>
                                            No.52/8. Pan Road. Silom. Bangkok. Thailand.
                                        </p>
                                    </div>
                                </div>

                                <div class="single-box">
                                    <div class="icon">
                                        <span><i class="flaticon-black-back-closed-envelope-shape"></i></span>
                                    </div>
                                    <div class="txt">
                                        <h3>Your Email</h3>
                                        <p>
                                            <span>
                                                <a href="mailto:info@shwelannhpwint.com">
                                                    info@shwelannhpwint.com
                                                </a>

                                                <a href="mailto:admin@shwelannhpwint.com">
                                                    admin@shwelannhpwint.com
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="single-box">
                                    <div class="icon">
                                        <span><i class="flaticon-phone-call"></i></span>
                                    </div>
                                    <div class="txt">
                                        <h3>Phone Number</h3>
                                        <p>
                                            <span>
                                                <a href="tel:+951 640281">
                                                    +951 640281
                                                </a>
                                                <a href="tel:+959 940940707">
                                                    +959 940940707
                                                </a>
                                                <a href="tel:+959 448013373">
                                                    +959 448013373
                                                </a>
                                                <a href="tel:+959 798936300">
                                                    +959 798936300
                                                </a>
                                                <a href="tel:+66 839566199">
                                                    +66 839566199
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12 col-sm-12 py-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.906877241901!2d96.1175125149845!3d16.880500521668623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1944fe7257991%3A0x5b6fd965039a0302!2sShwe%20Lann%20Hpwint%20Services%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1668619646134!5m2!1sen!2smm"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection

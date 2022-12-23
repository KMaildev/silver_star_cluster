@extends('layouts.app')
@section('content')
    <div class="contact p-120">
        <div class="container">
            <div class="contact-info">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-box" style="width: 100% !important;">
                            <div class="icon">
                                <span><i class="flaticon-placeholder"></i></span>
                            </div>
                            <div class="txt">
                                <h3>Myanmar</h3>
                                <p>
                                    MYA KHAY MAR 4 TH STREET, NO.432-434
                                    EAST DAGON, YANGON, MYANMAR
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="single-box" style="width: 100% !important;">
                            <div class="icon">
                                <span><i class="flaticon-black-back-closed-envelope-shape"></i></span>
                            </div>
                            <div class="txt">
                                <h3>Your Email</h3>
                                <p>
                                    <span>
                                        <a href="mailto:info@silverstarcluster.com">
                                            info@silverstarcluster.com
                                        </a>

                                        <a href="mailto:admin@silverstarcluster.com">
                                            admin@silverstarcluster.com
                                        </a>
                                    </span>
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="single-box" style="width: 100% !important;">
                            <div class="icon">
                                <span><i class="flaticon-phone-call"></i></span>
                            </div>
                            <div class="txt">
                                <h3>Phone Number</h3>
                                <p>
                                    <span>
                                        <a href="tel:+959 788 121296">
                                            +959 788 121296
                                        </a>
                                    </span>
                                </p>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-xl-6 col-lg-6 col-sm-12"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; padding: 40px;">
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
                                    <textarea cols="2" rows="2" placeholder="Your message" name="message">{{ old('message') }}</textarea>
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

                <div class="col-md-6 col-lg-6 col-sm-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.146641285602!2d88.34615221504947!3d22.57361813862196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02765321b3ac7b%3A0xa04cd322e2e1381c!2sSilver%20Star%20Commotrade%20Pvt.%20Ltd!5e0!3m2!1sen!2smm!4v1671815381194!5m2!1sen!2smm"
                        width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection

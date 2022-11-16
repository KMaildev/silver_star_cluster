<div class="footer footer-2">
    <div class="main-footer p-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-about">
                        <h3>Contact Now!</h3>

                        <ul>
                            <li><span><i class="flaticon-placeholder"></i></span>No.511/B, 5th Street (South), East
                                Gyogone Ward, Insein Tsp, Yangon.</li>
                            <li><span><i class="flaticon-phone-call"></i></span>+951 640281, +959 940940707, +959
                                448013373, +959 798936300</li>
                            <li><span><i class="flaticon-placeholder"></i></span>No.52/8. Pan Road. Silom. Bangkok.
                                Thailand. </li>

                            <li><span><i class="flaticon-phone-call"></i></span> +66 839566199</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="links">
                        <h3>Important Links</h3>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('welcome') }}">
                                    <i class="flaticon-enter"></i>
                                    Home
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ route('company.index') }}">
                                    <i class="flaticon-enter"></i>
                                    Vision, Mission & Values
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ route('team.index') }}">
                                    <i class="flaticon-enter"></i>
                                    Our Team Members
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ route('organization.index') }}">
                                    <i class="flaticon-enter"></i>
                                    Our Organization Chart
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="newsletter">
                        <h3>Facebook</h3>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                            nonce="PosYNXjc"></script>

                        <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100070042839103"
                            data-tabs="timeline" data-width="" data-height="200" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/profile.php?id=100070042839103"
                                class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/profile.php?id=100070042839103">Facebook</a>
                            </blockquote>
                        </div>
                        <br><br><br>
                        <div class="social">
                            <a href="https://www.facebook.com/profile.php?id=100070042839103" target="_blank"
                                class="fb"><i class="flaticon-facebook-app-symbol"></i></a>
                            <a href="#" class="tw"><i class="flaticon-twitter"></i></a>
                            <a href="#" class="ld"><i class="flaticon-linkedin"></i></a>
                            <a href="#" class="pin"><i class="flaticon-pinterest"></i></a>
                            <a href="#" class="sp"><i class="flaticon-skype-logo"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <h3>Our Services</h3>
                    <div class="links">
                        <ul>
                            @foreach ($countryies as $country)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('overseas_jobs.show', $country->id) }}">
                                        <i class="flaticon-enter"></i>
                                        {{ $country->title ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <center>
                        <p>Copyright &copy; 2022. All Rights Reserved</p>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

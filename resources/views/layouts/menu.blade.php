<div class="header header-2">
    <div class="bottom-header" style="background-color: #010101;">
        <div class="container">
            <div class="row" style="width: 1800px;">

                <div class="col-xl-2 col-lg-2 d-xl-flex d-lg-flex d-none align-items-center">
                    <div class="logo">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('data/logo.jpg') }}" alt="LOGO" style="height:100px;">
                        </a>
                    </div>
                </div>

                <div class="d-xl-none d-lg-none col-4">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="material-icons-round">apps</i>
                    </button>
                </div>

                <div class="col-xl-9 col-lg-9 next">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('welcome') }}"
                                        style="font-size:16px; font-weight: 700; color:#FFFEF5;">
                                        Home
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="serviceDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="font-size:16px;  font-weight:700; color:#FFFEF5;">
                                        About Us
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="serviceDropdown">

                                        <li>
                                            <a class="dropdown-item" href="{{ route('about.index') }}">
                                                About Us
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('ceomessage.index') }}">
                                                Message From CEO
                                            </a>
                                        </li>

                                        <li hidden>
                                            <a class="dropdown-item" href="{{ route('overview.index') }}">
                                                Company Overview
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('company.index') }}">
                                                Vision, Mission & Values
                                            </a>
                                        </li>

                                        <li hidden>
                                            <a class="dropdown-item" href="{{ route('team.index') }}">
                                                Our Team Members
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('organization.index') }}">
                                                Our Organization Chart
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="serviceDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="font-size:16px;  font-weight:700; color:#FFFEF5;">
                                        Our Services
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="serviceDropdown">
                                        @foreach ($countryies as $country)
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('overseas_jobs.show', $country->id) }}">
                                                    {{ $country->title ?? '' }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="blogDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="font-size:16px;  font-weight:700; color:#FFFEF5;">
                                        Training
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                                        <li>
                                            <a class="dropdown-item" style="font-size: 14px;"
                                                href="{{ route('training', 'English') }}">
                                                English Language Training
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" style="font-size: 14px;"
                                                href="{{ route('training', 'Malay') }}">
                                                Malay Language Training
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" style="font-size: 14px;"
                                                href="{{ route('training', 'Chinese') }}">
                                                Chinese Language Training
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" style="font-size: 14px;"
                                                href="{{ route('training', 'JobDescriptionTraining') }}">
                                                Job Description Training
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" style="font-size: 14px;"
                                                href="{{ route('training', 'GeneralInterview') }}">
                                                General Interview <br> Knowledge and Training
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item" hidden>
                                    <a class="nav-link" href="{{ route('clients.index') }}"
                                        style="font-size:16px;  font-weight:700; color:#FFFEF5;">
                                        Our Client Lists
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="blogDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="font-size:16px;  font-weight:700; color:#FFFEF5;">
                                        Job Seekers
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('cv.index') }}">
                                                Submit CV
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('employer.index') }}">
                                                Employer Form
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown"><a class="nav-link"
                                        href="{{ route('recruitment.index') }}"
                                        style="font-size:16px;  font-weight:700; color:#FFFEF5;">
                                        Company Activities
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact.index') }}"
                                        style="font-size:16px;  font-weight:700; color:#FFFEF5;">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

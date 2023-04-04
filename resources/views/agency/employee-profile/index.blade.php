@extends('layouts.app')

@section('content')
    <div class="ep-pg profile-pg">
        <section class="section-padding">
            <div class="profile-btn">
                <h1 class="banner-heading">Employee Profile</h1>
            </div>
            <div class="card" style="background-image: url({{ asset('front/assets/images/profile-banner.png') }});">
                <input class="custom-upload-icon" type="file" name="upload-picture" id="upload-picture">
                <div class="card-body user-body">
                    <div class="user-profile">
                        <div class="profile">
                            <img class="" src="{{ asset('front/assets/images/e-profile.png') }}" alt="">
                            <input class="custom-upload" type="file" name="upload-picture" id="upload-picture">
                            <div class="ep-content">
                                <h1 class="ep-title">John Smith</h1>
                                <p class="ep-para">Lpn- Inpatient Nursing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-70">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Review</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <h6 class="sub-heading">About</h6>
                                <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit molestie curae
                                    mauris,
                                    taciti lectus natoque malesuada vitae ante scelerisque hendrerit mattis. Mattis lobortis
                                    arcu mi class faucibus quis tellus congue convallis, tortor curae conubia odio leo et
                                    ornare
                                    nulla vestibulum, varius phasellus sociosqu venenatis ultrices sed libero tristique.</p>
                                <div class="d-flex">
                                    <div class="experience-education">
                                        <h1 class="custom-heading">Experience</h1>
                                        <div class="experience">
                                            <img src="{{ asset('front/assets/images/profile.png') }}" alt=""
                                                class="ep-img">
                                            <div class="content">
                                                <h1 class="exp-title">Lpn- Inpatient Nursing</h1>
                                                <h6 class="exp-sub-title">Clinical Heath Network</h6>
                                                <p class="exp-para">Lorem ipsum dolor sit amet consectetur adipiscing elit
                                                    molestie curae mauris,</p>
                                            </div>
                                        </div>
                                        <div class="experience">
                                            <img src="{{ asset('front/assets/images/profile.png') }}" alt=""
                                                class="ep-img">
                                            <div class="content">
                                                <h1 class="exp-title">Lpn- Inpatient Nursing</h1>
                                                <h6 class="exp-sub-title">Clinical Heath Network</h6>
                                                <p class="exp-para">Lorem ipsum dolor sit amet consectetur adipiscing elit
                                                    molestie curae mauris,</p>
                                            </div>
                                        </div>
                                        <div class="experience">
                                            <img src="{{ asset('front/assets/images/profile.png') }}" alt=""
                                                class="ep-img">
                                            <div class="content">
                                                <h1 class="exp-title">Lpn- Inpatient Nursing</h1>
                                                <h6 class="exp-sub-title">Clinical Heath Network</h6>
                                                <p class="exp-para">Lorem ipsum dolor sit amet consectetur adipiscing elit
                                                    molestie curae mauris,</p>
                                            </div>
                                        </div>
                                        <h1 class="custom-heading">Education</h1>
                                        <div class="experience edu border-0">
                                            <img src="{{ asset('front/assets/images/profile.png') }}" alt=""
                                                class="ep-img">
                                            <div class="content">
                                                <h1 class="exp-title">Lpn- Inpatient Nursing</h1>
                                                <p class="exp-para">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                                                <h6 class="exp-sub-title">Jan 2018 - 2022</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skills-lang-loc">
                                        <h1 class="custom-heading">Skills</h1>
                                        <div class="experience skills border-0 pb-0">
                                            <img src="{{ asset('front/assets/images/profile.png') }}" alt=""
                                                class="ep-img">
                                            <div class="content">
                                                <h1 class="exp-title">Lpn- Inpatient Nursing</h1>
                                            </div>
                                        </div>
                                        <div class="experience skills">
                                            <img src="{{ asset('front/assets/images/profile.png') }}" alt=""
                                                class="ep-img">
                                            <div class="content">
                                                <h1 class="exp-title">Lpn- Inpatient Nursing</h1>
                                            </div>
                                        </div>
                                        <p class="license">Licenses</p>
                                        <div class="experience license mb-0">
                                            <img src="{{ asset('front/assets/images/profile.png') }}" alt=""
                                                class="ep-img">
                                            <img src="{{ asset('front/assets/images/profile.png') }}" alt=""
                                                class="ep-img">
                                            <img src="{{ asset('front/assets/images/profile.png') }}" alt=""
                                                class="ep-img">
                                        </div>
                                        <h1 class="custom-heading">Language</h1>
                                        <div class="experience language">
                                            <h1>English</h1>
                                            <p>Elementary proficiency</p>
                                        </div>
                                        <h1 class="custom-heading">Location</h1>
                                        <div class="experience language">
                                            <h1>USA</h1>
                                            <p>California lorem ipsum address</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="ep-btn-review">
                                    <a href="#" class="give-btn btn btn-primary">Give Rating & Review</a>
                                </div>
                                <div class="review-box">
                                    <div class="double-reviews">
                                        <div class="review-left">
                                            <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="">
                                            <div class="review-content">
                                                <h1>John Doe</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis donec pretium
                                                    potenti</p>
                                            </div>
                                        </div>
                                        <div class="review-right">
                                            <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="">
                                            <div class="review-content">
                                                <h1>John Doe</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis donec pretium
                                                    potenti</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="double-reviews">
                                        <div class="review-left">
                                            <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="">
                                            <div class="review-content">
                                                <h1>John Doe</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis donec pretium
                                                    potenti</p>
                                            </div>
                                        </div>
                                        <div class="review-right">
                                            <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="">
                                            <div class="review-content">
                                                <h1>John Doe</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis donec pretium
                                                    potenti</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="double-reviews">
                                        <div class="review-left">
                                            <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="">
                                            <div class="review-content">
                                                <h1>John Doe</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis donec pretium
                                                    potenti</p>
                                            </div>
                                        </div>
                                        <div class="review-right">
                                            <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="">
                                            <div class="review-content">
                                                <h1>John Doe</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis donec pretium
                                                    potenti</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="double-reviews">
                                        <div class="review-left">
                                            <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="">
                                            <div class="review-content">
                                                <h1>John Doe</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis donec pretium
                                                    potenti</p>
                                            </div>
                                        </div>
                                        <div class="review-right">
                                            <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="">
                                            <div class="review-content">
                                                <h1>John Doe</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis donec pretium
                                                    potenti</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="double-reviews">
                                        <div class="review-left">
                                            <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="">
                                            <div class="review-content">
                                                <h1>John Doe</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis donec pretium
                                                    potenti</p>
                                            </div>
                                        </div>
                                        <div class="review-right">
                                            <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="">
                                            <div class="review-content">
                                                <h1>John Doe</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis donec pretium
                                                    potenti</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="dashboard-messages">
                            <h1 class="heading">Messages</h1>
                            <div class="messages-box">
                                <div class="messages">
                                    <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                    <div class="content-details">
                                        <div>
                                            <h1>Martin Smith</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                        <span class="not-badge">1</span>
                                    </div>
                                </div>
                                <div class="messages">
                                    <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                    <div class="content-details">
                                        <div>
                                            <h1>Martin Smith</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                        <span class="not-badge">1</span>
                                    </div>
                                </div>
                                <div class="messages">
                                    <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                    <div class="content-details">
                                        <div>
                                            <h1>Martin Smith</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                        <span class="not-badge">1</span>
                                    </div>
                                </div>
                                <div class="messages">
                                    <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                    <div class="content-details">
                                        <div>
                                            <h1>Martin Smith</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                        <span class="not-badge">1</span>
                                    </div>
                                </div>
                                <div class="messages">
                                    <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                    <div class="content-details">
                                        <div>
                                            <h1>Martin Smith</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                        <span class="not-badge">1</span>
                                    </div>
                                </div>
                                <div class="messages">
                                    <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                    <div class="content-details">
                                        <div>
                                            <h1>Martin Smith</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                        <span class="not-badge">1</span>
                                    </div>
                                </div>
                                <div class="messages">
                                    <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                    <div class="content-details">
                                        <div>
                                            <h1>Martin Smith</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                        <span class="not-badge">1</span>
                                    </div>
                                </div>
                                <div class="messages">
                                    <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                    <div class="content-details">
                                        <div>
                                            <h1>Martin Smith</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                        <span class="not-badge">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <section class="section-padding profile-pg">
        <div class="profile-btn">
            <h1 class="banner-heading">Profile</h1>
            <a href="{{ url('/profile') }}edit-profile" class="give-btn btn btn-primary">Edit profile</a>
        </div>
        <div class="card" style="background-image: url({{ asset('front/assets/images/profile-banner.png') }});">
            <input class="custom-upload-icon" type="file" name="upload-picture" id="upload-picture">
            <div class="card-body user-body">
                <div class="user-profile">
                    <div class="profile">
                        <img class="" src="{{ asset('front/assets/images/profile.png') }}" alt="">
                        <input class="custom-upload" type="file" name="upload-picture" id="upload-picture">
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
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Review</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h6 class="sub-heading">About</h6>
                            <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit molestie curae mauris,
                                taciti lectus natoque malesuada vitae ante scelerisque hendrerit mattis. Mattis lobortis
                                arcu mi class faucibus quis tellus congue convallis, tortor curae conubia odio leo et ornare
                                nulla vestibulum, varius phasellus sociosqu venenatis ultrices sed libero tristique.
                                Porttitor maecenas aliquam quam dis himenaeos mauris neque, lobortis auctor ridiculus montes
                                fermentum netus, malesuada ultricies lacus varius viverra sodales.</p>
                            <h6 class="sub-heading">Industry<span>Medical</span></h6>
                            <h6 class="sub-heading">Type<span>Private</span></h6>
                            <h6 class="sub-heading">Founded<span>2012</span></h6>
                            <h6 class="sub-heading">Specialities</h6>
                            <p class="para-2">
                                Varius phasellus sociosqu venenatis ultrices sed libero tristique. Porttitor maecenas
                                aliquam quam dis himenaeos mauris neque, lobortis auctor ridiculus montes fermentum netus,
                                malesuada ultricies lacus varius viverra sodales.</p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="job-box">
                                <div class="jobs">
                                    <h1 class="job-title">Lpn- Inpatient Nursing</h1>
                                    <div class="job-tags">
                                        <p class="tag-1">$64.5K - $81.7K per month</p>
                                        <p class="tag-2">Full Time</p>
                                    </div>
                                    <h6 class="job-des">Job Description</h6>
                                    <p class="job-para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                </div>
                                <div class="jobs">
                                    <h1 class="job-title">Lpn- Inpatient Nursing</h1>
                                    <div class="job-tags">
                                        <p class="tag-1">$64.5K - $81.7K per month</p>
                                        <p class="tag-2">Full Time</p>
                                    </div>
                                    <h6 class="job-des">Job Description</h6>
                                    <p class="job-para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                </div>
                                <div class="jobs">
                                    <h1 class="job-title">Lpn- Inpatient Nursing</h1>
                                    <div class="job-tags">
                                        <p class="tag-1">$64.5K - $81.7K per month</p>
                                        <p class="tag-2">Full Time</p>
                                    </div>
                                    <h6 class="job-des">Job Description</h6>
                                    <p class="job-para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                </div>
                                <div class="jobs">
                                    <h1 class="job-title">Lpn- Inpatient Nursing</h1>
                                    <div class="job-tags">
                                        <p class="tag-1">$64.5K - $81.7K per month</p>
                                        <p class="tag-2">Full Time</p>
                                    </div>
                                    <h6 class="job-des">Job Description</h6>
                                    <p class="job-para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                </div>
                                <div class="jobs">
                                    <h1 class="job-title">Lpn- Inpatient Nursing</h1>
                                    <div class="job-tags">
                                        <p class="tag-1">$64.5K - $81.7K per month</p>
                                        <p class="tag-2">Full Time</p>
                                    </div>
                                    <h6 class="job-des">Job Description</h6>
                                    <p class="job-para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                </div>
                                <div class="jobs">
                                    <h1 class="job-title">Lpn- Inpatient Nursing</h1>
                                    <div class="job-tags">
                                        <p class="tag-1">$64.5K - $81.7K per month</p>
                                        <p class="tag-2">Full Time</p>
                                    </div>
                                    <h6 class="job-des">Job Description</h6>
                                    <p class="job-para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                </div>
                                <div class="jobs">
                                    <h1 class="job-title">Lpn- Inpatient Nursing</h1>
                                    <div class="job-tags">
                                        <p class="tag-1">$64.5K - $81.7K per month</p>
                                        <p class="tag-2">Full Time</p>
                                    </div>
                                    <h6 class="job-des">Job Description</h6>
                                    <p class="job-para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                </div>
                                <div class="jobs">
                                    <h1 class="job-title">Lpn- Inpatient Nursing</h1>
                                    <div class="job-tags">
                                        <p class="tag-1">$64.5K - $81.7K per month</p>
                                        <p class="tag-2">Full Time</p>
                                    </div>
                                    <h6 class="job-des">Job Description</h6>
                                    <p class="job-para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                </div>
                                <div class="jobs">
                                    <h1 class="job-title">Lpn- Inpatient Nursing</h1>
                                    <div class="job-tags">
                                        <p class="tag-1">$64.5K - $81.7K per month</p>
                                        <p class="tag-2">Full Time</p>
                                    </div>
                                    <h6 class="job-des">Job Description</h6>
                                    <p class="job-para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                </div>
                                <div class="jobs">
                                    <h1 class="job-title">Lpn- Inpatient Nursing</h1>
                                    <div class="job-tags">
                                        <p class="tag-1">$64.5K - $81.7K per month</p>
                                        <p class="tag-2">Full Time</p>
                                    </div>
                                    <h6 class="job-des">Job Description</h6>
                                    <p class="job-para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <h1 class="rating">4.5</h1>
                            <p class="reviews">130 Reviews</p>
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
@endsection

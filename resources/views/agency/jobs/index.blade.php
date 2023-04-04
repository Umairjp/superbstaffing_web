@extends('layouts.app')

@section('content')
<section class="section-padding jobs-pg">
    <h1 class="banner-heading">Jobs</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="create-new-job">
                    <h1>Create New Job</h1>
                    <div class="form-row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="job-title" id="job-title" placeholder="Job Title">
                                <input type="text" name="start-date" id="start-date" placeholder="Start Date">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="job-status" id="job-status" placeholder="Job Status">
                                <input type="text" name="end-date" id="end-date" placeholder="End Date">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <input class="short" type="text" name="timing" id="timing" placeholder="Timing">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <input class="short" type="text" name="hourly-rate" id="hourly-rate"
                                    placeholder="Hourly Rate">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <input class="short" type="text" name="payment" id="payment"
                                    placeholder="Payments">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <input class="short" type="text" name="bonus" id="bonus" placeholder="Bonus">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="comment" form="usrform">Description</textarea>
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-20">
                    <div class="col-lg-6">
                        <div class="job-posted">
                            <h1 class="title">Previous Job Posted</h1>
                            <div class="job-box">
                                <div class="job-posted-box">
                                    <h1 class="sub-title">Lpn- Inpatient Nursing <span class="tag-1">Full Time</span>
                                    </h1>
                                    <h6 class="job-description">Job Description</h6>
                                    <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                    <div class="d-flex">
                                        <h2>Start Date <span>1 jan 2022</span></h2>
                                        <h2>End Date <span>31 jan 2022</span></h2>
                                        <h2>Timing <span>9AM to 6PM</span></h2>
                                        <h2>Payment <span>$81.7K</span></h2>
                                    </div>
                                </div>
                                <div class="job-posted-box">
                                    <h1 class="sub-title">Lpn- Inpatient Nursing <span class="tag-1">Full Time</span>
                                    </h1>
                                    <h6 class="job-description">Job Description</h6>
                                    <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                    <div class="d-flex">
                                        <h2>Start Date <span>1 jan 2022</span></h2>
                                        <h2>End Date <span>31 jan 2022</span></h2>
                                        <h2>Timing <span>9AM to 6PM</span></h2>
                                        <h2>Payment <span>$81.7K</span></h2>
                                    </div>
                                </div>
                                <div class="job-posted-box">
                                    <h1 class="sub-title">Lpn- Inpatient Nursing <span class="tag-1">Full Time</span>
                                    </h1>
                                    <h6 class="job-description">Job Description</h6>
                                    <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                    <div class="d-flex">
                                        <h2>Start Date <span>1 jan 2022</span></h2>
                                        <h2>End Date <span>31 jan 2022</span></h2>
                                        <h2>Timing <span>9AM to 6PM</span></h2>
                                        <h2>Payment <span>$81.7K</span></h2>
                                    </div>
                                </div>
                                <div class="job-posted-box">
                                    <h1 class="sub-title">Lpn- Inpatient Nursing <span class="tag-1">Full Time</span>
                                    </h1>
                                    <h6 class="job-description">Job Description</h6>
                                    <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                    <div class="d-flex">
                                        <h2>Start Date <span>1 jan 2022</span></h2>
                                        <h2>End Date <span>31 jan 2022</span></h2>
                                        <h2>Timing <span>9AM to 6PM</span></h2>
                                        <h2>Payment <span>$81.7K</span></h2>
                                    </div>
                                </div>
                                <div class="job-posted-box">
                                    <h1 class="sub-title">Lpn- Inpatient Nursing <span class="tag-1">Full Time</span>
                                    </h1>
                                    <h6 class="job-description">Job Description</h6>
                                    <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat,
                                        tempor hendrerit dignissim nam laoreet et. Aliquam dictum magnis fames taciti
                                        ullamcorper...</p>
                                    <div class="d-flex">
                                        <h2>Start Date <span>1 jan 2022</span></h2>
                                        <h2>End Date <span>31 jan 2022</span></h2>
                                        <h2>Timing <span>9AM to 6PM</span></h2>
                                        <h2>Payment <span>$81.7K</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dashboard-interviews">
                            <h1 class="heading">Interviews</h1>
                            <div class="interviews-box">
                                <div class="interviews">
                                    <span class="icon-Icon-material-image interview-icon"></span>
                                    <div class="content-details">
                                        <div>
                                            <h1>John Smith</h1>
                                            <p>Lpn- Inpatient Nursing</p>
                                        </div>
                                        <div>
                                            <h6 class="schedule">Scheduled on</h6>
                                            <p class="time">Mon, 15 Sep 2022 | 9 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="interviews">
                                    <span class="icon-Icon-material-image interview-icon"></span>
                                    <div class="content-details">
                                        <div>
                                            <h1>John Smith</h1>
                                            <p>Lpn- Inpatient Nursing</p>
                                        </div>
                                        <div>
                                            <h6 class="schedule">Scheduled on</h6>
                                            <p class="time">Mon, 15 Sep 2022 | 9 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="interviews">
                                    <span class="icon-Icon-material-image interview-icon"></span>
                                    <div class="content-details">
                                        <div>
                                            <h1>John Smith</h1>
                                            <p>Lpn- Inpatient Nursing</p>
                                        </div>
                                        <div>
                                            <h6 class="schedule">Scheduled on</h6>
                                            <p class="time">Mon, 15 Sep 2022 | 9 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="interviews">
                                    <span class="icon-Icon-material-image interview-icon"></span>
                                    <div class="content-details">
                                        <div>
                                            <h1>John Smith</h1>
                                            <p>Lpn- Inpatient Nursing</p>
                                        </div>
                                        <div>
                                            <h6 class="schedule">Scheduled on</h6>
                                            <p class="time">Mon, 15 Sep 2022 | 9 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="interviews">
                                    <span class="icon-Icon-material-image interview-icon"></span>
                                    <div class="content-details">
                                        <div>
                                            <h1>John Smith</h1>
                                            <p>Lpn- Inpatient Nursing</p>
                                        </div>
                                        <div>
                                            <h6 class="schedule">Scheduled on</h6>
                                            <p class="time">Mon, 15 Sep 2022 | 9 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="interviews">
                                    <span class="icon-Icon-material-image interview-icon"></span>
                                    <div class="content-details">
                                        <div>
                                            <h1>John Smith</h1>
                                            <p>Lpn- Inpatient Nursing</p>
                                        </div>
                                        <div>
                                            <h6 class="schedule">Scheduled on</h6>
                                            <p class="time">Mon, 15 Sep 2022 | 9 AM</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="current-employees">
                    <div class="heading">
                        <h1>Current Employees</h1>
                        <button type="button" class="btn" data-toggle="modal" data-target="#employee-modal">
                            +Add Employee
                        </button>
                    </div>
                    <div class="employee-box">
                        <div class="employee">
                            <div class="content">
                                <img src="{{ asset('images/circle-2.png') }}" alt="">
                                <div>
                                    <h1>John Smith</h1>
                                    <p>Lpn- Inpatient Nursing</p>
                                </div>
                                <a href="#" class="set-radius">Set Radius</a>
                            </div>
                            <div class="d-flex">
                                <h2>Work Place <span>Clinical Heath Network</span></h2>
                                <h2>Working Hours <span>09:00 AM To 06:00 PM</span></h2>
                                <h2>Job Radius <span>Under Radius</span></h2>
                            </div>
                        </div>
                        <div class="employee">
                            <div class="content">
                                <img src="{{ asset('images/circle-2.png') }}" alt="">
                                <div>
                                    <h1>John Smith</h1>
                                    <p>Lpn- Inpatient Nursing</p>
                                </div>
                                <a href="#" class="set-radius">Set Radius</a>
                            </div>
                            <div class="d-flex">
                                <h2>Work Place <span>Clinical Heath Network</span></h2>
                                <h2>Working Hours <span>09:00 AM To 06:00 PM</span></h2>
                                <h2>Job Radius <span>Under Radius</span></h2>
                            </div>
                        </div>
                        <div class="employee">
                            <div class="content">
                                <img src="{{ asset('images/circle-2.png') }}" alt="">
                                <div>
                                    <h1>John Smith</h1>
                                    <p>Lpn- Inpatient Nursing</p>
                                </div>
                                <a href="#" class="set-radius">Set Radius</a>
                            </div>
                            <div class="d-flex">
                                <h2>Work Place <span>Clinical Heath Network</span></h2>
                                <h2>Working Hours <span>09:00 AM To 06:00 PM</span></h2>
                                <h2>Job Radius <span>Under Radius</span></h2>
                            </div>
                        </div>
                        <div class="employee">
                            <div class="content">
                                <img src="{{ asset('images/circle-2.png') }}" alt="">
                                <div>
                                    <h1>John Smith</h1>
                                    <p>Lpn- Inpatient Nursing</p>
                                </div>
                                <a href="#" class="set-radius">Set Radius</a>
                            </div>
                            <div class="d-flex">
                                <h2>Work Place <span>Clinical Heath Network</span></h2>
                                <h2>Working Hours <span>09:00 AM To 06:00 PM</span></h2>
                                <h2>Job Radius <span>Under Radius</span></h2>
                            </div>
                        </div>
                        <div class="employee">
                            <div class="content">
                                <img src="{{ asset('images/circle-2.png') }}" alt="">
                                <div>
                                    <h1>John Smith</h1>
                                    <p>Lpn- Inpatient Nursing</p>
                                </div>
                                <a href="#" class="set-radius">Set Radius</a>
                            </div>
                            <div class="d-flex">
                                <h2>Work Place <span>Clinical Heath Network</span></h2>
                                <h2>Working Hours <span>09:00 AM To 06:00 PM</span></h2>
                                <h2>Job Radius <span>Under Radius</span></h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

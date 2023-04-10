@extends('layouts.app')

@section('content')
    <section class="section-padding">
        <div class="custom-dsb mb-30">
            <h1 class="banner-heading">Dashboard</h1>
            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
                Post A Job
            </button>
        </div>
       
                <div class="table-responsive">
                    <table class="dashboard-table">
                        <tr>
                            <th>
                                <h1 class="th-title">Job Title</h1>
                            </th>
                            <th>
                                <h1 class="th-title">Candidate</h1>
                            </th>
                            <th>
                                <h1 class="th-title">Salary Status</h1>
                            </th>
                            <th>
                                <h1 class="th-title">Job Status</h1>
                            </th>
                            <th>
                                <h1 class="th-title">Action</h1>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <h1 class="title">Lpn- Inpatient Nursing <span>Full Time</span></h1>
                                <h6 class="sub-title">Created : 01-01-2022 End 10-01-2022</h6>
                                <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                            </td>
                            <td>
                                <div class="row counter-row">
                                    <div class="col-4">
                                        <h1 class="counter">3</h1>
                                        <p class="counter-para">Active Candidate</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">0</h1>
                                        <p class="counter-para">Awaiting</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">0</h1>
                                        <p class="counter-para">Reviewed</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">0</h1>
                                        <p class="counter-para">Contact</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">1</h1>
                                        <p class="counter-para">Hired</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="salary">$25/ Hr</p>
                            </td>
                            <td>
                                <ul class="nav-menu job-status">
                                    <li class="nav-item dropdown account-item">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <ul>
                                                <li>
                                                    <a href="#" class="btn btn-primary btn-md">Active</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="nav-menu action">
                                    <li class="nav-item dropdown account-item">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <ul>
                                                <li>
                                                    <a href="#" class="btn btn-primary btn-md">Action</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 class="title">Lpn- Inpatient Nursing <span>Full Time</span></h1>
                                <h6 class="sub-title">Created : 01-01-2022 End 10-01-2022</h6>
                                <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                            </td>
                            <td>
                                <div class="row counter-row">
                                    <div class="col-4">
                                        <h1 class="counter">3</h1>
                                        <p class="counter-para">Active Candidate</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">0</h1>
                                        <p class="counter-para">Awaiting</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">0</h1>
                                        <p class="counter-para">Reviewed</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">0</h1>
                                        <p class="counter-para">Contact</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">1</h1>
                                        <p class="counter-para">Hired</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="salary">$25/ Hr</p>
                            </td>
                            <td>
                                <ul class="nav-menu job-status">
                                    <li class="nav-item dropdown account-item">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <ul>
                                                <li>
                                                    <a href="#" class="btn btn-primary btn-md">Active</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="nav-menu action">
                                    <li class="nav-item dropdown account-item">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <ul>
                                                <li>
                                                    <a href="#" class="btn btn-primary btn-md">Action</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 class="title">Lpn- Inpatient Nursing <span>Full Time</span></h1>
                                <h6 class="sub-title">Created : 01-01-2022 End 10-01-2022</h6>
                                <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                            </td>
                            <td>
                                <div class="row counter-row">
                                    <div class="col-4">
                                        <h1 class="counter">3</h1>
                                        <p class="counter-para">Active Candidate</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">0</h1>
                                        <p class="counter-para">Awaiting</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">0</h1>
                                        <p class="counter-para">Reviewed</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">0</h1>
                                        <p class="counter-para">Contact</p>
                                    </div>
                                    <div class="col-2">
                                        <h1 class="counter">1</h1>
                                        <p class="counter-para">Hired</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="salary">$25/ Hr</p>
                            </td>
                            <td>
                                <ul class="nav-menu job-status">
                                    <li class="nav-item dropdown account-item">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <ul>
                                                <li>
                                                    <a href="#" class="btn btn-primary btn-md">Active</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="nav-menu action">
                                    <li class="nav-item dropdown account-item">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <ul>
                                                <li>
                                                    <a href="#" class="btn btn-primary btn-md">Action</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
          

        <div class="container-fluid mt-50">
            <div class="row">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="dashboard-request">
                        <h1 class="heading">Request</h1>
                        <div class="request-box">
                            <div class="request">
                                <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>John Smith</h1>
                                        <p>Lpn- Inpatient Nursing</p>
                                    </div>
                                    <div class="d-flex">
                                        <a href="#" class="btn-blue">Accept</a>
                                        <a href="#" class="btn-orange">Reject</a>
                                    </div>
                                </div>
                            </div>
                            <div class="request">
                                <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>John Smith</h1>
                                        <p>Lpn- Inpatient Nursing</p>
                                    </div>
                                    <div class="d-flex">
                                        <a href="#" class="btn-blue">Accept</a>
                                        <a href="#" class="btn-orange">Reject</a>
                                    </div>
                                </div>
                            </div>
                            <div class="request">
                                <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>John Smith</h1>
                                        <p>Lpn- Inpatient Nursing</p>
                                    </div>
                                    <div class="d-flex">
                                        <a href="#" class="btn-blue">Accept</a>
                                        <a href="#" class="btn-orange">Reject</a>
                                    </div>
                                </div>
                            </div>
                            <div class="request">
                                <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>John Smith</h1>
                                        <p>Lpn- Inpatient Nursing</p>
                                    </div>
                                    <div class="d-flex">
                                        <a href="#" class="btn-blue">Accept</a>
                                        <a href="#" class="btn-orange">Reject</a>
                                    </div>
                                </div>
                            </div>
                            <div class="request">
                                <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>John Smith</h1>
                                        <p>Lpn- Inpatient Nursing</p>
                                    </div>
                                    <div class="d-flex">
                                        <a href="#" class="btn-blue">Accept</a>
                                        <a href="#" class="btn-orange">Reject</a>
                                    </div>
                                </div>
                            </div>
                            <div class="request">
                                <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>John Smith</h1>
                                        <p>Lpn- Inpatient Nursing</p>
                                    </div>
                                    <div class="d-flex">
                                        <a href="#" class="btn-blue">Accept</a>
                                        <a href="#" class="btn-orange">Reject</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
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
    </section>
@endsection

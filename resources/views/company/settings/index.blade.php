@extends('layouts.app')

@section('content')
    <section class="section-padding setting-pg">
        <div class="custom-dsb mb-30">
            <h1 class="banner-heading">Settings</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-2">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account"
                            role="tab" aria-controls="v-pills-account" aria-selected="true">
                            <h1>Account</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultrices,</p>
                        </a>
                        <a class="nav-link" id="v-pills-notification-tab" data-toggle="pill" href="#v-pills-notification"
                            role="tab" aria-controls="v-pills-notification" aria-selected="false">
                            <h1>Notifications</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultrices,</p>
                        </a>
                        <a class="nav-link" id="v-pills-security-tab" data-toggle="pill" href="#v-pills-security"
                            role="tab" aria-controls="v-pills-security" aria-selected="false">
                            <h1>Security</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultrices,</p>
                        </a>
                        <a class="nav-link" id="v-pills-billing-tab" data-toggle="pill" href="#v-pills-billing"
                            role="tab" aria-controls="v-pills-billing" aria-selected="false">
                            <h1>Billing</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultrices,</p>
                        </a>
                        <a class="nav-link" id="v-pills-resources-tab" data-toggle="pill" href="#v-pills-resources"
                            role="tab" aria-controls="v-pills-resources" aria-selected="false">
                            <h1>Additional Resources</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultrices,</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-10">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-account" role="tabpanel"
                            aria-labelledby="v-pills-account-tab">
                            <form class="account-form" action="">
                                <h1>Account Settings</h1>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" name="" id="" placeholder="Company Name"
                                                class="form-control">
                                            <input type="text" name="" id="" placeholder="Company Phone"
                                                class="form-control">
                                            <select class="form-control">
                                                <option selected value="">Country</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" name="" id="" placeholder="Email"
                                                class="form-control">
                                            <input type="text" name="" id="" placeholder="Zip Code"
                                                class="form-control">
                                            <select class="form-control">
                                                <option selected value="">City</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h1>Company Details</h1>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" name="" id="" placeholder="Company Name"
                                                class="form-control">
                                            <input type="text" name="" id="" placeholder="Company Phone"
                                                class="form-control">
                                            <select class="form-control">
                                                <option selected value="">Country</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" name="" id="" placeholder="Email"
                                                class="form-control">
                                            <input type="text" name="" id="" placeholder="Zip Code"
                                                class="form-control">
                                            <select class="form-control">
                                                <option selected value="">City</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-btn">
                                                <a href="" class="btn-orange">Cancel</a>
                                                <a href="" class="btn-blue">Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-notification" role="tabpanel"
                            aria-labelledby="v-pills-notification-tab">
                            <div class="notification-settings main-div">
                                <h1>Notifications Settings</h1>
                                <div class="custom-dsb">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit vitae luctus praesent,
                                        parturient</p>
                                    <div class="d-flex align-items-center">
                                        <p class="btn-txt">Push</p>
                                        <input type="checkbox" checked data-toggle="toggle" data-style="ios">
                                    </div>
                                </div>
                                <div class="custom-dsb">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit vitae luctus praesent,
                                        parturient</p>
                                    <div class="d-flex align-items-center">
                                        <p class="btn-txt">Push</p>
                                        <input type="checkbox" checked data-toggle="toggle" data-style="ios">
                                    </div>
                                </div>
                                <div class="custom-dsb">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit vitae luctus praesent,
                                        parturient</p>
                                    <div class="d-flex align-items-center">
                                        <p class="btn-txt">Push</p>
                                        <input type="checkbox" checked data-toggle="toggle" data-style="ios">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-security" role="tabpanel"
                            aria-labelledby="v-pills-security-tab">
                            <div class="security-settings main-div">
                                <h1>Security Settings</h1>
                                <div class="change-pass">
                                    <p>Change Password</p>
                                    <div class="d-flex">
                                        <input type="text" name="" id="" placeholder="Email Address"
                                            class="form-control">
                                        <a href="" class="btn-blue">Submit</a>
                                    </div>
                                    <div class="d-flex">
                                        <input type="text" name="" id="" placeholder="OTP"
                                            class="form-control">
                                        <a href="" class="btn-blue">Submit</a>
                                    </div>
                                    <div class="d-flex">
                                        <input type="password" name="" id="" placeholder="New Password"
                                            class="form-control mr-10">
                                        <input type="password" name="" id=""
                                            placeholder="Confirm Password" class="form-control">
                                        <a href="" class="btn-blue">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-billing" role="tabpanel"
                            aria-labelledby="v-pills-billing-tab">
                            <div class="billing main-div">
                                <div class="custom-dsb">
                                    <h1>Billing</h1>
                                    <a href="" class="btn-blue">+Add Card</a>
                                </div>
                                <div class="next-payment">
                                    <div class="d-flex">
                                        <div class="left billing-box">
                                            <div class="custom-dsb">
                                                <div class="left-side">
                                                    <h6>Next Payment</h6>
                                                    <h1>$600.25</h1>
                                                    <p>On 02-01-2022</p>
                                                </div>
                                                <div class="right-side">
                                                    <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="">
                                                    <h6>John Smith</h6>
                                                    <p>Lpn- Inpatient Nursing</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right billing-box">
                                            <h6>Account Details<span class="icon-Icon-material-mode-edit"></span></h6>
                                            <p>Master:<span>125465******</span></p>
                                            <p>Exp Date:<span>12/24</span></p>
                                            <span class="icon-Icon-awesome-credit-card"></span>
                                        </div>
                                    </div>
                                    <div class="payment-table mt-20 payment-second">
                                        <div class="transaction-title custom-dsb">
                                            <h1 class="p-title">Payment History</h1>
                                            <div>
                                                <input type="number" name="" id=""
                                                    placeholder="01-01-2022">
                                                <span>To</span>
                                                <input type="number" name="" id=""
                                                    placeholder="01-01-2022">
                                                <a href="#" class="btn btn-orange">Update</a>
                                            </div>
                                        </div>
                                        <div class="transaction-table">
                                            <table>
                                                <tr>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Recipient</th>
                                                    <th>Date</th>
                                                    <th>Payment Method</th>
                                                <tr>
                                                    <td>$64.5K</td>
                                                    <td>Paid</td>
                                                    <td>John Smith</td>
                                                    <td>01-02-2022</td>
                                                    <td>Visa 01254*****</td>
                                                </tr>
                                                <tr>
                                                    <td>$64.5K</td>
                                                    <td>Paid</td>
                                                    <td>John Smith</td>
                                                    <td>01-02-2022</td>
                                                    <td>Visa 01254*****</td>
                                                </tr>
                                                <tr>
                                                    <td>$64.5K</td>
                                                    <td>Paid</td>
                                                    <td>John Smith</td>
                                                    <td>01-02-2022</td>
                                                    <td>Visa 01254*****</td>
                                                </tr>
                                                <tr>
                                                    <td>$64.5K</td>
                                                    <td>Paid</td>
                                                    <td>John Smith</td>
                                                    <td>01-02-2022</td>
                                                    <td>Visa 01254*****</td>
                                                </tr>
                                                <tr>
                                                    <td>$64.5K</td>
                                                    <td>Paid</td>
                                                    <td>John Smith</td>
                                                    <td>01-02-2022</td>
                                                    <td>Visa 01254*****</td>
                                                </tr>
                                                <tr>
                                                    <td>$64.5K</td>
                                                    <td>Paid</td>
                                                    <td>John Smith</td>
                                                    <td>01-02-2022</td>
                                                    <td>Visa 01254*****</td>
                                                </tr>
                                                <tr>
                                                    <td>$64.5K</td>
                                                    <td>Paid</td>
                                                    <td>John Smith</td>
                                                    <td>01-02-2022</td>
                                                    <td>Visa 01254*****</td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-resources" role="tabpanel"
                            aria-labelledby="v-pills-resources-tab">
                            <div class="resources main-div">
                                <h1>Additional Resources</h1>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">Terms &
                                            Conditions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">Privacy
                                            Policy</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <p class="term-content">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit blandit rhoncus, feugiat
                                            praesent iaculis varius aenean vehicula sociosqu faucibus, interdum non ligula
                                            proin eget curae id condimentum. Quisque eros in fames commodo per mattis
                                            habitasse curabitur erat justo gravida rhoncus, accumsan tempus nullam turpis
                                            inceptos lacus condimentum diam sodales varius. Semper sapien cubilia torquent
                                            volutpat blandit conubia quis, fermentum est consequat accumsan per duis
                                            natoque, urna interdum lacinia donec sed justo.Lorem ipsum dolor sit amet
                                            consectetur adipiscing elit blandit rhoncus, feugiat praesent iaculis varius
                                            aenean vehicula sociosqu faucibus, interdum non ligula proin eget curae id
                                            condimentum.Lorem ipsum dolor sit amet consectetur adipiscing elit blandit
                                            rhoncus, feugiat praesent iaculis varius aenean vehicula sociosqu faucibus,
                                            interdum non ligula proin eget curae id condimentum. Quisque eros in fames
                                            commodo per mattis habitasse curabitur erat justo gravida rhoncus, accumsan
                                            tempus nullam turpis inceptos lacus condimentum diam sodales varius. Semper
                                            sapien cubilia torquent volutpat blandit conubia quis, fermentum est consequat
                                            accumsan per duis natoque, urna interdum lacinia donec sed justo.Lorem ipsum
                                            dolor sit amet consectetur adipiscing elit blandit rhoncus, feugiat praesent
                                            iaculis varius aenean vehicula sociosqu faucibus, interdum non ligula proin eget
                                            curae id condimentum.urna interdum lacinia donec sed justo.Lorem ipsum dolor sit
                                            amet consectetur adipiscing elit blandit rhoncus, feugiat praesent iaculis
                                            varius aenean vehicula sociosqu faucibus, interdum non ligula proin eget curae
                                            id condimentum.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <p class="term-content">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit blandit rhoncus, feugiat
                                            praesent iaculis varius aenean vehicula sociosqu faucibus, interdum non ligula
                                            proin eget curae id condimentum. Quisque eros in fames commodo per mattis
                                            habitasse curabitur erat justo gravida rhoncus, accumsan tempus nullam turpis
                                            inceptos lacus condimentum diam sodales varius. Semper sapien cubilia torquent
                                            volutpat blandit conubia quis, fermentum est consequat accumsan per duis
                                            natoque, urna interdum lacinia donec sed justo.Lorem ipsum dolor sit amet
                                            consectetur adipiscing elit blandit rhoncus, feugiat praesent iaculis varius
                                            aenean vehicula sociosqu faucibus, interdum non ligula proin eget curae id
                                            condimentum.Lorem ipsum dolor sit amet consectetur adipiscing elit blandit
                                            rhoncus, feugiat praesent iaculis varius aenean vehicula sociosqu faucibus,
                                            interdum non ligula proin eget curae id condimentum. Quisque eros in fames
                                            commodo per mattis habitasse curabitur erat justo gravida rhoncus, accumsan
                                            tempus nullam turpis inceptos lacus condimentum diam sodales varius. Semper
                                            sapien cubilia torquent volutpat blandit conubia quis, fermentum est consequat
                                            accumsan per duis natoque, urna interdum lacinia donec sed justo.Lorem ipsum
                                            dolor sit amet consectetur adipiscing elit blandit rhoncus, feugiat praesent
                                            iaculis varius aenean vehicula sociosqu faucibus, interdum non ligula proin eget
                                            curae id condimentum.urna interdum lacinia donec sed justo.Lorem ipsum dolor sit
                                            amet consectetur adipiscing elit blandit rhoncus, feugiat praesent iaculis
                                            varius aenean vehicula sociosqu faucibus, interdum non ligula proin eget curae
                                            id condimentum.
                                        </p>
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

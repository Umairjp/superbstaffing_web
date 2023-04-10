@extends('layouts.app')

@section('content')
    <section class="section-padding payment-pg">
        <div class="custom-dsb mb-30">
            <h1 class="banner-heading">Payments</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                     <div class="card mb-4">
                        <div class="card-body">
                            <div class="payment-table">
                            <h1 class="p-title">Payment Dues</h1>
                            <p class="p-para">Lorem ipsum dolor sit amet consectetur adipiscing elit, nec pulvinar venenatis
                                pellentesque iaculis.</p>
                            <table>
                                <tr>
                                    <th>Employee</th>
                                    <th>Designation</th>
                                    <th>Due Date</th>
                                    <th>Amount</th>
                                    <th>Actions</th>
                                </tr>
                                <tr>
                                    <td>John Smith</td>
                                    <td>Lpn- Inpatient Nursing</td>
                                    <td>01-02-2022</td>
                                    <td>$64.5K</td>
                                    <td>Pay Now</td>
                                </tr>
                                <tr>
                                    <td>John Smith</td>
                                    <td>Lpn- Inpatient Nursing</td>
                                    <td>01-02-2022</td>
                                    <td>$64.5K</td>
                                    <td>Pay Now</td>
                                </tr>
                            </table>
                        </div>
                        </div>
                    </div>
                     <div class="card mb-4">
                        <div class="card-body">
                            <div class="payment-table mt-20 payment-second">
                            <div class="transaction-title custom-dsb">
                                <h1 class="p-title">Transaction History</h1>
                                <div class="d-inline-block">
                                    <input type="number" name="" id="" placeholder="01-01-2022">
                                    <span>To</span>
                                    <input type="number" name="" id="" placeholder="01-01-2022">
                                    <a href="#" class="btn btn-orange">Update</a>
                                </div>
                            </div>
                            <div class="transaction-table">
                                <table>
                                    <tr>
                                        <th>Employee</th>
                                        <th>Designation</th>
                                        <th>Due Date</th>
                                        <th>Amount</th>
                                        <th>Deduction</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <td>John Smith</td>
                                        <td>Lpn- Inpatient Nursing</td>
                                        <td>01-02-2022</td>
                                        <td>$64.5K</td>
                                        <td>$300.5K</td>
                                        <td>$61.5K</td>
                                    </tr>
                                    <tr>
                                        <td>John Smith</td>
                                        <td>Lpn- Inpatient Nursing</td>
                                        <td>01-02-2022</td>
                                        <td>$64.5K</td>
                                        <td>$300.5K</td>
                                        <td>$61.5K</td>
                                    </tr>
                                    <tr>
                                        <td>John Smith</td>
                                        <td>Lpn- Inpatient Nursing</td>
                                        <td>01-02-2022</td>
                                        <td>$64.5K</td>
                                        <td>$300.5K</td>
                                        <td>$61.5K</td>
                                    </tr>
                                    <tr>
                                        <td>John Smith</td>
                                        <td>Lpn- Inpatient Nursing</td>
                                        <td>01-02-2022</td>
                                        <td>$64.5K</td>
                                        <td>$300.5K</td>
                                        <td>$61.5K</td>
                                    </tr>
                                    <tr>
                                        <td>John Smith</td>
                                        <td>Lpn- Inpatient Nursing</td>
                                        <td>01-02-2022</td>
                                        <td>$64.5K</td>
                                        <td>$300.5K</td>
                                        <td>$61.5K</td>
                                    </tr>
                                    <tr>
                                        <td>John Smith</td>
                                        <td>Lpn- Inpatient Nursing</td>
                                        <td>01-02-2022</td>
                                        <td>$64.5K</td>
                                        <td>$300.5K</td>
                                        <td>$61.5K</td>
                                    </tr>
                                    <tr>
                                        <td>John Smith</td>
                                        <td>Lpn- Inpatient Nursing</td>
                                        <td>01-02-2022</td>
                                        <td>$64.5K</td>
                                        <td>$300.5K</td>
                                        <td>$61.5K</td>
                                    </tr>
                                    <tr>
                                        <td>John Smith</td>
                                        <td>Lpn- Inpatient Nursing</td>
                                        <td>01-02-2022</td>
                                        <td>$64.5K</td>
                                        <td>$300.5K</td>
                                        <td>$61.5K</td>
                                    </tr>
    
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                     <div class="card mb-4">
                        <div class="card-body">
                            <div class="recent-payment">
                            <h1 class="r-title">Most Recent Payments</h1>
                            <table class="recent-right-1">
                                <tr>
                                    <td>Amount</td>
                                    <td>$600.25</td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td>02-01-2022</td>
                                </tr>
                                <tr>
                                    <td>John Smith</td>
                                    <td class="last-cell">Lpn- Inpatient Nursing</td>
                                </tr>
                            </table>
                        </div>
                        </div>
                    </div>
                     <div class="card">
                        <div class="card-body">
                            <div class="current-payment">
                            <h1 class="r-title">Current Employees Payments</h1>
                            <div class="custom-dsb">
                                <div>
                                    <h1>John Smith</h1>
                                    <p>Lpn- Inpatient Nursing</p>
                                    <p>Due: 01-02-2022</p>
                                </div>
                                <div>
                                    <h1 class="price">$64.5K</h1>
                                </div>
                            </div>
                            <div class="custom-dsb">
                                <div>
                                    <h1>John Smith</h1>
                                    <p>Lpn- Inpatient Nursing</p>
                                    <p>Due: 01-02-2022</p>
                                </div>
                                <div>
                                    <h1 class="price">$64.5K</h1>
                                </div>
                            </div>
                            <div class="custom-dsb">
                                <div>
                                    <h1>John Smith</h1>
                                    <p>Lpn- Inpatient Nursing</p>
                                    <p>Due: 01-02-2022</p>
                                </div>
                                <div>
                                    <h1 class="price">$64.5K</h1>
                                </div>
                            </div>
                            <div class="custom-dsb">
                                <div>
                                    <h1>John Smith</h1>
                                    <p>Lpn- Inpatient Nursing</p>
                                    <p>Due: 01-02-2022</p>
                                </div>
                                <div>
                                    <h1 class="price">$64.5K</h1>
                                </div>
                            </div>
                            <div class="custom-dsb">
                                <div>
                                    <h1>John Smith</h1>
                                    <p>Lpn- Inpatient Nursing</p>
                                    <p>Due: 01-02-2022</p>
                                </div>
                                <div>
                                    <h1 class="price">$64.5K</h1>
                                </div>
                            </div>
                            <div class="custom-dsb">
                                <div>
                                    <h1>John Smith</h1>
                                    <p>Lpn- Inpatient Nursing</p>
                                    <p>Due: 01-02-2022</p>
                                </div>
                                <div>
                                    <h1 class="price">$64.5K</h1>
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

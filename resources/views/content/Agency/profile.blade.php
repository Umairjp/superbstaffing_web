@extends('layouts/contentNavbarLayout')

@section('title', 'Tabs and pills - UI elements')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profile</h4>
    <a href="{{route('edit.profile')}}" class="btn btn-primary">Edit</a>
    <!-- Tabs -->

    <div class="row">
        <div class="col-xl-6">
            <h6 class="text-muted">Home</h6>
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-profile" aria-controls="navs-top-profile"
                            aria-selected="false">Jobs</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-messages" aria-controls="navs-top-messages"
                            aria-selected="false">Reviews</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                        <b style="color:#696cff">About</b>
                        <p>
                            {{auth()->user()->about}}
                        </p>
                        <b style="color:#696cff">Industry</b>
                        <p>
                            {{auth()->user()->industry}}
                        </p>
                        <b style="color:#696cff">Type</b>
                        <p>
                            {{auth()->user()->type}}
                        </p>
                        <b style="color:#696cff">Founded</b>
                        <p>
                            {{auth()->user()->founded}}
                        </p>
                        <b style="color:#696cff">Specialities</b>
                        <p>
                            {{auth()->user()->specialities}}
                        </p>
                    </div>
                    <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                        <p>
                            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream.
                            Gummies
                            halvah
                            tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
                        </p>
                        <p class="mb-0">
                            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton
                            candy
                            liquorice caramels.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
                        <p>
                            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                            cupcake gummi
                            bears
                            cake chocolate.
                        </p>
                        <p class="mb-0">
                            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                            roll icing
                            sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart
                            brownie
                            jelly.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Pills -->
@endsection

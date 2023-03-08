@extends('layouts/contentNavbarLayout')

@section('title', ' Vertical Layouts - Forms')

@section('content')
    <h4 class="fw-bold py-3 mb-4">Add Job</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('job.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-Job-Title">Job Title</label>
                            <input type="text" class="form-control" id="basic-default-Job-Title" name="job_title"
                                placeholder="Job Title" />
                                @error("job_title")
                                <br />
                               <span class="alert alert-danger">{{ $message }}</span>
                              @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-status">Status</label>
                            <input type="text" class="form-control" id="basic-default-status" placeholder="Status" name="status"/>
                            @error("status")
                                <br />
                               <span class="alert alert-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-start-date">Srart Date</label>
                            <input type="date" class="form-control" name="start_date" id="basic-default-start-date" />
                            @error("start_date")
                                <br />
                               <span class="alert alert-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-end-date">End Date</label>
                            <input type="date" class="form-control" name="end_date" id="basic-default-end-date" />
                            @error("end_date")
                                <br />
                                <span class="alert alert-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">

                            <label class="form-label" for="basic-default-timming">Timming</label>
                            <input type="text" class="form-control" id="basic-default-timming" name="timming"
                                placeholder="Timming" />
                                @error("timming")
                                    <br />
                                    <span class="alert alert-danger">{{ $message }}</span>
                               @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-payment">Payment</label>
                            <input type="text" class="form-control" id="basic-default-payment" name="payment"
                                placeholder="Payment" />
                            @error("payment")
                                <br />
                                <span class="alert alert-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-hourly-rate">Hourly Rate</label>
                            <input type="text" class="form-control" id="basic-default-hourly-rate" name="hourly_rate"
                                placeholder="Hourly Rate" />
                            @error("hourly_rate")
                                <br />
                                <span class="alert alert-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-bonus">Bonus</label>
                            <input type="text" class="form-control" id="basic-default-bonus" name="bonus"
                                placeholder="Bonus" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-job-type">Job Type</label>
                            <input type="text" class="form-control" id="basic-default-job-type" name="job_type"
                                placeholder="Job type" />
                            @error("job_type")
                                <br />
                                <span class="alert alert-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-resource">Resource</label>
                            <input type="text" class="form-control" id="basic-default-resource" name="resources"
                                placeholder="resource" />
                            @error("resources")
                                <br />
                                <span class="alert alert-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-description">Description</label>
                            <textarea class="form-control" name="description" id="basic-default-description" cols="30" rows="5"
                                placeholder="Description"></textarea>
                        </div>
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="job_added_by" value="{{ auth()->user()->acount_type }}">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

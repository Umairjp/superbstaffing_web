@extends('layouts/contentNavbarLayout')

@section('title', ' Horizontal Layouts - Forms')

@section('content')


    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('update.profile')}}">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">company_name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company-name" name="company_name" placeholder="Company Name" value="{{auth()->user()->company_name}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company-phone">Company Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company-phone"
                                    name="company_phone" placeholder="company_phone" value="{{auth()->user()->company_phone}}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-about">About</label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-about" class="form-control"
                                    placeholder="About" name="about" value="{{auth()->user()->about}}"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-type">Type</label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-type" class="form-control"
                                    placeholder="Type" name="type" value="{{auth()->user()->type}}"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-founded">Founded</label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-founded" class="form-control"
                                    placeholder="founded" name="founded" value="{{auth()->user()->founded}}"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Specailities</label>
                            <div class="col-sm-10">
                                <textarea id="basic-default-Specailities" class="form-control" placeholder=""
                                    name="specialities" aria-describedby="basic-icon-default-message2">{{auth()->user()->specialities}}</textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

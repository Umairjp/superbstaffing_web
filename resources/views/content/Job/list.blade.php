@extends('layouts/contentNavbarLayout')
{{--
@section('page-script')
    <script src="{{ asset('assets/js/ui-modals.js') }}"></script>
@endsection --}}
{{-- @section('title', 'Tables - Basic Tables') --}}

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Tables /</span> Basic Tables
        <a href="{{ route('job.create') }}" class="btn btn-primary">Add Job</a>
    </h4>


    <!-- Responsive Table -->
    <div class="card">
        <h5 class="card-header">Responsive Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>#</th>
                        <th>Job Title</th>
                        <th>Start Date</th>
                        <th>Start Date</th>
                        <th>Timming</th>
                        <th>Payment</th>
                        <th>Hourly Rate</th>
                        <th>Bonus</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($jobs as $key => $job)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td id="title_{{ $job->id }}">{{ $job->job_title }} </td>
                            <td id="sDate_{{ $job->id }}"> {{ $job->start_date }}</td>
                            <td id="nDate_{{ $job->id }}">{{ $job->end_date }}</td>
                            <td id="time_{{ $job->id }}">{{ $job->timming }}</td>
                            <td id="payment_{{ $job->id }}">{{ $job->payment }}</td>
                            <td id="hour_{{ $job->id }}">{{ $job->hourly_rate }}</td>
                            <td id="bonus_{{ $job->id }}">{{ $job->bonus }}</td>
                            <td id="des_{{ $job->id }}">{{ $job->description }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" data-id="{{ $job->id }}"
                                            href="job/{{$job->id}}"><i class="bx bx-edit-alt me-1"></i>
                                            View</a>
                                        <a class="dropdown-item edit" data-id="{{ $job->id }}"
                                            href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item delete" data-id="{{ $job->id }}"
                                            href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                    @endforeach

                    {{-- <tr>
                        <th scope="row">1</th>
                        <td>Table cell jhk kjhkjjk kj kkjk </td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>

                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>

                    </tr> --}}

                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="row gy-3">
            <div class="col-lg-4 col-md-3">

                <div class="mt-3">
                    <!-- Button trigger modal -->
                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                        Launch modal
                    </button> --}}

                    <!-- Modal -->
                    <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                            <form class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="backDropModalTitle">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameBackdrop" class="form-label">job Title</label>
                                            <input type="text" id="job_title" class="form-control"
                                                placeholder="Job Title">
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="startDate" class="form-label">Start Date</label>
                                            <input type="date" id="startDate" class="form-control" name="startDate">
                                        </div>
                                        <div class="col mb-0">
                                            <label for="end_date" class="form-label">End Date</label>
                                            <input type="date" id="end_date" class="form-control" name="end_date">
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="timming" class="form-label">Timming</label>
                                            <input type="text" id="timming" class="form-control" name="timming">
                                        </div>
                                        <div class="col mb-0">
                                            <label for="payment" class="form-label">Payment</label>
                                            <input type="text" id="payment" class="form-control" name="payment">
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="hourly" class="form-label">Hourly</label>
                                            <input type="text" id="hourly" class="form-control" name="hourly">
                                        </div>
                                        <div class="col mb-0">
                                            <label for="bonus" class="form-label">Bonus</label>
                                            <input type="text" id="bonus" class="form-control" name="bonus">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea id="description" class="form-control" cols="30" rows="4" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="update">Save</button>
                                    <input type="hidden" id="job_id" name="job_id">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Responsive Table -->
@endsection

{{-- <script>
    function test(id){
        var data = id
        $("#job_title").val($data);
    }
</script> --}}

@section('page-script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.edit', function() {
                var id = $(this).attr('data-id');
                var job_title = $("#title_"+id).html()
                var start_date =$ ("#sDate_"+id).html()
                var end_date = $("#nDate_"+id).html()
                var timming = $("#time_"+id).html()
                var payment = $("#payment_"+id).html()
                var hourly = $("#hour_"+id).html()
                var bonus = $("#bonus_"+id).html()
                var description = $("#des_"+id).html()

                $("#job_title").val(job_title);
                $("#startDate").val(start_date);
                $("#end_date").val(end_date);
                $("#timming").val(timming);
                $("#payment").val(payment);
                $("#hourly").val(hourly);
                $("#bonus").val(bonus);
                $("#description").val(description);
                $("#job_id").val(id);
                $('#backDropModal').modal('show');

                alert(start_date);
                console.log(start_date)
            })

            $("#update").click(function(){

                var job_title   = $("#job_title").val();
                var start_date  = $("#startDate").val();
                var end_date    =$("#end_date").val();
                var timming     =$("#timming").val();
                var payment     =$("#payment").val();
                var hourly      =$("#hourly").val();
                var bonus       =$("#bonus").val();
                var description =$("#description").val();
                var id          =$("#job_id").val();
                alert("lhkj "+id);
                $.ajax({
                    url: "job/"+id, // 10 is user id to update, for example
                    type: "post",
                    data: { 'job_title':job_title, 'start_date':start_date,'end_date':end_date,'timming':timming,
                        'payment':payment,'hourly':hourly,'bonus':bonus,'description':description,
                        _method:"PATCH", _token:"{{csrf_token()}}" },
                    success:function(data){
                        console.log(data);
                    }
                });
            })
        });
    </script>
@endsection

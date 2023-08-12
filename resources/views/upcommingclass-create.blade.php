@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Upcoming Class Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Upcoming Class</button>
            </li>
            <a href="{{ route('upcommingclass-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Upcoming Class</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="{{ route('upcommingclass-store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Start Date:</label>
                            <input type="date" name="start_date" class="form-control" id="start_date" placeholder=""
                                value="{{ old('start_date') }}">
                            @if ($errors->has('start_date'))
                                <div class="error text-danger">{{ $errors->first('start_date') }}
                                </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Start Time:</label>
                                <input type="time" name="start_time" class="form-control" id="start_time"
                                    placeholder="Start time" value="{{ old('start_time') }}">
                                @if ($errors->has('start_time'))
                                    <div class="error text-danger">{{ $errors->first('start_time') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> End Time:</label>
                                <input type="time" name="end_time" class="form-control" id="end_time"
                                    placeholder=" Duration" value="{{ old('end_time') }}">

                                @if ($errors->has('end_time'))
                                    <div class="error text-danger">{{ $errors->first('end_time') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="recipient-name" class="col-form-label"> Course:</label>

                                <select class="form-select" name="course_id">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                                    @endforeach
                                </select>


                            </div>
                        </div>


                        <button type="submit" class="btn blue_button">Add Upcomming Classes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

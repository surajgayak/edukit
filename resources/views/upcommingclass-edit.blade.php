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
                    role="tab" aria-controls="unpaid" aria-selected="true">Add New Class</button>
            </li>
            <a href="{{ route('upcommingclass-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Upcoming Class</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="{{ route('upcommingclass-update', $upcommingclasses) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Start Date:</label>
                            <input type="date" name="start_date" class="form-control" id="start_date" placeholder=""
                                value="{{ old('start_date', $upcommingclasses->start_date) }}">
                            @if ($errors->has('start_date'))
                                <div class="error text-danger">{{ $errors->first('start_date') }}
                                </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Start_time:</label>
                                <input type="time" name="start_time" class="form-control" id="start_time"
                                    placeholder="Start time" value="{{ old('start_time', $upcommingclasses->start_time) }}">
                                @if ($errors->has('image'))
                                    <div class="error text-danger">{{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> End_Time:</label>
                                <input type="time" name="end_time" class="form-control" id="end_time"
                                    placeholder=" Duration" value="{{ old('end_time', $upcommingclasses->end_time) }}">
                                {{-- <select class="form-select" name="status" required aria-label="Default select example">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select> --}}
                                {{-- @if ($errors->has('status'))
                                    <div class="error text-danger">{{ $errors->first('status') }}
                    </div>
                    @endif --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="recipient-name" class="col-form-label"> Course:</label>

                                <select class="form-select" name="course_id">
                                    @foreach ($courses as $course)
                                        <option
                                            {{ old('course_id', $upcommingclasses->course_id) == $course->id ? 'selected' : '' }}
                                            value="{{ $course->id }}">{{ $course->title }}</option>
                                    @endforeach
                                </select>

                                {{-- <textarea id="introduction" name="introduction"></textarea> --}}
                                {{-- @if ($errors->has('category_id'))
                                    <div class="error text-danger">{{ $errors->first('category_id') }}
            </div>
            @endif --}}
                            </div>
                        </div>


                        <button type="submit" class="btn blue_button">Update Upcomming Classes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @section('footer')
    <script>
        $('#summernote').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 100,

        });
        $('#benefit').summernote({
            placeholder: 'benefit',
            tabsize: 2,
            height: 100
        });
        $('#introduction').summernote({
            placeholder: 'introduction',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection --}}

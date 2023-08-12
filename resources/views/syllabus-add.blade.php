@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Syllabus Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add New Syllabus</button>
            </li>
            <a href="{{ route('syllabus-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Syllabus</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="{{ route('syllabus-store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"> Title:</label>
                            <input type="text" name="title" class="form-control" id="Currency-name"
                                placeholder=" Title" value="{{ old('name') }}">
                            @if ($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}
                                </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Image:</label>
                                <input type="file" name="image" class="form-control" id="Currency-name"
                                    placeholder="Upload Photo " value="{{ old('position') }}">
                                @if ($errors->has('image'))
                                    <div class="error text-danger">{{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Course:</label>
                                <select class="form-select" name="course_id" readonly aria-label="Default select example">

                                    <option value="{{ $course->id }}">{{ $course->title }}</option>


                                </select>

                                @if ($errors->has('status'))
                                    <div class="error text-danger">{{ $errors->first('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">

                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="recipient-name" class="col-form-label"> Description:</label>
                                <textarea id="summernote" name="description"></textarea>
                                {{-- @if ($errors->has('description'))
                                    <div class="error text-danger">{{ $errors->first('description') }}
                                    </div>
                                @endif --}}
                            </div>

                        </div>

                        <button type="submit" class="btn blue_button">Add Syllabus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        $('#summernote').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection

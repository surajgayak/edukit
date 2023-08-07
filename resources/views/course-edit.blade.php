@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Course Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Edit Notice</button>
            </li>
            <a href="{{ route('notice-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Notices</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="{{ route('notice-update', $course) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"> Title:</label>
                            <input type="text" name="title" class="form-control" id="Currency-name"
                                placeholder=" Title" value="{{ old('title', $course->title) }}">
                            @if ($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}
                                </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Category:</label>
                                <select class="form-select" name="category_id" required aria-label="Default select example">
                                    {{-- @foreach ($categories as $category)
                                        <option
                                            {{ old('category_id', $notice->category_id) == $category->id ? 'selected' : '' }}
                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach --}}

                                </select>
                                {{-- @if ($errors->has('category_id'))
                                    <div class="error text-danger">{{ $errors->first('category_id') }}
                                    </div>
                                @endif --}}
                            </div>
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Status:</label>
                                <select class="form-select" name="status" required aria-label="Default select example">
                                    <option {{ old('status', $notice->status) == '1' ? 'selected' : '' }} value="1">
                                        Active</option>
                                    <option {{ old('status', $notice->status) == '0' ? 'selected' : '' }} value="0">
                                        Inactive</option>
                                </select>
                                @if ($errors->has('status'))
                                    <div class="error text-danger">{{ $errors->first('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Image:</label>
                                <input type="file" name="image" class="form-control" id="Currency-name"
                                    placeholder="Upload Photo ">
                                @if ($errors->has('image'))
                                    <div class="error text-danger">{{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Priority Order:</label>
                                <input type="number " name="priority" class="form-control" id="Currency-name"
                                    placeholder="Priority order " value="{{ old('priority', $notice->priority) }}">
                                @if ($errors->has('priority'))
                                    <div class="error text-danger">{{ $errors->first('priority') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="recipient-name" class="col-form-label"> Descreption:</label>

                                <textarea id="summernote" name="description">{{ old('description', $notice->description) }}</textarea>
                                @if ($errors->has('description'))
                                    <div class="error text-danger">{{ $errors->first('description') }}
                                    </div>
                                @endif
                            </div>

                        </div>

                        <button type="submit" class="btn blue_button">Update Notice</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        $('#summernote').summernote({
            placeholder: 'Descreption',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection

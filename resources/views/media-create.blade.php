@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Media Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Media</button>
            </li>
            <a href="{{ route('media-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Media</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="/media-store" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Media Type:</label>
                            <select class="form-select" name="type_id" required aria-label="Default select example">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('type_id'))
                                <div class="error text-danger">{{ $errors->first('type_id') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Photo:</label>
                            <input type="file" name="filename" class="form-control" id="Currency-name"
                                placeholder="Category Name" value="{{ old('name') }}">
                            @if ($errors->has('filename'))
                                <div class="error text-danger">{{ $errors->first('filename') }}
                                </div>
                            @endif
                        </div>


                        <button type="submit" class="btn blue_button">Add media</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Media Type Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Edit Media Type</button>
            </li>
            <a href="{{ route('type-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Media Types</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="{{ route('type-update', $type) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Category Name:</label>
                            <input type="text" name="name" class="form-control" id="Currency-name"
                                placeholder="Media Type Name" value="{{ old('name', $type->name) }}">
                            @if ($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>


                        <button type="submit" class="btn blue_button">Update Media Type</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

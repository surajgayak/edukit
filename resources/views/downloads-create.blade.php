@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Downloads Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Downloads</button>
            </li>
            <a href="{{ route('download-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Downloads</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="/download-store" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"> Title:</label>
                            <input type="text" name="title" class="form-control" id="Currency-name"
                                placeholder="Title " value="{{ old('representation') }}">
                            </select>
                            @if ($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}
                                </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">

                                <label for="recipient-name" class="col-form-label">Type:</label>
                                <select class="form-select" name="type" required aria-label="Default select example">
                                    <option value="Menu">Menu</option>
                                    <option value="Offers">Offers</option>
                                </select>
                                @if ($errors->has('type'))
                                    <div class="error text-danger">{{ $errors->first('type') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Category:</label>
                                <select class="form-select" name="category" required aria-label="Default select example">
                                    <option value="Drinks">Drinks</option>
                                    <option value="Foods">Foods</option>
                                </select>
                                @if ($errors->has('category'))
                                    <div class="error text-danger">{{ $errors->first('category') }}
                                    </div>
                                @endif
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="recipient-name" class="col-form-label"> File:</label>
                                <input type="file" name="file" class="form-control" id="Currency-name"
                                    placeholder="Upload Photo " value="{{ old('position') }}">
                                @if ($errors->has('file'))
                                    <div class="error text-danger">{{ $errors->first('file') }}
                                    </div>
                                @endif
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="recipient-name" class="col-form-label"> Details:</label>
                                <input type="test" name="detail" class="form-control" id="Currency-name"
                                    placeholder=" Details " value="{{ old('position') }}">
                                @if ($errors->has('detail'))
                                    <div class="error text-danger">{{ $errors->first('detail') }}
                                    </div>
                                @endif
                            </div>

                        </div>

                        <button type="submit" class="btn blue_button">Add Download</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

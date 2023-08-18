@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Payment Method Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Payment Method</button>
            </li>
            <a href="{{ route('paymentmethod-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Payment Method</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="{{ route('paymentmethod-store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-6">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" name="title" class="form-control" id="Currency-title"
                                placeholder="Payment title" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-6">
                            <label for="recipient-name" class="col-form-label"> Logo:</label>
                            <input type="file" id="logo" name="logo" class="form-control"
                                placeholder="Upload logo">
                            @if ($errors->has('logo'))
                                <div class="error text-danger">{{ $errors->first('logo') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-6">
                            <label for="recipient-name" class="col-form-label"> QR Code Image:</label>
                            <input type="file" id="image" name="image" class="form-control"
                                placeholder="Upload image">
                            @if ($errors->has('image'))
                                <div class="error text-danger">{{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                        <br>
                        <button type="submit" class="btn blue_button">Add Payment Method</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

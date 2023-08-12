@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Teams Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Team Member</button>
            </li>
            <a href="{{ route('team-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Team Members</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="/team-store" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Full Name:</label>
                                <input type="text" name="name" class="form-control" id="Currency-name"
                                    placeholder="Full Name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <div class="error text-danger">{{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Position:</label>
                                <input type="text" name="position" class="form-control" id="Currency-name"
                                    placeholder="Position " value="{{ old('position') }}">
                                @if ($errors->has('position'))
                                    <div class="error text-danger">{{ $errors->first('position') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Representation:</label>
                                <input type="text" name="category" class="form-control" id="Currency-name"
                                    placeholder="Representation " value="{{ old('category') }}">
                                @if ($errors->has('category'))
                                    <div class="error text-danger">{{ $errors->first('category') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Photo:</label>
                                <input type="file" id="photo" name="photo" class="form-control"
                                    placeholder="Upload Photo">
                                @if ($errors->has('photo'))
                                    <div class="error text-danger">{{ $errors->first('photo') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Sorting Order:</label>
                                <input type="number" name="sorting" class="form-control" id="Currency-name"
                                    placeholder="sorting order " value="{{ old('sorting') }}">
                                @if ($errors->has('sorting'))
                                    <div class="error text-danger">{{ $errors->first('sorting') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Facebook_link:</label>
                                <input type="url" id="facebook_link" name="facebook_link" class="form-control"
                                    placeholder="facebook link">
                                @if ($errors->has('photo'))
                                    <div class="error text-danger">{{ $errors->first('photo') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Twitter_Link:</label>
                                <input type="url" name="twitter_link" class="form-control" id="twitter_link"
                                    placeholder="twitter link " value="{{ old('sorting') }}">
                                @if ($errors->has('twitter_link'))
                                    <div class="error text-danger">{{ $errors->first('twitter_link') }}
                                    </div>
                                @endif
                            </div>


                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">LinkedIn_Link:</label>
                                <input type="url" name="linkedin_link" class="form-control" id="linkedin_link"
                                    placeholder="linkedin_link " value="{{ old('linkedin_link') }}">
                                @if ($errors->has('linkedin_link'))
                                    <div class="error text-danger">{{ $errors->first('linkedin_link') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="recipient-name" class="col-form-label"> Details:</label>
                            <input type="text" name="detail" class="form-control" id="Currency-name"
                                placeholder=" Details " value="{{ old('detail') }}">
                            @if ($errors->has('detail'))
                                <div class="error text-danger">{{ $errors->first('detail') }}
                                </div>
                            @endif
                        </div>

                </div>

                <div class="row mb-3 " style="margin-left:5px;">
                    <div class="col-12">

                        <div class="form-check pb-3 ">
                            <input class="form-check-input form-check" type="checkbox" name="status" checked
                                value="1" id="status">
                            <label class=" p-2 form-check-label h6" for="status">
                                Active Status
                            </label>
                        </div>

                        @if ($errors->has('status'))
                            <div class="error text-danger">{{ $errors->first('status') }}
                            </div>
                        @endif

                    </div>

                </div>

                <button type="submit" class="btn blue_button " style="margin-left:8px;">Add Member</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

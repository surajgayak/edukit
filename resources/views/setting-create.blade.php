@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Setting Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Settings</button>
            </li>
            <a href="{{ route('setting-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Setting </button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="{{ route('setting-store') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                                    value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <div class="error text-danger">{{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Email:</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder=" Duration" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <div class="error text-danger">{{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Location:</label>
                                <input type="location" name="location" class="form-control" id="location"
                                    placeholder="Location" value="{{ old('location') }}">
                                @if ($errors->has('location'))
                                    <div class="error text-danger">{{ $errors->first('location') }}
                                    </div>
                                @endif
                            </div>





                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Mobile_Number:</label>
                                <input type="number" name="mobile_number" class="form-control" id="mobile_number"
                                    placeholder="mobile_number" value="{{ old('mobile_number') }}">
                                @if ($errors->has('mobile_number'))
                                    <div class="error text-danger">{{ $errors->first('mobile_number') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Landline_Number:</label>
                                <input type="number" name="landline_number" class="form-control" id="landline_number"
                                    placeholder="landline_number" value="{{ old('landline_number') }}">
                                @if ($errors->has('landline_number'))
                                    <div class="error text-danger">{{ $errors->first('landline_number') }}
                                    </div>
                                @endif
                            </div>



                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Whats_Number:</label>
                                <input type="number" name="whatsapp_number" class="form-control" id="whatsapp_number"
                                    placeholder="whatsapp_number" value="{{ old('whatsapp_number') }}">
                                @if ($errors->has('whatsapp_number'))
                                    <div class="error text-danger">{{ $errors->first('whatsapp_number') }}
                                    </div>
                                @endif
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Viber_Number:</label>
                                <input type="number" name="viber_number" class="form-control" id="viber_number"
                                    placeholder="viber_number" value="{{ old('viber_number') }}">
                                @if ($errors->has('viber_number'))
                                    <div class="error text-danger">{{ $errors->first('viber_number') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-6 ">
                                <label for="recipient-name" class="col-form-label">Facebook_link:</label>
                                <input type="url" name="facebook_link" class="form-control" id="facebook_link"
                                    placeholder="facebook_link" value="{{ old('facebook_link') }}">
                                @if ($errors->has('facebook_link'))
                                    <div class="error text-danger">{{ $errors->first('facebook_link') }}
                                    </div>
                                @endif
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Instagram_link:</label>
                                <input type="url" name="instagram_link" class="form-control" id="instagram_link"
                                    placeholder="instagram_link" value="{{ old('instagram_link') }}">
                                @if ($errors->has('instagram_link'))
                                    <div class="error text-danger">{{ $errors->first('instagram_link') }}
                                    </div>
                                @endif
                            </div>



                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Twitter_link:</label>
                                <input type="url" name="twitter_link" class="form-control" id="twitter_link"
                                    placeholder="twitter_link" value="{{ old('twitter_link') }}">
                                @if ($errors->has('twitter_link'))
                                    <div class="error text-danger">{{ $errors->first('twitter_link') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">LinkedIn_link:</label>
                                <input type="url" name="linkden_link" class="form-control" id="linkden_link"
                                    placeholder="linkden_link" value="{{ old('linkden_link') }}">
                                @if ($errors->has('linkden_link'))
                                    <div class="error text-danger">{{ $errors->first('linkden_link') }}
                                    </div>
                                @endif

                            </div>

                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Established Date:</label>
                                <input type="date" name="establish_date" class="form-control" id="establish_date"
                                    placeholder="establish_date" value="{{ old('establish_date') }}">
                                @if ($errors->has('establish_date'))
                                    <div class="error text-danger">{{ $errors->first('establish_date') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="recipient-name" class="col-form-label">Total Student:</label>
                            <input type="number" name="numberof_student" class="form-control" id="numberof_student"
                                placeholder="numberof_student" value="{{ old('numberof_student') }}">
                            @if ($errors->has('numberof_student'))
                                <div class="error text-danger">{{ $errors->first('numberof_student') }}
                                </div>
                            @endif
                        </div>
                </div>

                <button type="submit" class="btn blue_button" style="margin-left:14px;">Add Setting</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            User Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add User</button>
            </li>
            <a href="{{ route('user-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Users</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="/user-store">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Full Name:</label>
                            <input type="text" name="name" class="form-control" id="Currency-name"
                                placeholder="Full Name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Email:</label>
                                <input type="email" name="email" class="form-control" id="Currency-name"
                                    placeholder="Email " value="{{ old('position') }}">
                                @if ($errors->has('email'))
                                    <div class="error text-danger">{{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Role:</label>
                                <select class="form-select" name="role_id" required aria-label="Default select example">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach

                                </select>
                                @if ($errors->has('role_id'))
                                    <div class="error text-danger">{{ $errors->first('role_id') }}
                                    </div>
                                @endif
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="recipient-name" class="col-form-label"> Password:</label>
                                <input type="password" name="password" class="form-control" id="Currency-name"
                                    placeholder=" password " value="{{ old('position') }}">
                                @if ($errors->has('password'))
                                    <div class="error text-danger">{{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="recipient-name" class="col-form-label"> Confirm Password:</label>
                                <input type="password" name="password_confirmation" class="form-control" id="Currency-name"
                                    placeholder=" Confirm-password " value="{{ old('position') }}">
                                @if ($errors->has('password_confirmation'))
                                    <div class="error text-danger">{{ $errors->first('password_confirmation') }}
                                    </div>
                                @endif
                            </div>

                        </div>

                        <button type="submit" class="btn blue_button">Add User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

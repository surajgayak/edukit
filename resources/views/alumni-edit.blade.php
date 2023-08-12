@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Alumni Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unpaid-tab" data-bs-toggle="tab" data-bs-target="#unpaid" type="button"
                    role="tab" aria-controls="unpaid" aria-selected="true">Add Alumni</button>
            </li>
            <a href="{{ route('alumni-index') }}" class="text-decoration-none"><button class="nav-link">View
                    Alumni</button></a>
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            {{-- add tab --}}
            <div class="tab-pane fade show  active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                <div class="container-fluid p-3">
                    <form method="POST" action="{{ route('alumni-update', $alumnis) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                                    value="{{ old('name', $alumnis->name) }}">
                                @if ($errors->has('name'))
                                    <div class="error text-danger">{{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Designation:</label>
                                <input type="text" name="designation" class="form-control" id="designation"
                                    placeholder="Designation" value="{{ old('designation', $alumnis->designation) }}">
                                @if ($errors->has('designation'))
                                    <div class="error text-danger">{{ $errors->first('designation') }}
                                    </div>
                                @endif
                            </div>


                        </div>
                        <div class="row mb-3">

                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label"> Placement:</label>
                                <input type="text" name="placement" class="form-control" id="placement"
                                    placeholder="Placemement" value="{{ old('placement', $alumnis->placement) }}">

                                @if ($errors->has('placement'))
                                    <div class="error text-danger">{{ $errors->first('placement') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Image:</label>
                                <input type="file" name="image" class="form-control" id="image" placeholder="image"
                                    value="{{ old('image', $alumnis->image) }}">
                                @if ($errors->has('image'))
                                    <div class="error text-danger">{{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="recipient-name" class="col-form-label">Description:</label>
                            <textarea id="summernote" name="description">{!! old('description', $alumnis->description) !!}</textarea>
                            @if ($errors->has('location'))
                                <div class="error text-danger">{{ $errors->first('location') }}
                                </div>
                            @endif
                        </div>
                </div>

                <button type="submit" class="btn blue_button" style="margin-left:14px;">Update Alumni</button>
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
            height: 100,

        });
    </script>
@endsection

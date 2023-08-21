@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Admission Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="" class="text-decoration-none"><button class="nav-link">View
                        Admission</button></a>
            </li>
            {{-- <li class="nav-item" role="presentation">
                <button class="nav-link active" id="paid-tab" data-bs-toggle="tab" data-bs-target="#paid" type="button"
                    role="tab" aria-controls="paid" aria-selected="false">View Payment Method</button>
            </li> --}}
        </ul>
        <div class="tab-content py-2 navsTabsShadow" id="myTabContent">
            <div class="row mb-2 justify-content-sm-start justify-content-md-between align-items-end px-3">
                <div class="col-3 col-md-4 ">Show
                    <select name="perPage" id="perPage" class="show-select" onchange="go()">

                        <option value="10" {{ request()->perPage == 10 ? 'selected' : '' }}>10</option>
                        <option value="25" {{ request()->perPage == 25 ? 'selected' : '' }}>25</option>
                        <option value="50" {{ request()->perPage == 50 ? 'selected' : '' }}>50</option>
                        <option value="100" {{ request()->perPage == 100 ? 'selected' : '' }}>100</option>
                    </select>
                    Entries
                </div>
                <div class="col-9 col-md-4 d-flex justify-content-end search-position">
                    <input class="table-search-box" type="text" name="keyword" id="keyword" placeholder="Keyword"
                        value="{{ request()->keyword }}">
                    <button type="btn" class="btn blue_button sized" onclick="go()"><i
                            class="bi bi-search"></i></button>
                </div>
            </div>
            {{-- paid tab --}}
            <div class="tab-pane fade show active" id="paid" role="tabpanel" aria-labelledby="paid-tab">
                <div class="table-responsive p-3">
                    <table class="table" style="width: 100%">
                        <thead>
                            <tr>
                                <th scope="col" class="text-light" style="background-color:#1d1d1d">SN
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">Name
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">Email
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">Status
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">Address
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">Academic level
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">School/College
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">Payment Amount
                                </th>

                                <th scope="col" class="text-light" style="background-color: #515151">Upcomming ID
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">Payment ID
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">Payment Image
                                </th>

                                <th scope="col" class="text-light text-nowrap" style="background-color:#1d1d1d">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($getadmissions as $key => $getadmission)
                                <tr class="">
                                    <td scope="row">{{ $key + 1 }}</td>
                                    <td> {{ $getadmission->name }}</td>
                                    <td> {{ $getadmission->email }}</td>
                                    <td>
                                        @if ($getadmission->status == 'pending')
                                            <span class="btn btn-primary text-light" data-bs-toggle="modal"
                                                data-bs-target="#status{{ $getadmission->id }}">
                                                {{ $getadmission->status }}
                                            </span>
                                        @elseif ($getadmission->status == 'processing')
                                            <span class="btn btn-info text-light" data-bs-toggle="modal"
                                                data-bs-target="#status{{ $getadmission->id }}">
                                                {{ $getadmission->status }}
                                            </span>
                                        @elseif ($getadmission->status == 'confirmed')
                                            <span class="btn btn-success text-light" data-bs-toggle="modal"
                                                data-bs-target="#status{{ $getadmission->id }}">
                                                {{ $getadmission->status }}
                                            </span>
                                        @else
                                            <span class="btn btn-danger text-light" data-bs-toggle="modal"
                                                data-bs-target="#status{{ $getadmission->id }}">
                                                {{ $getadmission->status }}
                                            </span>
                                        @endif
                                    </td>
                                    <td> {{ $getadmission->address }}</td>
                                    <td> {{ $getadmission->academic_level }}</td>
                                    <td> {{ $getadmission->college }}</td>
                                    <td> {{ $getadmission->payment_amount }}</td>
                                    <td> {{ $getadmission->upcommingclasses->courses->title }}</td>
                                    <td> {{ $getadmission->paymentmethods?->title }}</td>
                                    <td><img src="{{ asset('images/medias/' . $getadmission->payment_image) }}"
                                            width="100" height="100"></td>


                                    <td class="text-nowrap">
                                        <div class="container-fluid d-flex">

                                            {{-- <a href="{{ route('paymentmethod-edit', $payment) }}">
                                                <div class="btn blue_button sized"><i
                                                        class='bx bx-message-square-edit'></i>Edit
                                                </div>
                                            </a> --}}
                                            <a href="{{ route('getadmission-delete', $getadmission->id) }}"class="mx-1">
                                                <div class="btn btn-danger sized"><i class='bi bi-trash'></i>Delete
                                                </div>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="status{{ $getadmission->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #bef8fe">
                                                <h3 class="modal-title text-center" id="exampleModalLongTitle">Change
                                                    Status for :
                                                    <b> {{ $getadmission->name }} </b>
                                                </h3>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{ route('status-change', $getadmission) }}">
                                                @csrf
                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">
                                                            <b> Change the
                                                                Admission Status:</b></label>
                                                        <select class="form-select" name="status" required
                                                            aria-label="Default select example">
                                                            <option value="pending">pending</option>
                                                            <option value="processing">processing</option>
                                                            <option value="confirmed">confirmed</option>
                                                            <option value="cancelled">cancelled</option>
                                                        </select>
                                                        @if ($errors->has('status'))
                                                            <div class="error text-danger">{{ $errors->first('status') }}
                                                            </div>
                                                        @endif
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <div class="row px-3 pb-3 justify-content-end">
                    <div class="col-7 d-flex justify-content-end">
                        <div class="d-flex p-0 m-0">
                            <a class="text-decoration-none"
                                href="{{ $getadmissions->withQueryString()->previousPageUrl() }}">

                                <div class="btn btn-primary btn-sm d-flex align-items-center justify-content-center">
                                    Previous
                                </div>
                            </a>
                            <div
                                class="active_page btn btn-sm mx-1 btn-info text-dark fw-bold d-flex align-items-center justify-content-center">
                                {{ $getadmissions->currentPage() }}

                            </div>


                            <a class="text-decoration-none"
                                href="{{ $getadmissions->withQueryString()->nextPageUrl() }}">
                                <div class="btn btn-sm btn-primary d-flex align-items-center justify-content-center">
                                    Next
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        let keywordEl = document.getElementById("keyword");
        let perPageEl = document.getElementById("perPage");
        const baseUrl = 'https://api.example.com';

        function go() {
            const queryParams = {
                keyword: keywordEl.value,
                perPage: perPageEl.value,
                page: 1,
            };
            const url = new URL("{{ url('/') }}/getadmission-index");
            url.search = new URLSearchParams(queryParams).toString();
            window.location.href = url
        }
    </script>
@endsection

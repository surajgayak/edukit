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
                <a href="{{ route('paymentmethod-create') }}" class="text-decoration-none"><button class="nav-link">Add
                        Payment Method</button></a>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="paid-tab" data-bs-toggle="tab" data-bs-target="#paid" type="button"
                    role="tab" aria-controls="paid" aria-selected="false">View Payment Method</button>
            </li>
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
                                <th scope="col" class="text-light" style="background-color: #515151"> Title
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">logo
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">Qr Code Image
                                </th>

                                <th scope="col" class="text-light text-nowrap" style="background-color:#1d1d1d">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($payments as $key => $payment)
                                <tr class="">
                                    <td scope="row">{{ $key + 1 }}</td>
                                    <td> {{ $payment->title }}</td>

                                    <td><img src="{{ asset('images/medias/' . $payment->logo) }}" width="100"
                                            height="100"></td>

                                    <td><img src="{{ asset('images/medias/' . $payment->image) }}" width="100"
                                            height="100"></td>


                                    <td class="text-nowrap">
                                        <div class="container-fluid d-flex">

                                            <a href="{{ route('paymentmethod-edit', $payment) }}">
                                                <div class="btn blue_button sized"><i
                                                        class='bx bx-message-square-edit'></i>Edit
                                                </div>
                                            </a>
                                            <a class="mx-1" href="{{ route('paymentmethod-delete', $payment->id) }}">
                                                <div class="btn btn-danger sized"><i class='bi bi-trash'></i>Delete
                                                </div>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <div class="row px-3 pb-3 justify-content-end">
                    <div class="col-7 d-flex justify-content-end">
                        <div class="d-flex p-0 m-0">
                            <a class="text-decoration-none" href="{{ $payments->withQueryString()->previousPageUrl() }}">

                                <div class="btn btn-primary btn-sm d-flex align-items-center justify-content-center">
                                    Previous
                                </div>
                            </a>
                            <div
                                class="active_page btn btn-sm mx-1 btn-info text-dark fw-bold d-flex align-items-center justify-content-center">
                                {{ $payments->currentPage() }}

                            </div>


                            <a class="text-decoration-none" href="{{ $payments->withQueryString()->nextPageUrl() }}">
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
            const url = new URL("{{ url('/') }}/notice-index");
            url.search = new URLSearchParams(queryParams).toString();
            window.location.href = url
        }
    </script>
@endsection

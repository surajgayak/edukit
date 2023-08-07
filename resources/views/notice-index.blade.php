@extends('layouts.appDashboard')

@section('content')
    <div class="row px-2 pt-4">
        <span class="h2 px-4 fw-semibold text-center" style="color: #004781;">
            Notice Management
        </span>
    </div>
    <div class="px-2 px-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="{{ route('notice-create') }}" class="text-decoration-none"><button class="nav-link">Add
                        New Notice</button></a>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="paid-tab" data-bs-toggle="tab" data-bs-target="#paid" type="button"
                    role="tab" aria-controls="paid" aria-selected="false">View Notices</button>
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
                                <th scope="col" class="text-light" style="background-color: #515151">Category
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">Status
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">photo
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151">Priority order
                                </th>
                                <th scope="col" class="text-light" style="background-color: #515151"> Descreption
                                </th>
                                <th scope="col" class="text-light text-nowrap" style="background-color:#1d1d1d">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($currencies as $key => $currency)
                                <tr class="">
                                    <td scope="row">{{ $key + 1 }}</td>
                                    <td>{{ $currency->code }}</td>
                                    <td>
                                        <div class="container-fluid d-flex">

                                            <a href="{{ route('edit-currency', $currency) }}">
                                                <div class="btn blue_button sized"><i
                                                        class='bx bx-message-square-edit'></i>Edit
                                                </div>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach --}}
                            @foreach ($notices as $key => $notice)
                                <tr class="">
                                    <td scope="row">{{ $key + 1 }}</td>
                                    <td> {{ $notice->title }}</td>
                                    <td>{{ $notice->categories?->name }} </td>
                                    <td class="text-nowrap">
                                        @if ($notice->status)
                                            <i class="bi bi-sun-fill text-light py-1 px-3 btn"
                                                style="background-color: #f79627">
                                                Active</i>
                                        @else
                                            <i class="bi bi-moon-stars-fill text-light py-1 px-3 btn-secondary btn">
                                                Inactive</i>
                                        @endif
                                    </td>
                                    <td><object data="{{ asset('images/photos/' . $notice->image) }}" width="100"
                                            height="100"></object></td>
                                    <td>{{ $notice->priority }}</td>
                                    <td>{!! $notice->description !!}
                                    </td>
                                    <td class="text-nowrap">
                                        <div class="container-fluid d-flex">

                                            <a href="{{ route('notice-edit', $notice) }}">
                                                <div class="btn blue_button sized"><i
                                                        class='bx bx-message-square-edit'></i>Edit
                                                </div>
                                            </a>
                                            <a class="mx-1" href="{{ route('notice-delete', $notice) }}">
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
                            <a class="text-decoration-none" href="{{ $notices->withQueryString()->previousPageUrl() }}">

                                <div class="btn btn-primary btn-sm d-flex align-items-center justify-content-center">
                                    Previous
                                </div>
                            </a>
                            <div
                                class="active_page btn btn-sm mx-1 btn-info text-dark fw-bold d-flex align-items-center justify-content-center">
                                {{ $notices->currentPage() }}

                            </div>


                            <a class="text-decoration-none" href="{{ $notices->withQueryString()->nextPageUrl() }}">
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

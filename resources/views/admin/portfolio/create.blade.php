@extends('layouts.admin')

@section('style')
    <link href="{{ asset('assets/vendors/choices/choices.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">Apps</li>
            <li class="breadcrumb-item"><a href="{{ route('admin.portfolio.index') }}">Project</a></li>
            <li class="breadcrumb-item active">Create project</li>
        </ol>
    </nav>
    <h2 class="mb-4">Create a project</h2>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="row">
        <div class="col-xl-9">

            <form class="row g-3 mb-6" action="{{ route('admin.portfolio.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="col-sm-12 col-md-12">
                    <div class="form-floating">
                        <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title"
                            name="title" required autofocus />
                        <label for="floatingInputGrid">Project title</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="col-12 gy-6">
                        <select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple=""
                            name="portfolio_categories[]" data-options='{"removeItemButton":true,"placeholder":true}'
                            required>
                            <option value="">Add category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form">
                        <input class="form-control" id="floatingInputGrid" type="file" name="image"
                            placeholder="Project image" required />
                        {{-- <label for="floatingSelectPrivacy">Image</label> --}}
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="flatpickr-input-container">
                        <div class="form-floating">
                            <input class="form-control datetimepicker" id="floatingInputStartDate" type="text"
                                placeholder="end date" data-options='{"disableMobile":true}' name="year" required />
                            <label class="ps-6" for="floatingInputStartDate">Date</label>
                            <span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-floating">
                        <input class="form-control" id="floatingInputGrid" type="text" name="tech"
                            placeholder="Project title" required />
                        <label for="floatingSelectAdmin">Project
                            Tech</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-floating">
                        <input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title"
                            name="url" required /><label for="floatingInputGrid">Project url</label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingProjectOverview" name="description" placeholder="Leave a comment here"
                            style="height: 100px" required></textarea><label for="floatingProjectOverview">project overview</label>
                    </div>
                </div>

                <div class="col-12 gy-6">
                    <div class="row g-3 justify-content-end">
                        <div class="col-auto">
                            <a href="#" class="btn btn-phoenix-primary px-5">Cancel</a>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary px-5 px-sm-15">Create
                                Project</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/vendors/choices/choices.min.js') }}"></script>
@endsection

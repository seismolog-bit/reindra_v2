@extends('admin.index')

@section('style')
    <link href="{{ asset('assets/vendors/choices/choices.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">Apps</li>
            <li class="breadcrumb-item active">Experience</li>
        </ol>
    </nav>
    <h2 class="text-bold text-body-emphasis mb-5">Experience</h2>
    <div id="members" data-list='{"valueNames":["title","type","year"],"page":10,"pagination":true}'>
        <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col col-auto">
                <div class="search-box">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                            class="form-control search-input search" type="search" placeholder="Search portfolios"
                            aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>
                    </form>
                </div>
            </div>
            <div class="col-auto">
                <div class="d-flex align-items-center"><button class="btn btn-link text-body me-4 px-0"><span
                            class="fa-solid fa-file-export fs-9 me-2"></span>Export</button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"><span class="fas fa-plus me-2"></span> Add experience</button>

                </div>
            </div>
        </div>
        <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-body-emphasis border-y mt-2 position-relative top-1">
            <div class="table-responsive scrollbar ms-n1 ps-1">
                <table class="table table-sm fs-9 mb-0">
                    <thead>
                        <tr>
                            <th class="sort align-middle" scope="col" data-sort="title"
                                style="width:15%; min-width:200px;">EXPERIENCE</th>
                            <th class="sort align-middle" scope="col" data-sort="type"
                                style="width:15%; min-width:200px;">TYPE</th>
                            <th class="sort align-middle" scope="col" data-sort="year" style="width:10%;">YEAR</th>
                            <th class="sort align-middle text-end" scope="col" style="width:21%;  min-width:200px;">
                                ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="members-table-body">
                        @forelse ($experiences as $experience)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="title align-middle white-space-nowrap"><a
                                        class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                        <div class="avatar avatar-m">
                                            <div class="avatar-name rounded-circle">
                                                <span>{{ substr($experience->title, 0, 1) }}</span>
                                            </div>
                                        </div>
                                        <h6 class="mb-0 ms-3 fw-semibold">{{ $experience->title }}</h6>
                                    </a></td>
                                <td class="type align-middle white-space-nowrap">
                                    {{ $experience->type }}
                                </td>
                                <td class="year align-middle white-space-nowrap text-body">
                                    {{ $experience->start_year->format('M Y') }} -
                                    {{ $experience->end_year ? $experience->end_year->format('M Y') : 'Present' }}</td>
                                <td class=" align-middle text-end white-space-nowrap text-body-tertiary">
                                    <div class="col-12 col-md-auto d-flex justify-content-end">
                                        <button type="button" class="btn btn-phoenix-primary btn-icon me-2"
                                            onclick="openEditModal({{ $experience->id }})">
                                            <span data-feather="edit"></span>
                                        </button>
                                        <form method="POST" action="{{ route('admin.experience.destroy', $experience) }}"
                                            class="d-inline"
                                            onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-phoenix-danger btn-icon me-2"><span
                                                    data-feather="trash"></span></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">Data not found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                <div class="col-auto d-flex">
                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a
                        class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                            data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!"
                        data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                            data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                            class="fas fa-chevron-left"></span></button>
                    <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span
                            class="fas fa-chevron-right"></span></button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <div class="modal fade" id="staticBackdrop" tabindex="-1" data-bs-backdrop="static"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white dark__text-gray-1100" id="staticBackdropLabel">Add experience</h5>
                    <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                            class="fas fa-times fs-9 text-white dark__text-gray-1100"></span></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="{{ route('admin.experience.store') }}" method="post">
                        @csrf

                        <div class="col-md-12 form-floating">
                            <input class="form-control" id="floatTitle" type="text" placeholder="Experience title"
                                name="title" value="{{ old('title') }}" required autofocus />
                            <label for="floatTitle">Experience title</label>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <select class="form-select" name="type" required aria-label="Select type experience">
                                    <option selected="">Select type experience</option>
                                    <option value="Education">Education</option>
                                    <option value="Work">Work</option>
                                </select>
                                <label for="floatType">Type</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="flatpickr-input-container">
                                <div class="form-floating">
                                    <input class="form-control datetimepicker" data-options='{"disableMobile":true}'
                                        id="floatStartYear" type="text" placeholder="Start year" name="start_year"
                                        value="{{ old('start_year') }}" required />
                                    <label class="ps-6" for="floatStartYear">Start year</label>
                                    <span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="flatpickr-input-container">
                                <div class="form-floating">
                                    <input class="form-control datetimepicker" data-options='{"disableMobile":true}'
                                        id="floatEndYear" type="text" placeholder="End year" name="end_year"
                                        value="{{ old('end_year') }}" />
                                    <label class="ps-6" for="floatEndYear">End year</label>
                                    <span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="floatDescription" name="description" placeholder="Leave a detail here"
                                    style="height: 100px" required>{{ old('description') }}</textarea>
                                <label for="floatDescription">Description</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn btn-outline-secondary me-3" type="button"
                                data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="editModalLabel"
        role="document" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white dark__text-gray-1100" id="editModalLabel">Add experience</h5>
                    <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                            class="fas fa-times fs-9 text-white dark__text-gray-1100"></span></button>
                </div>
                <div class="modal-body">

                    <form id="editForm" class="row g-3">
                        @csrf
                        <input type="hidden" name="id" id="editId">

                        <div class="form-floating">
                            <input type="text" class="form-control" id="editTitle" name="title">
                            <label for="title">Title:</label>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating">
                                <label for="type">Type:</label>
                                <select class="form-control" id="editType" name="type">
                                    <!-- Dropdown options here -->
    
                                    <option value="Education">Education</option>
                                    <option value="Work">Work</option>
    
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="flatpickr-input-container">
                                <div class="form-floating">
                                    <input type="text" class="form-control datetimepicker"
                                        data-options='{"disableMobile":true, "dateFormat":"Y-m-d"}' id="editStartYear"
                                        name="start_year">
                                    <label for="start_year">Start Year:</label>
    
                                    <span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="flatpickr-input-container">
                                <div class="form-floating">
                                    <input type="text" class="form-control datetimepicker"
                                        data-options='{"disableMobile":true, "dateFormat":"Y-m-d"}' id="editEndYear"
                                        name="end_year">
                                    <label for="end_year">End Year:</label>
    
                                    <span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                                </div>
    
                            </div>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" id="editDescription" name="description" style="height: 100px"></textarea>
                            <label for="description">Description:</label>
                        </div>

                        <button type="button" class="btn btn-primary" onclick="updateData()">Save changes</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/vendors/choices/choices.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });
    </script>

    <script>
        function openEditModal(id) {
            $.get('/admin/experience/' + id + '/edit/', function(data) {
                $('#editId').val(data.id);
                $('#editTitle').val(data.title);
                $('#editType').val(data.type);
                $('#editStartYear').val(data.start_year);
                $('#editEndYear').val(data.end_year);
                $('#editDescription').val(data.description);

                $('#editModal').modal('show');
            });
        }

        function updateData() {
            var formData = $('#editForm').serialize();

            $.ajax({
                type: 'POST',
                url: '/admin/experience/',
                data: formData,
                success: function(response) {
                    $('#editModal').modal('hide');
                    
                    location.reload();
                },
                error: function(error) {
                    // Handle error response
                }
            });
        }
    </script>
@endsection

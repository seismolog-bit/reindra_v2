@extends('admin.index')

@section('style')
    <link href="{{ asset('assets/vendors/choices/choices.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">Apps</li>
            <li class="breadcrumb-item Active">Theme</li>
        </ol>
    </nav>
    <h2 class="text-bold text-body-emphasis mb-5">Themez</h2>
    <div id="members" data-list='{"valueNames":["title","category","tags"],"page":10,"pagination":true}'>
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
                        data-bs-target="#modalCreate"><span class="fas fa-plus me-2"></span> Add theme</button>

                </div>
            </div>
        </div>
        <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-body-emphasis border-y mt-2 position-relative top-1">
            <div class="table-responsive scrollbar ms-n1 ps-1">
                <table class="table table-sm fs-9 mb-0">
                    <thead>
                        <tr>
                            <th class="sort align-middle" scope="col" data-sort="title"
                                style="width:15%; min-width:200px;">THEME</th>
                            <th class="sort align-middle" scope="col" data-sort="category"
                                style="width:15%; min-width:200px;">CATEGORY</th>
                            <th class="sort align-middle" scope="col" data-sort="tags"
                                style="width:15%; min-width:200px;">TAGS</th>
                            <th class="sort align-middle text-end" scope="col" style="width:21%;  min-width:200px;">
                                ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="members-table-body">
                        @forelse ($themes as $theme)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="title align-middle white-space-nowrap"><a
                                        class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                        <img src="{{ asset($theme->image) }}" alt="" width="53" height="53"
                                            class="rounded" style="object-fit: cover;" />
                                        <h6 class="mb-0 ms-3 fw-semibold">{{ $theme->title }}</h6>
                                    </a></td>
                                <td class="category align-middle white-space-nowrap">
                                    {{ $theme->category->title }}
                                </td>
                                <td class="tags align-middle white-space-nowrap">
                                    @foreach ($theme->theme_tags as $tagId)
                                    @php
                                        $tag = \App\Models\ThemeTag::find($tagId);
                                    @endphp

                                    @if ($tag)
                                    <span class="badge badge-phoenix badge-phoenix-primary">{{ $tag->title }}</span>
                                    @endif

                                    @endforeach
                                </td>
                                <td class=" align-middle text-end white-space-nowrap text-body-tertiary">
                                    <div class="col-12 col-md-auto d-flex justify-content-end">
                                        <a href="{{$theme->url}}" target="__blank" class="btn btn-phoenix-secondary btn-icon me-2">
                                            <span data-feather="link"></span>
                                        </a>
                                        <button type="button" class="btn btn-phoenix-success btn-icon me-2"
                                            onclick="openShowModal({{ $theme->id }})">
                                            <span data-feather="eye"></span>
                                        </button>
                                        <button type="button" class="btn btn-phoenix-primary btn-icon me-2"
                                            onclick="openEditModal({{ $theme->id }})">
                                            <span data-feather="edit"></span>
                                        </button>
                                        <form method="POST" action="{{ route('admin.theme.destroy', $theme) }}"
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
    @include('components.modals.theme')
    @include('components.modals.theme-show')
@endsection

@section('script')
    <script src="{{ asset('assets/vendors/choices/choices.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>

    <script>
        function openShowModal(themeId) {

            // Ajax request to get pricing data
            $.get('/admin/theme/' + themeId + '/edit/', function(data) {
                // Populate modal fields with data
                // $('#editId').val(data.id);
                $('#showTitle').val(data.title);
                $('#showCategory').val(data.theme_category);
                $('#showUrl').val(data.url);
                $('#showTags').val(data.theme_tags);
                $('#showDescription').val(data.description);

                $('#showImage').html(`<div class="text-center rounded">
                    <img src="../${data.image}" style="width:50%;"/>
                </div>`);

                $('#showModal').modal('show');
            });
        }

        function openEditModal(themeId) {

            // Ajax request to get pricing data
            $.get('/admin/theme/' + themeId + '/edit/', function(data) {
                // Populate modal fields with data
                $('#editId').val(data.id);
                $('#editTitle').val(data.title);
                $('#editCategory').val(data.theme_category);
                $('#editUrl').val(data.url);
                $('#editTags').val(data.theme_tags);
                $('#editDescription').val(data.description);
                
                $('#editImage').html(`<div class="text-center rounded">
                    <img src="../${data.image}" style="width:50%;"/>
                </div>`);

                // Show the modal
                $('#editModal').modal('show');
            });
        }

        function updateData() {
            var formData = new FormData($('#editForm')[0]);

            $.ajax({
                type: 'POST',
                url: '/admin/theme/',
                data: formData,
                contentType: false,
                processData: false,

                success: function(response) {
                    $('#editModal').modal('hide');
                    // Handle success response, e.g., update UI
                    location.reload();
                },
                error: function(error) {
                    // console.log(formData);
                    console.log(error);
                }
            });
        }
    </script>
@endsection

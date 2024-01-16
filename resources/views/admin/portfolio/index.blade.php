@extends('admin.index')

@section('content')
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">Apps</li>
            <li class="breadcrumb-item active">Portfolio</li>
        </ol>
    </nav>
    <h2 class="text-bold text-body-emphasis mb-5">Portfolio</h2>
    <div id="members"
        data-list='{"valueNames":["title", "work","category","tech","year","views"],"page":10,"pagination":true}'>
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
                            class="fa-solid fa-file-export fs-9 me-2"></span>Export</button><a
                        href="{{ route('admin.portfolio.create') }}" class="btn btn-primary"><span
                            class="fas fa-plus me-2"></span>Add portfolio</a></div>
            </div>
        </div>
        <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-body-emphasis border-y mt-2 position-relative top-1">
            <div class="table-responsive scrollbar ms-n1 ps-1">
                <table class="table table-sm fs-9 mb-0">
                    <thead>
                        <tr>
                            <th class="sort align-middle" scope="col" data-sort="title"
                                style="width:15%; min-width:200px;">TITLE</th>
                            <th class="sort align-middle" scope="col" data-sort="work"
                                style="width:15%; min-width:200px;">WORK AS</th>
                            <th class="sort align-middle" scope="col" data-sort="category"
                                style="width:15%; min-width:200px;">CATEGORY</th>
                            <th class="sort align-middle" scope="col" data-sort="tech"
                                style="width:15%; min-width:200px;">TECH</th>
                            <th class="sort align-middle" scope="col" data-sort="year" style="width:10%;">YEAR</th>
                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="views"
                                style="width:10%;  min-width:100px;">VIEWS</th>
                            <th class="sort align-middle text-end" scope="col" style="width:15%;  min-width:150px;">
                                ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="members-table-body">
                        @forelse ($portfolios as $portfolio)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="title align-middle white-space-nowrap"><a
                                        class="d-flex align-items-center text-body text-hover-1000" href="#!">
                                        <img src="{{ asset($portfolio->image) }}" alt="" width="53" height="53"
                                        class="rounded" style="object-fit: cover;"/>
                                        <h6 class="mb-0 ms-3 fw-semibold">{{ $portfolio->title }}</h6>
                                    </a>
                                </td>
                                <td class="work align-middle white-space-nowrap text-body-tertiary">
                                    {{ $portfolio->work }}</td>
                                <td class="category align-middle white-space-nowrap">
                                    @foreach ($portfolio->portfolio_categories as $categoryId)
                                        @php
                                            $category = \App\Models\PortfolioCategory::find($categoryId);
                                        @endphp

                                        @if ($category)
                                            <span
                                                class="badge badge-phoenix badge-phoenix-primary">{{ $category->title }}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td class="tech align-middle white-space-nowrap text-body-tertiary">
                                    {{ $portfolio->tech }}</td>
                                <td class="year align-middle white-space-nowrap text-body">
                                    {{ $portfolio->year->format('M Y') }}</td>
                                <td class="views align-middle white-space-nowrap text-body-tertiary text-end">
                                    {{ number_format($portfolio->views) }}</td>
                                <td class=" align-middle text-end white-space-nowrap text-body-tertiary">
                                    <div class="col-12 col-md-auto d-flex justify-content-end">
                                        <a href="{{ route('admin.portfolio.edit', $portfolio) }}"
                                            class="btn btn-phoenix-primary btn-icon me-2" type="button"><span
                                                data-feather="edit"></span></a>
                                        <form method="POST" action="{{ route('admin.portfolio.destroy', $portfolio) }}"
                                            class="d-inline"
                                            onsubmit="return confirm('Anda yakin ingin menghapus berita ini?')">
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

@extends('layouts.app')

@section('content')
    <section id="experience">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">{{ $pricing->title }}</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-6">

                    <!-- timeline wrapper -->
                    <div class="timeline feature bg-white rounded shadow-dark padding-30 overflow-hidden">

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                            <div class="content">
                                {{-- <span class="time">{{ $experience->start_year->format('M Y') }} -
                                {{ $experience->end_year ? $experience->end_year->format('M Y') : 'Present' }}</span> --}}
                                <h3 class="title">Features</h3>
                                {!! $pricing->description !!}
                            </div>
                        </div>

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div>

                <div class="col-md-6">

                    <!-- responsive spacer -->
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>

                    <!-- timeline wrapper -->
                    <div class="timeline service bg-white rounded shadow-dark padding-30 overflow-hidden">

                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                            <div class="content">
                                {{-- <span class="time">{{ $experience->start_year->format('M Y') }} -
                                {{ $experience->end_year ? $experience->end_year->format('M Y') : 'Present' }}</span> --}}
                                <h3 class="title">Services</h3>
                                <p>24/7 responsive help</p>
                            </div>
                        </div>

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section id="works">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Themes</h2>

            <div class="spacer" data-height="60"></div>

            <!-- portfolio filter (desktop) -->
            <ul class="portfolio-filter list-inline wow fadeInUp">
                <li class="current list-inline-item" data-filter="*">Everything</li>
                @foreach ($tags as $tag)
                    <li class="list-inline-item" data-filter=".{{ $tag->slug }}">{{ $tag->title }}</li>
                @endforeach
            </ul>

            <!-- portfolio filter (mobile) -->
            <div class="pf-filter-wrapper">
                <select class="portfolio-filter-mobile">
                    <option value="*">Everything</option>
                    @foreach ($tags as $tag)
                        <li class="list-inline-item" data-filter="."></li>
                        <option value=".{{ $tag->slug }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>

            <!-- portolio wrapper -->
            <div class="row portfolio-wrapper" id="data-themes">

                <!-- portfolio item with category slug-->
                @foreach ($themes as $theme)
                    <div class="col-md-4 col-sm-6 grid-item
                        @foreach ($theme->theme_tags as $tagId)
                        @php
                            $tag = \App\Models\ThemeTag::find($tagId);
                        @endphp

                        @if ($tag)
                            {{ $tag->slug }}
                        @endif 
                        @endforeach
                    ">
                        <a href="#dialog-{{$theme->slug}}" class="work-content">
                            <div class="portfolio-item rounded shadow-dark">
                                <div class="details">
                                    <span class="term">{{$theme->category->title}}</span>
                                    <h4 class="title">{{ $theme->title }}</h4>
                                    <span class="more-button"><i class="icon-options"></i></span>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset($theme->image)}}" alt="{{$theme->title}}" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div id="dialog-{{$theme->slug}}" class="white-popup zoom-anim-dialog mfp-hide">
                            <img src="{{asset($theme->image)}}" alt="{{$theme->title}}"  class="w-100 rounded"  />
                            <h2>{{$theme->title}}</h2>
                            <p>{!! $theme->description !!}</p>
                            <a href="{{$theme->url}}" target="__blank" class="btn btn-default">View detail</a>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- more button -->
            {{-- <div class="text-center mt-4">
                <button id="load-more" class="btn btn-default"><i class="fas fa-spinner"></i> Load more</button>
                <!-- numbered pagination (hidden for infinite scroll) -->
                <ul class="portfolio-pagination list-inline d-none">
                    <li class="list-inline-item">1</li>
                    <li class="list-inline-item"><a href="works-2.html">2</a></li>
                </ul>
            </div> --}}

        </div>

    </section>
@endsection
@extends('layouts.app')

@section('content')
    <!-- section home -->
    <section id="home" class="home d-flex light align-items-center">
        <div class="container">

            <!-- intro -->
            <div class="intro">
                <!-- avatar image -->
                <img src="{{ asset('images/avatar.png') }}" alt="Reindra" class="mb-4" />

                <!-- info -->
                <h1 class="mb-2 mt-0">Indra Wahyudi</h1>
                <span>I'm a <span class="text-rotating">UI/UX designer, Front-End developer, Photography
                        lover</span></span>

                <!-- social icons -->
                <ul class="social-icons light list-inline mb-0 mt-4">
                    <li class="list-inline-item"><a href="https://github.com/seismolog-bit/"><i
                                class="fab fa-github"></i></a></li>
                    <li class="list-inline-item"><a href="https://linkedin.com/in/reindra/"><i
                                class="fab fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/reindradotcom/"><i
                                class="fab fa-instagram"></i></a></li>
                    {{-- <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                </ul>

                <!-- buttons -->
                <div class="mt-4">
                    <a href="#contact" class="btn btn-default">Hire me</a>
                </div>
            </div>

            <!-- scroll down mouse wheel -->
            <div class="scroll-down light">
                <a href="#about" class="mouse-wrapper">
                    <span>Scroll Down</span>
                    <span class="mouse">
                        <span class="wheel"></span>
                    </span>
                </a>
            </div>

            @include('components.paralax-layers')
        </div>

    </section>

    <!-- section about -->
    <section id="about">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">About Me</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-3">
                    <div class="text-center text-md-left">
                        <!-- avatar image -->
                        <img src="{{ asset('images/avatar.png') }}" alt="Reindra" />
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-9 triangle-left-md triangle-top-sm">
                    <div class="rounded bg-white shadow-dark padding-30">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- about text -->
                                <p>I'm Indra Wahyudi, a mobile and web developer from West Java, Indonesia. I have rich
                                    experience in the design and development of mobile applications with Flutter framework,
                                    websites and customization.
                                </p>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-default">Download CV</a>
                                </div>
                                <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                            </div>
                            <div class="col-md-6">
                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">Development</h4>
                                        <span class="float-right">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="90" data-color="#FFD15C">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">UI/UX design</h4>
                                        <span class="float-right">85%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="85" data-color="#FF4C60">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">Photography</h4>
                                        <span class="float-right">75%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="75" data-color="#6C6CE5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- row end -->

            <div class="spacer" data-height="70"></div>

            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-fire"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">198</em></h3>
                            <p class="mb-0">Projects completed</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-cup"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">5670</em></h3>
                            <p class="mb-0">Cup of coffee</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-people"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">427</em></h3>
                            <p class="mb-0">Satisfied clients</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-badge"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">2015</em></h3>
                            <p class="mb-0">Year experience</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- section services -->
    <section id="services">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Services</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-4">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center text-light shadow-blue"
                        data-color="#6C6CE5">
                        <img src="{{ asset('assets/img/icons/icon-vector.png') }}" style="width: 72px"
                            alt="Graphic Design" />
                        <h3 class="mb-3 mt-0">Graphic Design</h3>
                        <p class="mb-0">Visual that communicate, design that converts.</p>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4" data-wow-delay="0.2s">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center shadow-yellow"
                        data-color="#F9D74C">
                        <img src="{{ asset('assets/img/icons/icon-app-dev.png') }}" style="width: 72px"
                            alt="Mobbile Development" />
                        <h3 class="mb-3 mt-0">Mobile Development</h3>
                        <p class="mb-0">Building seamless mobile experiences for modern users.</p>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4" data-wow-delay="0.4s">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center text-light shadow-pink"
                        data-color="#F97B8B">
                        <img src="{{ asset('assets/img/icons/icon-web-dev.png') }}" style="width: 72px"
                            alt="Web Development" />
                        <h3 class="mb-3 mt-0">Web Development</h3>
                        <p class="mb-0">Modern websites built for speed, performance, and growth.</p>
                    </div>
                </div>

            </div>

            <div class="mt-5 text-center">
                <p class="mb-0">Looking for a custom job? <a href="#contact">Click here</a> to contact me! 👋</p>
            </div>

        </div>

    </section>

    <!-- section experience -->
    <section id="experience">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Experience</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-6">

                    <!-- timeline wrapper -->
                    <div class="timeline edu bg-white rounded shadow-dark padding-30 overflow-hidden">

                        <!-- timeline item -->
                        @foreach ($experiences as $experience)
                            @if ($experience->type == 'Education')
                                <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="content">
                                        <span class="time">{{ $experience->start_year->format('M Y') }} -
                                            {{ $experience->end_year ? $experience->end_year->format('M Y') : 'Present' }}</span>
                                        <h3 class="title">{{ $experience->title }}</h3>
                                        <p>{{ $experience->description }}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div>

                <div class="col-md-6">

                    <!-- responsive spacer -->
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>

                    <!-- timeline wrapper -->
                    <div class="timeline exp bg-white rounded shadow-dark padding-30 overflow-hidden">

                        <!-- timeline item -->
                        @foreach ($experiences as $experience)
                            @if ($experience->type == 'Work')
                                <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="content">
                                        <span class="time">{{ $experience->start_year->format('M Y') }} -
                                            {{ $experience->end_year ? $experience->end_year->format('M Y') : 'Present' }}</span>
                                        <h3 class="title">{{ $experience->title }}</h3>
                                        <p>{{ $experience->description }}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- section works -->
    <section id="works">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Recent works</h2>

            <div class="spacer" data-height="60"></div>

            <!-- portfolio filter (desktop) -->
            <ul class="portfolio-filter list-inline wow fadeInUp">
                <li class="current list-inline-item" data-filter="*">Everything</li>
                @foreach ($portfolio_categories as $category)
                    <li class="list-inline-item" data-filter=".{{ $category->slug }}">{{ $category->title }}</li>
                @endforeach
            </ul>

            <!-- portfolio filter (mobile) -->
            <div class="pf-filter-wrapper">
                <select class="portfolio-filter-mobile">
                    <option value="*">Everything</option>
                    @foreach ($portfolio_categories as $category)
                        <li class="list-inline-item" data-filter="."></li>
                        <option value=".{{ $category->slug }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <!-- portolio wrapper -->
            <div class="row portfolio-wrapper">

                <!-- portfolio item with category slug-->
                @foreach ($portfolios as $portfolio)
                    <div
                        class="col-md-4 col-sm-6 grid-item 
                    @foreach ($portfolio->portfolio_categories as $categoryId)
                        @php
                            $category = \App\Models\PortfolioCategory::find($categoryId);
                        @endphp

                        @if ($category)
                            {{ $category->slug }}
                        @endif @endforeach
                    ">
                        <a href="#small-{{ $portfolio->slug }}" class="work-content">
                            <div class="portfolio-item rounded shadow-dark">
                                <div class="details">
                                    <span class="term">
                                        @foreach ($portfolio->portfolio_categories as $categoryId)
                                            @php
                                                $category = \App\Models\PortfolioCategory::find($categoryId);
                                            @endphp

                                            @if ($category)
                                                {{ $category->title }}
                                                @if (!$loop->last)
                                                    -
                                                @endif
                                            @endif
                                        @endforeach
                                    </span>
                                    <h4 class="title">{{ $portfolio->title }}</h4>
                                    <span class="more-button"><i class="icon-options"></i></span>
                                </div>
                                <div class="thumb">
                                    <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div id="small-{{ $portfolio->slug }}" class="white-popup zoom-anim-dialog mfp-hide">
                            <img class="w-100 rounded" src="{{ Storage::url($portfolio->image) }}"
                                alt="{{ $portfolio->title }}" />
                            <h2>{{ $portfolio->title }}</h2>
                            <p>{{ $portfolio->year->format('M Y') }} | As {{ $portfolio->work }}</p>
                            <p>{{ $portfolio->description }}</p>
                            <p>Tech: {{ $portfolio->tech }}</p>
                            <a href="{{ $portfolio->url }}" class="btn btn-default">View project</a>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- more button -->
            {{-- <div class="load-more text-center mt-4">
                <a href="javascript:" class="btn btn-default"><i class="fas fa-spinner"></i> Load more</a>
                <!-- numbered pagination (hidden for infinite scroll) -->
                <ul class="portfolio-pagination list-inline d-none">
                    <li class="list-inline-item">1</li>
                    <li class="list-inline-item"><a href="works-2.html">2</a></li>
                </ul>
            </div> --}}

        </div>

    </section>

    <!-- section prices -->
    <section id="prices">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeIn">Pricing Plans</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                @foreach ($pricings as $pricing)
                    <div class="col-md-4 {{ $pricing->recommended ? 'px-md-0 my-4 my-md-0' : 'p-md-0 mt-md-4 mt-0' }}">
                        <!-- price item recommended-->
                        <div
                            class="price-item bg-white rounded shadow-dark text-center {{ $pricing->recommended ? 'best' : '' }}">
                            @if ($pricing->recommended)
                                <span class="badge">Recommended</span>
                            @endif
                            <img src="{{ Storage::url($pricing->image) }}" alt="{{ $pricing->title }}"
                                style="width: 70px" />
                            <h2 class="plan">{{ $pricing->title }}</h2>
                            <div class="price-description">
                                {!! $pricing->description !!}
                            </div>
                            <p class="mt-2">24/7 support</p>
                            <h3 class="price">{{ $pricing->price }}</h3>
                            @if ($pricing->price === null)
                                <a href="#contact" class="btn btn-default">Start a Project</a>
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section>

    <!-- section testimonials -->
    <section id="testimonials">

        <div class="container">

            <!-- section title -->
            {{-- <h2 class="section-title wow fadeInUp">Clients & Reviews</h2>

        <div class="spacer" data-height="60"></div>

        <!-- testimonials wrapper -->
        <div class="testimonials-wrapper">

            <!-- testimonial item -->
            <div class="testimonial-item text-center mx-auto">
                <div class="thumb mb-3 mx-auto">
                    <img src="images/avatar-3.svg" alt="customer-name" />
                </div>
                <h4 class="mt-3 mb-0">John Doe</h4>
                <span class="subtitle">Product designer at Dribbble</span>
                <div class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                    <p class="mb-0">I enjoy working with the theme and learn so much. You guys make the process
                        fun and interesting. Good luck! 👍</p>
                </div>
            </div>

            <!-- testimonial item -->
            <div class="testimonial-item text-center mx-auto">
                <div class="thumb mb-3 mx-auto">
                    <img src="images/avatar-1.svg" alt="customer-name" />
                </div>
                <h4 class="mt-3 mb-0">John Doe</h4>
                <span class="subtitle">Product designer at Dribbble</span>
                <div class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                    <p class="mb-0">I enjoy working with the theme and learn so much. You guys make the process
                        fun and interesting. Good luck! 🔥</p>
                </div>
            </div>

        </div> --}}

            <div class="row">
                @foreach ($technologies as $technology)
                    <div class="col-md-3 col-6">
                        <!-- client item -->
                        <div class="client-item">
                            <div class="inner">
                                <img src="{{ Storage::url($technology->image) }}" alt="{{ $technology->title }}"
                                    style="height: 48px; filter: grayscale(1);" />
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </section>

    <!-- section blog -->
    {{-- <section id="blog">

    <div class="container">

        <!-- section title -->
        <h2 class="section-title wow fadeInUp">Latest Posts</h2>

        <div class="spacer" data-height="60"></div>

        <div class="row blog-wrapper">

            <div class="col-md-4">
                <!-- blog item -->
                <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                    <div class="thumb">
                        <a href="#">
                            <span class="category">Reviews</span>
                        </a>
                        <a href="#">
                            <img src="images/blog/1.svg" alt="blog-title" />
                        </a>
                    </div>
                    <div class="details">
                        <h4 class="my-0 title"><a href="#">5 Best App Development Tool for Your Project</a></h4>
                        <ul class="list-inline meta mb-0 mt-2">
                            <li class="list-inline-item">09 February, 2020</li>
                            <li class="list-inline-item">Bolby</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!-- blog item -->
                <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                    <div class="thumb">
                        <a href="#">
                            <span class="category">Tutorial</span>
                        </a>
                        <a href="#">
                            <img src="images/blog/2.svg" alt="blog-title" />
                        </a>
                    </div>
                    <div class="details">
                        <h4 class="my-0 title"><a href="#">Common Misconceptions About Payment</a></h4>
                        <ul class="list-inline meta mb-0 mt-2">
                            <li class="list-inline-item">07 February, 2020</li>
                            <li class="list-inline-item">Bolby</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!-- blog item -->
                <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                    <div class="thumb">
                        <a href="#">
                            <span class="category">Business</span>
                        </a>
                        <a href="#">
                            <img src="images/blog/3.svg" alt="blog-title" />
                        </a>
                    </div>
                    <div class="details">
                        <h4 class="my-0 title"><a href="#">3 Things To Know About Startup Business</a></h4>
                        <ul class="list-inline meta mb-0 mt-2">
                            <li class="list-inline-item">06 February, 2020</li>
                            <li class="list-inline-item">Bolby</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section> --}}

    <!-- section contact -->
    <section id="contact">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Get In Touch</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-8">
                    <!-- contact info -->
                    <div class="contact-info">
                        <h3 class="wow fadeInUp">Let's talk about everything!</h3>
                        <p class="wow fadeInUp">Don't like forms? Send me an <a
                                href="mailto:reindrawahyudi@gmail.com">email</a>.
                            👋
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection

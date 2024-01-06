@extends('layouts.app')

@section('content')
    <!-- section home -->
    <section id="home" class="home d-flex light align-items-center">
        <div class="container">

            <!-- intro -->
            <div class="intro">
                <!-- avatar image -->
                <img src="images/avatar-1.svg" alt="Bolby" class="mb-4" />

                <!-- info -->
                <h1 class="mb-2 mt-0">Bolby Doe</h1>
                <span>I'm a <span class="text-rotating">UI/UX designer, Front-End developer, Photography
                        lover</span></span>

                <!-- social icons -->
                <ul class="social-icons light list-inline mb-0 mt-4">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://linkedin.com/in/reindra/"><i
                                class="fab fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/seismolog-bit/"><i
                                class="fab fa-github"></i></a></li>
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
                        <img src="images/avatar-2.svg" alt="Bolby" />
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-9 triangle-left-md triangle-top-sm">
                    <div class="rounded bg-white shadow-dark padding-30">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- about text -->
                                <p>I am Bolby Doe, web developer from London, United Kingdom. I have rich experience
                                    in web site design and building and customization, also I am good at WordPress.
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
                                        <span class="float-right">85%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="85" data-color="#FFD15C">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">UI/UX design</h4>
                                        <span class="float-right">95%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="95" data-color="#FF4C60">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">Photography</h4>
                                        <span class="float-right">70%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="70" data-color="#6C6CE5">
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
                        <img src="images/service-1.svg" alt="UI/UX design" />
                        <h3 class="mb-3 mt-0">UI/UX design</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo
                            ligula eget.</p>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4" data-wow-delay="0.2s">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center shadow-yellow"
                        data-color="#F9D74C">
                        <img src="images/service-2.svg" alt="UI/UX design" />
                        <h3 class="mb-3 mt-0">Web Development</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo
                            ligula eget.</p>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4" data-wow-delay="0.4s">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center text-light shadow-pink"
                        data-color="#F97B8B">
                        <img src="images/service-3.svg" alt="UI/UX design" />
                        <h3 class="mb-3 mt-0">Photography</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo
                            ligula eget.</p>
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
                    <div class="col-md-4 col-sm-6 grid-item creative design">
                        <a href="#small-dialog" class="work-content">
                            <div class="portfolio-item rounded shadow-dark">
                                <div class="details">
                                    <span class="term">Creative</span>
                                    <h4 class="title">{{ $portfolio->title }}</h4>
                                    <span class="more-button"><i class="icon-options"></i></span>
                                </div>
                                <div class="thumb">
                                    <img src="images/works/2.svg" alt="Portfolio-title" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div id="small-dialog" class="white-popup zoom-anim-dialog mfp-hide">
                            <img src="images/single-work.svg" alt="Title" />
                            <h2>Guest App Walkthrough Screens</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam hendrerit nibh in massa
                                semper rutrum. In rhoncus eleifend mi id tempus.</p>
                            <p>Donec consectetur, libero at pretium euismod, nisl felis lobortis urna, id tristique nisl
                                lectus eget ligula.</p>
                            <a href="#" class="btn btn-default">View on Dribbble</a>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- more button -->
            <div class="load-more text-center mt-4">
                <a href="javascript:" class="btn btn-default"><i class="fas fa-spinner"></i> Load more</a>
                <!-- numbered pagination (hidden for infinite scroll) -->
                <ul class="portfolio-pagination list-inline d-none">
                    <li class="list-inline-item">1</li>
                    <li class="list-inline-item"><a href="works-2.html">2</a></li>
                </ul>
            </div>

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
                            <img src="images/price-2.svg" alt="Premium" />
                            <h2 class="plan">{{ $pricing->title }}</h2>
                            <p>{{ $pricing->description }}</p>
                            <p>Mon-Fri support</p>
                            <h3 class="price">{{ number_format($pricing->price) }}</h3>
                            <a href="#" class="btn btn-default">Get Started</a>
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
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="images/client-1.svg" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="images/client-2.svg" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="images/client-3.svg" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="images/client-4.svg" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="images/client-5.svg" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="images/client-6.svg" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="images/client-7.svg" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="images/client-8.svg" alt="client-name" />
                        </div>
                    </div>
                </div>
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

                <div class="col-md-4">
                    <!-- contact info -->
                    <div class="contact-info">
                        <h3 class="wow fadeInUp">Let's talk about everything!</h3>
                        <p class="wow fadeInUp">Don't like forms? Send me an <a href="mailto:name@example.com">email</a>.
                            👋
                        </p>
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form mt-6" method="post" action="form/contact.php">

                        <div class="messages"></div>

                        <div class="row">
                            <div class="column col-md-6">
                                <!-- Name input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" name="InputName" id="InputName"
                                        placeholder="Your name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-6">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                                        placeholder="Email address" required="required" data-error="Email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="InputSubject" name="InputSubject"
                                        placeholder="Subject" required="required" data-error="Subject is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Message textarea -->
                                <div class="form-group">
                                    <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Message"
                                        required="required" data-error="Message is required."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="submit" id="submit" value="Submit"
                            class="btn btn-default">Send
                            Message</button><!-- Send Button -->

                    </form>
                    <!-- Contact Form end -->
                </div>

            </div>

        </div>

    </section>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ config('app.name', 'Laravel') }} | Web Developer Laravel & Flutter Indonesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.png') }}">

    <meta name="description"
        content="Reindra adalah Web & Mobile Developer spesialis Laravel dan Flutter di Indonesia. Membangun website, aplikasi mobile, dan sistem custom yang modern, cepat, dan scalable untuk bisnis berkembang.">

    <meta name="keywords"
        content="Web Developer Indonesia, Laravel Developer, Flutter Developer, Jasa Pembuatan Website, Mobile App Developer, Fullstack Developer Indonesia">

    <meta name="author" content="Reindra">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://reindra.com/">

    <!-- Open Graph (Facebook, LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Reindra | Web Developer Laravel & Flutter Indonesia">
    <meta property="og:description"
        content="Spesialis Laravel & Flutter. Membangun website dan aplikasi mobile modern untuk bisnis berkembang di Indonesia.">
    <meta property="og:url" content="https://reindra.com/">
    <meta property="og:site_name" content="Reindra Portfolio">

    <!-- Ganti dengan URL gambar preview kamu -->
    <meta property="og:image" content="{{ asset('logo.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Reindra | Web Developer Laravel & Flutter Indonesia">
    <meta name="twitter:description"
        content="Web Developer Indonesia spesialis Laravel & Flutter. Solusi website dan aplikasi mobile profesional.">
    <meta name="twitter:image" content="{{ asset('logo.png') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">

</head>

<body>

    <!-- Preloader -->
    <div id="preloader" class="light">
        <div class="outer">
            <!-- Google Chrome -->
            <div class="infinityChrome">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <!-- Safari and others -->
            <div class="infinity">
                <div>
                    <span></span>
                </div>
                <div>
                    <span></span>
                </div>
                <div>
                    <span></span>
                </div>
            </div>
            <!-- Stuff -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
                            result="goo" />
                        <feBlend in="SourceGraphic" in2="goo" />
                    </filter>
                </defs>
            </svg>
        </div>
    </div>

    <!-- mobile header -->
    <header class="mobile-header-1 light">
        <div class="container">
            <!-- menu icon -->
            <div class="menu-icon d-inline-flex mr-4">
                <button>
                    <span></span>
                </button>

                <div class="site-logo ml-3">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('logo.png') }}" alt="Reindra" style="height: 33px; width: 33px;" />
                    </a>
                </div>
                <!-- logo image -->
            </div>
        </div>
    </header>

    <!-- desktop header -->
    <header class="desktop-header-1 light d-flex align-items-start flex-column">

        <!-- logo image -->
        <div class="site-logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('logo.png') }}" alt="Reindra" width="52" />
            </a>
        </div>

        <!-- main menu -->
        <nav>
            <ul class="vertical-menu scrollspy">
                <li class="active"><a href="#home"><i class="icon-home"></i>Home</a></li>
                <li><a href="#about"><i class="icon-user-following"></i>About</a></li>
                <li><a href="#services"><i class="icon-briefcase"></i>Services</a></li>
                <li><a href="#experience"><i class="icon-graduation"></i>Experience</a></li>
                <li><a href="#works"><i class="icon-layers"></i>Works</a></li>
                <li><a href="#contact"><i class="icon-bubbles"></i>Contact</a></li>
            </ul>
        </nav>

        <!-- site footer -->
        <div class="footer">
            <!-- copyright text -->
            <span class="copyright">© {{ now()->format('Y') }} Reindra.</span>
        </div>

    </header>

    <!-- main layout -->
    <main class="content">

        @yield('content')

        <div class="spacer" data-height="96"></div>

    </main>

    <!-- Go to top button -->
    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/infinite-scroll.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/morphext.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @yield('script')

</body>

</html>


<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign in</title>
        <link rel="icon" type="image/png" href="{{ asset('front') }}/favicon.ico"/>
        <meta name="description" content="Lexend a clean, modern and pixel-perfect multipurpose blogging HTML5 website template.">
        <meta name="theme-color" content="#15171A">

        <!-- preload head styles -->
        <link rel="preload" href="{{ asset('front') }}/assets/css/unicons.min.css" as="style">
        <link rel="preload" href="{{ asset('front') }}/assets/css/swiper-bundle.min.css" as="style">
        <link rel="preload" href="{{ asset('front') }}/assets/css/magic-cursor.min.css" as="style">

        <!-- preload footer scripts -->
        <link rel="preload" href="{{ asset('front') }}/assets/js/libs/jquery.min.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/libs/scrollmagic.min.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/libs/swiper-bundle.min.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/libs/split-type.min.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/libs/anime.min.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/libs/gsap.min.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/helpers/data-attr-helper.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/helpers/swiper-helper.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/helpers/splitype-helper.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/helpers/anime-helper.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/helpers/anime-helper-defined-timelines.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/core/preloader.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/core/dynamic-background.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/core/marquee.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/uikit-components-bs.js" as="script">
        <link rel="preload" href="{{ asset('front') }}/assets/js/app.js" as="script">

        <!-- app head for bootstrap core -->
        <script src="{{ asset('front') }}/assets/js/app-head-bs.js"></script>

        <!-- include uni-core components -->
        <link rel="stylesheet" href="{{ asset('front') }}/assets/js/uni-core/css/components/base.min.css">

        <!-- include styles -->
        <link rel="stylesheet" href="{{ asset('front') }}/assets/css/unicons.min.css">
        <link rel="stylesheet" href="{{ asset('front') }}/assets/css/prettify.min.css">
        <link rel="stylesheet" href="{{ asset('front') }}/assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{ asset('front') }}/assets/css/magic-cursor.min.css">

        <!-- include main style -->
        <link rel="stylesheet" href="{{ asset('front') }}/assets/css/theme/main.min.css">

        <!-- include scripts -->
        <script src="{{ asset('front') }}/assets/js/uni-core/js/uni-core.min.js"></script>
    
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-B5JJP7FY91"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-B5JJP7FY91');
        </script>
        <script async type="module">
            import { getCLS, getFCP, getFID, getLCP, getTTFB } from 'https://cdn.jsdelivr.net/npm/web-vitals@2.1.2/dist/web-vitals.js';
            function sendToGoogleAnalytics({ name, delta, id }) {
                gtag('event', name, {
                    event_category: 'Web Vitals',
                    event_label: id,
                    value: Math.round(name === 'CLS' ? delta * 1000 : delta),
                    non_interaction: true,
                });
            }
            /* CLS FCP FID LCP TTFB */
            getCLS(sendToGoogleAnalytics);
            getFCP(sendToGoogleAnalytics);
            getFID(sendToGoogleAnalytics);
            getLCP(sendToGoogleAnalytics);
            getTTFB(sendToGoogleAnalytics);
        </script>
    </head>
    <body class="uni-body bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-200 overflow-x-hidden">

        <!--  To Top Sticky -->
        <a class="to-top position-fixed bottom-0 end-0 m-3 w-40px h-40px d-none xl:d-inline-flex items-center justify-center rounded-circle text-none z-99 bg-primary text-white" href="#to_top" data-uc-scroll>
            <i class="icon icon-2 unicon-chevron-up"></i>
        </a>

        <!--  Darkmode Switcher Sticky -->
        <div class="darkmode-trigger position-fixed bottom-0 end-0 m-2 my-1 lg:m-3 xl:mb-8 -translate-y-1 d-inline-flex items-center justify-center w-40px h-40px rounded-circle text-none z-99 bg-gray-100 dark:bg-gray-700 dark:text-white" data-darkmode-toggle="">
            <label class="switch">
                <span class="sr-only">Dark mode toggle</span>
                <input type="checkbox">
                <span class="slider fs-5"></span>
            </label>
        </div>

        <!-- Wrapper start -->
        <div id="wrapper" class="wrap overflow-x-hidden">

            <!-- Section start -->
            <div id="sign-in" class="sign-in section panel overflow-hidden bg-secondary dark:bg-gray-900">
                <div class="section-outer panel">
                    <div class="section-inner panel">
                        <div class="panel overflow-hidden">
                            <div class="panel row child-cols-12 md:child-cols-12 g-0">
                                {{-- <div>
                                    <div class="panel overflow-hidden min-h-300px h-100 lg:h-screen" data-anime="translateX: [-24, 0]; opacity: [0, 1]; easing: easeInOutExpo; duration: 750;">
                                        <figure class="panel h-100 m-0 rounded">
                                            <canvas class="h-100 w-100"></canvas>
                                            <img class="media-cover image" src="{{ asset('front') }}/assets/images/template/login.jpg" alt="Hero login image">
                                        </figure>
                                        <div class="position-cover text-white vstack justify-end p-4 lg:p-6 xl:py-8">
                                            <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-50"></div>
                                            <div class="panel z-1">
                                                <div class="vstack gap-3" data-anime="targets: >*; translateY: [-24, 0]; opacity: [0, 1]; easing: easeInOutExpo; duration: 750; delay: anime.stagger(100, {start: 250});">
                                                    <p class="fs-5 xl:fs-4 fw-medium">“This software simplifies the website building process, making it a breeze to manage our online presence.”</p>
                                                    <div class="vstack gap-0">
                                                        <p class="fs-6 lg:fs-5 fw-medium">David Handerson</p>
                                                        <span class="fs-7 opacity-80">Founder & CEO</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class='position-absolute top-0 start-0 text-none m-4 lg:m-6' data-anime='scale: [0.5, 1]; opacity: [0, 1]; easing: easeInOutExpo; duration: 750; delay: anime.stagger(100, {start: 150});' href='/html/lexend/main/'>
                                            <img class="w-32px lg:w-40px text-white" src="{{ asset('front') }}/assets/images/common/logo-icon.svg" alt="" data-uc-svg="">
                                        </a>
                                    </div>
                                </div> --}}
                                <div>
                                    <div class="panel vstack justify-center h-screen overflow-hidden">
                                        <div class="d-none lg:d-block" data-anime="onview: -100; targets: img; scale: [0.8, 1]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 350;">
                                            <div class="position-absolute bottom-0 start-0 rotate-45" style="bottom: 15% !important; left: 18% !important">
                                                <img class="w-32px text-gray-900 dark:text-white" src="{{ asset('front') }}/assets/images/template/star-1.svg" alt="star-1" data-uc-svg>
                                            </div>
                                            <div class="position-absolute top-0 end-0 rotate-45" style="top: 15% !important; right: 18% !important">
                                                <img class="w-24px text-gray-900 dark:text-white" src="{{ asset('front') }}/assets/images/template/star-2.svg" alt="star-2" data-uc-svg>
                                            </div>
                                            <div class="position-absolute top-0 start-0 translate-middle-y -rotate-12" style="top: 15% !important; left: 10% !important">
                                                <img class="w-64px d-block dark:d-none" src="{{ asset('front') }}/assets/images/template/icon-internet.svg" alt="icon-internet">
                                                <img class="w-64px d-none dark:d-block" src="{{ asset('front') }}/assets/images/template/icon-internet-dark.svg" alt="icon-internet-dark">
                                            </div>
                                            <div class="position-absolute top-0 start-0 translate-middle-y ms-n3" style="top: 65% !important; left: 0% !important">
                                                <img class="w-64px d-block dark:d-none" src="{{ asset('front') }}/assets/images/template/icon-globe.svg" alt="icon-globe">
                                                <img class="w-64px d-none dark:d-block" src="{{ asset('front') }}/assets/images/template/icon-globe-dark.svg" alt="icon-globe-dark">
                                            </div>
                                            <div class="position-absolute top-0 end-0 translate-middle-y rotate-12" style="top: 80% !important; right: 12% !important">
                                                <img class="w-64px d-block dark:d-none" src="{{ asset('front') }}/assets/images/template/icon-diamond.svg" alt="icon-diamond">
                                                <img class="w-64px d-none dark:d-block" src="{{ asset('front') }}/assets/images/template/icon-diamond-dark.svg" alt="icon-diamond-dark">
                                            </div>
                                            <div class="position-absolute top-0 end-0 translate-middle-y -rotate-12 me-n2" style="top: 35% !important">
                                                <img class="w-64px d-block dark:d-none" src="{{ asset('front') }}/assets/images/template/icon-community.svg" alt="icon-community">
                                                <img class="w-64px d-none dark:d-block" src="{{ asset('front') }}/assets/images/template/icon-community-dark.svg" alt="icon-community-dark">
                                            </div>
                                        </div>
                                        <div class="panel py-4 px-2">
                                            <div class="panel vstack gap-3 w-100 sm:w-350px mx-auto text-center" data-anime="targets: >*; translateY: [24, 0]; opacity: [0, 1]; easing: easeInOutExpo; duration: 750; delay: anime.stagger(100);">
                                                <h1 class="h4 sm:h2">Sign in</h1>
                                                <div class="hstack gap-2">
                                                    <a href="#github" class="hstack items-center justify-center flex-1 gap-1 h-48px text-none rounded bg-dark text-white dark:bg-white dark:text-dark">
                                                        <i class="icon icon-1 unicon-logo-github"></i>
                                                    </a>
                                                    <a href="#facebook" class="hstack items-center justify-center flex-1 gap-1 h-48px text-none rounded bg-blue-600 text-white">
                                                        <i class="icon icon-1 unicon-logo-facebook"></i>
                                                    </a>
                                                </div>
                                                <div class="panel my-2">
                                                    <hr class="m-0">
                                                    <span class="position-absolute top-50 start-50 translate-middle p-1 fs-7 text-uppercase bg-secondary dark:bg-gray-900">Or</span>
                                                </div>
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <input class="form-control h-48px w-full bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30" type="email" name="email" placeholder="Your email" required>
                                                    <input class="form-control h-48px w-full bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30" type="password" name="password" placeholder="Password" required>
                                                    <div class="hstack justify-between text-start">
                                                        <div class="form-check text-start">
                                                            <input class="form-check-input rounded bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30" type="checkbox">
                                                            <label class="hstack justify-between form-check-label fs-6">Remember me?</label>
                                                        </div>
                                                        <a class='uc-link' href='/html/lexend/main/reset-password'>Forgot password</a>
                                                    </div>
                                                    <button class="btn btn-primary btn-md text-white mt-2" type="submit">Log in</button>
                                                </form>
                                                <p>Have no account yet? <a class='uc-link' href='/html/lexend/main/sign-up'>Sign up</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section end -->
        </div>

        <!-- Wrapper end -->

        <!-- include jquery & bootstrap js -->
        <script defer src="{{ asset('front') }}/assets/js/libs/jquery.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/libs/bootstrap.min.js"></script>

        <!-- include uni-core components -->
        <script defer src="{{ asset('front') }}/assets/js/uni-core/js/components/notification.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/uni-core/js/components/parallax.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/uni-core/js/components/lightbox.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/uni-core/js/components/countdown.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/uni-core/js/components/tooltip.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/uni-core/js/components/slider.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/uni-core/js/components/slider-parallax.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/uni-core/js/components/slideshow.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/uni-core/js/components/slideshow-parallax.min.js"></script>

        <!-- include scripts -->
        <script defer src="{{ asset('front') }}/assets/js/libs/anime.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/libs/swiper-bundle.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/libs/split-type.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/libs/scrollmagic.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/libs/gsap.min.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/helpers/data-attr-helper.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/helpers/swiper-helper.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/helpers/splitype-helper.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/helpers/anime-helper.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/helpers/anime-helper-defined-timelines.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/core/preloader.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/core/marquee.js"></script>
        <script defer src="{{ asset('front') }}/assets/js/uikit-components-bs.js"></script>

        <!-- include app script -->
        <script defer src="{{ asset('front') }}/assets/js/app.js"></script>

        <script>
            // Schema toggle via URL
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const getSchema = urlParams.get("schema");
            if (getSchema === "dark") {
                setDarkMode(1);
            } else if (getSchema === "light") {
                setDarkMode(0);
            }
        </script>
    </body>
</html>

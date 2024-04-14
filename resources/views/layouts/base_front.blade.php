<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from unistudio.co/html/lexend/main/index-3 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2024 06:43:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lexend</title>
        <link rel="icon" type="image/png" href="https://unistudio.co/html/lexend/favicon.ico"/>
        <meta name="description" content="Lexend a clean, modern and pixel-perfect multipurpose blogging HTML5 website template.">
        <meta name="theme-color" content="#15171A">

        <!-- preload head styles -->
        <link rel="preload" href="{{ asset('') }}front/assets/css/unicons.min.css" as="style">
        <link rel="preload" href="{{ asset('') }}front/assets/css/swiper-bundle.min.css" as="style">
        <link rel="preload" href="{{ asset('') }}front/assets/css/magic-cursor.min.css" as="style">

        <!-- preload footer scripts -->
        <link rel="preload" href="{{ asset('') }}front/assets/js/libs/jquery.min.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/libs/scrollmagic.min.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/libs/swiper-bundle.min.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/libs/split-type.min.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/libs/anime.min.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/libs/gsap.min.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/helpers/data-attr-helper.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/helpers/swiper-helper.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/helpers/splitype-helper.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/helpers/anime-helper.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/helpers/anime-helper-defined-timelines.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/core/preloader.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/core/dynamic-background.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/core/marquee.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/uikit-components-bs.js" as="script">
        <link rel="preload" href="{{ asset('') }}front/assets/js/app.js" as="script">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- app head for bootstrap core -->
        <script src="{{ asset('') }}front/assets/js/app-head-bs.js"></script>

        <!-- include uni-core components -->
        <link rel="stylesheet" href="{{ asset('') }}front/assets/js/uni-core/css/components/base.min.css">

        <!-- include styles -->
        <link rel="stylesheet" href="{{ asset('') }}front/assets/css/unicons.min.css">
        <link rel="stylesheet" href="{{ asset('') }}front/assets/css/prettify.min.css">
        <link rel="stylesheet" href="{{ asset('') }}front/assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{ asset('') }}front/assets/css/magic-cursor.min.css">

        <!-- include main style -->
        <link rel="stylesheet" href="{{ asset('') }}front/assets/css/theme/main.min.css">

        <!-- include scripts -->
        <script src="{{ asset('') }}front/assets/js/uni-core/js/uni-core.min.js"></script>

        <style>
            .hide {
                display: none;
            }
        </style>
    
        {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-B5JJP7FY91"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-B5JJP7FY91');
        </script> --}}
        {{-- <script async type="module">
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
        </script> --}}
    </head>
    <body class="uni-body panel bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-200 overflow-x-hidden">

        <!--  Search modal -->
        <div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white" data-uc-height-viewport="">
                <div class="uc-modal-close-full m-1 p-0 vstack gap-narrow text-center">
                    <button class="icon-3 btn btn-md btn-dark dark:bg-white dark:text-dark w-24px sm:w-32px h-24px sm:h-32px rounded-circle flex-1" type="button">
                        <i class="unicon-close"></i>
                    </button>
                    <span class="ft-tertiary fs-7">ESC</span>
                </div>

                <div class="panel w-100 sm:w-500px px-2 py-10">
                    <h3 class="h4 sm:h2 text-center">What are you looking for?</h3>
                    <form class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700" action="https://unistudio.co/html/lexend/main/index-3?">
                        <span class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i class="unicon-search icon-3"></i></span>
                        <input type="search" name="q" class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white" placeholder="Type your keyword.." aria-label="Search" autofocus>
                    </form>
                </div>
            </div>
        </div>

        <!--  Newsletter modal -->
        <div id="uc-newsletter-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog w-md bg-white text-dark dark:bg-gray-900 dark:text-white rounded">
                <button class="uc-modal-close-default p-0 icon-2 btn btn-md btn-dark dark:bg-white dark:text-dark rounded-circle" type="button">
                    <i class="unicon-close"></i>
                </button>

                <div class="row sm:child-cols-6 col-match g-0">
                    <div>
                        <div class="position-relative w-100 ratio-1x1">
                            <img class="media-cover" src="{{ asset('') }}front/assets/images/common/newsletter.jpg" alt="Newsletter image">
                        </div>
                    </div>
                    <div>
                        <div class="panel vstack self-center gap-2 md:gap-4 py-4 md:py-8 px-3 md:px-6 text-center">
                            <h5 class="h6 m-0 text-primary ft-tertiary fw-normal">Weekly updates</h5>
                            <h3 class="h4 sm:h3 md:h2 xl:h1 m-0">Let's join our newsletter!</h3>
                            <div class="panel">
                                <form class="vstack gap-1">
                                    <input type="email" class="form-control h-48px w-full bg-white dark:border-white dark:border-gray-700" placeholder="Your email address..">
                                    <button type="submit" class="btn btn-primary btn-md text-white">Sign up</button>
                                </form>
                            </div>
                            <p class="fs-7 md:fs-6 m-0">Do not worry we don't spam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Acccount modal -->
        <div id="uc-account-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog lg:max-w-500px bg-secondary text-dark dark:bg-gray-800 dark:text-white rounded">
                <button class="uc-modal-close-default p-0 icon-2 btn btn-md btn-dark dark:bg-white dark:text-dark rounded-circle" type="button">
                    <i class="unicon-close"></i>
                </button>

                <div class="panel vstack gap-2 md:gap-4 text-center">
                    <ul class="account-tabs-nav nav-x justify-center h6 py-2 border-bottom d-none" data-uc-switcher="animation: uc-animation-slide-bottom-small, uc-animation-slide-top-small">
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Reset password</a></li>
                        <li><a href="#">Terms of use</a></li>
                    </ul>
                    <div class="account-tabs-content uc-switcher px-3 lg:px-4 py-4 lg:py-8 m-0 lg:mx-auto vstack justify-center items-center">
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                <h4 class="h5 lg:h4 m-0">Log in</h4>
                                <div class="panel vstack gap-4 w-100 sm:w-350px mx-auto">
                                    <form class="vstack gap-2">
                                        <input class="form-control h-48px w-full bg-white dark:border-white" type="email" placeholder="Your email" required>
                                        <input class="form-control h-48px w-full bg-white dark:border-white" type="password" placeholder="Password" required>
                                        <div class="hstack justify-between items-start text-start">
                                            <div class="form-check text-start">
                                                <input class="form-check-input rounded-0 dark:bg-gray-900 dark:text-white dark:border-gray-700" type="checkbox" id="inputCheckRemember">
                                                <label class="hstack justify-between form-check-label fs-7 sm:fs-6" for="inputCheckRemember">Remember me?</label>
                                            </div>
                                            <a href="#" class="uc-link" data-uc-switcher-item="2">Forgot password</a>
                                        </div>
                                        <button class="btn btn-primary btn-md text-white lg:mt-2" type="submit">Log in</button>
                                    </form>
                                    <div class="panel">
                                        <hr class="m-0">
                                        <span class="position-absolute top-50 start-50 translate-middle p-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                                    </div>
                                    <div class="hstack gap-2">
                                        <a href="#google" class="hstack items-center justify-center flex-1 gap-1 h-48px text-none rounded border border-gray-900 dark:border-white border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-google"></i>
                                        </a>
                                        <a href="#facebook" class="hstack items-center justify-center flex-1 gap-1 h-48px text-none rounded border border-gray-900 dark:border-white border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-facebook"></i>
                                        </a>
                                        <a href="#x" class="hstack items-center justify-center flex-1 gap-1 h-48px text-none rounded border border-gray-900 dark:border-white border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-x-filled"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="fs-7 sm:fs-6">Have no account yet? <a class="uc-link" href="#" data-uc-switcher-item="1">Sign up</a></p>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                <h4 class="h5 lg:h4 m-0">Create an account</h4>
                                <div class="panel vstack gap-4 w-100 sm:w-350px mx-auto">
                                    <form class="vstack gap-2">
                                        <input class="form-control h-48px w-full bg-white dark:border-white" type="text" placeholder="Full name" required>
                                        <input class="form-control h-48px w-full bg-white dark:border-white" type="email" placeholder="Your email" required>
                                        <input class="form-control h-48px w-full bg-white dark:border-white" type="password" placeholder="Password" required>
                                        <input class="form-control h-48px w-full bg-white dark:border-white" type="password" placeholder="Re-enter Password" required>
                                        <div class="hstack text-start">
                                            <div class="form-check text-start">
                                                <input class="form-check-input rounded-0 dark:bg-gray-900 dark:text-white dark:border-gray-700" type="checkbox" required>
                                                <label class="hstack justify-between form-check-label fs-7 sm:fs-6">I read and accept the <a href="#" class="uc-link ms-narrow" data-uc-switcher-item="3">terms of use</a>. </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-md text-white lg:mt-2" type="submit">Sign up</button>
                                    </form>
                                    <div class="panel">
                                        <hr class="m-0">
                                        <span class="position-absolute top-50 start-50 translate-middle p-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                                    </div>
                                    <div class="hstack gap-2">
                                        <a href="#google" class="hstack items-center justify-center flex-1 gap-1 h-48px text-none rounded border border-gray-900 dark:border-white border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-google"></i>
                                        </a>
                                        <a href="#facebook" class="hstack items-center justify-center flex-1 gap-1 h-48px text-none rounded border border-gray-900 dark:border-white border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-facebook"></i>
                                        </a>
                                        <a href="#x" class="hstack items-center justify-center flex-1 gap-1 h-48px text-none rounded border border-gray-900 dark:border-white border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-x-filled"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="fs-7 sm:fs-6">Already have an account? <a class="uc-link" href="#" data-uc-switcher-item="0">Log in</a></p>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                <h4 class="h5 lg:h4 m-0">Reset password</h4>
                                <div class="panel w-100 sm:w-350px">
                                    <form class="vstack gap-2">
                                        <input class="form-control h-48px w-full bg-white dark:border-white" type="email" placeholder="Your email" required>
                                        <div class="form-check text-start">
                                            <input class="form-check-input rounded-0 dark:bg-gray-900 dark:text-white dark:border-gray-700" type="checkbox" id="inputCheckVerify" required>
                                            <label class="form-check-label fs-7 sm:fs-6" for="inputCheckVerify"> <span>I'm not a robot</span>. </label>
                                        </div>
                                        <button class="btn btn-primary btn-md text-white lg:mt-2" type="submit">Reset a password</button>
                                    </form>
                                </div>
                                <p class="fs-7 sm:fs-6 mt-2 sm:m-0">Remember your password? <a class="uc-link" href="#" data-uc-switcher-item="0">Log in</a></p>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4">
                                <h4 class="h5 lg:h4 m-0">Terms of use</h4>
                                <div class="page-content panel fs-6 text-start max-h-400px overflow-scroll">
                                    <p>Terms of use dolor sit amet consectetur, adipisicing elit. Recusandae provident ullam aperiam quo ad non corrupti sit vel quam repellat ipsa quod sed, repellendus adipisci, ducimus ea modi odio assumenda.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">Disclaimers</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">Limitation on Liability</h5>
                                    <p>Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">Copyright Policy</h5>
                                    <p>Dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">General</h5>
                                    <p>Sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                </div>
                                <p class="fs-7 sm:fs-6">Do you agree to our terms? <a class="uc-link" href="#" data-uc-switcher-item="1">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Menu panel -->
        <div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
            <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
                <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white dark:bg-gray-900">
                    <div class="uc-logo">
                        <a class='h5 text-none text-primary' href='index.html'>
                            <img class="w-32px" src="https://unistudio.co/html/lexend/assets/images/common/logo-icon.svg" alt="Lexend" data-uc-svg>
                        </a>
                    </div>
                    <button class="uc-offcanvas-close position-relative top-0 end-0 m-0 p-0 icon-3 btn btn-md btn-alt-dark dark:bg-white dark:text-dark rounded-circle" type="button">
                        <i class="unicon-close"></i>
                    </button>
                </header>

                <div class="panel">
                    <ul class="nav-y gap-narrow fw-medium" data-uc-nav>
                        <li class="uc-parent">
                            <a href='index.html'>Home</a>
                            <ul class="uc-nav-sub">
                                <li><a href='index.html'>Home 01</a></li>
                                <li><a href='index-2.html'>Home 02</a></li>
                                <li><a href='index-3.html'>Home 03</a></li>
                            </ul>
                        </li>
                        <li class="uc-parent">
                            <a href="#">Inner Pages</a>
                            <ul class="uc-nav-sub">
                                <li><a href='page-features.html'>Features</a></li>
                                <li><a href='page-pricing.html'>Pricing</a></li>
                                <li><a href='page-integrations.html'>Integrations</a></li>
                                <li><a href='page-about.html'>About</a></li>
                                <li><a href='page-career.html'>Career</a></li>
                                <li><a href='page-contact.html'>Contact</a></li>
                                <li><a href='page-contact-2.html'>Contact v2</a></li>
                            </ul>
                        </li>
                        <li class="uc-parent">
                            <a href='blog.html'>Blog</a>
                            <ul class="uc-nav-sub">
                                <li><a href='blog.html'>Default</a></li>
                                <li><a href='blog-classic.html'>Full Width</a></li>
                                <li><a href='blog-2cols.html'>Grid 2 Cols</a></li>
                                <li><a href='blog-3cols.html'>Grid 3 Cols</a></li>
                                <li><a href='blog-4cols.html'>Grid 4 Cols</a></li>
                                <li><a href='blog-author.html'>Author</a></li>
                                <li><a href='blog-category.html'>Category</a></li>
                                <li><a href='blog-details.html'>Blog detail</a></li>
                                <li><a href='blog-details-2.html'>Blog detail - v2</a></li>
                                <li><a href='blog-details-3.html'>Blog detail - v3</a></li>
                            </ul>
                        </li>
                        <li class="uc-parent">
                            <a href="#">Other pages</a>
                            <ul class="uc-nav-sub">
                                <li><a href='request-demo.html'>Request a demo</a></li>
                                <li><a href='request-demos.html'>Request a demo v2</a></li>
                                <li><a href='sign-up.html'>Sign up</a></li>
                                <li><a href='sign-up-2.html'>Sign up v2</a></li>
                                <li><a href='sign-in.html'>Sign in</a></li>
                                <li><a href='sign-in-2.html'>Sign in v2</a></li>
                                <li><a href='reset-password.html'>Reset password</a></li>
                                <li><a href='reset-password-2.html'>Reset password v2</a></li>
                                <li><a href='404.html'>404 page</a></li>
                                <li><a href='coming-soon.html'>Coming soon</a></li>
                            </ul>
                        </li>
                        <li class="uc-parent">
                            <a href='shop.html'>Shop</a>
                            <ul class="uc-nav-sub" data-uc-nav="">
                                <li class="uc-parent">
                                    <a href='shop.html'>Shop layouts</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href='shop.html'>Shop 4 cols</a></li>
                                        <li><a href='shop-3.html'>Shop 3 cols</a></li>
                                        <li><a href='shop-2.html'>Shop 2 cols</a></li>
                                        <li><a href='shop-sidebar.html'>Shop with sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href='shop-category.html'>Archive category</a></li>
                                <li><a href='shop-product-detail.html'>Product detail</a></li>
                                <li><a href='shop-product-detail-2.html'>Product detail - v2</a></li>
                                <li><a href='shop-cart.html'>Cart</a></li>
                                <li><a href='shop-cart-2.html'>Cart - v2</a></li>
                                <li><a href='shop-checkout.html'>Checkout</a></li>
                                <li><a href='shop-checkout-2.html'>Checkout - v2</a></li>
                                <li><a href='shop-order.html'>Order confirmation</a></li>
                            </ul>
                        </li>
                        <li><a href='page-about.html'>About</a></li>
                        <li><a href='page-contact.html'>Contact</a></li>
                        <li><a href='page-faq.html'>FAQ</a></li>
                        <li class="hr opacity-10 my-1"></li>
                        <li><a href='sign-in.html'>Sign in</a></li>
                        <li><a href='sign-up.html'>Create an account</a></li>
                        <li><a href='page-terms.html'>Terms of use</a></li>
                        <li><a href='page-privacy.html'>Privacy policy</a></li>
                    </ul>
                    <ul class="social-icons nav-x mt-4">
                        <li>
                            <a href="#"><i class="unicon-logo-medium icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-x-filled icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-instagram icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-pinterest icon-2"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  Cart panel -->
        <div id="uc-cart-panel" data-uc-offcanvas="overlay: true; flip: true;">
            <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
                <button class="uc-offcanvas-close m-1 p-0 icon-2 md:icon-3 btn btn-md btn-dark dark:bg-white dark:text-dark rounded-circle" type="button">
                    <i class="unicon-close"></i>
                </button>

                <div class="mini-cart-content vstack justify-between panel h-100">
                    <div class="mini-cart-header">
                        <h3 class="title h5 m-0">Shopping cart</h3>
                    </div>
                    <div class="mini-cart-listing panel flex-1 my-4 overflow-scroll">
                        <p class="alert alert-warning" hidden>Your cart empty!</p>
                        <div class="panel vstack gap-3">
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}front/assets/images/common/products/img-07.jpg" alt="Laptop Cover">
                                            <a class='position-cover' data-caption='Laptop Cover' href='shop-product-detail.html'></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class='text-none' href='shop-product-detail.html'>Laptop Cover</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50"><span class="qty">1</span> x <span class="price">$24.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}front/assets/images/common/products/img-08.jpg" alt="Disney Toys">
                                            <a class='position-cover' data-caption='Disney Toys' href='shop-product-detail.html'></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class='text-none' href='shop-product-detail.html'>Disney Toys</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50"><span class="qty">1</span> x <span class="price">$5.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}front/assets/images/common/products/img-09.jpg" alt="Screen Axe">
                                            <a class='position-cover' data-caption='Screen Axe' href='shop-product-detail.html'></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class='text-none' href='shop-product-detail.html'>Screen Axe</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50"><span class="qty">1</span> x <span class="price">$19.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}front/assets/images/common/products/img-10.jpg" alt="Airpods Pro">
                                            <a class='position-cover' data-caption='Airpods Pro' href='shop-product-detail.html'></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class='text-none' href='shop-product-detail.html'>Airpods Pro</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50"><span class="qty">1</span> x <span class="price">$49.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="mini-cart-footer panel pt-3 border-top">
                        <div class="panel vstack gap-3 justify-between">
                            <div class="mini-cart-total hstack justify-between">
                                <h5 class="h5 m-0">Subtotal</h5>
                                <span class="fs-5">$97.00</span>
                            </div>
                            <div class="mini-cart-actions vstack gap-1">
                                <a class='btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700' href='shop-cart.html'>View cart</a>
                                <a class='btn btn-md btn-primary text-white' href='shop-checkout.html'>Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Favorites modal -->
        <div id="uc-favorites-panel" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
                <button class="uc-modal-close-default p-0 icon-2 btn btn-md btn-dark dark:bg-white dark:text-dark rounded-circle" type="button">
                    <i class="unicon-close"></i>
                </button>

                <div class="panel vstack justify-center items-center gap-2 text-center py-8">
                    <i class="icon icon-4 unicon-bookmark mb-2 text-primary dark:text-white"></i>
                    <h2 class="h4 md:h3 m-0">Your favorites</h2>
                    <p class="fs-5 opacity-60">You have not yet added any recipe to your favorites list.</p>
                    <a href="#" class="btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 mt-2 uc-modal-close">Browse recipes</a>
                </div>
            </div>
        </div>

        <!--  Contact modal -->
        <div id="uc-contact-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog lg:max-w-650px bg-secondary text-dark dark:bg-gray-800 dark:text-white rounded">
                <button class="uc-modal-close-default p-0 icon-2 btn btn-md btn-dark dark:bg-white dark:text-dark rounded-circle" type="button">
                    <i class="unicon-close"></i>
                </button>

                <div class="panel vstack gap-2 md:gap-4 text-center">
                    <div class="panel cstack px-3 md:px-4 py-4 md:py-8 m-0 lg:mx-auto">
                        <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                            <h4 class="h5 lg:h4 m-0">Schedule your 15-minute demo now</h4>
                            <div class="panel w-100 sm:w-350px md:w-500px mx-auto">
                                <form class="vstack gap-2">
                                    <div class="vstack lg:hstack gap-2">
                                        <input class="form-control h-48px w-100 md:w-1/2 bg-white dark:border-white" type="text" placeholder="Full name*" required>
                                        <input class="form-control h-48px w-100 md:w-1/2 bg-white dark:border-white" type="text" placeholder="Last name*" required>
                                    </div>
                                    <div class="vstack lg:hstack gap-2">
                                        <input class="form-control h-48px w-100 md:w-1/2 bg-white dark:border-white" type="email" placeholder="Your email*" required>
                                        <input class="form-control h-48px w-100 md:w-1/2 bg-white dark:border-white" type="tel" placeholder="Phone number*" required>
                                    </div>
                                    <input class="form-control h-48px w-full bg-white dark:border-white" type="text" placeholder="Company name*" required>
                                    <textarea class="form-control min-h-150px w-full bg-white dark:border-white" placeholder="Your message.."></textarea>
                                    <button class="btn btn-primary btn-md text-white mt-2" type="submit">Schedule my demo</button>
                                    <p class="fs-7 opacity-70 mt-2 text-center">We’ll tailor your demo to your immediate needs and answer all your questions. Get ready to see how it works!</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

        <!-- Header start -->
        @include('layouts.header_front')

        <!-- Header end -->

        <!-- Wrapper start -->

        @yield('content')
        

        <!-- Wrapper end -->

        <!-- Footer start -->
        <footer id="uc-footer" class="uc-footer panel overflow-hidden uc-dark">
            <div class="footer-outer py-4 lg:py-6 xl:py-9 dark:bg-gray-900 dark:text-white">
                <div class="container max-w-xl">
                    <div class="footer-inner vstack gap-4 lg:gap-6 xl:gap-8">
                        <div class="uc-footer-widgets panel">
                            <div class="row child-cols-6 md:child-cols col-match g-4">
                                <div class="col-12 lg:col-4">
                                    <div class="panel vstack items-start gap-4 md:pe-8">
                                        <div class="vstack gap-2">
                                            <a href='index.html'>
                                                <img class="w-32px text-primary" src="https://unistudio.co/html/lexend/assets/images/common/logo-icon.svg" alt="Lexend" data-uc-svg>
                                            </a>
                                            <p>This powerfull tool eliminates the need to leave Salesforce to get things done as I can create a custom proposal with dynamic pricing tables.</p>
                                        </div>
                                        <div class="hstack items-start gap-1">
                                            <a href="#">
                                                <img class="text-gray-900 dark:text-white hover:text-opacity-70 transition-all duration-150" src="https://unistudio.co/html/lexend/assets/images/common/playstore.svg" alt="Google Play Store" data-uc-svg>
                                            </a>
                                            <a href="#">
                                                <img class="text-gray-900 dark:text-white hover:text-opacity-70 transition-all duration-150" src="https://unistudio.co/html/lexend/assets/images/common/appstore.svg" alt="Apple Store" data-uc-svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <ul class="nav-y gap-1 fw-medium">
                                        <li><a href='page-about.html'>About</a></li>
                                        <li><a href='page-pricing.html'>Pricing</a></li>
                                        <li><a href='page-features.html'>Features</a></li>
                                        <li><a href='page-integrations.html'>Integrations</a></li>
                                        <li><a href='page-career.html'>Career</a></li>
                                        <li><a href='page-contact.html'>Contact</a></li>
                                        <li><a href='page-contact-2.html'>Contact v2</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="nav-y gap-1 fw-medium">
                                        <li><a href='shop.html'>Shop</a></li>
                                        <li><a href='shop-sidebar.html'>With sidebar</a></li>
                                        <li><a href='shop-product-detail.html'>Product detail</a></li>
                                        <li><a href='shop-product-detail-2.html'>Product detail v2</a></li>
                                        <li><a href='shop-cart.html'>Cart</a></li>
                                        <li><a href='shop-checkout.html'>Checkout</a></li>
                                        <li><a href='shop-order.html'>Order confirmation</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="nav-y gap-1 fw-medium">
                                        <li><a href='request-demo.html'>Request a demo</a></li>
                                        <li><a href='sign-in.html'>Sign in</a></li>
                                        <li><a href='sign-in-2.html'>Sign in v2</a></li>
                                        <li><a href='sign-up.html'>Sign up</a></li>
                                        <li><a href='sign-up-2.html'>Sign up v2</a></li>
                                        <li><a href='reset-password.html'>Reset password</a></li>
                                        <li><a href='reset-password-2.html'>Reset password v2</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="nav-y gap-1 fw-medium">
                                        <li><a href='blog.html'>Blog</a></li>
                                        <li><a href='blog-details.html'>Blog detail</a></li>
                                        <li><a href='page-faq.html'>FAQ</a></li>
                                        <li><a href='404.html'>404</a></li>
                                        <li><a href='coming-soon.html'>Coming Soon</a></li>
                                        <li><a href='page-terms.html'>Terms of service</a></li>
                                        <li><a href='page-privacy.html'>Privacy policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uc-footer-bottom panel vstack lg:hstack gap-4 justify-center lg:justify-between pt-4 lg:pt-6 border-top dark:text-white">
                            <div class="vstack sm:hstack justify-center lg:justify-start items-center lg:items-start gap-1 lg:gap-2">
                                <p class="opacity-60">Lexend © 2023, All rights reserved.</p>
                                <ul class="nav-x gap-2 fw-medium">
                                    <li><a href="#">Privacy notice</a></li>
                                    <li><a href="#">Legal</a></li>
                                    <li><a href="#">Cookie settings</a></li>
                                </ul>
                            </div>
                            <div class="hstack justify-center lg:justify-end gap-2 lg:gap-3">
                                <ul class="nav-x gap-2">
                                    <li>
                                        <a href="#"><i class="icon icon-2 unicon-logo-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon icon-2 unicon-logo-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon icon-2 unicon-logo-x-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon icon-2 unicon-logo-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon icon-2 unicon-logo-youtube"></i></a>
                                    </li>
                                </ul>
                                <div class="vr"></div>
                                <div class="d-inline-block">
                                    <a href="#" class="hstack gap-1 text-none fw-medium">
                                        <i class="icon icon-1 unicon-earth-filled"></i>
                                        <span>English</span>
                                        <span data-uc-drop-parent-icon=""></span>
                                    </a>
                                    <div class="p-2 bg-white dark:bg-gray-800 shadow-xs rounded w-150px" data-uc-drop="mode: click; offset: 28; pos: top-right; boundary: !.uc-footer-bottom; animation: uc-animation-slide-top-small; duration: 150;">
                                        <ul class="nav-y gap-1 fw-medium items-end">
                                            <li><a href="#en">English</a></li>
                                            <li><a href="#ar">العربية</a></li>
                                            <li><a href="#ch">中文</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Footer end -->

        <!-- include jquery & bootstrap js -->
        <script defer src="{{ asset('') }}front/assets/js/libs/jquery.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/libs/bootstrap.min.js"></script>

        <!-- include uni-core components -->
        <script defer src="{{ asset('') }}front/assets/js/uni-core/js/components/notification.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/uni-core/js/components/parallax.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/uni-core/js/components/lightbox.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/uni-core/js/components/countdown.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/uni-core/js/components/tooltip.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/uni-core/js/components/slider.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/uni-core/js/components/slider-parallax.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/uni-core/js/components/slideshow.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/uni-core/js/components/slideshow-parallax.min.js"></script>

        <!-- include scripts -->
        <script defer src="{{ asset('') }}front/assets/js/libs/anime.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/libs/swiper-bundle.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/libs/split-type.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/libs/scrollmagic.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/libs/gsap.min.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/helpers/data-attr-helper.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/helpers/swiper-helper.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/helpers/splitype-helper.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/helpers/anime-helper.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/helpers/anime-helper-defined-timelines.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/core/preloader.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/core/marquee.js"></script>
        <script defer src="{{ asset('') }}front/assets/js/uikit-components-bs.js"></script>
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>


        <!-- include app script -->
        <script defer src="{{ asset('') }}front/assets/js/app.js"></script>

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

        @yield('script')
    </body>

<!-- Mirrored from unistudio.co/html/lexend/main/index-3 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2024 06:44:17 GMT -->
</html>

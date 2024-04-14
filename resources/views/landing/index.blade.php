@extends('layouts.base_front')

@section('content')
<div id="wrapper" class="wrap">

    <!-- Section start -->
    <div id="hero_header" class="hero-header section panel overflow-hidden">
        <div class="position-absolute top-0 start-0 end-0 h-600px lg:h-screen bg-secondary dark:bg-gray-300 dark:bg-opacity-10 z-0"></div>
        <div class="position-absolute top-0 start-0 end-0 min-h-screen overflow-hidden d-none lg:d-block" data-anime="onview: -100; targets: img; scale: [0.8, 1]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 350;">
            <div class="position-absolute top-0 start-0 rotate-45" style="top: 45% !important; left: 18% !important">
                <img class="w-32px text-gray-900 dark:text-white" src="https://unistudio.co/html/lexend/assets/images/template/star-1.svg" alt="star-1" data-uc-svg>
            </div>
            <div class="position-absolute top-0 end-0 rotate-45" style="top: 20% !important; right: 18% !important">
                <img class="w-24px text-gray-900 dark:text-white" src="https://unistudio.co/html/lexend/assets/images/template/star-2.svg" alt="star-2" data-uc-svg>
            </div>
            <div class="position-absolute top-0 start-0 translate-middle-y -rotate-12" style="top: 20% !important; left: 15% !important">
                <img class="w-56px xl:w-64px d-block dark:d-none" src="https://unistudio.co/html/lexend/assets/images/template/icon-trophy.svg" alt="icon-trophy">
                <img class="w-56px xl:w-64px d-none dark:d-block" src="https://unistudio.co/html/lexend/assets/images/template/icon-trophy-dark.svg" alt="icon-trophy-dark">
            </div>
            <div class="position-absolute top-0 start-0 translate-middle-y rotate-45 ms-n3" style="top: 35% !important">
                <img class="w-56px xl:w-64px d-block dark:d-none" src="https://unistudio.co/html/lexend/assets/images/template/icon-location.svg" alt="icon-location">
                <img class="w-56px xl:w-64px d-none dark:d-block" src="https://unistudio.co/html/lexend/assets/images/template/icon-location-dark.svg" alt="icon-location-dark">
            </div>
            <div class="position-absolute top-0 start-0 translate-middle-y" style="top: 80% !important; left: 8% !important">
                <img class="w-56px xl:w-64px d-block dark:d-none" src="https://unistudio.co/html/lexend/assets/images/template/icon-globe.svg" alt="icon-globe">
                <img class="w-56px xl:w-64px d-none dark:d-block" src="https://unistudio.co/html/lexend/assets/images/template/icon-globe-dark.svg" alt="icon-globe-dark">
            </div>
            <div class="position-absolute top-0 end-0 translate-middle-y rotate-45" style="top: 50% !important; right: 18% !important">
                <img class="w-56px xl:w-64px d-block dark:d-none" src="https://unistudio.co/html/lexend/assets/images/template/icon-crown.svg" alt="icon-crown">
                <img class="w-56px xl:w-64px d-none dark:d-block" src="https://unistudio.co/html/lexend/assets/images/template/icon-crown-dark.svg" alt="icon-crown-dark">
            </div>
            <div class="position-absolute top-0 end-0 translate-middle-y -rotate-45" style="top: 80% !important; right: 8% !important">
                <img class="w-56px xl:w-64px d-block dark:d-none" src="https://unistudio.co/html/lexend/assets/images/template/icon-diamond.svg" alt="icon-diamond">
                <img class="w-56px xl:w-64px d-none dark:d-block" src="https://unistudio.co/html/lexend/assets/images/template/icon-diamond-dark.svg" alt="icon-diamond-dark">
            </div>
            <div class="position-absolute top-0 end-0 translate-middle-y -rotate-12 me-n3" style="top: 35% !important">
                <img class="w-56px xl:w-64px d-block dark:d-none" src="https://unistudio.co/html/lexend/assets/images/template/icon-chat.svg" alt="icon-chat">
                <img class="w-56px xl:w-64px d-none dark:d-block" src="https://unistudio.co/html/lexend/assets/images/template/icon-chat-dark.svg" alt="icon-chat-dark">
            </div>
        </div>
        <div class="section-outer panel pb-10 pt-9 lg:py-10">
            <div class="container max-w-xl">
                <div class="section-inner panel">
                    <form action="{{ url('search-domain') }}">
                        <div class="vstack items-center gap-2 lg:gap-4 mt-2 sm:mt-4 lg:mt-0 mb-6 lg:mb-8 max-w-750px mx-auto text-center" data-anime="targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                            <h1 class="h2 sm:h1 lg:display-6 xl:display-4 m-0">
                                Streamlines all your <br class="d-none lg:d-block">
                                project workflows
                            </h1>
                            <p class="fs-6 sm:fs-5 text-dark dark:text-white text-opacity-70">
                                Drag-and-drop editing helps you build them fast, <br class="d-none sm:d-block">
                                with your choice of 750+ ready-to-use, free templates.
                            </p>
                            <div class="vstack sm:hstack justify-center gap-1 lg:gap-2 mt-1 sm:mt-2">
                                {{-- Check Your Domain --}}

                                <input class="form-control h-48px w-100 md:w-1/2 bg-white dark:border-white" type="text" name="domain" placeholder="Masukkan domain yang diinginkan" required="">
                                <button class="btn btn-primary btn-md w-3/12 text-white" type="submit">Cari Domain</button>
                                {{-- End Check Your Domain --}}
                            </div>
                        </div>
                    </form>
                    <div class="hero-scene panel max-w-950px mx-auto" data-anime="targets: > *; scale: [0.9, 1]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 750});">
                        <div class="panel text-center overflow-hidden rounded-3 border border-5 border-dark dark:border-white dark:border-opacity-20">
                            <img src="{{ asset('') }}front/assets/images/template/dashboard.jpg" alt="Main hero image">
                        </div>
                        <div class="position-absolute bottom-0 end-0 me-n8 mb-n8">
                            <img class="w-200px d-block dark:d-none" src="https://unistudio.co/html/lexend/assets/images/template/sitting.svg" alt="sitting">
                            <img class="w-200px d-none dark:d-block" src="https://unistudio.co/html/lexend/assets/images/template/sitting-dark.svg" alt="sitting-dark">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section end -->

    <!-- Section start -->
    <div id="trusted_brands" class="trusted-brands section panel">
        <div class="section-outer panel pb-4 lg:pb-6">
            <div class="container max-w-xl">
                <div class="section-inner panel">
                    <div class="review-brands panel vstack justify-center gap-2 px-3 py-4 sm:px-4 sm:py-6 lg:p-6 text-center rounded-3 bg-secondary dark:bg-gray-300 dark:bg-opacity-10 overflow-hidden" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 250;">
                        <h3 class="title h4 sm:h3 lg:h2 m-0">Trusted for overall simplicity</h3>
                        <div class="vstack sm:hstack justify-center gap-1 fs-6 text-gray-900 dark:text-white">
                            <div class="rating panel">
                                <div class="hstack justify-center gap-0">
                                    <i class="icon unicon-star-filled"></i>
                                    <i class="icon unicon-star-filled"></i>
                                    <i class="icon unicon-star-filled"></i>
                                    <i class="icon unicon-star-filled"></i>
                                    <i class="icon unicon-star-filled"></i>
                                </div>
                            </div>
                            <span class="desc">Based on 4,000+ reviews with customer satisfaction on</span>
                        </div>
                        <div class="panel mt-3 sm:mt-4">
                            <div class="brands hstack gap-4 justify-between max-w-950px mx-auto">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/01.svg" alt="Trustpilot" class="dark:d-none">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/dark-01.svg" alt="Trustpilot" class="d-none dark:d-block">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/02.svg" alt="Trustpilot" class="dark:d-none">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/dark-02.svg" alt="Trustpilot" class="d-none dark:d-block">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/03.svg" alt="Trustpilot" class="dark:d-none">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/dark-03.svg" alt="Trustpilot" class="d-none dark:d-block">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/04.svg" alt="Trustpilot" class="dark:d-none">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/dark-04.svg" alt="Trustpilot" class="d-none dark:d-block">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/05.svg" alt="Trustpilot" class="dark:d-none">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/dark-05.svg" alt="Trustpilot" class="d-none dark:d-block">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/06.svg" alt="Trustpilot" class="dark:d-none">
                                <img src="https://unistudio.co/html/lexend/assets/images/review-logo/dark-06.svg" alt="Trustpilot" class="d-none dark:d-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Section end -->
</div>
@endsection
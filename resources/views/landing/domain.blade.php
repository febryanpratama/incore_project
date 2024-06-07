@extends('layouts.base_front')

@section('content')
<div id="wrapper" class="wrap flex">
    <div id="hero_header" class="hero-header section panel overflow-hidden">
        <div class="position-absolute top-0 start-0 end-0 min-h-screen overflow-hidden d-none lg:d-block" data-anime="targets: >*; scale: [0, 1]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 750});">
            <div class="position-absolute top-0 start-0 rotate-45" style="top: 30% !important; left: 18% !important">
                <img class="w-32px text-gray-900 dark:text-white" src="https://unistudio.co/html/lexend/assets/images/template/star-1.svg" alt="star-1" data-uc-svg>
            </div>
            <div class="position-absolute top-0 end-0 rotate-45" style="top: 15% !important; right: 18% !important">
                <img class="w-24px text-gray-900 dark:text-white" src="https://unistudio.co/html/lexend/assets/images/template/star-2.svg" alt="star-2" data-uc-svg>
            </div>
        </div>
        <div class="section-outer panel pt-9 lg:pt-10 pb-6 sm:pb-8 lg:pb-9">
            <div class="container max-w-xl">
                <div class="section-inner panel mt-2 sm:mt-4 lg:mt-0" data-anime="targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                    <div class="vstack items-center gap-2 lg:gap-4 mb-4 sm:mb-6 lg:mb-8 max-w-750px mx-auto text-center">
                        <h1 class="h2 sm:h1 lg:display-6 xl:display-5 m-0" id="textvalue">List Domain.</h1>
                        <p class="fs-6 sm:fs-5 text-dark dark:text-white text-opacity-70" id="descvalue">Berikut ini merupakan List Domain yang dapat anda gunakan pada website perusahaan anda</p>
                    </div>
                   
                </div>
                <div class="row child-cols-12 sm:child-cols-4 flex justify-center col-match g-2 sm:g-3 uc-grid" data-uc-grid=""  data-anime="onview: -100; targets: > *; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                    <div style="transform: translateY(0px); opacity: 1;" class="uc-first-column">
                        <div class="panel vstack justify-end items-end gap-1 p-3 rounded lg:rounded-2 bg-secondary dark:bg-gray-300 dark:bg-opacity-10">
                            <div class="vstack gap-narrow">
                                <h5 class="h6 lg:h5 m-0">Usefullairdrop.com</h5>
                                <span class="fs-6 text-dark dark:text-white text-opacity-70">Rp. 270.000</span>
                            </div>
                            <a class="uc-link fs-7 fw-bold d-inline-flex items-center gap-narrow border-bottom pb-narrow" href="javascript:void(0)">
                                <span>Pilih Domain</span>
                                {{-- <span onclick="addDomain('{{ $domain[$i]['domain'] }}','{{ $domain[$i]['price'] }}')">Pilih Domain</span> --}}
                                <i class="icon icon-narrow unicon-arrow-up-right fw-bold"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- DOMAIN --}}

    <div id="career_openings" class="career-openings section panel overflow-hidden pb-6 xl:pb-9">
        <div class="section-outer panel py-6 xl:py-9 bg-secondary dark:bg-gray-300 dark:bg-opacity-10">
            <div class="container max-w-lg">
                <div class="section-inner panel">
                    <div class="panel vstack justify-center items-center gap-4 sm:gap-6 xl:gap-8 max-w-850px mx-auto">
                        <div class="panel">
                            
                            <div class="row child-cols-12 sm:child-cols-6 col-match g-2 sm:g-3 uc-grid" data-uc-grid="" data-anime="onview: -100; targets: > *; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">

                                @for ($i = 0; $i < count($domain); $i++)
                                <div style="transform: translateY(0px); opacity: 1;" class="uc-first-column">
                                    <div class="panel vstack justify-end items-end gap-1 p-3 rounded lg:rounded-2 bg-white dark:bg-gray-300 dark:bg-opacity-10">
                                        <div class="vstack gap-narrow">
                                            <h5 class="h6 lg:h5 m-0">{{ $domain[$i]['domain'] }}</h5>
                                            <span class="fs-6 text-dark dark:text-white text-opacity-70">Rp. {{ number_format($domain[$i]['price']) }}</span>
                                        </div>
                                        <a class="uc-link fs-7 fw-bold d-inline-flex items-center gap-narrow border-bottom pb-narrow" href="javascript:void(0)">
                                            <span onclick="addDomain('{{ $domain[$i]['domain'] }}','{{ $domain[$i]['price'] }}')">Pilih Domain</span>
                                            <i class="icon icon-narrow unicon-arrow-up-right fw-bold"></i>
                                        </a>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- END DOMAIN --}}

    {{-- TEMPLATE --}}

    <div class="career-openings section panel overflow-hidden bg-secondary dark:bg-gray-300 dark:bg-opacity-10 py-4 lg:py-6 xl:py-8 hide" id="template_id">
        <div class="container max-w-xl">
            <div class="panel vstack gap-4 lg:gap-6 xl:gap-8">
                {{-- <header class="shop-header panel vstack justify-center gap-2 lg:gap-4 text-center">
                    <div class="panel">
                        <h1 class="h3 lg:h1 m-0">Shop listing</h1>
                    </div>
                </header> --}}
                <div class="shop-lisiting row child-cols-6 lg:child-cols-3 col-match gy-4 lg:gy-8 gx-2 lg:gx-4">
                    @foreach ($template as $item)
                        <div>
                            <article class="product type-product panel ">
                                <div class="vstack gap-2">
                                    <div class="panel">
                                        <figure class="featured-image m-0 rounded ratio ratio-3x4 overflow-hidden uc-transition-toggle overflow-hidden">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('') }}file/{{ $item->thumbnail }}" alt="Elegant Watch">
                                            <a class="position-cover" data-caption="Elegant Watch" href="#"></a>
                                        </figure>
                                        <a href="#add_to_favorite" class="btn btn-md btn-alt-gray-200 hover:bg-primary w-32px h-32px p-0 rounded-circle shadow-xs position-absolute top-0 end-0 m-1 md:m-2">
                                            <i class="icon icon-narrow unicon-favorite-filled"></i>
                                        </a>
                                        <span class="position-absolute top-0 start-0 m-1 md:m-2 ft-tertiary h-24px px-1 bg-yellow-400 text-dark">51%</span>
                                    </div>
                                    <div class="content vstack items-center gap-1 fs-6 text-center xl:mt-1">
                                        <h5 class="h6 md:h5 m-0"><a class="text-none" href="/html/lexend/main/shop-product-detail">E{{ $item->nama_template }}</a></h5>
                                        <ul class="nav-x gap-0 text-gray-100 dark:text-gray-700" title="Average 5 out of 5">
                                            <li><i class="icon fs-6 unicon-star-filled text-yellow"></i></li>
                                            <li><i class="icon fs-6 unicon-star-filled text-yellow"></i></li>
                                            <li><i class="icon fs-6 unicon-star-filled text-yellow"></i></li>
                                            <li><i class="icon fs-6 unicon-star-filled text-yellow"></i></li>
                                            <li><i class="icon fs-6 unicon-star-filled text-yellow"></i></li>
                                        </ul>
                                        <div class="hstack justify-center gap-narrow fs-7">@if ($item->diskon != 0)
                                            <span class="price-old text-line-through opacity-40"> {{ number_format($item->harga) }} </span>
                                        @endif <span class="price">Rp. {{ number_format($item->harga-(($item->harga/100)*$item->diskon)) }}</span></div>
                                        <div class="flex flex-evenly">
                                            <a class="btn btn-text text-none text-danger border-bottom fs-7 lg:fs-6 mt-1 pb-narrow" href="javascript:void(0)" target="_blank" role="button">Preview</a>
                                            <a class="btn btn-text text-none text-primary border-bottom fs-7 lg:fs-6 mt-1 pb-narrow" href="javascript:void(0)" onclick="addtemplate('{{ $item->id }}','{{ $item->nama_template }}', '{{ $item->harga-(($item->harga/100)*$item->diskon) }}')" role="button">Pilih</a>

                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>

    {{-- END TEMPLATE --}}


    {{-- CHECKOUT --}}

    <div class="section py-4 lg:py-6 xl:py-8 hide" id="template_payment">
        <div class="container max-w-xl">
            <div class="panel vstack gap-4 lg:gap-6 xl:gap-8">
                {{-- <header class="shop-header panel vstack justify-center gap-2 lg:gap-4 text-center">
                    <div class="panel">
                        <h1 class="h3 lg:h1 m-0">Checkout — v2</h1>
                    </div>
                </header> --}}
                <div>
                    <div class="row gy-4 gx-4 xl:gx-8">
                        <div class="col">
                            <div class="uc-sticky-placeholder" style="height: 0px; width: 0px; margin: 0px;" hidden=""></div><div class="panel vstack gap-4 uc-sticky" data-uc-sticky="bottom: true; offset: 32;" style="position: sticky; top: 32px;">
                                <h3 class="h5 lg:h4 m-0">Billing details:</h3>
                                <form class="panel vstack gap-2 lg:gap-3" action="{{ url('checkout') }}" method="POST" id="myform">
                                    @csrf

                                    <span id="input_form">

                                    </span>
                                    <div class="form-group">
                                        <label class="form-label ft-tertiary" for="checkout_email">Nama Lengkap <sup class="text-danger">*</sup></label>
                                        <input type="text" name="nama_lengkap" id="checkout_firstname" class="form-control dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-800" placeholder="Pratama Pertama" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label ft-tertiary" for="checkout_email">Email <sup class="text-danger">*</sup></label>
                                        <input type="email" name="email" id="checkout_email" class="form-control dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-800" placeholder="contact@johndeo.co" required="">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label ft-tertiary" for="checkout_street_address">Alamat <sup class="text-danger">*</sup></label>
                                        <input type="text" name="alamat" id="checkout_street_address" class="form-control dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-800" placeholder="Alamat Lengkap Anda" required="">
                                        {{-- <input type="text" id="checkout_street_address_2" class="form-control mt-1 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-800" placeholder="Apartment, suite, unit, etc."> --}}
                                    </div>
                                    <div class="row g-2 child-cols-12 lg:child-cols-4">
                                        <div class="form-group">
                                            <label class="form-label ft-tertiary" for="checkout_town_city">Kota <sup class="text-danger">*</sup></label>
                                            <input type="text" name="kota" id="checkout_town_city" class="form-control dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-800" placeholder="Jakarta Timur" required="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label ft-tertiary" for="checkout_state_county">Provinsi <sup class="text-danger">*</sup></label>
                                            <input type="text" name="provinsi" id="checkout_state_county" class="form-control dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-800" placeholder="DKI JAKARTA" required="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label ft-tertiary" for="checkout_postcode_zip">Nomor Telpon <sup class="text-danger">*</sup></label>
                                            <input type="text" name="telpon" id="checkout_postcode_zip" class="form-control dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-800" placeholder="984156463" required="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 lg:col-5">
                            <div class="uc-sticky-placeholder" style="height: 0px; width: 0px; margin: 0px;" hidden=""></div><div class="panel vstack gap-4 uc-sticky" data-uc-sticky="bottom: true; offset: 32;" style="position: sticky; top: 32px;">
                                <div class="panel vstack gap-4">
                                    <h3 class="h5 lg:h4 m-0">Your order:</h3>
                                    <form class="panel max-h-sm overflow-auto border border-gray-50 dark:text-white dark:border-gray-700" action="?">
                                        <table class="table align-middle overflow-auto m-0 fs-6 dark:text-white dark:border-gray-700">
                                            <thead class="sticky-top ft-tertiary bg-gray-800 text-white z-1">
                                                <tr>
                                                    <th class="lg:w-1/2">Product</th>
                                                    <th class="lg:w-1/2">Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody id="product_list">
                                                <tr>
                                                    <td>
                                                        <h5 class="title h6 m-0"><a class="text-none" href="/html/lexend/main/shop-product-detail">Layanan</a> x 1</h5>
                                                    </td>
                                                    <td>
                                                        <span class="subtotal">Rp. 500.000,00</span>
                                                    </td>
                                                </tr>
                                                
                                                
                                            </tbody>
                                            {{-- <tfoot>
                                                <tr class="bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5">
                                                    <td><span class="fw-bold">Subtotal</span></td>
                                                    <td>
                                                        <span class="checkout-subtotal">$97.00</span>
                                                    </td>
                                                </tr>
                                                <tr class="bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5">
                                                    <td><span class="fw-bold">Shipping</span></td>
                                                    <td>
                                                        <span class="checkout-shipping">Flat rate: $23.00</span>
                                                    </td>
                                                </tr>
                                                <tr class="bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5">
                                                    <td><span class="fw-bold">Total</span></td>
                                                    <td>
                                                        <span class="checkout-total fw-bold">$120.00</span>
                                                    </td>
                                                </tr>
                                            </tfoot> --}}
                                        </table>
                                    </form>
                                </div>
                                <div class="panel vstack gap-4">
                                    <h3 class="h5 lg:h4 m-0">Select payment method:</h3>
                                    <div class="panel vstack gap-2 lg:gap-4 p-2 lg:p-4 bg-gray-50 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-800 rounded">
                                        <div class="vstack gap-1 lg:gap-2 fs-6">
                                            {{-- {{ dd($payment) }} --}}
                                            {{-- @foreach ($payment as $key) --}}
                                            {{-- {{ dd($key['code']) }} --}}
                                            <div class="w-100">
                                                <div class="panel p-2 bg-white border-gray-100 w-100 rounded dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-800">
                                                    <div class="form-check">
                                                        <input class="form-check-input dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-600" form="myform" type="radio" name="payment_method" value="BRI" id="BANK BRI - 039301001433302" checked="">
                                                        <label class="form-check-label fw-bold" for="BANK BRI - 039301001433302">BANK BRI - 039301001433302</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="panel p-2 bg-white border-gray-100 w-100 rounded dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-800">
                                                    <div class="form-check">
                                                        <input class="form-check-input dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-600" form="myform" type="radio" name="payment_method" value="MANDIRI" id="BANK MANDIRI - 1640015155155" checked="">
                                                        <label class="form-check-label fw-bold" for="BANK MANDIRI - 1640015155155">BANK MANDIRI - 1640015155155</label>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="w-100">
                                                <div class="panel p-2 bg-white border-gray-100 w-100 rounded dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-800">
                                                    <div class="form-check">
                                                        <input class="form-check-input dark:bg-gray-100 dark:bg-opacity-5 dark:text-white dark:border-gray-600" form="myform" type="radio" name="payment_method" value="{{ $key['code'] }}" id="BANK BRI - 039301001433302" checked="">
                                                        <label class="form-check-label fw-bold" for="BANK BRI - 039301001433302">BANK BRI - 039301001433302</label>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            {{-- @endforeach --}}
                                        </div>
                                        <p class="text-dark dark:text-white text-opacity-60">Data Pribadi Yang Disimpan akan kami gunakan untuk melakukan improvement dimasa yang akan datang</p>
                                        <button class="btn btn-md xl:btn-lg btn-primary text-white" type="submit" form="myform"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- END CHECKOUT --}}

</div>
@endsection

@section('script')
<script>
    let domain = ''

    function addDomain(domain, price){
        domain = domain
        price = parseInt(price)
        numprice = price.toLocaleString('id', {minimumFractionDigits: 2, maximumFractionDigits: 2})

        console.log(numprice)

        $('#career_openings').addClass('hide')
        $('#template_id').removeClass('hide')

        $('#textvalue').html('List Template')
        $('#descvalue').html('Berikut ini merupakan List Template yang dapat anda gunakan pada website perusahaan anda')


        $('#input_form').append(`
            <input type="hidden" id="domain" name="domain" value="`+domain+`">
        `)
        $('#product_list').append(`
            <tr>
                <td>
                    <h5 class="title h6 m-0"><a class="text-none" href="#">`+domain+`</a> x 1</h5>
                </td>
                <td>
                    <span class="subtotal">Rp. `+numprice+`</span>
                </td>
            </tr>
        `)
    }

    function addtemplate(template_id, template_name , price){
        template_id = template_id
        nama_template = template_name
        price = parseInt(price)
        numprice = price.toLocaleString('id', {minimumFractionDigits: 2, maximumFractionDigits: 2})

        // console.log(template_id, nama_template, price)


        $('#template_id').addClass('hide')
        $('#template_payment').removeClass('hide')

        $('#textvalue').html('Checkout')
        $('#descvalue').html('Silahkan isi form dibawah ini untuk melanjutkan pembayaran')

        $('#input_form').append(`
            <input type="hidden" id="template_id" name="template_id" value="`+template_id+`">
        `)

        $('#product_list').append(`
            <tr>
                <td>
                    <h5 class="title h6 m-0"><a class="text-none" href="/html/lexend/main/shop-product-detail">`+nama_template+`</a> x 1</h5>
                </td>
                <td>
                    <span class="subtotal">Rp. `+numprice+`</span>
                </td>
            </tr>
        `)
    }

</script>
@endsection
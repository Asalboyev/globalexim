@extends('layouts.web')

@section('links')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <style>
        .swiper-container {
            width: 100%;
            height: 150px;
            /* Adjust height as needed */
            margin-top: 20px;
            /* Space above the slider */
            overflow: hidden;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .swiper-slide img {
            max-height: 100px;
            /* Adjust max height as needed */
            max-width: 100%;
            /* Adjust max width as needed */
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/import.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inner_description.css') }}">
    <link rel="stylesheet" href="{{ asset('css/export_tabs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/export_products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer_form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/import_partnerss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about_form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main_news.css') }}">
@endsection

@section('content')
    <div class="container nav">
        <a href="/en">
            {!! translation('about.home') !!}
        </a>
        <svg class="arrow" width="9" height="15" viewBox="0 0 9 15" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M8.4098 6.96462L1.66437 0.221428C1.36838 -0.0738094 0.888838
                    -0.0738094 0.592106 0.221428C0.296121 0.516666
                    0.296121 0.996209 0.592106 1.29145L6.8025 7.49959L0.592853
                    13.7077C0.296868 14.003 0.296868
                    14.4825 0.592853 14.7785C0.888838 15.0737 1.36913 15.0737 1.66511
                    14.7785L8.41055
                    8.03532C8.70205 7.74313 8.70205 7.25605 8.4098 6.96462Z" fill="#454544">
            </path>
        </svg>
        <a href="/en/about">
            {!! translation('main.import.title') !!}
        </a>
    </div>
    <div class="inner-description">
        <div class="bg-text">
            <p class="bg-text-inner" style="top: 575px;">
                Globalexim
            </p>
            <div class="container">
                <div class="inner-description-title">
                    <h3 class="gy-semibold section__title">
                        {!! translation('main.import.title') !!}

                    </h3>
                </div>
                <div>
                    <p class="inner-description-paragraph">
                        {!! translation('import.text1') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('import.text2') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('import.text3') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('import.text4') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('import.text5') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('import.text6') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('import.text7') !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div>
        @foreach ($import_catalogs as $catalog)
            <div class="import-products">
                <span id="{{ $catalog->id }}">
                </span>
                <div>
                    <div class="container">
                        <h5 class="gy-semibold product__cards-title">
                            {{ $catalog->title[$lang] ? $catalog->title[$lang] : $catalog->title['ru'] }}
                        </h5>
                        <div class="main__news-cards">
                            @foreach ($catalog->products as $product)
                                <a class="main__news-card" href="{{ route('product', ['id' => $product->id]) }}">
                                    <div class="news__card">
                                        <img src="{{ asset($product->main_img) }}"
                                            alt="{{ $product->title[$lang] ? $product->title[$lang] : $product->title['ru'] }}">
                                        <h6 class="sfp-semibold">
                                            {{ $product->title[$lang] ? $product->title[$lang] : $product->title['ru'] }}
                                        </h6>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <section class="import__partners">
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($partners as $partner)
                        <a href="{{ $partner->link }}" target="_blank" class="swiper-slide">
                            <img src="{{ asset($partner->img) }}" alt="">
                        </a>
                    @endforeach
                </div>
                <!-- Add Pagination -->

            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection

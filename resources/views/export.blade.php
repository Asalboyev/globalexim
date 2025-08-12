@extends('layouts.web')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/import.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inner_description.css') }}">
    <link rel="stylesheet" href="{{ asset('css/export_tabs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/export_products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer_form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main_news.css') }}">
@endsection

@section('content')
    <div class="container nav">
        <a href="{{ route('index') }}">
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
        <a>
            {!! translation('header.export') !!}
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
                        {!! translation('header.export') !!}

                    </h3>
                </div>
                <div>
                    <p class="inner-description-paragraph">
                        {!! translation('export.text1') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('export.text2') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('export.text3') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('export.text4') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('export.text5') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('export.text6') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('export.text7') !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div>
        {{-- <div class="container">
            <ul class="base__tabs-list">
                @foreach ($export_catalogs as $catalog)
                    <li>
                        <a class="gy-medium base__tabs-link" href="#{{ $catalog->id }}">
                            {{ $catalog->title[$lang] ? $catalog->title[$lang] : $catalog->title['ru'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div> --}}
    </div>
    <div>
        @foreach ($export_catalogs as $catalog)
            <div class="export-products">
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
@endsection

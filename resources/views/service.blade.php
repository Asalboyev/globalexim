@extends('layouts.web')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/import.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inner_description.css') }}">
    <link rel="stylesheet" href="{{ asset('css/import_gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer_form.css') }}">
    <style>
        .desc-inner {
            font-size: 22px;
            line-height: 208.8%;
            letter-spacing: 0.03em;
        }
    </style>
@endsection

@section('content')

    <div class="container nav">
        <a href="{{ route('index') }}">
            Главная
        </a>
        <svg class="arrow" width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.4098 6.96462L1.66437 0.221428C1.36838 -0.0738094 0.888838 -0.0738094 0.592106
           0.221428C0.296121 0.516666 0.296121 0.996209 0.592106
           1.29145L6.8025 7.49959L0.592853 13.7077C0.296868 14.003
           0.296868 14.4825 0.592853 14.7785C0.888838 15.0737 1.36913 15.0737 1.66511
           14.7785L8.41055 8.03532C8.70205 7.74313 8.70205 7.25605 8.4098 6.96462Z" fill="#454544">
            </path>
        </svg><a href="{{ route('services') }}">
            Услуги
        </a>
        <svg class="arrow" width="9" height="15" viewBox="0 0 9 15"
             fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.4098 6.96462L1.66437 0.221428C1.36838 -0.0738094 0.888838
         -0.0738094 0.592106 0.221428C0.296121 0.516666 0.296121 0.996209 0.592106
         1.29145L6.8025 7.49959L0.592853 13.7077C0.296868 14.003 0.296868 14.4825
         0.592853 14.7785C0.888838 15.0737 1.36913 15.0737 1.66511 14.7785L8.41055
         8.03532C8.70205 7.74313 8.70205 7.25605 8.4098 6.96462Z" fill="#454544">
            </path>
        </svg>
        <a>
            {{ isset($service->title[$lang]) ? $service->title[$lang] : $service->title['ru'] }}
        </a>
    </div>
    <div class="inner-description">
        <div class="bg-text">
            <p style="top:575px" class="bg-text-inner">
                Globalexim
            </p>
            <div class="container">
                <div class="inner-description-title">
                    <h3 class="gy-semibold section__title">
                        {{ isset($service->title[$lang]) ? $service->title[$lang] : $service->title['ru'] }}
                        <div>
                  <span style="margin-left:0px">
                  </span>
                            <span style="margin-left:4px">
                  </span>
                        </div>
                    </h3>
                </div>
                <div class="inner-description-img">
                    <img src="{{ asset($service->img) }}" alt="">
                </div>
                <div class="desc-inner">
                    {!! isset($service->desc[$lang]) ? $service->desc[$lang] : $service->desc['ru'] !!}
                </div>
            </div>
        </div>
    </div>
{{--    <div class="services-gallery">--}}
{{--        <div>--}}
{{--            <div class="container">--}}
{{--                <div class="gallery-inner">--}}
{{--                    <div class="gallery-left">--}}
{{--                        <img src="./public/images/services-product-gallery-1.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="gallery-right">--}}
{{--                        <div>--}}
{{--                            <img src="./public/images/services-product-gallery-2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <img src="./public/images/services-product-gallery-3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection

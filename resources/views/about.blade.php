@extends('layouts.web')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/import.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inner_description.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about_gallere.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about_form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer_form.css') }}">
@endsection

@section('content')
    <div class="container nav">
        <a href="/en">
            {!! translation('about.home') !!}
        </a>
        <svg class="arrow" width="9" height="15" viewBox="0 0 9 15" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M8.4098 6.96462L1.66437 0.221428C1.36838 -0.0738094 0.888838 -0.0738094 0.592106 0.221428C0.296121 0.516666
                0.296121 0.996209 0.592106 1.29145L6.8025 7.49959L0.592853 13.7077C0.296868 14.003 0.296868
                14.4825 0.592853 14.7785C0.888838 15.0737 1.36913 15.0737 1.66511 14.7785L8.41055
                8.03532C8.70205 7.74313 8.70205 7.25605 8.4098 6.96462Z" fill="#454544">
            </path>
        </svg>
        <a href="/en/about">
            {!! translation('about.title') !!}
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
                        {!! translation('about.title') !!}

                    </h3>
                </div>
                <div class="inner-description-img">
                    <img src="{{ asset('images/about-main.jpg') }}" alt="">
                </div>
                <div class="scroll">
                    <p class="inner-description-paragraph">
                        <span class="gy-semibold">
                            Global Exim Trade
                        </span>
                        {!! translation('main.About.text') !!}
                                        </p>
                    {{-- <p class="inner-description-paragraph">
                        {!! translation('about.text2') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('about.text3') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('about.text4') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('about.text5') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('about.text6') !!}
                    </p>
                    <p class="inner-description-paragraph">
                        {!! translation('about.text7') !!}
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="about-gallery">
        <div>
            <div class="container">
                <div class="gallery-inner">
                    <div class="gallery-left">
                        <img src="{{ asset('images/about-gallery-1.jpg') }}" alt="">
                    </div>
                    <div class="gallery-right">
                        <div>
                            <img src="{{ asset('images/about-gallery-2.jpg') }}" alt="" style="    padding-top: 86px;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-form">
        <div class="form">
            <div class="form__img">
                <img src="{{ asset('public/images/form.png') }}" alt="">
            </div>
            <div class="container">
                <form action="{{ route('application') }}" method="post" class="form__inner">
                    @csrf
                    <div class="form__title">
                        <h3 class="gy-semibold section__title">
                            {!! translation('about.form.title') !!}

                        </h3>
                    </div>
                    <div class="input__line">

                        <input class="sfp-regular" placeholder=" {!! translation('input.pleceholder.name') !!}" value="{{ old('name') }}"
                            type="text" required name="name">
                        <input class="sfp-regular" placeholder=" {!! translation('input.pleceholder.gmail') !!}" value="{{ old('email') }}"
                            type="email" required name="email">
                    </div>
                    <div class="input__line">
                        <input class="sfp-regular" placeholder=" {!! translation('input.pleceholder.tema') !!}" value="{{ old('theme') }}"
                            type="text" name="theme">
                        <input class="sfp-regular" id="" value="{{ old('phone_number') }}"
                            placeholder=" {!! translation('input.pleceholder.phone') !!}" type="text" required name="phone_number">
                    </div>
                    <textarea class="sfp-regular" style="margin-bottom: 12px" placeholder=" {!! translation('input.pleceholder.message') !!}" name="message">{{ old('message') }}</textarea>
                    <div class="g-recaptcha" data-sitekey="6LdatyEiAAAAAL5asQ67FIGH4EUtiPn77-E_wX0T"></div>
                    <div class="form__btn" style="margin-top: 12px">
                        <button class="sfp-regular" type="submit">
                            {!! translation('about.form.title') !!}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

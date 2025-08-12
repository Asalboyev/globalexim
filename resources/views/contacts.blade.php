@extends('layouts.web')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/import.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacts_top.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacts_map.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer_form.css') }}">
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
            {!! translation('header.contact') !!}
        </a>
    </div>
    <div class="contacts-top">
        <div class="container">
            <div class="contacts__inner">
                <div class="contacts__left">
                    <div>
                        <div class="contacts__title">
                            <h3 class="gy-semibold section__title">
                                {!! translation('header.contact') !!}

                            </h3>
                        </div>
                        <ul class="contacts__list">
                            <li>
                                <img src="{{ asset('images/location.svg') }}" alt="">
                                <span class="sfp-regular">
                                    {!! translation('contact.addres') !!}
                                </span>
                            </li>
                            <li>
                                <img src="{{ asset('images/tel.svg') }}" alt="">
                                <span class="sfp-regular">
                                    Импорт: +998 97 4441425, <br> + 998 97 4434740
                                </span>
                            </li>
                            <li>
                                <img src="{{ asset('images/tel.svg') }}" alt="">
                                <span class="sfp-regular">
                                    Экспорт: +998 97 4441421
                                </span>
                            </li>
                            <li>
                                <img src="{{ asset('images/tel.svg') }}" alt="">
                                <span class="sfp-regular">
                                    Офис: +998 71 2320626, <br> +998 97 4008280
                                </span>
                            </li>
                            <li>
                                <img src="{{ asset('images/message.svg') }}" alt="">
                                <span class="sfp-regular">
                                    info@globalexim.uz
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="contacts__hours">
                        <div class="contacts__hours-title">
                            <h3 class="gy-semibold section__title">
                                {!! translation('contact.work.time') !!}

                            </h3>
                        </div>
                        <p>
                            {!! translation('contact.work.day') !!}
                        </p>
                    </div>
                </div>
                <div class="contacts__right">
                    <form action="{{ route('application') }}" class="contacts__form" method="post">
                        @csrf
                        <div class="form__title">
                            <h3 class="gy-semibold section__title">
                                {!! translation('about.form.title') !!}

                            </h3>
                        </div>
                        <div class="input__line">
                            <input class="sfp-regular" name="name" placeholder="{!! translation('input.pleceholder.name') !!}" type="text"
                                required>
                            <input class="sfp-regular" name="email" placeholder="{!! translation('input.pleceholder.gmail') !!}" type="email"
                                required>
                        </div>
                        <div class="input__line">
                            <input class="sfp-regular" name="theme" placeholder="{!! translation('input.pleceholder.tema') !!}" type="text">
                            <input class="sfp-regular" name="phone_number" placeholder="{!! translation('input.pleceholder.phone') !!}"
                                type="tel">
                        </div>
                        <textarea class="sfp-regular" name="message" style="margin-bottom: 12px" placeholder="{!! translation('input.pleceholder.message') !!}"></textarea>
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
    </div>
    <div class="contacts-map">
        <div class="container">
            <div class="contacts-map__inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1498.6444113074347!2d69.23322335712247!3d41.302580044466346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b9301128a05%3A0xd77dd38868214c86!2sREHAU%20SHOUROOM!5e0!3m2!1sru!2s!4v1664801560163!5m2!1sru!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>
@endsection

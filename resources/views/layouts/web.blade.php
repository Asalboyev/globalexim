<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('app/notyf.min.css') }}" rel="stylesheet">
    @yield('links')
    <title>Global Exim</title>
    <link rel="icon" type="image/x-icon" href="/images/logo-fav.png">
    <style>
        li {
            list-style: none;

        }

        .layout {
            position: fixed;
            background: #3c3b3bc9;
            padding: 7px;
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            top: 40%;
            right: 10px;
            z-index: 100;
            color: #fff;



        }

        .d-none {
            display: none;
            opacity: 0;
            position: absolute;
            background: red;
            transition: .2s;
            padding: 20px;
            color: #fff;
            border-radius: 20px;

        }

        .hover_able1 {
            left: -177px;
            bottom: 150px;
        }

        .hover_able2 {

            left: -177px;
            bottom: 100px;

        }

        .hover_able3 {

            left: -177px;
            bottom: 50px;


        }

        .hover_able4 {

            left: -177px;
            bottom: 0px;
        }

        .hover_able5 {

            left: -177px;
            bottom: 0px;
        }

        /* bu xatto   yul  likin   man  ham shoshepman oishim kup */
        .ico_f:hover .hover_able1 {
            display: block !important;
            opacity: 1;
        }

        .ico_f:hover .hover_able2 {
            display: block !important;
            opacity: 1;
        }

        .ico_f:hover .hover_able3 {
            display: block !important;
            opacity: 1;
        }

        .ico_f:hover .hover_able4 {
            display: block !important;
            opacity: 1;
        }

        .ico_f:hover .hover_able5 {
            display: block !important;
            opacity: 1;
        }

        .sidebar-links {
            position: fixed;
            right: 10px;
            bottom: 30%;
            z-index: 20;
        }

        .sidebar-links ul {
            border-radius: 400px;
            background: rgba(0, 0, 0, 0.4);
        }

        .sidebar-links li {
            border-radius: 100%;
            height: 50px;
            width: 50px;
        }

        .sidebar-links li a {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 5;
            color: white;
            width: 100%;
            height: 100%;
            border-radius: 100%;
        }

        .sidebar-links li a div {
            position: absolute;
            overflow: hidden;
            z-index: -10;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            background-color: #407ff0;
            height: 100%;
            width: 0;
            right: 0;
            top: 0;
            border-radius: 400px;
        }

        .sidebar-links li a div span {
            margin-left: 20px;
        }

        .sidebar-links li a:hover div {
            width: 200px;
        }

        .sidebar-links li a:hover {
            /* overflow: visible; */
        }
    </style>
</head>

<body>
    <div class="sidebar-links">
        <ul>
            <li>
                <!-- WhatsApp Link -->
                <a href="https://wa.me/+998974008280" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" x="0px" y="0px" width="30px" height="30px"
                        viewBox="0 0 50 50">
                        <path
                            d="M25,2C12.318,2,2,12.318,2,25c0,3.96,1.023,7.854,2.963,11.29L2.037,46.73c-0.096,0.343-0.003,0.711,0.245,0.966 C2.473,47.893,2.733,48,3,48c0.08,0,0.161-0.01,0.24-0.029l10.896-2.699C17.463,47.058,21.21,48,25,48c12.682,0,23-10.318,23-23 S37.682,2,25,2z M36.57,33.116c-0.492,1.362-2.852,2.605-3.986,2.772c-1.018,0.149-2.306,0.213-3.72-0.231 c-0.857-0.27-1.957-0.628-3.366-1.229c-5.923-2.526-9.791-8.415-10.087-8.804C15.116,25.235,13,22.463,13,19.594 s1.525-4.28,2.067-4.864c0.542-0.584,1.181-0.73,1.575-0.73s0.787,0.005,1.132,0.021c0.363,0.018,0.85-0.137,1.329,1.001 c0.492,1.168,1.673,4.037,1.819,4.33c0.148,0.292,0.246,0.633,0.05,1.022c-0.196,0.389-0.294,0.632-0.59,0.973 s-0.62,0.76-0.886,1.022c-0.296,0.291-0.603,0.606-0.259,1.19c0.344,0.584,1.529,2.493,3.285,4.039 c2.255,1.986,4.158,2.602,4.748,2.894c0.59,0.292,0.935,0.243,1.279-0.146c0.344-0.39,1.476-1.703,1.869-2.286 s0.787-0.487,1.329-0.292c0.542,0.194,3.445,1.604,4.035,1.896c0.59,0.292,0.984,0.438,1.132,0.681 C37.062,30.587,37.062,31.755,36.57,33.116z">
                        </path>
                    </svg>
                    <div><span>+998974008280</span></div>
                </a>
            </li>
            <li>
                <!-- Telegram Link -->
                <a href="https://t.me/+998974008280" target="_blank">
                    <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.47542 11.8632L8.11812 16.8888C8.62932 16.8888 8.85071 16.6692 9.11621 16.4055L11.5129 14.115L16.4791 17.7519C17.3899 18.2595 18.0316 17.9922 18.2773 16.914L21.537 1.63926L21.5379 1.63836C21.8268 0.291963 21.051 -0.234534 20.1637 0.0957645L1.00275 7.43163C-0.304938 7.93922 -0.285138 8.66822 0.780456 8.99852L5.67913 10.5222L17.0578 3.40235C17.5933 3.04775 18.0802 3.24395 17.6797 3.59855L8.47542 11.8632Z" fill="#fff"/>
                    </svg>
                    <div><span>+998974008280</span></div>
                </a>
            </li>

            <li>
                <a href="tel:+998994488280">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff" width="25px">
                        <path fill-rule="evenodd"
                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                            clip-rule="evenodd" />
                    </svg>
                    <div><span>+998994488280</span></div>
                </a>
            </li>
            <li>
                <a href="mailto:info@globalexim.uz">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff" width="30px">
                        <path
                            d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                        <path
                            d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                    </svg>
                    <div><span>info@globalexim.uz</span></div>
                </a>
            </li>
            <li id="scroll-top" style="cursor: pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#0196d9" class="size-6">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm.53 5.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.72-1.72v5.69a.75.75 0 0 0 1.5 0v-5.69l1.72 1.72a.75.75 0 1 0 1.06-1.06l-3-3Z"
                        clip-rule="evenodd" />
                </svg>
            </li>
        </ul>
    </div>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__container">
                    <div class="header__top-left">
                        <a class="header__top-left-link" href="mailto:info@globalexim.uz">
                            <img src="{{ asset('public/images/email.svg') }}" alt="">info@globalexim.uz</a>
                            <a class="header__top-left-link" href="https://t.me/globalexim_uz">
                                <img src="{{ asset('public/images/phone.svg') }}" alt="">+998 97 400 82 80</a>
                                <a class="header__top-left-link" href="https://t.me/g974441426">
                                    <img src="{{ asset('public/images/phone.svg') }}" alt="">+998 97 444 14 26 </a>
                                </div>
                    <div class="header__top-right">
                        <div class="header__top-lang">
                            <div class="header__top-lang-inner">
                                <?php is_null(\App\Http\Middleware\LocaleMiddleware::getLocale()) ? ($current_lang = 'ru') : ($current_lang = \App\Http\Middleware\LocaleMiddleware::getLocale()); ?>
                                @foreach ($langs as $language)
                                    @if ($language->small == $current_lang)
                                        <div class="header__top-lang-item-main">
                                            <div class="lang__img">
                                                @if ($current_lang == 'ru')
                                                    <img src="{{ asset('public/images/flag-ru.svg') }}" alt="">
                                                @else
                                                    <img src="{{ asset('public/images/flag-en.svg') }}" alt="">
                                                @endif
                                            </div>
                                            @if ($current_lang == 'ru')
                                                <span class="gy-medium">Русский</span>
                                            @else
                                                <span class="gy-medium">English</span>
                                            @endif
                                        </div>
                                    @endif
                                @endforeach
                                @foreach ($langs as $language)
                                    @if ($language->small != $current_lang)
                                        <a class="header__top-lang-item"
                                            href="{{ route('setlocale', ['lang' => $language->small]) }}">
                                            <div class="lang__img">
                                                @if ($language->small == 'ru')
                                                    <img src="{{ asset('public/images/flag-ru.svg') }}" alt="">
                                                @else
                                                    <img src="{{ asset('public/images/flag-en.svg') }}" alt="">
                                                @endif
                                            </div>
                                            @if ($language->small == 'ru')
                                                <span class="gy-medium">Русский</span>
                                            @else
                                                <span class="gy-medium">English</span>
                                            @endif
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="header__top-social">
                            <a href="https://www.facebook.com/profile.php?id=61556287186615" class="header__top-social-item">
                                <img src="{{ asset('public/images/facebook.svg') }}" alt="">
                            </a>
                            <a  target="_blank" href="https://t.me/globalexim" class="header__top-social-item">
                                <img src="{{ asset('public/images/telegram.svg') }}" alt="">
                            </a>
                            <a href="https://www.instagram.com/globaleximtrade_/" class="header__top-social-item">
                                <img src="{{ asset('public/images/instagram.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="header__bottom-inner"><a class="header__logo" href="/"><img
                            src="{{ asset('public/images/logo.png') }}" alt=""></a>
                    <div class="header__phone"><a class="gy-medium" href="tel:+998712320626">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5317 12.4724C15.5208 16.4604 16.4258 11.8467 18.9656
                    14.3848C21.4143 16.8328 22.8216 17.3232 19.7192
                    20.4247C19.3306 20.737 16.8616 24.4943 8.1846
                    15.8197C-0.493478 7.144 3.26158 4.67244 3.57397
                    4.28395C6.68387 1.17385 7.16586 2.58938 9.61449
                    5.03733C12.1544 7.5765 7.54266 8.48441 11.5317 12.4724Z" fill="var(--blue-darker)"></path>
                            </svg>
                            +99871 232 06 26</a></div>
                    <div class="header__burger">
                        <span>
                        </span>
                    </div>
                    <nav class="header__menu">
                        <ul class="header__menu-list">
                            <li><a class="header__menu-link {{ request()->routeIs('index') ? 'active' : '' }}"
                                    href="{{ route('index') }}">{!! translation('header.main') !!}</a></li>
                            <li><a class="header__menu-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                    href="{{ route('about') }}">{!! translation('header.about') !!}</a></li>
                            <li><a class="header__menu-link {{ request()->is('export') || request()->is('export/*') || request()->is('*/export') ? 'active' : '' }}"
                                    href="{{ route('export') }}">{!! translation('header.export') !!}</a>
                                <div class="header__selectBox">
                                    <ul class="header__selectMenu">
                                        @foreach ($export_catalogs as $catalog)
                                            <li class="option">
                                                <a
                                                    href="{{ route('export') }}#{{ $catalog->id }}">{{ isset($catalog->title[$lang]) ? $catalog->title[$lang] : $catalog->title['ru'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li><a class="header__menu-link {{ request()->is('import') || request()->is('import/*') || request()->is('*/import') ? 'active' : '' }}"
                                    href="{{ route('import') }}">{!! translation('header.import') !!}</a>
                                <div class="header__selectBox">
                                    <ul class="header__selectMenu">
                                        @foreach ($import_catalogs as $catalog)
                                            <li class="option"><a
                                                    href="{{ route('import') }}#{{ $catalog->id }}">{{ isset($catalog->title[$lang]) ? $catalog->title[$lang] : $catalog->title['ru'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>

                            <li><a class="header__menu-link {{ request()->is('services') || request()->is('services/*') || request()->is('*/services') || request()->is('*/service/*') || request()->is('service/*') ? 'active' : '' }}"
                                    href="{{ route('services') }}">{!! translation('header.services') !!}</a></li>
                            <li><a class="header__menu-link {{ request()->is('*/news') || request()->is('news/*') || request()->is('news') || request()->is('post/*') || request()->is('*/post/*') ? 'active' : '' }}"
                                    href="{{ route('news') }}">{!! translation('header.news') !!}</a></li>
                            <li><a class="header__menu-link {{ request()->routeIs('contacts') ? 'active' : '' }}"
                                    href="{{ route('contacts') }}">{!! translation('header.contact') !!}</a></li>
                            <li>
                                <a href="#partners" class="header__menu-link">
                                    Партнеры
                                </a>
                            </li>

                        </ul>
                        <a class="header__top-lang-item header__top-lang-item active" href="/">
                            <div class="lang__img">
                                <img src="{{ asset('public/images/flag-ru.svg') }}" alt="">
                            </div>
                            <span class="gy-medium">
                                Русский
                            </span>
                        </a>
                        <a class="header__top-lang-item " href="/en">
                            <div class="lang__img">
                                <img src="{{ asset('public/images/flag-en.svg') }}" alt="">
                            </div>
                            <span class="gy-medium">
                                English
                            </span>
                        </a>
                        <a class="gy-medium header__top-left-link" href="mailto:info@globalexim.uz">
                            <img src="{{ asset('public/images/email.svg') }}" alt="">
                            info@globalexim.uz
                        </a>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <main>
        @yield('content')
        {{-- <div class="layout">
            <li>
                <a rel="nofollow" href="https://api.whatsapp.com/send?phone=8615253276890" target="_blank"
                    style="direction: initial !important;">
                    <div class="ico_f ico_all " style="direction: initial !important;"><img
                            src="/upload/telefoon.png" alt="Telefon" width="45">
                        <div class="hover_able1 d-none">
                            <h1>+86 152 5327 6890</h1>
                        </div>
                    </div>
                </a>
                <a rel="nofollow" href="tel:+8615253276890" target="_blank" style="direction: initial !important;">
                    <div class="ico_f ico_all " style="direction: initial !important;"><img src="/upload/watsup.png"
                            alt="WhatsApp" width="45">
                        <div class="hover_able2 d-none">
                            <h1>+86 152 5327 6890</h1>
                        </div>
                    </div>
                </a>
                <a rel="nofollow" href="tel:+8653283130887" target="_blank" style="direction: initial !important;">
                    <div class="ico_f ico_all " style="direction: initial !important;"><img src="/upload/phone.png"
                            alt="Phone" width="45">
                        <div class="hover_able3 d-none">
                            <h1>+86 152 5327 6890</h1>
                        </div>
                    </div>
                </a>

                <a rel="nofollow" href="eiffel@qdhaijia.net" target="_blank" style="direction: initial !important;">
                    <div class="bgicon" style="direction: initial !important;">
                        <div class="ico_f ico_all " style="direction: initial !important;"><img
                                src="/upload/email.png" alt="Email" width="45">
                            <div class="hover_able4 d-none">
                                <h1>eiffel@qdhaijia.net</h1>
                            </div>
                        </div>
                </a>


            </li>


        </div> --}}
        <footer class="footer" style="padding-top:180px">
            <div class="container">
                @if (request()->routeIs('index'))
                    <form action="{{ route('application') }}" method="post" class="footer__form">
                        @csrf
                        <div class="footer__form-input">
                            <!-- // oldin id="phone" edi -->
                            <input required="required" placeholder="Номер Телефона" name="phone_number"
                                value="{{ old('phone_number') }}">
                        </div>
                        <div class="footer__form-input">
                            <input type="email" required="required" placeholder="Email" name="email"
                                value="{{ old('email') }}">
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdatyEiAAAAAL5asQ67FIGH4EUtiPn77-E_wX0T"></div>
                        <button class="gy-medium" type="submit">
                            {!! translation('footer.btn') !!}
                        </button>
                    </form>
                @else
                    <form action="{{ route('application') }}" method="post" class="footer__form">
                        @csrf
                        <p class="gy-semibold footer__form-info">
                            {!! translation('footer.form.text') !!}<span>{!! translation('footer.form.small') !!}</span>
                        </p>
                        <div class="footer__form-right">
                            <div class="footer__form-input" style="border-color: rgba(64, 127, 240, 0.2);">
                                <input placeholder="Email" type="email" name="email">
                                <button class="gy-medium" type="submit">
                                    {!! translation('footer.btn') !!}
                                </button>
                            </div>
                            <button class="gy-medium" type="submit">
                                Отправить
                            </button>
                        </div>
                    </form>
                @endif
                <div class="footer__info">
                    <div class="footer__info-social">
                        <h2 class="gy-bold">Global Exim</h2>
                        <p> {!! translation('footer.text') !!}</p>
                        <div class="footer__info-social-items">
                            <a href="https://www.facebook.com/profile.php?id=61556287186615" class="footer__info-social-item">
                                <img src="{{ asset('public/images/facebook.svg') }}" alt="">
                            </a>
                            <a href="https://t.me/globalexim" class="footer__info-social-item">
                                <img src="{{ asset('public/images/telegram.svg') }}" alt="">
                            </a>
                            <a href="https://www.instagram.com/globaleximtrade_/" class="footer__info-social-item">
                                <img src="{{ asset('public/images/instagram.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="footer__info-links">
                        <div class="footer__info-links-box">
                            <a class="gy-semibold footer__info-links-title" href="/export">
                                {!! translation('header.export') !!} </a>
                            <ul>
                                @foreach ($export_catalogs as $catalog)
                                    <li>
                                        <a href="{{ route('export') }}#{{ $catalog->id }}">
                                            {{ isset($catalog->title[$lang]) ? $catalog->title[$lang] : $catalog->title['ru'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="footer__info-links-box">
                            <a class="gy-semibold footer__info-links-title"
                                href="/import">{!! translation('header.import') !!}</a>
                            <ul>
                                @foreach ($import_catalogs as $catalog)
                                    <li>
                                        <a href="{{ route('import') }}#{{ $catalog->id }}">
                                            {{ isset($catalog->title[$lang]) ? $catalog->title[$lang] : $catalog->title['ru'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="footer__info-links-box">
                            <a class="gy-semibold footer__info-links-title" href="/services">
                                {!! translation('header.services') !!}
                            </a>
                            <ul>
                                @foreach ($all_services as $service)
                                    <li>
                                        <a href="{{ route('service', ['id' => $service->id]) }}">
                                            {{ isset($service->title[$lang]) ? $service->title[$lang] : $service->title['ru'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="footer__info-products">
                    <h3 class="gy-semibold">
                    {!! translation('main.product.title') !!}
                    </h3>
                    <div class="footer__info-products-inner">
                        @foreach ($export_products as $product)
                        <a class="footer__info-products-item" href="/export">
                            <img src="{{ asset($product->main_img) }}" alt="">
                        </a>
                        @endforeach
                    </div>
                </div> --}}
                </div>
                <div class="footer__bottom">
                    <p class="footer__rights">
                        © 2020-2021 Все права защишены
                    </p>
                    <p>
                        Сайт разработал: ItUnity
                    </p>
                </div>
            </div>
        </footer>
    </main>
</body>
<script src="{{ asset('js/header.js') }}"></script>
<script src="https://unpkg.com/imask"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="./js/main_carousel.js"></script>
<script src="{{ asset('js/index.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
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
            delay: 2500,
            disableOnInteraction: false,
        },
    });

    let scrollTop = document.querySelector('#scroll-top');

    window.addEventListener('scroll', () => {
        console.log('bla')
        if (window.scrollY > window.innerHeight) {
            scrollTop.style.display = 'flex';
        } else {
            scrollTop.style.display = 'none';
        }
    })
    scrollTop.addEventListener('click', () => {
        window.scrollTo(0, 0);
    })
</script>
<!-- Notyf -->
<script src="{{ asset('app/notyf.min.js') }}"></script>
<script type="text/javascript">
    @if (session('success') == false && session()->has('message'))
        const notyf = new Notyf({
            position: {
                x: 'right',
                y: 'top',
            },
            types: [{
                type: 'info',
                background: 'red',
                // icon: {
                //     className: 'fas fa-times',
                //     tagName: 'span',
                //     color: '#fff'
                // },
                dismissible: false
            }]
        });
        notyf.open({
            type: 'info',
            message: '{{ Session::get('message') }}'
        });
    @elseif (Session::has('message') && session('success') == true)
        const notyf = new Notyf({
            position: {
                x: 'right',
                y: 'top',
            },
            types: [{
                type: 'info',
                background: '#0948B3',
                // icon: {
                //     className: 'fas fa-times',
                //     tagName: 'span',
                //     color: '#fff'
                // },
                dismissible: false
            }]
        });
        notyf.open({
            type: 'info',
            message: '{{ Session::get('message') }}'
        });
    @endif
</script>
@yield('scripts')

</html>

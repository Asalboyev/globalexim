@extends('layouts.web')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/import.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base_card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/servis_description.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about_form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/servis_card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer_form.css') }}">
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
            {!! translation('main.services.title') !!}
        </a>
    </div>
    <div class="services-description">
        <div class="bg-text">
            <p class="bg-text-inner" style="top: 120px;">
                Globalexim
            </p>
            <div class="container">
                <div class="services-description__title">
                    <h3 class="gy-semibold section__title">
                        {!! translation('main.services.title') !!}

                    </h3>
                </div>
                <div class="services-description__first-paragraph">
                    <p>Экспорт текстильных изделий это одно из основных направлений
                        деятельности Компании.
                    </p>
                    <p>В течение последних лет ООО “Global Exim Trade” непосредственно
                        занимается продвижением
                        экспорта отечественных трикотажных и носочных производителей на
                        зарубежных рынках. Благодаря
                        наличию базы данных при непосредственном участии Компании были
                        заключены ряд выгодных
                        контрактов на поставку чулочно-носочной и трикотажной продукции
                        за рубеж.
                    </p>
                    <p>Мы не брокеры , не логисты и не транспортная компания. Мы - это
                        экспортное подразделение,
                        которое поможет решить вопросы организации экспорта текстильной
                        продукции из Узбекистана в
                        любую точку мира. Вопросы контроля качества, своевременность
                        отгрузки, консолидация грузов,
                        таможенное оформление, сертифицирование изделий, соответствие
                        технических параметров со
                        спецификацией контрактов и т.д. - это далеко не полный перечень
                        наших возможностей.
                        Штатные технологи контролируют весь процесс производства
                        законтрактованного товара от
                        закупа сырья до конечного продукта.
                    </p>
                </div>
                <div class="services-description__center">
                    <p>Вопросы контроля качества, своевременность отгрузки,
                        консолидация грузов,
                        таможенное оформление, сертифицирование изделий, соответствие
                        технических параметров
                        со спецификацией контрактов и т.д. - это далеко не полный
                        перечень наших возможностей.
                        Штатные технологи контролируют весь процесс производства
                        законтрактованного товара от
                        закупа сырья до конечного продукта.
                    </p>
                    <div class="services-description__center-image">
                        <img src="{{ asset('images/services-description.jpg') }}" alt="">
                    </div>
                </div>
                <div>
                    <p>Оценка стоимости услуг определяется по итогам обработки
                        детализированного запроса,
                        поступившего от заказчика, и в каждом отдельном случае является
                        строго индивидуальной.
                        Среди предлагаемой нами продукции – Hоски мужские любого цвета,
                        дизайна и размера. Соотношение
                        хлопка, п/э и эластна в изделии по заданию заказчика. Мы всегда
                        открыты для конструктивного
                        диалога и обсуждения любых предлагаемых вариантов
                        сотрудничества.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="services-cards">

        <div class="container">

            <div class="main__news-cards">
                @foreach ($services as $service)
                    <a class="main__news-card" href="{{ route('service', ['id' => $service->id]) }}">
                        <div class="news__card">
                            <img src="{{ asset($service->img) }}"
                                alt="{{ isset($service->title[$lang]) ? $service->title[$lang] : $service->title['ru'] }}">
                            <h6 class="sfp-semibold">
                                {{ isset($service->title[$lang]) ? $service->title[$lang] : $service->title['ru'] }}
                            </h6>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class = "about-form">
        <div class="form">
            <div class="form__img">
                <img src="{{ asset('images/form.png') }}" alt="">
            </div>
            <div class="container">
                <form class="form__inner" action="{{ route('application') }}" method="post">
                    @csrf
                    <div class="form__title">
                        <h3 class="gy-semibold section__title">
                            {!! translation('about.form.title') !!}

                        </h3>
                    </div>
                    <div class="input__line">
                        <input class="sfp-regular" name="name" value="{{ old('name') }}"
                            placeholder="{!! translation('input.pleceholder.name') !!}" type="text" required>
                        <input class="sfp-regular" name="email" value="{{ old('email') }}"
                            placeholder="{!! translation('input.pleceholder.gmail') !!}" type="email" required>
                    </div>
                    <div class="input__line">
                        <input class="sfp-regular" name="theme" value="{{ old('theme') }}"
                            placeholder="{!! translation('input.pleceholder.tema') !!}" type="text">
                        <input class="sfp-regular" name="phone_number" value="{{ old('phone_number') }}"
                            placeholder="{!! translation('input.pleceholder.phone') !!}" type="tel">
                    </div>
                    <textarea class="sfp-regular" style="margin-bottom: 12px" name="message" placeholder="{!! translation('input.pleceholder.message') !!}">{{ old('message') }}</textarea>
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

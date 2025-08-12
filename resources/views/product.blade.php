@extends('layouts.web')

@section('links')

    <link rel="stylesheet" href="{{ asset('css/import.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inner_description.css') }}">
    <link rel="stylesheet" href="{{ asset('css/export_small-description.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about_form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer_form.css') }}">
    <style>
        .desc-inner {
            font-size: 22px;
            line-height: 208.8%;
            letter-spacing: 0.03em;
        }
    </style>

<style>


.content {
    display: flex;
    justify-content: space-around;
    width: 40%;
    margin-inline: 5rem;
    margin: 0 auto;
}

.stat {
    text-align: center;
    margin: 20px;
}

.number {
    font-size: 4em;
    text-align: center;
    font-weight: 800;
    color: #407FF0;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.5s, transform 0.5s;
}

.label {
    font-size: 1.5em;
    color: #0a1a3a;
}

@media (max-width: 768px) {
    .content {
        flex-direction: column;
        align-items: center;
    }

    .stat {
        margin: 10px 0;
    }
}

</style>
@endsection

@section('content')
    <div class="container nav">
        <a href="{{ route('index') }}">
            Главная
        </a>
        <svg class="arrow" width="9" height="15" viewBox="0 0 9 15" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M8.4098 6.96462L1.66437 0.221428C1.36838 -0.0738094 0.888838
                    -0.0738094 0.592106
                    0.221428C0.296121 0.516666 0.296121 0.996209 0.592106
                    1.29145L6.8025 7.49959L0.592853 13.7077C0.296868 14.003
                    0.296868 14.4825 0.592853 14.7785C0.888838 15.0737 1.36913 15.0737
                    1.66511
                    14.7785L8.41055 8.03532C8.70205 7.74313 8.70205 7.25605 8.4098
                    6.96462Z" fill="#454544">
            </path>
        </svg>
        @if ($product->catalog->parent == 1)
            <a href="{{ route('export') }}">Экспорт</a>
        @else
            <a href="{{ route('import') }}">Импорт</a>
        @endif
        <svg class="arrow" width="9" height="15" viewBox="0 0 9 15" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M8.4098 6.96462L1.66437 0.221428C1.36838 -0.0738094 0.888838
                    -0.0738094 0.592106 0.221428C0.296121 0.516666 0.296121 0.996209
                    0.592106
                    1.29145L6.8025 7.49959L0.592853 13.7077C0.296868 14.003 0.296868
                    14.4825
                    0.592853 14.7785C0.888838 15.0737 1.36913 15.0737 1.66511
                    14.7785L8.41055
                    8.03532C8.70205 7.74313 8.70205 7.25605 8.4098 6.96462Z" fill="#454544">
            </path>
        </svg>
        <a>{{ isset($product->title[$lang]) ? $product->title[$lang] : $product->title['ru'] }}</a>
    </div>
    <div class="content">
        @foreach($statistics as $statistic)
        <div class="stat">
            <div class="number" id="years" data-target="{{$statistic->number}}">{{$statistic->number}}</div>
            <div class="label">{{ isset($statistic->title[$lang]) ? $statistic->title[$lang] : $statistic->title['ru'] }}</div>
        </div>
        @endforeach
    </div>
    <div class="inner-description">
        <div class="bg-text">
            <p style="top:575px" class="bg-text-inner">
                Globalexim
            </p>
            <div class="container">
                <div class="inner-description-title">
                    <h3 class="gy-semibold section__title">
                        {{ isset($product->title[$lang]) ? $product->title[$lang] : $product->title['ru'] }}

                    </h3>
                </div>
                <div class="inner-description-img">
                    <img src="{{ asset($product->main_img) }}" alt="">
                </div>
                <div class="desc-inner">
                    {!! isset($product->desc[$lang]) ? $product->desc[$lang] : $product->desc['ru'] !!}
                </div>
            </div>
        </div>
    </div>
    <div class="import-form">
        <div class="form">
            <div class="form__img">
                <img src="{{ asset('public/images/form.png') }}" alt="">
            </div>
            <div class="container">
                <form action="{{ route('application') }}" method="post" class="form__inner">
                    @csrf
                    <div class="form__title">
                        <h3 class="gy-semibold section__title">
                            Отправить сообщение

                        </h3>
                    </div>
                    <div class="input__line">
                        <input class="sfp-regular" placeholder="Имя" type="text" required name="name"
                            value="{{ old('name') }}">
                        <input class="sfp-regular" placeholder="Эл.адрес" type="email" required name="email"
                            value="{{ old('email') }}">
                    </div>
                    <div class="input__line">
                        <input class="sfp-regular" placeholder="Тема" type="text" name="theme"
                            value="{{ old('theme') }}">
                        <input class="sfp-regular" placeholder="Телефон" type="tel" value="{{ old('phone_number') }}"
                            required name="phone_number">
                    </div>
                    <textarea class="sfp-regular" placeholder="Сообщение" name="message">{{ old('message') }}
              </textarea>
                    <div class="g-recaptcha" data-sitekey="6LdatyEiAAAAAL5asQ67FIGH4EUtiPn77-E_wX0T"></div>
                    <div class="form__btn">
                        <button class="sfp-regular" type="submit">
                            Отправить сообщение
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
    const stats = document.querySelectorAll('.number');

    stats.forEach((stat, index) => {
        setTimeout(() => {
            stat.style.opacity = 1;
            stat.style.transform = 'translateY(0)';
            countUp(stat);
        }, index * 500); // Delay each animation by 500ms
    });
});

function countUp(element) {
    const target = +element.getAttribute('data-target');
    let count = 0;
    const increment = target < 100 ? 1 : Math.floor(target / 100); // Adjust this value to control speed

    const updateCount = () => {
        count += increment;
        if (count < target) {
            element.textContent = count + (element.id === 'years' || element.id === 'countries' ? '+' : '');
            setTimeout(updateCount, 50); // Adjust this value to control the speed of counting
        } else {
            element.textContent = target + (element.id === 'years' || element.id === 'countries' ? '+' : '');
        }
    };

    updateCount();
}


</script>
@endsection

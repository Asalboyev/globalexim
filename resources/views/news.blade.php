@extends('layouts.web')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/import.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news_cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about_gallere.css') }}">
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
            {!! translation('main.news.title') !!}
        </a>
    </div>
    <div class="news-cards">
        <div class="container">
            <div class="news-cards__title">
                <h3 class="gy-semibold section__title">
                    {!! translation('main.news.title') !!}

                </h3>
            </div>
            <div class="news-cards__inner">
                @foreach ($posts as $post)
                    <a class="news-cards__card" href="{{ route('post', ['id' => $post->id]) }}">
                        <div class="news__card">
                            <img src="{{ asset($post->img) }}" alt="">
                            <div class="news__card-info">
                                <h6 class="sfp-semibold">
                                    {{ $post->title[$lang] ? $post->title[$lang] : $post->title['ru'] }}
                                </h6>
                                <div class="news__card-date">
                                    <img src="./public/images/calendar.svg" alt="">
                                    <span class="sfp-semibold">{{ date('d.m.Y', strtotime($post->created_at)) }} |
                                        {{ date('H:i', strtotime($post->created_at)) }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            {{-- <div class="news-cards__btn">
                <button class="">
                    <img src="{{ asset('images/reload.svg') }}" alt="">
                    <span class="sfp-semibold">
                        {!! translation('button.name') !!}
                    </span>
                </button>
            </div> --}}
        </div>
    </div>
@endsection

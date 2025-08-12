@extends('layouts.web')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/import.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news_inner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news_cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer_form.css') }}">
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
        </svg><a href="{{ route('news') }}">
            Новости
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
        <a>{{ isset($post->title[$lang]) ? $post->title[$lang] : $post->title['ru'] }}</a>
    </div>
    <div class="news-inner">
        <div class="container">
            <div class="news-inner__image">
                <img src="{{ asset($post->img) }}" alt="">
            </div>
            <div class="news-inner__info">
                <div class="news-inner__date">
                    <img src="{{ asset('public/images/calendar-black.svg') }}" alt="">
                    <span class="sfp-semibold">
            {{ date('d.m.Y', strtotime($post->created_at)) }} | {{ date('H:i', strtotime($post->created_at)) }}
          </span>
                </div>
                <div class="news-inner__seen">
                    <img src="{{ asset('public/images/seen.svg') }}" alt="">
                    <span class="sfp-semibold">
            {{ $post->views }}
          </span>
                </div>
            </div>
            <div class="news-inner__description">
                <h1 class="gy-medium">
                    {{ isset($post->title[$lang]) ? $post->title[$lang] : $post->title['ru'] }}
                </h1>
                {!! isset($post->desc[$lang]) ? $post->desc[$lang] : $post->desc['ru'] !!}
            </div>
        </div>
    </div>
    <div class="linked-news">
        <h2 class="gy-medium container linked-news__title">
            Связанные новости
        </h2>
        <div class="linked-news__cards">
            <div class="container">
                <div class="linked-news__cards-inner">
                    @foreach($other as $post)
                    <a class="linked-news__card" href="{{ route('post', ['id' =>$post->id]) }}">
                        <div class="news__card">
                            <img src="{{ asset($post->img) }}" alt="">
                            <div class="news__card-info">
                                <h6 class="sfp-semibold">
                                    {{ isset($post->title[$lang]) ? $post->title[$lang] : $post->title['ru'] }}
                                </h6>
                                <div class="news__card-date">
                                    <img src="{{ asset('public/images/calendar.svg') }}" alt="">
                                    <span class="sfp-semibold">
                    {{ date('d.m.Y', strtotime($post->created_at)) }} | {{ date('H:i', strtotime($post->created_at)) }}
                  </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

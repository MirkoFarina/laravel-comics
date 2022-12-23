@extends('layouts.main')



@section('content')
    <main>
        <section>
            <div class="container">
                <h2 class="rectangle">CURRENT SERIES</h2>
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="card">
                            <a href="{{ url('/description') }}">
                                <div class="top">
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                                    <div class="content">
                                        <h5>PREZZO: {{ $comic['price'] }}</h5>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <h3>
                                        {{ $comic['title'] }}
                                    </h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="load-more">
                <button class="rectangle">
                    LOAD MORE
                </button>
            </div>
        </section>
        <nav class="stylized-navbar">
            <div class="container">
                <ul>
                    <li>
                        <div class="img">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                        </div>
                        <a href="#">
                            DIGITAL COMICS
                        </a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                        </div>
                        <a href="#">
                            dc merchandise
                        </a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                        </div>
                        <a href="#">
                            subscription
                        </a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                        </div>
                        <a href="#">
                            comic shop locator
                        </a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                        </div>
                        <a href="#">
                            DIGITAL COMICS
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </main>
@endsection

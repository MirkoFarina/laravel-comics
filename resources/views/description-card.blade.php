@extends('layouts.main')


@section('content')
    <main id="description-card">
        <div class="line">
            <div class="container">
                <div class="container-img">
                    <img src="{{ $comic['thumb'] }}"
                        alt=" {{ $comic['title'] }}">
                    <span class="type">
                        {{ $comic['series'] }}
                    </span>
                    <span class="gallery">
                        VIEW GALLERY
                    </span>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- SECTION ADV -->
            <div class="adv">
                <div class="col-left">
                    <h2>
                        {{ $comic['title'] }}
                    </h2>
                    <div class="price">
                        <div class="left">
                            <h5>
                                U.S. Price: <span>{{$comic['price']}}</span>
                            </h5>
                            <h5>
                                AVAILABLE
                            </h5>
                        </div>
                        <div class="right">
                            <h5>
                                Check Availability
                            </h5>
                        </div>
                    </div>
                    <p>
                        {!!  $comic['description']  !!}
                    </p>
                </div>
                <div class="col-right">
                    <img src=" {{ Vite::asset('resources/img/adv.jpg') }} " alt="ADV">
                </div>
            </div>
            <!-- /SECTION ADV -->
        </div>
        <!-- SECTION SPECIFICATIONS -->
        <div class="specifications">
            <div class="container">
                <div class="content-specifications">
                    <div class="left">
                        <h3>
                            Talent
                        </h3>
                        <div class="talent-impagination">
                            <div class="title">
                                <h5>Art by:</h5>
                            </div>
                            <div class="content">
                                <ul>
                                    @foreach ($comic['artists'] as $artist )
                                    <li>
                                        <a href="#">
                                            {{$artist}} ,
                                        </a>
                                    </li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="talent-impagination">
                            <div class="title">
                                <h5>written by:</h5>
                            </div>
                            <div class="content">
                                <ul>
                                    @foreach ($comic['writers'] as $writer )

                                    <li>
                                        <a href="#">
                                            {{$writer}} ,
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <h3>
                            Specs
                        </h3>
                        <div class="talent-impagination">
                            <div class="title">
                                <h5>Series:</h5>
                            </div>
                            <div class="content">
                                {{ $comic['series'] }}
                            </div>
                        </div>
                        <div class="talent-impagination">
                            <div class="title">
                                <h5>U.S. price:</h5>
                            </div>
                            <div class="content">
                                {{ $comic['price']}}
                            </div>
                        </div>
                        <div class="talent-impagination">
                            <div class="title">
                                <h5>On sale date:</h5>
                            </div>
                            <div class="content">
                                {{ $comic['sale_date']}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <nav class="nav-bar-description">
                <div class="container">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="go-to">
                                    <h6>
                                        Digital comics
                                    </h6>
                                    <div class="img">
                                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="go-to">
                                    <h6>
                                        Digital comics
                                    </h6>
                                    <div class="img">
                                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="go-to">
                                    <h6>
                                        Digital comics
                                    </h6>
                                    <div class="img">
                                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="go-to">
                                    <h6>
                                        Digital comics
                                    </h6>
                                    <div class="img">
                                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- /SECTION SPECIFICATIONS -->
    </main>
@endsection

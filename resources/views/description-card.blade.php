@extends('layouts.main')


@section('content')
    <main id="description-card">
        <div class="line">
            <div class="container">
                <div class="container-img">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX"
                        alt=" img">
                    <span class="type">
                        COMIC BOOK
                    </span>
                    <span class="gallery">
                        view gallery
                    </span>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- SECTION ADV -->
            <div class="adv">
                <div class="col-left">
                    <h2>
                        action comics #1000: the deluxe edition
                    </h2>
                    <div class="price">
                        <div class="left">
                            <h5>
                                U.S. Price: <span>$19.99</span>
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
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla commodi sit nemo mollitia tenetur
                        harum ipsum in neque beatae provident at nesciunt distinctio aliquam, repellat, magni quis unde
                        veritatis a fuga tempora non explicabo quaerat architecto sint. Suscipit ea odio praesentium ab rem
                        numquam animi similique sit ipsum? Blanditiis beatae dignissimos hic eum reprehenderit iste optio
                        autem placeat sed, rerum natus totam eius assumenda culpa? Natus consectetur maxime expedita magni
                        praesentium repellendus perferendis culpa earum aperiam nesciunt nobis nemo beatae eos, ipsa,
                        recusandae quasi commodi neque facilis at iure esse itaque id dignissimos. Nihil distinctio
                        obcaecati aliquid expedita autem sapiente!
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
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos tempore, voluptatum
                                quia consequatur soluta porro. Vero facere cumque nemo rerum, amet officia delectus at quo!
                                Dolorum quasi alias labore tempore!
                            </div>
                        </div>
                        <div class="talent-impagination">
                            <div class="title">
                                <h5>written by:</h5>
                            </div>
                            <div class="content">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos tempore, voluptatum
                                quia consequatur soluta porro. Vero facere cumque nemo rerum, amet officia delectus at quo!
                                Dolorum quasi alias labore tempore!
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
                                Lorem ipsum
                            </div>
                        </div>
                        <div class="talent-impagination">
                            <div class="title">
                                <h5>U.S. price:</h5>
                            </div>
                            <div class="content">
                                Lorem ipsum
                            </div>
                        </div>
                        <div class="talent-impagination">
                            <div class="title">
                                <h5>On sale date:</h5>
                            </div>
                            <div class="content">
                                Lorem ipsum
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

@extends('/layouts.main-layout')

@section('content')
    <main>
        <div class="title-box">
            CURRENT SERIES
        </div>

        {{-- Sezione principale --}}
        <section class="series">

            <ul>
                @foreach ($data as $serie)
                    <li class="cover">
                        <a href="#">
                            <img src="{{ $serie['thumb'] }}" alt="">
                            <h4>{{strtoupper($serie['series'])}}</h4>
                        </a>
                    </li>
                @endforeach
            </ul>

            <a class="blue-link" href="/">LOAD MORE</a>
        </section>

        <section class="blue-separator">
            <ul>
                <li>
                    <a href="#">
                        <img src="{{asset('/storage/imgs/buy-comics-digital-comics.png')}}" alt="">
                        DIGITAL COMICS
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('/storage/imgs/buy-comics-merchandise.png')}}" alt="">
                        DC MERCHANDISE
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('/storage/imgs/buy-comics-subscriptions.png')}}" alt="">
                        DIGITAL COMICS
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('/storage/imgs/buy-comics-shop-locator.png')}}" alt="">
                        DIGITAL COMICS
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img id="credit" src="{{asset('/storage/imgs/buy-dc-power-visa.svg')}}" alt="">
                        DIGITAL COMICS
                    </a>
                </li>
            </ul>
        </section>
    </main>
@endsection
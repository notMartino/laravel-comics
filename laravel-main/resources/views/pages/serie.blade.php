@extends('/layouts.main-layout')

@section('content')
    <main>
        <section class="blue-separator img-container">

            <div class="float-img">
                <div class="type">
                    {{strtoupper($thisSerie['type'])}}
                </div>
                
                <img src="{{$thisSerie['thumb']}}" alt="">

                <div class="gallery">
                    VIEW GALLERY
                </div>
            </div>
        </section>

        <section class="description">
            <div class="info">
                <h2>
                    {{strtoupper($thisSerie['title'])}}
                </h2>

                <div class="sell">
                    <div>
                        <span>
                            U.S. Price: &#160;
                            <span class="white">
                                {{$thisSerie['price']}}
                            </span>
                        </span>
                    </div>

                    <div>
                        <span>AVAIABLE</span>
                        <span class="border">
                            <a href="#" class="white">
                                Check Avaiability <i class="fas fa-caret-down"></i>
                            </a>
                        </span>
                    </div>
                </div>

                <p>
                    {{$thisSerie['description']}}
                </p>
            </div>

            <div class="advertisement">
                <a href="#">
                    <img src="/storage/imgs/adv.jpg" alt="Advertisement">
                </a>

                <h5>
                    ADVERTISEMENT
                </h5>
            </div>
        </section>

        <section class="specs">
            <div>
                <ul class="box rm">
                    <li class="title">
                        <h2>Talent</h2>
                    </li>
                    <li class="argument">
                        <h5>
                            Art by:
                        </h5>
                        <p>
                            @foreach ($thisSerie['artists'] as $artist)
                                @if (!$loop -> last)
                                    {{$artist}},
                                @else
                                    {{$artist}}
                                @endif
                            @endforeach
                            
                        </p>
                    </li>
                    <li class="argument">
                        <h5>
                            Written by:
                        </h5>
                        <p>
                            @foreach ($thisSerie['writers'] as $writer)
                                @if (!$loop -> last)
                                    {{$writer}},
                                @else
                                    {{$writer}}
                                @endif
                            @endforeach
                            
                        </p>
                    </li>
                </ul>
            </div>

            <div>
                <ul class="box lm">
                    <li class="title">
                        <h2>Specs</h2>
                    </li>
                    <li class="argument">
                        <h5>
                            Series:
                        </h5>
                        <p>
                            {{ strtoupper($thisSerie['series']) }}
                        </p>
                    </li>
                    <li class="argument">
                        <h5>
                            U.S. Price:
                        </h5>
                        <p>
                            {{ $thisSerie['price'] }}
                        </p>
                    </li>
                    <li class="argument">
                        <h5>
                            On Sale Date:
                        </h5>
                        <p>
                            {{ $thisSerie['sale_date'] }}
                        </p>
                    </li>
                </ul>
            </div>

        </section>
        
        <section class="bottom-links">
            <div class="box">
                <h4>
                    DIGITAL COMICS
                </h4>
                <img src="/storage/imgs/icons-1.png" alt="Icon 1">
            </div>
            <div class="box">
                <h4>
                    SHOP DC
                </h4>
                <img src="/storage/imgs/icons-4.png" alt="Icon 4">
            </div>
            <div class="box">
                <h4>
                    COMIC SHOP LOCATOR
                </h4>
                <img src="/storage/imgs/icons-3.png" alt="Icon 3">
            </div>
            <div class="box">
                <h4>
                    SUBSRIPTIONS
                </h4>
                <img src="/storage/imgs/icons-2.png" alt="Icon 2">
            </div>
        </section>
    </main>
@endsection

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
                <h2>Talent</h2>
                <div class="row">
                    <h5>
                        Art by:
                    </h5>
                    <p>
                        CIaoo
                    </p>
                </div>
            </div>

            <div>
                <h2>Specs</h2>
            </div>
        </section>

    </main>
@endsection

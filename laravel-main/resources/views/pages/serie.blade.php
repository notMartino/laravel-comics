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
                    <span>U.S. Price: {{$thisSerie['price']}}</span>
                    <span>AVAIABLE</span>
                    <span>Check Avaiability <i class="fas fa-caret-down"></i></span>
                </div>

                <p>
                    {{$thisSerie['description']}}
                </p>
            </div>
        </section>

    </main>
@endsection

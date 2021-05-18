@extends('/layouts.main-layout')

@section('content')
    <main>
        <div class="blue-separator img-container">

            <div class="float-img">
                <div class="type">
                    {{strtoupper($thisSerie['type'])}}
                </div>
                
                <img src="{{$thisSerie['thumb']}}" alt="">

                <div class="gallery">
                    VIEW GALLERY
                </div>
            </div>
        </div>

    </main>
@endsection

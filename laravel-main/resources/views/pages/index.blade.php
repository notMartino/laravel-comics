@extends('/layouts.main-layout')

@section('content')
    <main>
        {{-- Sezione jumbotron --}}
        
        {{-- <section class="jumbo"></section> --}}

        {{-- Sezione principale --}}
        <section class="series">


            <ul>
                @foreach ($data as $serie)
                    <li class="cover">
                        <img src="{{ $serie['thumb'] }}" alt="">
                        {{$serie['title']}}
                    </li>
                @endforeach
            </ul>

            <a class="blue-link" href="/">LOAD MORE</a>
        </section>

        <section class="blue-separator">
            <ul>
                <li>
                    Digital Comics
                </li>
                <li>
                    Digital Comics
                </li>
                <li>
                    Digital Comics
                </li>
                <li>
                    Digital Comics
                </li>
                <li>
                    Digital Comics
                </li>
            </ul>
        </section>
    </main>
@endsection
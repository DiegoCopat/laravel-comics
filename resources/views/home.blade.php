    @extends('layouts.general')

    @section('main-top')
        <section class="jumbotron">

            <div class="main-top">
                <img src="{{ asset('img/jumbotron.jpg') }}" alt="">
            </div>     

        </section>
    @endsection

    @section('main-center')
        <section class="main-center">

            <section class="wrapper">
                <div class="cards">
                    @foreach ($comics as $item)
                    <div class="card">
                        <div class="image-contain">
                            <img src="{{ $item["thumb"] }}" alt="">
                        </div>
                        <h2>{{ $item["series"] }}</h2>
                    </div>
                    @endforeach 
                </div>
            </section>
            
        </section>
    @endsection

    @section('main-bottom')
        <section class="main-bottom">

            <div class="wrapper">
                <ul>
                        @foreach ($navbar as $item)
                            <li>
                                    
                                <a href="">{{ $item }}</a>
                                
                            </li>
                        @endforeach 
                    </ul>
                </div>     

        </section>
    @endsection

    @include('partials.main')
    
    <!-- @section('page-title', 'Laravel | Comics') -->


@extends('layout.defaultLayout')

@section('main_content')

    <h1>Lista dei comics</h1>
    <main>
        <section class="color_dark">
            <div class="container w-75 g-0 position-relative">
                <h3 class="current_series">CURRENT SERIES</h3>
                <div class="row g-0 pt-5">
                    @foreach ($arrayComics as $comic)
                    <div class="col-2 p-3">
                        <div class="d-flex flex-column">
                            <img src="{{$comic['thumb']}}" alt="">
                            <h5 class="text-white">{{$comic['title']}}</h5>
                        </div>
                    </div>
                    @endforeach




                    <div class="pb-3">

                        <h3 class="load_more">LOAD MORE</h3>
                    </div>


                </div>
            </div>
        </section>
</main>
<style>
    main {
       

        .color_dark {
            background-color: #1c1c1c;
        }

        .current_series {
            top: -20px;
            padding: 10px;
            position: absolute;
            color: white;
            background-color: #0282f9;
            width: fit-content;
            font-size: 15px;
        }

        .load_more {
            background-color: #0282f9;
            width: fit-content;
            font-size: 12px;
            margin: auto;
            color: white;
            padding: 10px 50px;


        }
    }
</style>

@endsection
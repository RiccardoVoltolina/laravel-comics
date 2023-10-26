
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
                            <h5 class="text-white">{{$comic['series']}}</h5>
                        </div>
                    </div>
                    @endforeach




                    <div class="pb-3">

                        <h3 class="load_more">LOAD MORE</h3>
                    </div>


                </div>
            </div>
        </section>

        <section class="py-5 details">
            <div class="container w-75 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    @foreach ($arrayDetails as $detail)

                    <img src="{{ Vite::asset($detail['img']) }}" alt="">
                    <a class="pe-3">{{ $detail['utilitiesInfo'] }}</a>
                    @endforeach

                </div>
                
            </div>
        </section>

</main>
<style>
       

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
    
    .details {
        font-size: 10px;
        color: white;
        background-color: #0282f9;
    }

    .details a {
        text-decoration: none;
        color: white;
    }

    .details img {
        width: 50px;
        height: 50px;
        object-fit: contain;
    }
</style>

@endsection
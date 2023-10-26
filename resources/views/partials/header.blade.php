<?php
$header_links = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS'];

?>



<header>
    <div class="container w-75 pt-4">
        <div class="row">
            <div class="col-3 pb-4">
                <img class="imgHeader" src="{{ Vite::asset('resources/images/dc-logo.png') }}">
            </div>
            <div class="col-6 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center h-100">
                    @foreach ($header_links as $link)

                    <a href="" class="pe-2">{{ $link }}</a>
                    @endforeach
                </div>
                <div class="col-3 d-flex justify-content-end">
                    <a href="">Search</a>
                </div>


            </div>

        </div>

    </div>
</header>

<style>
    .imgHeader {
        height: 90px;
        width: 90px;
    }

    a {
        text-decoration: none;
        color: black;
        align-items: center;
        display: flex;
    }

    a:hover {
        color: #0282f9;
        border-bottom: 2px solid #0282f9;
        color: #0282f9;

    }
</style>
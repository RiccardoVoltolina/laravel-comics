<section class="footerTop">

    <div class="container w-75 d-flex justify-content-start">
        <div class="col-5 d-flex">
            
            <div class="d-flex flex-column p_40px">
                <h3>DC COMICS</h3>
                @foreach($dcComicsLinks as $link)
                <a href="">{{ $link }}</a>
                @endforeach
           
                <h3>SHOP</h3>
                @foreach($shopLinks as $shopLink)
                <a href="">{{ $shopLink }}</a>
                @endforeach            </div>
            <div class="d-flex flex-column ps-5 pb-5">
                <h3 class="">DC</h3>
                @foreach($dcLinks as $dcLink)
                <a href="">{{ $dcLink }}</a>
                @endforeach        
            </div>
            <div class="d-flex flex-column ps-5">
                <h3>SITES</h3>
                @foreach($sitesLinks as $sitesLink)
                <a href="">{{ $sitesLink }}</a>
                @endforeach            </div>

        </div>    
        <div class="col-7 immagine_background">
        </div>
    </div>

</section>

<style>
    .footerTop {
        background-image: url({{ Vite::asset('resources/images/footer-bg.jpg') }});
        background-repeat: no-repeat;
        background-size: cover;
    }

    h3 {
            color: white;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-top: 35px;
            font-size: 20px;
        }

        a {
            text-decoration: none;
            color: gray;
            font-size: 10px;            
        }

        .p_40px {
            padding-bottom: 40px;
        }

        .immagine_background {
            margin-top: -70px;
            margin-left: 160px;
            background-image: url({{ Vite::asset('resources/images/dc-logo-bg.png') }});
            background-repeat: no-repeat;
        }
</style>
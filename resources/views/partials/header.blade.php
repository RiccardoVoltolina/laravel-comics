<header>
    <div class="container w-75 pt-4">
        <div class="row">
            <div class="col-4 pb-4">
                <img src="../../images/dc-logo.png" alt="">
            </div>
            <div class="col-8 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center h-100">
                    @foreach ($header_links as $link)

                    <a href="">{{ $link }}</a>
                    @endforeach
                </div>

            </div>

        </div>

    </div>
</header>

<style>

img {
        height: 90px;
        width: 90px;
    }

    a {
        text-decoration: none;
        color: black;
        align-items: center;
        display: flex;
        height: 100%;
    }

    a:hover {
        color: #0282f9;
        border-bottom: 2px solid #0282f9;
        color: #0282f9;

    }


  

</style>
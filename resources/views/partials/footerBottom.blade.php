<footer>
    <div class="container w-75">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between h_150_px">
                <div class="bottone"><button>SIGN-UP-NOW</button></div>
                <div class="d-flex align-items-center">
                    <h3>FOLLOW US</h3>
                        
                        <img class="imgFooter" src="{{ Vite::asset('resources/images/footer-facebook.png') }}">
                        <img class="imgFooter" src="{{ Vite::asset('resources/images/footer-twitter.png') }}">
                        <img class="imgFooter" src="{{ Vite::asset('resources/images/footer-youtube.png') }}">
                        <img class="imgFooter" src="{{ Vite::asset('resources/images/footer-pinterest.png') }}">
                        <img class="imgFooter" src="{{ Vite::asset('resources/images/footer-periscope.png') }}">

                </div>


            </div>
            
        </div>
    </div>
</footer>

<style>
    footer {
        background-color: #303030;
        height: 150px; 
    }

        .h_150_px {

            height: 150px;
        }

            
            
            
                        button {
                            background-color: transparent;
                            color: white;
                            border: 2px solid #0282f9;
                            padding: 10px;
                        }

                    h3 {
                        color: #0282f9;
                    }

                    .imgFooter {
                        padding-left: 1rem;
                        
                        object-fit: contain;
                    }
        
   

</style>
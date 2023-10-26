









<main>
        <section class="bg_image"></section>
        <section class="color_dark">
            <div class="container w-75 g-0 position-relative">
                <h3 class="current_series">CURRENT SERIES</h3>
                <div class="row g-0 pt-5">
                    @foreach ($comicsInfo as $comicInfo)
                    <div class="col-2 p-3">
                        <div class="d-flex flex-column">
                            <h5 class="text-white"></h5>
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
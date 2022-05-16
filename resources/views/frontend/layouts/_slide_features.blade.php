<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
              
                @foreach ($latestProductFive as $key)
                    <div class="col-lg-12">
                        <div class="categories__item set-bg" data-setbg="../biasanpham/{{ $key->image }}">
                            <h5><a href="#" style="font-family: Consolas ;font-weight: bold; text-transform: uppercase">{{ $key->ten_sp }}</a></h5>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->
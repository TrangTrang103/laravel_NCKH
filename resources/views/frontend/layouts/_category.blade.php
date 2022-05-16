<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all " style="background: #324fb8;">
                        <i class="fa fa-bars"></i>
                        <span>Danh mục</span>
                    </div>
                    
                    <ul>
                        @foreach ($categories as $key)
                            <li><a href="{{ route('category-product', $key->id_loai) }}">{{ $key->ten_loai }}</a></li>
                        @endforeach
                    </ul>
                
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                Danh mục
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn" style="background: #324fb8;">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon " style="color: #3f4dab">
                            <i class="fa fa-phone "></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>0978665891</h5>
                            <span>hỗ trợ 24/7</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="img/hero/banner.png">
                    <div class="hero__text">

                        <h2> <br /></h2>
                        <p></p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
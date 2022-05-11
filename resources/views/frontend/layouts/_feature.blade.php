<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm nổi bật</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">Tất cả</li>
                        <li data-filter=".oranges">Họa cụ</li>
                        <li data-filter=".fresh-meat">Công nghệ</li>
                        <li data-filter=".vegetables">Tài liệu</li>
                        <li data-filter=".fastfood">Sản phẩm sinh viên</li>
                        <li data-filter=".oranges">Model KT-DH</li>
                        <li data-filter=".oranges">Khóa học</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach ($latestProduct as $key)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../biasanpham/{{ $key->image }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{ $key->ten_sp }}</a></h6>
                            <h5>${{ $key->gia_tien }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Featured Section End -->
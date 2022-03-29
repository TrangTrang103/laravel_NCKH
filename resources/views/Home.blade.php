<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KTT | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#" style="background: #324fb8;"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#" style="background: #324fb8;"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price" style="background: #324fb8;">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a>
            </div>

            
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Trang chủ</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>Oder</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> OderKTT@gmail.com</li>
                                <li>Giao hàng miễn phí từ 200k</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/logoco.jpg" alt="" width="15px" height="15px">
                                <div>Tiếng việt</div>
                                <span class="arrow_carrot-down" style="background: white"></span>
                                <ul>
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                                   
                                

                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{route('login')}}"><i class="fa fa-user"></i> Login | Register</a>

                            </div>

                            <div class="header__top__right__auth" style="visibility: hidden">
                                <li class="nav-item dropdown">
                                    <a
                                      class="
                                        nav-link
                                        dropdown-toggle
                                        text-muted
                                        waves-effect waves-dark
                                        pro-pic
                                      "
                                      href="#"
                                      id="navbarDropdown"
                                      role="button"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                    >
                                      <img
                                        src="../assets/images/users/1.jpg"
                                        alt="user"
                                        class="rounded-circle"
                                        width="31"
                                      />
                                    </a>
                                    <ul
                                      class="dropdown-menu dropdown-menu-end user-dd animated"
                                      aria-labelledby="navbarDropdown"
                                    >
                                      <a class="dropdown-item" href="javascript:void(0)"
                                        ><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0)"
                                        ><i class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0)"
                                        ><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a
                                      >
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="javascript:void(0)"
                                        ><i class="mdi mdi-settings me-1 ms-1"></i> Account
                                        Setting</a
                                      >
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="javascript:void(0)"
                                        ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                                      >
                                      <div class="dropdown-divider"></div>
                                      <div class="ps-4 p-10">
                                        <a
                                          href="javascript:void(0)"
                                          class="btn btn-sm btn-success btn-rounded text-white"
                                          >View Profile</a
                                        >
                                      </div>
                                    </ul>
                                  </li>

                            </div>

                         

                            <div class="header__top__right__auth" style="visibility: hidden">
                                <a href="{{route('login')}}"><i class="fa fa-user"></i> Login | Register</a>

                            </div>

                            <div class="header__top__right__auth" style="visibility: hidden">
                                <li class="nav-item dropdown">
                                    <a
                                      class="
                                        nav-link
                                        dropdown-toggle
                                        text-muted
                                        waves-effect waves-dark
                                        pro-pic
                                      "
                                      href="#"
                                      id="navbarDropdown"
                                      role="button"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                    >
                                      <img
                                        src="../assets/images/users/1.jpg"
                                        alt="user"
                                        class="rounded-circle"
                                        width="31"
                                      />
                                    </a>
                                    <ul
                                      class="dropdown-menu dropdown-menu-end user-dd animated"
                                      aria-labelledby="navbarDropdown"
                                    >
                                      <a class="dropdown-item" href="javascript:void(0)"
                                        ><i class="mdi mdi-account me-1 ms-1"></i> </a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0)"
                                        ><i class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0)"
                                        ><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a
                                      >
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="javascript:void(0)"
                                        ><i class="mdi mdi-settings me-1 ms-1"></i> Account
                                        Setting</a
                                      >
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="javascript:void(0)"
                                        ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                                      >
                                      <div class="dropdown-divider"></div>
                                      <div class="ps-4 p-10">
                                        <a
                                          href="javascript:void(0)"
                                          class="btn btn-sm btn-success btn-rounded text-white"
                                          >View Profile</a
                                        >
                                      </div>
                                    </ul>
                                  </li>

                            </div>
                          
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logokt.png" alt="" height="110px" width="150px" style="margin-left: 50px; margin-bottom: 0px;"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Trang chủ</a></li>
                            <li><a href="./shop-grid.html">CỬA HÀNG</a></li>


                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                           <!--bat dau-->
                            
                                
                                
                                <li  id="nav-item dropdown">
                                
                                    
                                        
                                        <a  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="fa fa-heart"></i><span>3</span> 
                                        </a>
                                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        
                                        <div class="cart-hover">
                                            <div class="select-items">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="si-pic"><img src="img/categories/butve.jpg" alt=""></td>
                                                            <td class="si-text">
                                                                <div class="product-selected">
                                                                    <p>₫60.00 x 1</p>
                                                                    <h6>Kabino Bedside Table</h6>
                                                                </div>
                                                            </td>
                                                            <td class="si-close">
                                                                <i class="ti-close"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="si-pic"><img src="img/categories/maytinh.jpg" alt=""></td>
                                                            <td class="si-text">
                                                                <div class="product-selected">
                                                                    <p>₫60.00 x 1</p>
                                                                    <h6>Kabino Bedside Table</h6>
                                                                </div>
                                                            </td>
                                                            <td class="si-close">
                                                                <i class="ti-close"></i>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="select-total">
                                                <span>tổng:</span>
                                                <h5>₫120.00</h5>
                                            </div>
                                            <div class="select-button">
                                                <a href="#" class="primary-btn view-card">Thanh toán</a>
                                           
                                            </div>
                                      </div>
                                   
                                  
                                </li>

                                <li  id="nav-item dropdown">
                                
                                    
                                        
                                    <a  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                         <i class="fa fa-shopping-bag"></i><span>3</span> 
                                    </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                
                              
                            </li>
                              
                            <!--ketthuc-->
                            
                        </ul>

                        
                        <div class="header__cart__price">Tổng: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

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
                            <li><a href="#" style="text-decoration: none">Họa cụ</a></li>
                            <li><a href="#">Tượng vẽ</a></li>
                            <li><a href="#">Đồ Công Nghệ</a></li>
                            <li><a href="#">Tài liệu học</a></li>
                            <li><a href="#">Model Kiến Trúc-Đồ Họa</a></li>
                            <li><a href="#">Model Xây Dựng</a></li>
                            <li><a href="#">Sản Phẩm thời trang</a></li>
                            <li><a href="#">Các Khóa Học</a></li>
                            <li><a href="#">Sản phẩm của sinh viên</a></li>
                            <li><a href="#">Sản phẩm khác</a></li>
                            <li><a href="#">Sản phẩm khác</a></li>
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

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                  

                    <div class="col-lg-12">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-11.jpg">
                            <h5><a href="#" style="font-family: Consolas ;font-weight: bold;">HỌA CỤ</a></h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="categories__item set-bg" data-setbg="img/categories/butve.jpg">
                            <h5><a href="#" style="font-family: Consolas ;font-weight: bold;">HỌA CỤ</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="categories__item set-bg" data-setbg="img/categories/tailieuht.jpg">
                            <h5><a href="#" style="font-family: Consolas ;font-weight: bold;">TÀI LIỆU HỌC TẬP</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="categories__item set-bg" data-setbg="img/categories/congnghe.jpg">
                            <h5><a href="#" style="font-family: Consolas ;font-weight: bold;">SẢN PHẨM CÔNG NGHỆ</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="categories__item set-bg" data-setbg="img/categories/model.jpg">
                            <h5><a href="#" style="font-family: Consolas ;font-weight: bold;">CÁC LOẠI MODEL</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="categories__item set-bg" data-setbg="img/categories/svthietke.jpg">
                            <h5><a href="#" style="font-family: Consolas ;font-weight: bold;">SẢN PHẨM SINH VIÊN</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

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
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/baymau.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security Crab Pool Security Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/hoaculo.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/butvenhua.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-5.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-6.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-7.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-8.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/bannerve.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/bannerback.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item" style="text-decoration: none">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2> Blog Tin</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn" style="background: #324fb8;">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .section-title h2:after {
            position: absolute;
            left: 0;
            bottom: -15px;
            right: 0;
            height: 4px;
            width: 80px;
            background: #324fb8;
            content: "";
            margin: 0 auto;
        }
        
        .featured__controls ul li:after {
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 100%;
            height: 2px;
            background: #324fb8;
            content: "";
            opacity: 0;
        }
        
        .header__cart ul li a span {
            height: 13px;
            width: 13px;
            background: #324fb8;
            font-size: 10px;
            color: #ffffff;
            line-height: 13px;
            text-align: center;
            font-weight: 700;
            display: inline-block;
            border-radius: 50%;
            position: absolute;
            top: 0;
            right: -12px;
        }
        
        .header__menu ul li:hover>a {
            color: #324fb8;
        }
        
        .header__menu ul li.active a {
            color: #2a5eb8;
        }
        
        body {
            height: 100%;
            font-family: Arial;
            -webkit-font-smoothing: Arial;
            font-smoothing: Arial;
        }
        
        .hero__categories ul li a {
            font-size: 14px;
            color: #1c1c1c;
            line-height: 39px;
            display: block;
        }
        
        .header__menu ul li a {
            font-size: 16px;
            color: #252525;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 2px;
            -webkit-transition: all, 0.3s;
            -moz-transition: all, 0.3s;
            -ms-transition: all, 0.3s;
            -o-transition: all, 0.3s;
            transition: all, 0.3s;
            padding: 5px 0;
            display: block;
            margin-top: 30px;
        }
        .primary-btn {
    display: inline-block;
    font-size: 14px;
    padding: 10px 28px 10px;
    color: #ffffff;
    text-transform: uppercase;
    font-weight: 700;
    background: #203498;
    letter-spacing: 2px;
}

a
{
    text-decoration: none;
}


.inner-header .nav-right li.cart-icon:hover .cart-hover {
	opacity: 1;
	visibility: visible;
	top: 60px;
}

.inner-header .nav-right li.cart-icon .cart-hover {
	position: absolute;
	right: -70px;
	top: 100px;
	width: 350px;
	background: #ffffff;
	z-index: 99;
	text-align: left;
	padding: 30px;
	opacity: 0;
	visibility: hidden;
	-webkit-box-shadow: 0 13px 32px rgba(51, 51, 51, 0.1);
	box-shadow: 0 13px 32px rgba(51, 51, 51, 0.1);
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.cart-hover .select-items table {
	width: 100%;
}
.inner-header .nav-right li.cart-icon .cart-hover .select-items table tr td {
	padding-bottom: 20px;
}

.cart-hover .select-items table tr td.si-pic img {
	border: 1px solid #ebebeb;
}

.cart-hover .select-items table tr td.si-text {
	padding-left: 18px;
}

.cart-hover .select-items table tr td.si-text .product-selected p {
	color: #e7ab3c;
	line-height: 30px;
	margin-bottom: 7px;
}

.cart-hover .select-items table tr td.si-text .product-selected h6 {
	color: #232530;
}

.cart-hover .select-items table tr td.si-close {
	color: #252525;
	font-size: 16px;
	cursor: pointer;
}

 .cart-hover .select-total {
	overflow: hidden;
	border-top: 1px solid #e5e5e5;
	padding-top: 26px;
	margin-bottom: 30px;
}

.cart-hover .select-total span {
	font-size: 14px;
	color: #e7ab3c;
	text-transform: uppercase;
	letter-spacing: 0.5px;
	float: left;
}

.cart-hover .select-total h5 {
	color: #e7ab3c;
	float: right;
}

 .cart-hover .select-button .view-card {
	font-size: 12px;
	letter-spacing: 2px;
	display: block;
	text-align: center;
	background: #191919;
	color: #ffffff;
	padding: 15px 30px 12px;
	margin-bottom: 10px;
}

.inner-header .nav-right li.cart-icon .cart-hover .select-button .checkout-btn {
	font-size: 12px;
	letter-spacing: 2px;
	display: block;
	text-align: center;
	color: #ffffff;
	padding: 15px 30px 12px;
}
 .cart-hover {
		left: -50px;
	}
   .cart-hover {
		width: 270px;
		padding: 20px;
	}
    </style>


</body>

</html>
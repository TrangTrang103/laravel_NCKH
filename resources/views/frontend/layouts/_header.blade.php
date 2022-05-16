<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="img/logokt.png" alt=""></a>
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
                    <a href="{{ route('home') }}"><img src="img/logokt.png" alt="" height="110px" width="150px" style="margin-left: 50px; margin-bottom: 0px;"></a>
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

@include('frontend.layouts._category')
@extends('html.index')
@section('content') 
<div class="col-12 d-flex no-block align-items-center">
    <h4 class="page-title">Trang chủ</h4>
    <div class="ms-auto text-end">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                  Administrator
              </li>
              </ol>
  </nav>
  </div>
  </div>
  </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Sales Cards  -->
      <!-- ============================================================== -->
      <div class="row">
          <!-- Column -->
          <div class="col-md-6 col-lg- col-xlg-3">
          <a href="{{route('admin.showsanpham')}}">
              <div class="card card-hover">
                  <div class="box bg-cyan text-center">
                      <h1 class="font-light text-white">
                          <i class="mdi mdi-view-dashboard "></i>
                      </h1>
                      <h6 class="text-white">Quản lý sản phẩm </h6>
                      
                  </div>
              </div>
              </a>
          </div>
          <!-- Column -->
          <div class="col-md-6 col-lg-4 col-xlg-3">
              <a href="{{route('admin.showusers')}}">
              <div class="card card-hover">
                  <div class="box bg-success text-center">
                      <h1 class="font-light text-white">
                          <i class="mdi mdi-face"></i>
                      </h1>
                      <h6 class="text-white">Quản lý người dùng</h6>
                  </div>
              </div>
              </a>
          </div>
          <!-- Column -->
          <div class="col-md-6 col-lg-2 col-xlg-3">
              <a href="{{route('admin.showhoadon')}}">
              <div class="card card-hover">
                  <div class="box bg-warning text-center">
                      <h1 class="font-light text-white">
                          <i class="mdi mdi-collage"></i>
                      </h1>
                      <h6 class="text-white">Quản lý hóa đơn</h6>
                  </div>
              </div>
              </a>
          </div>
          <!-- Column -->
          <div class="col-md-6 col-lg-2 col-xlg-3">
          <a href="{{route('admin.showyeuthich')}}">
              <div class="card card-hover">
                  <div class="box bg-danger text-center">
                      <h1 class="font-light text-white">
                          <i class="mdi mdi-heart"></i>
                      </h1>
                      <h6 class="text-white">Quản lý yêu thích</h6>
                  </div>
              </div>
          </a>
          </div>
          <!-- Column -->
          <div class="col-md-6 col-lg-2 col-xlg-3">
          <a href="{{route('admin.showgiohang')}}">
              <div class="card card-hover">
                  <div class="box bg-info text-center">
                      <h1 class="font-light text-white">
                          <i class="mdi mdi-shopping"></i>
                      </h1>
                      <h6 class="text-white">Quản lý giỏ hàng</h6>
                  </div>
              </div>
          </a>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-md-6 col-lg-4 col-xlg-3">
          <a href="">
              <div class="card card-hover">
                  <div class="box bg-danger text-center">
                      <h1 class="font-light text-white">
                          <i class="mdi mdi-receipt"></i>
                      </h1>
                      <h6 class="text-white">Quản lý Blog tin</h6>
                  </div>
              </div>
          </a>
          </div>
          <!-- Column -->
          <div class="col-md-6 col-lg-2 col-xlg-3">
          <a href="">
              <div class="card card-hover">
                  <div class="box bg-info text-center">
                      <h1 class="font-light text-white">
                          <i class="mdi mdi-relative-scale"></i>
                      </h1>
                      <h6 class="text-white">Quản lý banner
                      </h6>
                  </div>
              </div>
          </a>
          </div>
          <!-- Column -->
          <div class="col-md-6 col-lg-2 col-xlg-3">
              <a href="">
              <div class="card card-hover">
                  <div class="box bg-cyan text-center">
                      <h1 class="font-light text-white">
                          <i class="mdi mdi-pencil"></i>
                      </h1>
                      <h6 class="text-white">Trang Admin</h6>
                  </div>
              </div>
             </a>
          </div>

      </div>
      <!-- ============================================================== -->
      <!-- Sales chart -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
                      <div class="d-md-flex align-items-center">
                          <div>
                              <h4 class="card-title">Theo dõi</h4>
                              <h5 class="card-subtitle">Thông tin trong tháng này</h5>
                          </div>
                      </div>
                      <div class="row">
                          <!-- column -->

                          <div class="col-lg-3">
                              <div class="row">
                                  <div class="col-6">
                                      <div class="bg-dark p-10 text-white text-center">
                                          <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                                          <h5 class="mb-0 mt-1">2540</h5>
                                          <small class="font-light">Tổng người dùng</small>
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="bg-dark p-10 text-white text-center">
                                          <i class="mdi mdi-plus fs-3 font-16"></i>
                                          <h5 class="mb-0 mt-1">120</h5>
                                          <small class="font-light">Người dùng mới</small>
                                      </div>
                                  </div>
                                  <div class="col-6 mt-3">
                                      <div class="bg-dark p-10 text-white text-center">
                                          <i class="mdi mdi-cart fs-3 mb-1 font-16"></i>
                                          <h5 class="mb-0 mt-1">656</h5>
                                          <small class="font-light">Tổng giao dịch </small>
                                      </div>
                                  </div>
                                  <div class="col-6 mt-3">
                                      <div class="bg-dark p-10 text-white text-center">
                                          <i class="mdi mdi-tag fs-3 mb-1 font-16"></i>
                                          <h5 class="mb-0 mt-1">9540</h5>
                                          <small class="font-light">Tổng sản phẩm </small>
                                      </div>
                                  </div>
                                  <div class="col-6 mt-3">
                                      <div class="bg-dark p-10 text-white text-center">
                                          <i class="mdi mdi-table fs-3 mb-1 font-16"></i>
                                          <h5 class="mb-0 mt-1">100</h5>
                                          <small class="font-light">Bài đăng</small>
                                      </div>
                                  </div>
                                  <div class="col-6 mt-3">
                                      <div class="bg-dark p-10 text-white text-center">
                                          <i class="mdi mdi-web fs-3 mb-1 font-16"></i>
                                          <h5 class="mb-0 mt-1">8540</h5>
                                          <small class="font-light">Người dùng online</small>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- column -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
      <!-- ============================================================== -->
      <!-- Sales chart -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Recent comment and chats -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Recent comment and chats -->
      <!-- ============================================================== -->
  </div>
  @endsection
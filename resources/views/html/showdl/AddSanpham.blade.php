@extends('html.index')
@section('content')

<div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title"> </h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?page=home">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                        Thêm sách
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
                        
              <div class="card">
            <form action="{{route('admin.insertsanpham')}}" method="post"  enctype="multipart/form-data"> 
               @csrf
                <div class="card-body">
                    <div class="form-group mb-0">
                        <label for="tensanpham"  style="font-weight: bold; font-size: 17px;">Tên sản phẩm</label>
                        <input type="text" name="tensanpham" value="@php echo (isset($ten_sp)) ? $ten_sp : '' @endphp" required class="form-control" id="tensach" placeholder="Điền tên sản phẩm">
                    </div>

                    <div class="form-group mb-0">
                        <label for="tl" style="font-weight: bold; font-size: 17px;">Thể loại</label>
                        <select class="form-control input-pill" name="loai" id="loai">
                                @if($getTL)
                                @foreach ($getTL as $val){
                            
                                <option value="{{$val->id_loai}}">{{$val->ten_loai}}</option>
                                 @endforeach
                                @endif
                        </select>
                    </div>

                    <div class="form-group mb-0">
                        <label for="NXB"  style="font-weight: bold; font-size: 17px;">NXB</label>
                        <input type="text" name="nxb" value="@php echo (isset($nxb)) ? $nxb : '' @endphp" class="form-control" id="NXB" placeholder="Enter NXB">
                    </div>
                    
                       
                            <div class="form-group mb-0">
                                <label for="bia"  style="font-weight: bold; font-size: 17px;">Bìa sản phẩm</label>
                                <input type="file" name="biasanpham">
                            </div>

                    

                    <div class="form-group mb-0">
                        <label for="gia"  style="font-weight: bold; font-size: 17px;">Giá</label>
                        <input type="number" name="gia" value="@php echo (isset($gia)) ? $gia : '' @endphp" class="form-control" id="gia" placeholder="Enter giá sách">
                    </div>

                    <div class="form-group mb-0">
                        <label for="soluong"  style="font-weight: bold; font-size: 17px; ">Số lượng</label>
                        <input type="int" name="soluong" value="@php echo (isset($soluong)) ? $soluong : '' @endphp" class="form-control" id="soluong" placeholder="Enter số lượng sách">
                    </div>
                     <br>
                    <div class="form-group mb-0">
                        <label for="note"  style="font-weight: bold; font-size: 17px; ">Note</label>
                       <textarea name="note" id="note" cols="100" rows="10"></textarea>
                    </div>
                    
                </div>


                <div class="card-action">
                   <!--<input  type="submit" name= "submit"class="btn btn-success">Thêm mới
                    <input type="reset" class="btn btn-danger">Hủy-->
                    <button type="submit" name="submit" class="btn btn-success">Thêm mới</button>
                    <button type="submit" name="submit" class="btn btn-danger">Hủy</button>
                  
                </div>
            </form>
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
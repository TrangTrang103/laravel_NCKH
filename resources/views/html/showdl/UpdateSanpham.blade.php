<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>updatebook</title>
</head>
<body>
   

<div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title"> </h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.showsanpham')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                        Sửa sách
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
                        <h2 class="text-success" style="text-align: center; ">FORM SỬA SÁCH</h2>
              <div class="card">
               
             
            <form action="{{route('admin.updatesanpham')}}" method="post"  enctype="multipart/form-data"> 
               
               @csrf

             
               @if($getid)
               <input style="visibility: hidden"  name="id" value="{{$getid}}" required class="form-control" id="tensach" >
               @endif
                    
            
              
                @if($getsanpham)
                 @foreach($getsanpham as $item)
                <div class="card-body">
                    <div class="form-group mb-0">
                        <label for="tensach"  style="font-weight: bold; font-size: 17px;">Tên sách</label>
                        <input type="text" name="tensanpham" value="{{$item->ten_sp}}" required class="form-control" id="tensanpham" placeholder="Điền tên sách">
                    </div>
                 @endforeach
                @endif
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
                        <label for="tacgia"  style="font-weight: bold; font-size: 17px;">NXB</label>
                        <input type="text" name="nxb" id="nxb" value="{{$item->nxb}}" required class="form-control"  placeholder="Điền tên tác giả">
                    </div>
                 
                            <div class="form-group mb-0">
                                <label for="tacgia"  style="font-weight: bold; font-size: 17px;">Bìa sách</label>
                                <input type="file" name="biasanpham" >
                            </div>
                            @if($getsanpham)
                            @foreach($getsanpham as $item)     
                  
                    <div class="form-group mb-0">
                        <label for="gia"  style="font-weight: bold; font-size: 17px;">Giá</label>
                        <input type="number" name="gia" value="{{$item->gia_tien}}" class="form-control" id="gia" placeholder="Enter giá sách">
                    </div>

                    <div class="form-group mb-0">
                        <label for="soluong"  style="font-weight: bold; font-size: 17px; ">Số lượng</label>
                        <input type="text" name="soluong" value="{{$item->so_luong}}" class="form-control" id="soluong" placeholder="Enter số lượng sách">
                    </div>
                     <br>
                    <div class="form-group mb-0">
                        <label for="soluong"  style="font-weight: bold; font-size: 17px; ">Note</label>
                       <textarea name="note" id="note" cols="150" rows="10" value="{{$item->note}}"></textarea>
                    </div>
                    @endforeach
                    @endif
                </div>


                <div class="card-action">
                   <!--<input  type="submit" name= "submit"class="btn btn-success">Thêm mới
                    <input type="reset" class="btn btn-danger">Hủy-->
                    <button type="submit" name="submit" class="btn btn-success">Chỉnh sửa</button>
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
        


</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
@extends('html.index')
@section('content')
<div class="col-12 d-flex no-block align-items-center">
    <h4 class="page-title">Tất cả sản phẩm</h4>
    <div class="ms-auto text-end">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active" aria-current="page">
              <i class="far fa-edit"></i>   Sản phẩm
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
          @if($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
              <p>{{$message}}</p>
          </div>
          @endif
    <div class="card">
      <div class="card-body">
    
     
        <div class="table-responsive">
        <h5 class="card-title"> 
        <a href="{{route('admin.addsanpham')}}">
            <button type="button" class="btn btn-outline-danger ">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"></path>
          </svg>
        
        </button>
        </a>
        <p>
        </p>
            </h5>
          <table
            id="tableexample"
            class="table table-striped table-bordered"
          >
            <thead>
              <tr>
                <th style="font-weight: bold;">ID</th>
                <th style="font-weight: bold;">Tên sản phẩm</th>
                <th style="font-weight: bold;">Loại</th>
                <th style="font-weight: bold;">Nhà xuất bản</th>
                <th style="font-weight: bold;">Giá sách</th>
                <th style="font-weight: bold;">Số lượng</th>
                <th style="font-weight: bold;">Bìa sản phẩm</th>
                <th style="font-weight: bold;">Hành động</th>
               
                

              </tr>
            </thead>
            @if($getsp)
            <tbody>
             
                   @foreach($getsp as $key)
                   
              <tr>
                <td>{{$key->id_sp}}</td>
                <td>{{$key->ten_sp}}</td>
                <td>{{ $key->ten_loai}}</td>
                <td>{{ $key->nxb}}</td>
                <td>{{ $key->gia_tien}}</td>
                <td>{{ $key->so_luong}}</td>
                <td><img style="width:200px;height:200px" src="../biasanpham/{{ $key->image}}" alt="bìa"></td>
               
               
                <td>
                  
                 <a href="ShowSanpham/{{$key->id_sp}}/delete" onclick="javascript: return confirm('Bạn có chắc chắn muốn xóa dữ liệu này?');">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>                 

                 </a>
                    
                <a href="ShowSanpham/{{$key->id_sp}}/creatsanpham">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
                </a>
                </td>
             
                
              </tr>
              @endforeach
            </tbody>
           @endif
          </table>
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
    <link
href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
rel="stylesheet"
/>
<link
rel="stylesheet"
type="text/css"
href="../assets/extra-libs/multicheck/multicheck.css"
/>

<script src="../assets/libs/jquery/dist/jquery.min.js"></script>

<script src="../assets/extra-libs/DataTables/datatables.min.js"></script> 


<script>
/****************************************
*       Basic Table                   *
****************************************/

    $('#tableexample').DataTable();

/*
$(document).ready(function(){
      $('.delete_form').on('submit', function(){
         if(confirm("Are you sure you want to delete it?"))
         {
             return true;
         }
         else
         {
             return false;
         }
      });
  });
  */
 
</script>
@endsection
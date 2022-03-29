<?php

namespace App\Http\Controllers;

use Illuminate\Database\Console\DbCommand;

use App\Http\Kerne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\HomeModel;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\File;
class ShowSanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Sanpham()
    {
        $getsp=DB::table('san_pham')
        ->join('loai','san_pham.loai', '=', 'loai.id_loai')
        ->get()
        ->toArray();
        return view('html.showdl.ShowSanpham',[
            'getsp' => $getsp
        ]);
        
    }
   
     public function addsanpham(Request $request)
     {  //$data = new HomeModel;
         //$data->tensach = $request->tensach;
         //$data->tl = $request->tl;
         //$data->nxb = $request->nxb;
         //$data->tac_gia = $request->tacgia;
         ////$data->gia = $request->gia;
         //$data->so_luong = $request->soluong;
         //$data ->save();
         //$tensach = $request->tensach;
         //$tl = $request->input('tl');
         // $nxb = $request->input('nxb');
         //$tacgia = $request->input('tacgia');
         //$gia = $request->input('gia');
         //$soluong = $request->input('soluong');

         $getTL=DB::table('loai')->get()->toArray();
         return view('html.showdl.AddSanpham', [
          'getTL'=> $getTL,
         
         ]);
     }
     
     public function creatsanpham($id)
     {  //$data = new HomeModel;
         //$data->tensach = $request->tensach;  
         //$data->tl = $request->tl;
         //$data->nxb = $request->nxb;
         //$data->tac_gia = $request->tacgia;
         ////$data->gia = $request->gia;
         //$data->so_luong = $request->soluong;
         //$data ->save();
         //$tensach = $request->tensach;
         //$tl = $request->input('tl');
         // $nxb = $request->input('nxb');
         //$tacgia = $request->input('tacgia');
         //$gia = $request->input('gia');
         //$soluong = $request->input('soluong');
         $getid=$id;
        
         $getTL=DB::table('loai')->get()->toArray();
         
         $getsanpham=DB::table('san_pham')->where('id_sp','=',$getid)->get()->toArray();
         return view('html.showdl.UpdateSanpham', [
          'getTL'=> $getTL,
          'getsanpham' => $getsanpham,
           'getid' => $getid,
         ]);
     }
     
     
     public function updatesanpham(Request $request)
     {
        
        //if ($request->filled(image)) {
            //$file = $request->image;
            //dd($file);
            //$destination_Path = public_path('biasach.bia');
            //$file_name=$file->getClientoriginalName();
            
           // $file->move('biasach',$file->getClientOriginalName());
    
        //}
        //}
        if ($request->hasFile('biasanpham')) {
            $image = $request->biasanpham;
            $text = $request->biasanpham->extension();
           //$image_name=$image->getClientoriginalName();
           $file_name = time(). '-'.'sanpham' .'.'.$text;
           $storedPath = $image->move('biasanpham', $file_name);
            //$path = $request->photo->store('biasach',  $image);
       }else{
           $file_name = 'noname.jpg';
       }    
        $id = $request->id;
     
        $update=DB::table('san_pham');
        $update->where('id_sp', '=', $id)->update([
            'ten_sp'=>$request->tensanpham,
            'loai'=> $request->loai,
            'nxb'=> $request->nxb,
            'gia_tien' => $request->gia, 
            'image' => $file_name,         
            'so_luong' => $request->soluong,
            'note' => $request->note
          ]);
        
        return redirect()->route('admin.showsanpham')->with('success','Sách được sửa thành công');
      
     }
     
      //DB::insert('insert into sach (tensach, tl,nxb,tac_gia,gia,so_luong) values (?, ?,?,?,?,?)', [$tensach,$tl,$nxb,$tacgia,$gia,$soluong]);
      //return redirect('bookadd');

     
   
    //public function DeleteBook()
    //{
       
    //}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * /*
     */
    
    public function insertsanpham(Request $request)
    {
        if ($request->hasFile('biasanpham')) {
            $image = $request->biasanpham;
            $ext = $request->biasanpham->extension();
           //$image_name=$image->getClientoriginalName();
           $file_name = time(). '-'.'sanpham' .'.'.$ext;
           $storedPath = $image->move('biasanpham', $file_name);
            //$path = $request->photo->store('biasach',  $image);
       }else{
           $file_name = 'noname.jpg';
       }    
        $add=DB::table('san_pham');
        $add->insert([
          'ten_sp'=>$request->tensanpham,
          'loai'=> $request->loai,
          'nxb'=> $request->nxb,
          'gia_tien' => $request->gia, 
          'image' => $file_name,         
          'so_luong' => $request->soluong,
          'note' => $request->note
        ]);
        return redirect()->route('admin.showsanpham')->with('success','Sản phẩm được thêm thành công');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Request $request,$id)
    {
              
                //if ($id) {
                   $dele = DB::table('san_pham')->where('id_sp', '=', $id);
                   $dele->delete();
                return redirect()->route('admin.showsanpham')->with('success','Dữ liệu xóa thành công.');
    }
    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Database\Console\DbCommand;

use App\Http\Kerne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HomeModel;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\File;
use Illuminate\Support\Facades\Auth;
class ShowHoadonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showhoadon()
    {
        $gethoadon=DB::table('don_hang')
        ->join('giao_dich','don_hang.giaodich_id', '=', 'giao_dich.id')
        ->join('san_pham','don_hang.sanpham', '=', 'san_pham.id_sp')
        ->get()
        ->toArray();
        return view('html.showhoadon.ShowHoadon',[
            'gethoadon' => $gethoadon
        ]);
        
    }
   
    
 
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
    
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function destroy(Request $request,$id)
    {
              
                //if ($id) {
                   $dele = DB::table('san_pham')->where('id_sp', '=', $id);
                   $dele->delete();
                return redirect()->route('admin.showsanpham')->with('success','Dữ liệu xóa thành công.');
    }
    */
}
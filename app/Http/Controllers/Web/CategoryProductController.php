<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryProductController extends Controller
{
    public function index()
    {
        // $a = '';
        $categories = DB::table('loai')->select('loai.*')->get();
        foreach ($categories as $category) {
            // die($category->id_loai);
            $product = DB::table('san_pham')->where('loai', '<>', $category->id_loai)->get();
            // die($product);
            // $a = $category->ten_loai;
            // die($a);
        }

        // $product = DB::table('san_pham')
        //     ->join('loai', 'san_pham.loai', '=', 'loai.id_loai')
        //     ->select('san_pham.*', 'loai.*')
        //     ->where('loai.ten_loai', [$a])
        //     ->get();
        //     die($product);
        return view('frontend.category-product.category-product', compact('product', 'categories'));
    }
}



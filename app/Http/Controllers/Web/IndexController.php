<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $category = DB::table('loai')->select('loai.id_loai')->get();
        $product = DB::table('san_pham')->select('san_pham.*')->latest('created_at')->take(8)->get();
        $latestProductFive = DB::table('san_pham')->select('san_pham.*')->latest('created_at')->take(6)->get();
        $categories = DB::table('loai')->select('loai.*')->get();
        return view('frontend.index', compact('product', 'categories', 'latestProductFive'));
    }
}



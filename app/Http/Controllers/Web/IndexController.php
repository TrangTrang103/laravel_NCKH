<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $latestProduct = DB::table('san_pham')->select('san_pham.*')->latest('created_at')->take(8)->get();
        $latestProductThreeType = DB::table('san_pham')->select('san_pham.*')->latest('created_at')->take(3)->get();
        $highestPriceProduct = DB::table('san_pham')->select('san_pham.*')->max('gia_tien')->take(3)->get();
        $highestQuantityProduct = DB::table('san_pham')->select('san_pham.*')->max('so_luong')->take(3)->get();
        // $highestPriceProduct = DB::table('san_pham')->where('gia_tien', DB::raw());
        return view('frontend.index', compact('latestProduct', 'latestProductThreeType', 'highestPriceProduct', 'highestQuantityProduct'));
    }
}



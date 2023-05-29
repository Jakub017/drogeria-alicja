<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Brand;
use App\Models\Paper;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Models\PremiumProduct;
use TCG\Voyager\Facades\Voyager;

class PagesController extends Controller
{
    public function home() {
        $products = Product::orderby('created_at', 'desc')->get();
        $premium_products = PremiumProduct::orderby('created_at', 'desc')->get();
        $brands = Brand::get();
        $papers = Paper::get();
        return view('home', compact('products', 'premium_products', 'brands', 'papers'));
    }

    public function product(Product $product) {
        $papers = Paper::get();
        return view('product', compact('product', 'papers'));
    }

    public function premium_product(PremiumProduct $premium_product) {
        $papers = Paper::get();
        return view('premium-product', compact('premium_product', 'papers'));
    }


    public function calendar() {
        $papers = Paper::get();
        $today = (new DateTime())->format('Y-m-d');

        $today_promotions = Promotion::where('date', '>=', $today)->orderby('date', 'asc')->get();
        $promotions = Promotion::where('date', '>=', $today)->orderby('date', 'asc')->offset(1)->limit(9)->get();


        return view('calendar', compact('promotions', 'today_promotions', 'papers'));
    }
}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class IndexController extends Controller
{
    // функция для открытия главной страницы
    public function index() {
        $products = Product::where('isActive', 1)->get();
        $reviews = Review::where('isActive', 1)->get();
        $partners = Partner::where('isActive', 1)->get();
        return view('Client.index', compact('products','reviews', 'partners'));
    }
    public function about() {
        return view('client.about');
    }
    public function services_client() {
        return view('client.services_client');
    }
    public function services_detail($id) {
        $products = Product::where('id',$id)->first();
        return view('Client.services_detail', compact('products'));
    }
    public function page_404() {
        return view('client.page_404');
    }
    public function soon() {
        return view('client.soon');
    }
    public function contact() {
        return view('client.contact');
    }
    public function fitback() {
        return view('client.fitback');
    }
}

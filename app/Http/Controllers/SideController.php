<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;

class SideController extends Controller
{
    public function index()
    {
        return view('welcome',[
            'best_price_products'=>Product::where('disabled',0)->where('best_price',1)->take(12)->get(),
            'new_item_products'=>Product::where('disabled',0)->where('new_item',1)->take(12)->get(),
            'bestsellers_products'=>Product::where('disabled',0)->where('bestsellers',1)->take(12)->get(),
        ]);
    }

    public function dostavka()
    {
        return view('pages.info.dostavka');
    }

    public function oplata()
    {
        return view('pages.info.oplata');
    }

    public function politika()
    {
        return view('pages.info.politika');
    }

    public function rent()
    {
        return view('pages.rent');
    }

    public function company()
    {
        return view('pages.company');
    }


    public function search(Request $request){
        $search = $request->s;
        $products = Product::where('disabled',0)->where('name','LIKE',"%$search%")->paginate(12);
        return view('catalog.search',compact('search','products'));
    }

    public function admin()
    {
        return view('admin.index',[
            'subcategory_take'=>Subcategory::orderBy('created_at')->take(5)->get(),
            'product_take'=>Product::where('disabled',0)->orderBy('created_at')->take(5)->get(),
            'order_take'=>Order::orderBy('created_at')->take(5)->get(),
        ]);
    }

    public function login_admin()
    {
        return view('admin.auth.login');
    }
}

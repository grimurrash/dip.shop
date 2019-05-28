<?php

namespace App\Http\Controllers;

use App\Http\Resources\BasketResource;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BasketController extends Controller
{

    public function addProduct(Product $product, Request $request){
        $basket = $request->session()->get('basket');
        if (!is_null($basket)) {
            for ($i = 0; $i < count($basket); $i++) {
                if ($basket[$i]['product_id'] == $product->id) {
                    $basket[$i]['count']++;
                    $request->session()->put('basket', $basket);
                }
            }
        }
        return view('catalog.cart');
    }
    public function removeProduct(Product $product, Request $request){
        $basket = $request->session()->get('basket');

        if (!is_null($basket)) {
            for ($i = 0; $i < count($basket); $i++) {
                if ($basket[$i]['product_id'] == $product->id) {
                    $basket[$i]['count']--;
                    if($basket[$i]['count'] <= 0){
                        array_splice($basket,$i,1);
                    }
                    $request->session()->put('basket', $basket);
                }
            }
        }
        return view('catalog.cart');
    }
    public function addItem(Product $product, Request $request)
    {
        $basket = $request->session()->get('basket');

        if (!is_null($basket)) {
            for ($i = 0; $i < count($basket); $i++) {
                if ($basket[$i]['product_id'] == $product->id) {
                    $basket[$i]['count']++;
                    $request->session()->put('basket', $basket);
                    $text = count($basket) . ' позиций на сумму';
                    $total = 0;
                    foreach ($basket as $item) {
                        $total += $item['count'] * $item['product']['price'];
                    }
                    $text .= ' ' . $total . ' р';
                    return response()->json([
                        'status' => true,
                        'text' => $text,
                    ])->setStatusCode('200', 'Basket list');
                }
            }
        } else {
            $basket = [];
        }
        $basket[] = array(
            'product_id' => $product->id,
            'product' => [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image->url,
            ],
            'count' => 1,
        );
        $request->session()->put('basket', $basket);
        $text = count($basket) . ' позиций на сумму';
        $total = 0;
        foreach ($basket as $item) {
            $total += $item['count'] * $item['product']['price'];
        }
        $text .= ' ' . $total . ' р';
        return response()->json([
            'status' => true,
            'text' => $text,
        ])->setStatusCode('200', 'Basket list');
    }

    public function index(Request $request)
    {
        $basket = $request->session()->get('basket');
        if (is_null($basket)) {
            $basket = [];
        }
        $text = '';

        foreach ($basket as $item) {
            $product = Product::find($item['product_id']);
            $text .= '
                <div class="row">
                    <div class="col-xs-3 col-sm-2"><img src="' . $product->image->url . '"></div>
                    <div class="col-xs-4 col-sm-5"><a href="' . route('catalog.products.show', $product) . '">' . $product->name . '</a></div>
                    <div class="col-xs-2 text-right"><span>' . $item['count'] . ' шт.</span></div>
                    <div class="col-xs-3 text-nowrap"><b>' . $product->price . ' Р </b></div>
                </div><hr>';
        }
        $text .= '<div class="row">
            <div class="col-xs-5 col-sm-7">
                <button type="button" data-dismiss="popover" class="btn btn-default continue hidden-xs">ПРОДОЛЖИТЬ ПОКУПКИ</button>
            </div>
            <div class="col-xs-7 col-sm-5">
                <button type="button" class="btn btn-primary js_go2cart">ПЕРЕЙТИ В КОРЗИНУ</button>
            </div>
        </div>';
        return response()->json([
            'status' => true,
            'text' => $text
        ])->setStatusCode('200', 'Basket list');
    }

    public function show(){
        return view('catalog.cart');
    }

    public function destroy(Request $request)
    {
        $request->session()->forget('basket');
        return view('catalog.cart');
    }

    public function removeItem(Product $product, Request $request)
    {

    }
}

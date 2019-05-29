<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.orders.index', [
            'orders' => Order::orderBy('id')->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalog.order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'fio' => ['required', 'string', 'max:255', 'regex:/[А-Яа-яёЁ]{2,}[ ][А-Яа-яёЁ]{2,}[ ][А-Яа-яёЁ]{2,}/u'],
            'email' => ['required', 'string', 'max:255', 'email'],
            'tel' => ['required', 'regex:/((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/u'],
            'address' => ['required', 'string', 'max:255'],
            'dom' => ['required', 'string', 'max:255'],
            'kv' => ['required', 'string', 'max:255'],
            'polit' => ['accepted'],
        ], [
            'required' => 'Поле должно быть заполенно',
            'email.email' => 'Неверный формат email',
            'tel.regex' => 'Неверный формат номера',
            'fio.regex' => 'Неверный формат ФИО',
        ]);
        if ($valid->fails()) {
            $request->session()->flush('errors', 'Ошибка при оформлении заявки. Не все поля заполнены или введены не верно');
            return redirect()->back()->withErrors($valid->errors())->withInput();
        }
        $basket = $request->session()->get('basket');
        if (is_null($basket) || count($basket) < 1) {
            $request->session()->flush('errors', 'Ошибка при оформлении заявки. Корзина не должна быть пустой');
            return redirect()->back()->withErrors($valid->errors())->withInput();
        }

        $order = Order::create([
            'fio' => $request->fio,
            'email' => $request->email,
            'phone' => $request->tel,
            'address' => $request->address . ' ' . $request->dom . '/' . $request->kv,
            'comment' => $request->comment
        ]);

        foreach ($basket as $item) {
            $product = Product::find($item['product_id']);
            $product->update([
                'quantity' => $product->quantity - $item['count']
            ]);
            OrderItem::create([
                'order_id'=>$order->id,
                'product_id'=>$product->id,
                'count'=>$item['count']
            ]);
        }
        $request->session()->put('orderId',$order->id);
        $request->session()->forget('basket');
        return redirect()->route('order.end');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('admin.orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        if($order->status === 'В ожидании'){
            $order->update([
                'status'=>'В процессе'
            ]);
        }else if($order->status === 'В процессе'){
            $order->update([
                'status'=>'Выполнен'
            ]);
        }
        $request->session()->flush('message_success','Статус заказа изменен');
        return redirect()->route('admin.orders.show',$order);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, Request $request)
    {
        $order->update([
            'status'=>'Отменен'
        ]);
        $request->session()->flush('message_success','Заказ отменен');
        return redirect()->route('admin.orders.show',$order);
    }
}

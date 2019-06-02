<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index', [
            'subcategories' => Subcategory::all(),
            'products' => Product::orderBy('id')->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.index', [
            'subcategories' => Subcategory::all(),
            'products' => Product::orderBy('id')->paginate(8)
        ]);
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
            'name' => ['required', 'string', 'max:255', 'unique:products'],
            'subcategory_id' => ['required', 'exists:subcategories,id'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png,gif', 'max:10240']
        ], [
            'name.required' => 'Введите название товара',
            'name.max' => 'Название не должно превышать 255 символов',
            'name.unique' => 'Товар с таким названием уже существует',
            'subcategory_id.required' => 'Введите категорию товара',
            'subcategory_id.exists' => 'Категория не найдена',
            'price.required' => 'Введите цену товара',
            'price.numeric' => 'Цена должна быть числом',
            'quantity.required' => 'Введите кол-во товара',
            'quantity.numeric' => 'Кол-во должна быть числом',
            'image.required' => 'Введите изображение товара',
            'image.image' => 'Файл должен быть изображением',
            'image.mimes' => 'Изображение должно быть файлом расширения: jpeg, jpg, png, gif',
            'image.max' => 'Изображение должно весить меньше 10 Мб',
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withInput()->withErrors($valid->errors());
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug(mb_substr($request->name, 0, 30) . Carbon::now()->format('dmYHi'), '-') . '.' . $image->getClientOriginalExtension();
            $image->move(storage_path('images'), $imageName);
            $image = Image::create([
                'name' => $imageName,
                'url' => url('storage/images/' . $imageName)
            ]);
        }

        $product = Product::create([
            'name' => $request->name,
            'subcategory_id' => $request->subcategory_id,
            'slug' => Str::slug(mb_substr($request->name, 0, 30)),
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image_id' => $image->id,
            'description' => is_null($request->description) ? '' : $request->description,
            'details' => is_null($request->details) ? '' : $request->details,
            'best_price' => $request->best_price == 'on' ? 1 : 0,
            'new_item' => $request->new_item == 'on' ? 1 : 0,
            'bestsellers' => $request->bestsellers == 'on' ? 1 : 0,
        ]);
        Session::flash('message_success', 'Товар «' . $product->name . '» успешно создан');
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('catalog.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'subcategories' => Subcategory::all(),
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $valid = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:products,id,' . $product->id],
            'subcategory_id' => ['required', 'exists:subcategories,id'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
        ], [
            'name.required' => 'Введите название товара',
            'name.max' => 'Название не должно превышать 255 символов',
            'name.unique' => 'Товар с таким названием уже существует',
            'subcategory_id.required' => 'Введите категорию товара',
            'subcategory_id.exists' => 'Категория не найдена',
            'price.required' => 'Введите цену товара',
            'price.numeric' => 'Цена должна быть числом',
            'quantity.required' => 'Введите кол-во товара',
            'quantity.numeric' => 'Кол-во должна быть числом',
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withInput()->withErrors($valid->errors());
        }

        if ($request->hasFile('image')) {
            $valid = Validator::make($request->all(), [
                'image' => ['required', 'image', 'mimes:jpeg,jpg,png,gif', 'max:10240']
            ], [
                'image.required' => 'Введите изображение товара',
                'image.image' => 'Файл должен быть изображением',
                'image.mimes' => 'Изображение должно быть файлом расширения: jpeg, jpg, png, gif',
                'image.max' => 'Изображение должно весить меньше 10 Мб',
            ]);
            if ($valid->fails()) {
                return redirect()->back()->withInput()->withErrors($valid->errors());
            }
            $image = $request->file('image');
            $imageName = Str::slug(mb_substr($request->name, 0, 30) . Carbon::now()->format('dmYHi'), '-') . '.' . $image->getClientOriginalExtension();
            $image->move(storage_path('images'), $imageName);
            $image = Image::create([
                'name' => $imageName,
                'url' => url('storage/images/' . $imageName)
            ]);
        } else {
            $image = $product->image;
        }

        $product->update([
            'name' => $request->name,
            'subcategory_id' => $request->subcategory_id,
            'slug' => Str::slug(mb_substr($request->name, 0, 30)),
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image_id' => $image->id,
            'description' => is_null($request->description) ? '' : $request->description,
            'details' => is_null($request->details) ? '' : $request->details,
            'best_price' => $request->best_price == 'on' ? 1 : 0,
            'new_item' => $request->new_item == 'on' ? 1 : 0,
            'bestsellers' => $request->bestsellers == 'on' ? 1 : 0,
        ]);
        Session::flash('message_success', 'Товар «' . $product->name . '» успешно создан');
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Session::flash('message_success', 'Товар «' . $product->name . '» успешно удален');
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}

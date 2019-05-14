<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.subcategories.index', [
            'categories' => Category::all(),
            'subcategories' => Subcategory::orderBy('created_at')->paginate(8)
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSub()
    {
        return view('catalog.index',[
            'categories' =>Category::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subcategories.index', [
            'categories' => Category::all(),
            'subcategories' => Subcategory::orderBy('created_at')->paginate(8)
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
            'title' => ['required', 'string', 'max:255', 'unique:categories'],
            'category_id' => ['required', 'exists:categories,id']
        ], [
            'title.required' => 'Введите название категории',
            'title.max' => "Название не должно быть длиннее 255 символов",
            'title.unique' => 'Категория с таким названием уже существует',
            'category_id.required' => 'Укажите категорию',
            'category_id.exists' => 'Укажите существующую категорию',
        ]);
        if ($valid->fails()) {
            return redirect()->back()->withInput()->withErrors($valid->errors());
        }

        $category = Subcategory::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->title, '-')
        ]);
        Session::flash('message_success', 'Подкатегория «' . $category->title . '» успешно создана');
        return redirect()->route('admin.subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        return view('catalog.show', [
            'products' => Product::where('subcategory_id',$subcategory->id)->paginate(12),
            'subcategory' => $subcategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        Session::flash('message_success', 'Подкатегория «' . $subcategory->title . '» успешно удалена');
        $subcategory->delete();
        return redirect()->route('admin.subcategories.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function category(){
        $categories = Category::where('is_active', 1)->get();
        return view('category', compact('categories'));
    }

    public function products($id){
        $products = Product::where('category_id', $id)->where('is_active', 1)->get();
        return view('product', compact('products'));
    }

    public function collections($id){
        $collections = Collection::where('category_id', $id)->where('is_active', 1)->get();
        return view('collections', compact('collections'));
    }

    public function collection($id){
        $collection = Collection::where('id', $id)->where('is_active', 1)->first();
        return view('single-collection', compact('collection'));
    }

    public function product($id){
        $product = Product::where('id', $id)->where('is_active', 1)->first();
        return view('single-product', compact('product'));
    }

    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
            'is_active' => 'required'
        ]);

        $input = $request->all();

        Category::create($input);
        return redirect()->route('category.index')->with('success','Категоря успешно создана');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

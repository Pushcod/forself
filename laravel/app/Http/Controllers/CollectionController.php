<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Collection;

class CollectionController extends Controller
{


    public function category(){
        $categories = Category::where('is_active', 1)->get();
        return view('category', compact('categories'));
    }

    public function index(){
        $collections = Collection::all();
        return view('collection.index', compact('collections'));
    }

//    public function products($id){
//        $products = Product::where('category_id', $id)->where('is_active', 1)->get();
//        return view('product', compact('products'));
//    }

    public function create()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('collection.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'is_active' => 'required',
            'category_id'=>'required',
            'image' => 'required|Image|mimes:jpg,png,jpeg,bmp,gif,svg,webp|max:2048'
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destionPath = 'images/collections/';
            $profileImage = date('YmHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionPath,$profileImage);
            $input['image'] = "$profileImage";
        }

        Collection::create($input);
        return redirect()->route('collection.index')->with('success','Карточка успешно создана');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collection $collection)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'is_active' => 'required',
            'category_id'=>'required',
            'image' => 'required|Image|mimes:jpg,png,jpeg,bmp,gif,svg,webp|max:2048'

        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destionPath = 'images/collections/';
            $profileImage = date('YmHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionPath,$profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $collection->update($input);

        return redirect()->route('collection.index')->with('success', 'Ваш пост обновлена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();
        return redirect()->route('collection.index')->with('success', 'Ваша запись пропала');
    }
}

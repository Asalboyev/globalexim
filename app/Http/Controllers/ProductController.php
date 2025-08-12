<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Lang;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        $catalog = Catalog::all();
        return view('app.products.index', compact('products', 'catalog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Lang::all();
        $catalog = Catalog::all();
        return view('app.products.create', compact('languages', 'catalog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title.ru' => 'required',
            'desc.ru' => 'required',
            'catalog_id' => 'required|integer',
            // 'vendor_code' => 'required',
            'main_img' => 'required',
        ]);

       $data = $request->all();

        if($request->hasFile('main_img')) {
            $path = $request->file('main_img')->store('upload/images', 'public');
            $data['main_img'] = $path;
        }

        Product::create($data);

        return redirect()->route('products.index')->with(['message' => 'Successfully added!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $languages = Lang::all();
        $product = Product::find($id);
        $catalog = Catalog::all();
        return view('app.products.edit', compact('languages', 'product', 'catalog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
//        dd($request);
        $request->validate([
            'title.ru' => 'required',
            'desc.ru' => 'required',
            'catalog_id' => 'required|integer',
        ]);

        $data = $request->all();

        if($request->hasFile('main_img')) {
            $path = $request->file('main_img')->store('upload/images', 'public');
            $data['main_img'] = $path;
        }

        $product->update($data);

        return redirect()->route('products.index')->with(['message' => 'Successfully updates!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        
        return redirect()->route('products.index')->with(['message' => 'Successfully deleted!']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Statistic;
use App\Models\Lang;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statistics = Statistic::paginate(10);
        $product = Product::all();
        return view('app.statistics.index', compact('statistics','product'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Lang::all();
        $products = Product::all();
        return view('app.statistics.create', compact('products','languages'));
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
            'title.en' => 'required|max:255',
            'number' => 'required|integer'
        ]);

        Statistic::create($request->all());

        return redirect()->route('statistics.index')->with(['message' => 'Successfully added!']);
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
        $statistics = Statistic::find($id);
        $product = Product::all();

        return view('app.statistics.edit', compact([
            'statistics',
            'languages',
            'product'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statistic $statistic)
    {
        $request->validate([
            'title.ru' => 'required|max:255',
            'number' => 'required|integer'
        ]);

        $statistic->update($request->all());

        return redirect()->route('statistics.index')->with(['message' => 'Successfully updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Statistic::find($id)->delete();

        return redirect()->route('statistics.index')->with(['message' => 'Successfully deleted!']);
    }
}

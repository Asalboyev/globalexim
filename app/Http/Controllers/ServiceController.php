<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('app.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Lang::all();
        return view('app.services.create', compact('languages'));
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
            'img' => 'required'
        ]);

        $data = $request->all();

        if($request->hasFile('img')) {
            $path = $request->file('img')->store('upload/services', 'public');
            $data['img'] = $path;
        }

        Service::create($data);

        return redirect()->route('services.index')->with(['message' => 'Successfully added!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        $languages = Lang::all();
        return view('app.services.edit', compact('service', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title.ru' => 'required',
            'desc.ru' => 'required'
        ]);

        $data = $request->all();

        if($request->hasFile('img')) {
            $path = $request->file('img')->store('upload/services', 'public');
            $data['img'] = $path;
        }

        $service->update($data);

        return redirect()->route('services.index')->with(['message' => 'Successfully updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();

        return redirect()->route('services.index')->with(['message' => 'Successfully deleted!']);
    }
}

<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Slider::all();

        return view('admin.slider.index',[
            'data'=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Slider::all();
        return view('admin.slider.create',[
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= new Slider();
        $data->title = $request->title;

        if($request->file('image')){
            $data->image = $request->file('image')->store('images/slider');
        }
        $data->save();
        return redirect('admin/slider');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Slider::find($id);
        return view('admin.slider.show',[
            'data'=> $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
        $data=Slider::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/slider');
    }
}

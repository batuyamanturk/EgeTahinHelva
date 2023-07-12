<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Gallery::all();

        return view('admin.gallery.index',[
            'data'=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Gallery::all();
        return view('admin.gallery.create',[
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= new Gallery();
        $data->title = $request->title;
        $data->extension = $request->extension;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images/gallery');
        }
        $data->save();
        return redirect('admin/gallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Gallery::find($id);
        return view('admin.gallery.show',[
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
        $data=Gallery::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/gallery'); 
    }
}

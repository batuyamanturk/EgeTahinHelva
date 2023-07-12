<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.product.index',[
            'data'=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.product.create',[
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= new Product();
        $data->parent_id = $request->parent_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images/product');
        }
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Product::find($id);
        return view('admin.product.show',[
            'data'=> $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Product::find($id);
        $datalist = Category::all();
        return view('admin.product.edit',[
            'data'=> $data,
            'datalist'=> $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Product::find($id);
        $data->parent_id = $request->parent_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images/product');
        }
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Product::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/product'); 
    }
}

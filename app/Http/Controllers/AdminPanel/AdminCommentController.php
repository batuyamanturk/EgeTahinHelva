<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class AdminCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Comment::all();
        return view('Admin.comment.index',compact('data'));
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data =Comment::find($id);
        return view('Admin.comment.edit',compact('data'));
    }

    public function update(Request $request,$id) 
    {
        $data = Comment::all();
        $value = Comment::find($id);
        $value->admin_note = $request->admin_note;
        if($request->admin_note == "Sil")
        {
            $value->delete();
            return redirect(route('admin.comment.index'));
        }
        $value->save();
        return redirect(route('admin.comment.index'));
    }

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Comment::find($id);
        $data->delete();
        return redirect(route('admin.comment.index'));
    }
}

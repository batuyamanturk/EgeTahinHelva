<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class AdminHomeController extends Controller
{
    public function index()
    {
        
        return view('admin.index');
    }

    public function settings()
    {
        
        $data=Settings::first();
        if ($data==null)
        {
            $data=new Settings();
            $data->title = 'Project title';
            $data->save();
            $data = Settings::first();
        }

        return view("admin.settings",['data'=>$data]);
    }

    public function settingsUpdate(Request $reguest)
    {
        $id=$reguest->input('id');
        $data = Settings::find($id);
        $data->title=$reguest->input('title');
        $data->keywords=$reguest->input('keywords');
        $data->description=$reguest->input('description');
        $data->company=$reguest->input('company');
        $data->address=$reguest->input('address');
        $data->phone=$reguest->input('phone');
        $data->fax=$reguest->input('fax');
        $data->email=$reguest->input('email');
        $data->aboutus=$reguest->input('aboutus');
        $data->contact=$reguest->input('contact');  
        $data->save();
        return redirect()->route('admin.settings');
    }

    
}

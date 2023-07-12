<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Product;
use App\Models\Settings;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    public function index()
    {   
        $tableName = 'Sliders';
        $settings = Settings::first();
        $categorylist=Category::where('status','Stokta var')->get();
        $gallery = Gallery::limit(3)->get();
        $slider = Slider::limit(3)->get();
        return view('home.index',[
            'categorylist'=>$categorylist,
            'settings'=>$settings,
            'gallery'=>$gallery,
            'slider'=>$slider
        ]);
    }
    
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    
    public function categoryproducts($id)
    {
        $settings = Settings::first();
        $category = Category::find($id);
        $categorylist=Category::where('status','Stokta var')->get();
        $products = DB::table('products')->where('parent_id',$id)->where('status','Stokta var')->get();
        return view('home.product.categoryproducts', [
            'category'=>$category,
            'products'=>$products,
            'categorylist'=>$categorylist,
            'settings'=>$settings
        ]);
    }


    public function product($id)
    {
        $settings = Settings::first();
        $categorylist=Category::where('status','Stokta var')->get();
        $data = Product::find($id);
        $categoryname = Category::where('id',$data->parent_id)->get();
        return view('home.product.product',[
            'data'=>$data,
            'categorylist'=>$categorylist,
            'categoryname'=>$categoryname,
            'settings'=>$settings
        ]);
    }

    public function aboutus()
    {
        $settings = Settings::first();
        $categorylist=Category::where('status','Stokta var')->get();
        return view('home.aboutus',[
            'categorylist'=>$categorylist,
            'settings'=>$settings
        ]);
    }

    public function contact()
    {
        $settings = Settings::first();
        $categorylist=Category::where('status','Stokta var')->get();
        return view('home.contact',[
            'categorylist'=>$categorylist,
            'settings'=>$settings
        ]);
    }

    public function gallery()
    {
        $gallery = Gallery::all();
        $settings = Settings::first();
        $categorylist=Category::where('status','Stokta var')->get();
        return view('home.gallery',[
            'categorylist'=>$categorylist,
            'settings'=>$settings,
            'gallery'=>$gallery
        ]);
    }

    public function storemessage(Request $request)
    {
        $data= new Message();
        $data->name=$request->input('name');
        $data->phone=$request->input('phone');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=$request->ip();
        $data->save();
        return redirect()->route('contact')->with('info','Mesajınız gönderildi,Teşekkürler.');
    }

    public function searchbarshow(Request $request)
    {
        $searchstring = $request->string;
        $search = $searchstring;
        $data=Product::where('title', 'like', "%$search%")->where('detail','like',"%$search%")->where('description','like',"%$search%")->get();
        $gallery = Gallery::limit(3)->get();
        $settings = Settings::first();
        $categorylist=Category::where('status','Stokta var')->get();
        if($request->string=="")
        {
            return view('home.index',[
                'categorylist'=>$categorylist,
                'settings'=>$settings,
                'gallery'=>$gallery,
            ]);
        }
        else
        {
            if ($data->isEmpty()) {
                return view('home.index',[
                    'categorylist'=>$categorylist,
                    'settings'=>$settings,
                    'gallery'=>$gallery,
                ]);
            }
            else
            {
                return view('home.searchbarshow', [
                    'data'=>$data,
                    'categorylist'=>$categorylist,
                    'settings'=>$settings,
                ]);
            }
        }
    }




    public function logoutuser(Request $reguest)
    {
        Auth::logout();
        $reguest->session()->invalidate();
        $reguest->session()->regenerateToken();
        return redirect('/');
    }
    
}

@extends('layouts.frontbase')
@section('title',$settings->title)
@section('keywords',$settings->keywords)
@section('description',$settings->description)
@section('content')
<section class="col-12 py-4">
    <div class="container">
        <div clas="col-md-2"  >
            <p class="h3 mr-3" style="color:rgb(81, 223, 81)">
                <a class="h3 text-dark text-decoration-none" href="{{ route('home') }}">Anasayfa ></a>
                Hakkımızda
            <p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12 py-5 text-black">
                <p>
                    {!! $settings->aboutus !!}
                </p>
            </div>
            
        </div>
    </div>
</section>
<!-- Close Banner -->





@endsection
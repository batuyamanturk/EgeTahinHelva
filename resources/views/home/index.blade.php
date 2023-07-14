@extends('layouts.frontbase')
@section('title',$settings->title)
@section('keywords',$settings->keywords)
@section('description',$settings->description)
@section('content')
 


@include('home.slider')


    <!-- Start Categories-->
    <section class="container py-5 bg-light">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Ürün Kategorilerimiz</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($categorylist as $rs)
            <div class="col-12 col-md-4 p-5 mt-3">
                <center>
                <a href="{{route('categoryproducts',['id'=>$rs->id,'slug'=>$rs->title])}}">
                    <img src="{{ Storage::url($rs->image) }}" class="rounded-circle img-fluid border" style="width: 12em ; height:12em;" >
                </a>
                </center>
                <h5 class="text-center mt-3 mb-3">{{ $rs->title }}</h5>
                <p class="text-center"><a   href="{{route('categoryproducts',['id'=>$rs->id,'slug'=>$rs->title])}}" class="btn btn-success">İncele</a></p>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Categories -->

    <!-- Start Gallery-->
    <section class="bg-light">
        <div class="container  py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Galeri</h1>
                </div>
            </div>
            <div class="row">
                @foreach ($gallery as $ga )
                <div class="col-12 col-md-4 mb-4">
                    <div class="card mb-3 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a href="{{ route('gallery') }}">
                                <img class="card-img rounded-0 img-fluid" style="height:10em" src="{{ Storage::url($ga->image)}}">
                            </a>
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="{{ route('gallery') }}"><i class="far fa-eye">{{ $ga->title }}</i></a></li>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Gallery-->
 
@endsection
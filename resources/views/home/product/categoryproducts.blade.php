@extends('layouts.frontbase')
@section('title',$settings->title)
@section('keywords',$settings->keywords)
@section('description',$settings->description)
@section('content')
<!-- Start Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-3 text-center">
            <h1 class="h2 pb-4">Ürünlerimiz</h1>
            @foreach ($categorylist as $cs)
            <ul class="list-inline shop-top-menu pb-3 pt-1">
                <li class="list-inline-item">
                    <a class="h3 text-dark text-decoration-none mr-3" href="{{route('categoryproducts',['id'=>$cs->id,'slug'=>$cs->title])}}">{{ $cs->title }}</a>
                </li>
            </ul>
            @endforeach
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                  <p class="h3 mr-3" style="color:rgb(81, 223, 81)">
                    <a class="h3 text-dark text-decoration-none mr-3" href="{{ route('home') }}">Anasayfa></a>
                    {{ $category->title }}
                  </p>
                </div>
            </div>
            <div class="row">
                @foreach ( $products as $rs )
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <a href="{{ route('product',['id'=>$rs->id]) }}">
                                    <img class="card-img rounded-0 img-fluid" alt="Ürün resmi"
                                    style="height:10em" src="{{ Storage::url($rs->image)}}">
                                </a>
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="{{ route('product',['id'=>$rs->id]) }}"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="{{ route('product',['id'=>$rs->id]) }}"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="{{ route('product',['id'=>$rs->id]) }}"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="card-body" >
                                <a href="{{ route('product',['id'=>$rs->id]) }}" class="h3 text-decoration-none">
                                    <p class="text-center mb-0">{{ $rs->title }}</p>
                                </a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                    </li>
                                </ul>
                                <a class="text-decoration-none" href="{{ route('product',['id'=>$rs->id]) }}">
                                    <p class="text-center mb-0">Birim Fiyatı:{{ $rs->price }}₺</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <div div="row">
                <ul class="pagination pagination-lg justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- End Content -->

@endsection
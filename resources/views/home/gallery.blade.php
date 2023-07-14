@extends('layouts.frontbase')
@section('title',$settings->title)
@section('keywords',$settings->keywords)
@section('description',$settings->description)
@section('content')
<!-- Start Content -->
<section class="col-12 py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg3" >
                <p class="h3 mr-3" style="color:rgb(81, 223, 81)">
                    <a class="h3 text-dark text-decoration-none" href="{{ route('home') }}">Anasayfa ></a>
                    Galeri
                <p>
            </div>
            <div class="row">
                @foreach ($gallery as $ga )
                <div class="col-12 col-md-4 mb-4">
                    @if ($ga->extension=="Resim")
                    <div class="card mb-3 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a href="{{ Storage::url($ga->image)}}"  data-fancybox="gallery" data-caption="{{ $ga->title }}" >
                                <img class="card-img rounded-0 img-fluid" alt="galeri resimleri" style="height:10em" src="{{ Storage::url($ga->image)}}">
                            </a>
                        </div>
                    </div>
                    @endif
                    @if ($ga->extension=="Video")
                    <div class="card mb-3 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a href="{{ Storage::url($ga->image)}}"  data-fancybox="gallery" data-caption="{{ $ga->title }}" >
                                <video class="card-img rounded-0 img-fluid" alt="galeri resimleri" style="height:10em" src="{{ Storage::url($ga->image)}}">
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
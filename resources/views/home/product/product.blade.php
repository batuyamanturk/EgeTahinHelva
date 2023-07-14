@extends('layouts.frontbase')
@section('title',$settings->title)
@section('keywords',$settings->keywords)
@section('description',$settings->description)
@section('content')



<!-- Open Content -->
<section class="bg-white">
    <div class="container pb-5">
        <div class="row">
            @foreach ($categoryname as $cn )
            <div class="col-lg3 mt-5" s>
                <p class="h3 mr-3" style="color:rgb(81, 223, 81)">
                    <a class="h3 text-dark text-decoration-none mr-3" href="{{ route('home') }}">Anasayfa ></a>
                    <a class="h3 text-dark text-decoration-none mr-3" href="{{route('categoryproducts',['id'=>$cn->id,'slug'=>$cn->title])}}">{{ $cn->title}} ></a>
                    {{ $data->title }}
                <p>
            </div>
            @endforeach
            <div class="col-lg-6 mt-5">
                <div class="card mb-10">
                    <img class="card-img img-fluid"  style="width: 30em ; height:30em;" src="{{ Storage::url($data->image) }}" alt="Ürün Resmi" id="product-detail">
                </div>
                
            </div>
            <!-- col end -->
            <div class="col-lg-6 mt-5">
                <div class="card mb-10">
                    <div class="card-body">
                        <h1 class="h2">{{ $data->title }}</h1>
                        <p class="h3 py-2">Ürün Fiyatı:{{ $data->price }}₺</p>
                        <p class="py-2">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        </p>
                        <h6>Ürün Açıklaması:</h6>
                        <p>{{ $data->description }}</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Stok Durumu</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{ $data->status }}</strong></p>
                            </li>
                        </ul>

                        <h6>Ürün Detayı:</h6>
                        <p>{{ $data->detail }}</p>
                            <input type="hidden" name="product-title" value="Activewear">
                            <div class="row">
                                <div class="col-auto">
                                    <ul class="list-inline pb-3">
                                        <li class="list-inline-item text-right">
                                            Adet:
                                            <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                        </li>
                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                        <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Satın Al</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-5">
                <h3> {{$data->title}} için yorumlar </h3>
                @if (count($comment) == 0)
                <p>Henüz bu ürün için yorum yapılmamıştır</p>
                @else
                <ul class="aa-review-nav">
                    @foreach($comment as $rs)
                    <li>
                        <div class="">
                            <div class="media-body">
                                <h4 class="media-heading"><strong>{{$rs->name}}</strong> - <span>{{$rs->created_at}}</span></h4>
                                <p>{{$rs->comment}}</p>
                            </div>
                        </div>
                    </li>
                </ul>
                    @endforeach
                @endif
                
            </div>
            <div class="col-lg-6 mt-5">
                <h3>Yorum yap</h3>
                <form action="{{route('comment')}}" class="review-form"  role="form" method="post">
                    @csrf
                    <br>
                    <input class="input" type="hidden" name="id" value="{{$data->id}}">
                    <div class="form-group">
                        <label for="name">Adınız</label>
                        <input type="text" class="form-control" name="name"  placeholder="Adınız">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="message">Yorumunuz</label>
                        <textarea class="form-control" rows="3"  name="comment" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg" aa-review-submit">Gönder</button>
                </form>
            </div>
        </div>
                            
    </div>
</section>
<!-- Close tek ürün -->
@endsection
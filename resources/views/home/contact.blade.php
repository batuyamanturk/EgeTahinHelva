@extends('layouts.frontbase')
@section('title',$settings->title)
@section('keywords',$settings->keywords)
@section('description',$settings->description)
@section('content')
<section class="col-12 py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg3" >
                <p class="h3 mr-3" style="color:rgb(81, 223, 81)">
                    <a class="h3 text-dark text-decoration-none" href="{{ route('home') }}">Anasayfa ></a>
                    İletişim
                    <h3>{{ Session::get('info') }}</h3>
                <p>
            </div>
            <div class="col-md-6 my-3">
                <h3 class="h3 text-dark text-center">İletişim Bilgilerimiz</h3>

                <p>
                    <h2 class="h2 text-center">{!! $settings->contact !!}</h2>
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d781.3989663712276!2d27.20227706957561!3d38.42770344885161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b963a7e483db49%3A0xeae5f48609470e9!2sEge%20Tahin%20Helva!5e0!3m2!1str!2str!4v1684439999722!5m2!1str!2str" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
            <div class="col-md-6 my-3">
                <h3 class="h3 text-center text-black">Mesajlarınızı formu doldurarak gönderebilirsiniz</h3>
            <form  method="post" role="form" action="{{ route('storemessage') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Ad:</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Ad & Soyad">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Konu</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Konu">
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Telefon</label>
                    <input type="text" class="form-control mt-1" id="phone" name="phone" placeholder="Telefon">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Mesaj</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Mesajınız" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Gönder</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>
    

@endsection
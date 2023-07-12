@extends('layouts.adminbase')

@section('title', 'Ürün Listesi')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Galeri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
              <li class="breadcrumb-item active">Galeri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Resimler</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="row mt">
                <a href="{{route('admin.gallery.create')}}"><button type="button" class="btn btn-primary btn-lg">Resim Ekle</button></a>
            </div>
            <div class="row mt">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>Başlığı</th>
                            <th>Resim</th>
                            <th style="width: 40px">Detaylı Göster</th>
                            <th style="width: 40px">Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px";>
                                    @endif
                                </td>
                                <td><a href="{{route('admin.gallery.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm">Göster</a></td>
                                <td><a href="{{route('admin.gallery.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                       onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
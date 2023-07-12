@extends('layouts.adminbase')

@section('title', 'Ürün Detayı : '.$data->title)

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detaylı Gösterim</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('admin.slider.index') }}">Slayt Resimleri</a></li>
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
          <h3 class="card-title">Detaylı Gösterim</h3>

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
            <h3><i class="fa fa-angle-right"></i> {{$data->title}}</h3>
            <div class="row mb-2">
                <div class="col-sm-3">
                    <a href="{{route('admin.slider.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" ><button type="button" class="btn btn-danger btn-lg">Resimi Sil</button></a>
                </div>
            </div>
            <div class="row mt">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Detaylı Gösterim</th>
                        </tr>
                        </thead>
                        <tr>
                            <th style="width: 200px;">Id</th>
                            <td> {{$data->id}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Adı</th>
                            <td> {{$data->title}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Resim</th>
                            <td>@if ($data->image)
                                    <img src="{{Storage::url($data->image)}}" style="height:150px">
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Created Date</th>
                            <td> {{$data->created_at}} </td>
                        </tr>
                        <tr>
                            <th style="width: 200px;">Updated Date</th>
                            <td> {{$data->updated_at}} </td>
                        </tr>

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
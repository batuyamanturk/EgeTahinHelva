@extends('layouts.adminbase')

@section('title', 'Kategori Ekleme')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('admin.category.index') }}">Kategori</a></li>
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
          <h3 class="card-title">Kategori Ekle</h3>

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
            <h3><i class="fa fa-angle-right"></i>Kategori Elementleri</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <form role="form" method="post" action="{{route('admin.category.store',)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Ana Kategori Seçimi</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="0" selected="selected">Ana Kategori</option>
                                        @foreach($data as $rs)
                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\AdminCategoryController::parent_id($rs, $rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Adı:</label>
                                    <input class="form-control" type="text" name="title" placeholder="Adı" required>
                                </div>
                                <div class="form-group">
                                    <label>Açıklaması:</label>
                                    <input class="form-control" type="text" name="description" placeholder="Açıklaması">
                                </div>
                                <div class="form-group">
                                  <label>Resim</label>
                                  <input type="file" name="image" >
                              </div>
                                <div class="form-group">
                                    <label>Stok durumu:</label>
                                    <select class="form-control" name="status">
                                        <option>Stokta var</option>
                                        <option>Stokta yok</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-info">Kaydet </button>

                            </form>
                        </div>
                    </div>
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
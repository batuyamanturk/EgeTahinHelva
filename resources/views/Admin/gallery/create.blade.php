@extends('layouts.adminbase')

@section('title', 'Resim Ekleme')

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
              <li class="breadcrumb-item active"><a href="{{ route('admin.gallery.index') }}">Galeri</a></li>
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
          <h3 class="card-title">Resim Ekleme</h3>

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
          <div class="card card-primary">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                          <form role="form" method="post" action="{{route('admin.gallery.store',)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                              <div class="form-group">
                                <label for="title">Resim Başlığı</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Resim Başlığı" required>
                              </div>
                              <div class="form-group">
                                <label for="extension">Görüntü türü</label>
                                <select class="form-control" name="extension" required>
                                  <option>Resim</option>
                                  <option>Video</option>
                              </select>
                              </div>
                              <div class="form-group">
                                <label for="image">Resimi</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image" required>
                                    <label class="custom-file-label" for="exampleInputFile">Resim Seç</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-body -->
            
                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Yükle</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
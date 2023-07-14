@extends('layouts.adminbase')

@section('title', 'Kategoriyi düzenleme : '.$data->title)

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
              <li class="breadcrumb-item active"><a href="{{ route('admin.comment.index') }}">Yorumlar</a></li>
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
          <h3 class="card-title">Yorumu Onayla:</h3>

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
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <form role="form" method="post" action="{{route('admin.comment.update',['id'=>$data->id])}}" enctype="multipart/form-data">
                                @csrf
                               
                               
                                <div class="form-group">
                                    <label>Yorum Uygun mu ?</label>
                                    <input type="hidden" value="{{$data->id}}" name="id">
                                    <select class="form-control" name="admin_note">
                                        <option>Göster</option>
                                        <option>Sil</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-info">Yorumu Onayla</button>
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
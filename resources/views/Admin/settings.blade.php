@extends('layouts.adminbase')

@section('title', 'Settings')

@section('head')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ayarlar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
              <li class="breadcrumb-item active">Ayarlar</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Ayarlar</h3>
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
           <form role="form" action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-12">
                  <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                      <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-general" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="custom-tabs-one-aboutus-tab" data-toggle="pill" href="#custom-tabs-one-aboutus" role="tab" aria-controls="custom-tabs-one-aboutus" aria-selected="false">Hakkımızda</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">İletişim</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                       <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                            <input type="hidden" id="id" name="id" class="form-control" value="{{ $data->id }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $data->title }}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Keywords</label>
                                  <input type="text" class="form-control" name="keywords" id="keywords" placeholder="keywords" value="{{ $data->keywords }}">
                              </div>
                              <div class="form-group">
                                  <label for="description">Description</label>
                                  <input type="text" class="form-control" name="description" id="description" placeholder="description" value="{{ $data->description }}">
                              </div>
                              <div class="form-group">
                                  <label for="company">Company</label>
                                  <input type="text" class="form-control" name="company" id="company" placeholder="company" value="{{ $data->company }}">
                              </div>
                              <div class="form-group">
                                  <label for="address">Address</label>
                                  <input type="text" class="form-control" name="address" id="address" placeholder="address" value="{{ $data->address }}">
                              </div>
                              <div class="form-group">
                                  <label for="phone">Phone</label>
                                  <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" value="{{ $data->phone }}">
                              </div>
                              <div class="form-group">
                                  <label for="fax">Fax</label>
                                  <input type="text" class="form-control" name="fax" id="fax" placeholder="fax" value="{{ $data->fax }}">
                              </div>
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{ $data->email }}">
                              </div>       
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-aboutus" role="tabpanel" aria-labelledby="custom-tabs-one-aboutus-tab">
                          <div class="form-group">
                            <label for="aboutus">Hakkımızda</label>
                            <textarea id="aboutus" value="{{ $data->aboutus }}"  name="aboutus">{!! $data->aboutus !!}</textarea>
                           
                          </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact-tab">
                            <div class="form-group">
                                <label for="contact">İletişim</label>
                                <textarea id="contact" value="{{ $data->contact }}"    name="contact">{!! $data->contact !!}</textarea>
                               
                            </div>
                        </div>

                       </div>
                       
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Ayarları Güncelle</button>
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
              </div>
           </form>
        </div>
      </div>
    </section>
</div>
@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#aboutus').summernote();
            $('#contact').summernote();
        });
    </script>
@endsection
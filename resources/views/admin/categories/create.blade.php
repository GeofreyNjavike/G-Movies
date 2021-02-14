@extends('layouts.front')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{  route ('admin.categories.index') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('admin.categories.store') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
  <div class="row">
    <label class="col-md-1">Series</label>
    <div class="col-md-3"><input type="text" name="series" class="form-control"></div>
    <div class="clearfix"></div>
</div>
</div>
<div class="form-group">
  <div class="row">
    <label class="col-md-1">Movies</label>
    <div class="col-md-3"><input type="text" name="movies" class="form-control" ></div>
    <div class="clearfix"></div>
</div>
</div>
<div class="form-group">
  <div class="row">
    <label class="col-md-1">Zilizotafsiriwa</label>
    <div class="col-md-3"><input type="text" name="zilizotafsiriwa" class="form-control" ></div>
    <div class="clearfix"></div>
</div>
</div>
<div class="form-group">
  <input type="submit" name="btn btn-primary" value="save">
</div>
            </form>
        </div>
    </section>
@endsection

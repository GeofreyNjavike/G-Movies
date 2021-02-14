@extends('layouts.front')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Descriptions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{  route ('admin.descriptions.index',) }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Descriptions</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('admin.descriptions.update', $descriptions->id) }}" enctype="multipart/form-data">
                @method('put')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
    <div class="row">
    <label class="col-md-1">Select Type:</label>
    <div class="col-md-3" type="text" value="{{ $descriptions->type }}">
    <select  name="type" class="form-control">
      <option value="Bongo Movie">Bongo Movie</option>
      <option value="HollyWood Movies">HollyWood Movies</option>
      <option value="Korean Movies">Korean Movies</option>
      <option value="BollyWood Movies">BollyWood Movies</option>
    </select>
</div>
    <div class="clearfix"></div>
    </div>
  </div>


<div class="form-group">
  <div class="row">
    <label class="col-md-1">Image</label>
    <div class="col-md-3"><input type="file" name="image" ></div>
    <div class="clearfix"></div>
</div>
</div>
<div class="form-group">
  <div class="row">
    <label class="col-md-1">Price</label>
    <div class="col-md-3"><input type="integer" name="price" class="form-control" value="{{ $descriptions->price }}"></div>
    <div class="clearfix"></div>
</div>
</div>

<div class="form-group">
    <div class="row">
      <label class="col-md-1">Decription</label>
      <div class="col-md-3">
          <textarea name="description" class="form-control" value="{{ $description->description }}"></textarea>
      </div>
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

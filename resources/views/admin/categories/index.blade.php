@extends('layouts.front')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{  route ('admin.categories.index') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
          <p>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add New Category</a>
          </p>
          <table class="table table-bordered table-striped">
            <tr>
              <th>Id</th>
              <th>Tv Series</th>
              <th>Movies</th>
               <th>Zilizotafsiriwa</th>
            </tr>
            @foreach($categories as $c)
            <tr>
              <td>{{ $c->id }}</td>
              <td>{{ $c->series }}</td>
              <td>{{ $c->movies }}</td>
              <td>{{$c->zilizotafsiriwa}}</td>
              <td><a href="{{ route('admin.categories.edit', $c->id) }}" class="btn btn-info">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            <form action="{{ route('admin.categories.destroy', $c->id) }}" method="POST">
@method('DELETE')
<input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            </td>
            </tr>
            @endforeach
          </table>
          {{ $categories->render() }}
        </div>
    </section>
    @yeild('content')
@endsection

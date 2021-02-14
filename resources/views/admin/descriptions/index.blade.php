@extends('layouts.front')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Descriptions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{  route ('admin.descriptions.index') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Descriptions</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
          <p>
            <a href="{{ route('admin.descriptions.create') }}" class="btn btn-primary">Add New Description</a>
          </p>
          <table class="table table-bordered table-striped">
            <tr>
              <th>Id</th>
              <th>Type</th>
              <th>Image</th>
               <th>Price</th>
               <th>Descriptions</th>
            </tr>
            @if(count($descriptions))
            @foreach($descriptions as $d)
            <tr>
              <td>{{ $d->id }}</td>
              <td>{{ $d->type }}</td>
              <td>{{ $d->image }}</td>
              <td>{{$d->price}}</td>
              <td>{{$d->description}}</td>
              <td><a href="{{ route('admin.descriptions.edit', $d->id) }}" class="btn btn-info">Edit</a>
            </td>
            </tr>
            @endforeach
            @else
            <tr><td colspan="3">Feeds</td></tr>
            @endif
          </table>
          {{ $descriptions->render() }}
        </div>
    </section>
@endsection

@extends('layouts.front')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{  route ('admin.products.index') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
          <p>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add New Products</a>
          </p>
          <table class="table table-bordered table-striped">
            <tr>
              <th>Id</th>
              <th>Type</th>
              <th>Image</th>
               <th>Price</th>
               <th>descriptions</th>
            </tr>
            @if(count($products))
            @foreach($products as $d)
            <tr>
              <td>{{ $d->id }}</td>
              <td>{{ $d->type }}</td>
              <td>{{ $d->image }}</td>
              <td>{{$d->price}}</td>
              <td>{{$d->description}}</td>
           
              <td><a href="{{ route('admin.products.edit', $d->id) }}" class="btn btn-info">Edit</a>
                <form action="{{ route('admin.products.destroy', $d->id) }}" method="POST">
@method('DELETE')
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<button class="btn btn-danger">Delete</button>
            </form>

            </td>
         
            </tr>
            @endforeach
            @else
            <tr><td colspan="3">Feeds</td></tr>
            @endif
          </table>
          {{ $products->render() }}
        </div>
    </section>
    @yield('content')
@endsection

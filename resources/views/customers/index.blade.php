@extends('layout')

@section('content')
<br><br>
@if ($message = Session::get('success'))
  <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = session()->get('error'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="row">
    <form action="{{ route('customers.index') }}" method="GET">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Filtro por Tipo Nombre</strong>
                <input type="text" name="type_name" class="form-control" placeholder="Type">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>CRUD</h2>
        </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('customers.create') }}"> Create New Customer</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Ruc</th>
            <th>Email</th>
            <th>Page Web</th>
            <th>Status</th>
            <th>Category Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->ruc }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->page }}</td>
            <td>{{ $status = $customer->status ? 'Active' : 'Inactive' }}</td>
            <td>{{ $customer->type_name }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('customers.show', $customer->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}">Edit</a>
                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" onClick="return confirm('Esta seguro de eliminar?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

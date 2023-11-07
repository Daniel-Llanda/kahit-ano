@extends('layout.app')

@section('content')
<div class="card my-4">
    <form action="{{ route('save')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="p_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="p_name">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" >
                </div>
                <div class="col mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price">
                </div>
                <div class="col mb-3">
                    <label for="quantityinstock" class="form-label">Quantity Stock</label>
                    <input type="number" class="form-control" name="quantityinstock">
                </div>
                <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
            </div>
        </div>
    </form>
</div>

<table class="table table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity Stock</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- @if ($products)
            @foreach ($products as $product) --}}
                {{-- <tr>
                    <th>{{$product->id}}</th>
                    <td>{{$product->p_name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantityinstock}}</td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger"> <i class="bi bi-trash"></i></button>
                    </td>
                </tr> --}}
            {{-- @endforeach
        @endif --}}
        
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>23</td>
            <td>23</td>
            <td>
                <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                <button type="button" class="btn btn-danger"> <i class="bi bi-trash"></i></button>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>Larry the Bird</td>
            <td>67768</td>
            <td>768</td>
            <td>
                <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                <button type="button" class="btn btn-danger"> <i class="bi bi-trash"></i></button>
            </td>
        </tr>
    </tbody>
</table>
@endsection
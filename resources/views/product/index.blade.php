@extends('base')
@section('title','Prodzucts')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Product list </h1>
        <a href="{{route('products.create')}}" class="btn btn-primary">Create</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{!!$product->quantity  !!}</td>
                <td>{!!$product->image  !!}</td>
                <td>{!!$product->price  !!}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6"> <h4>no products</h4></td>
            </tr>

        @endforelse
        </tbody>
        </table>






@endsection

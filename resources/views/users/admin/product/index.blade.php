@extends('users.admin.app')


@section('content')
    <div class="d-flex justify-content-between   align-items-center">
        <h1>Product list </h1>
        <a href="{{route('products.create')}}" class="btn btn-primary">Create</a>
    </div>
    <table class="table m-4 overflow-hidden">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Price</th>
            <th>ACTION </th>
            <th>Category</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{!!$product->quantity  !!}</td>
                <td> <img width="150" src="storage/{{$product->image}}"></td>
                <td>{!!$product->price  !!}</td>

                <td>
                    <div class="btn-group gap-2">
                        <a href="{{route('products.edit', $product)}}" class="btn btn-primary">Update</a>
                        <form method="post" action="{{route('products.destroy', $product)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete"/>
                        </form>
                    </div>
                <td>

                    @if($product->category)
                        <a href="" class="btn btn-link ">
                        <span class="badge bg-primary p-2">
                          {{$product->category->name}}
                        </span>
                        </a>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" align="center"> <h4>no products</h4></td>
            </tr>

        @endforelse
        </tbody>
        </table>

        {{$products->links()}}




@endsection

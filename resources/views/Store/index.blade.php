@php use Illuminate\Support\Facades\Request; @endphp
@extends('layouts.app')

@section('title', 'Products')

@section('sidebar')
    <h1>Filters</h1>
    <hr>
    <form method="get">
        <div class="form-group">
            <label for="name">Name or description</label>
            <input type="text" name="name" id="name" value="{{Request::input('name')}}" class="form-control"
                   placeholder="Name">
        </div>
        <h3>Categories</h3>
        @php
            $categoriesIds=Request::input('categories')?? [];
        @endphp

            <div class="form-check">
                <input type="checkbox" name="categories[]"
                       value="" class="form-check-input">
                <label class="form-check-label"></label>
            </div>

        <h3>Pricing</h3>
        <div class="form-group">
            <label for="min">Min</label>
            <input min="" max="" type="number" name="min" id="min" value="{{Request::input('min')}}" class="form-control"
                   placeholder="Min price">
            <label for="max">Max</label>
            <input min="}" max="" type="number" name="max" id="max" value="{{Request::input('max')}}" class="form-control"
                   placeholder="Max price">
        </div>
        <div class="form-group my-2">
            <input type="submit" class="btn btn-primary" value="Filter">
            <a type="reset" class="btn btn-secondary" href="{{route('home_page')}}">Reset</a>
        </div>
    </form>
    <hr>
@endsection

@section('content')
    <div class="content">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Products</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
            @forelse($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top" src="storage/{{$product->image}}" alt="{{$product->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <span>Quantity: <span class="badge bg-success">{{$product->quantity}}</span></span>
                                <span>Price: <span class="badge bg-primary">{{$product->price}} MAD</span></span>
                            </div>
                            <hr>
                            <div class="my-2">Category: <span class="badge bg-primary">{{$product->category ? $product->category->name : 'Uncategorized'}}</span></div>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{$product->created_at}}</small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-info my-4" role="alert">
                        <h4 class="alert-heading">Info</h4>
                        <p>No Products</p>
                    </div>
                </div>
            @endforelse
        </div>
    {{--   {{$products->links()}} --}}
</div>
@endsection

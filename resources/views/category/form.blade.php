@extends('base')

@section('title', ($isUpdate?'Update':'Create').' category')

@php
    $route = route('categories.store');
    if($isUpdate) {
       $route =  route('categories.update', $category);
    }
@endphp

@section('content')
    <h1>@yield('title')</h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ $route }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if($isUpdate)
                        @method('PUT')
                    @endif
                    <div class="m-50">
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="{{ old('name', $category->name) }}">
                        </div>
                        <div class="form-group my-3">
                            <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

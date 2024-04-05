@extends('base')

@section('title', 'Categories')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Categories</h1>
        <a href="" class="btn btn-primary">Create</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <div class="btn-group gap-2">
                        <a href="" class="btn btn-info">Show</a>
                        <a href="" class="btn btn-primary">Update</a>
                        <form method="post" action="">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete"/>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" align="center"><h6>No categories.</h6></td>
            </tr>

        @endforelse
        </tbody>
    </table>
    {{$categories->links()}}
@endsection

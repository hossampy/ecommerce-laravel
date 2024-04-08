@extends('layouts.app')
@section('title','Editor')
@section('sidebar')
    <div class="list-group">
        <a href="" class="list-group-item list-group-item-action active">Dashboard</a>
        <a  href="" class="list-group-item list-group-item-action">Products</a>

    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }} as Editor.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <a href="{{route('products.create')}}" class="btn btn-primary">Create New Products</a>
    <pre></pre>
    @include('products.list')
@endsection

@extends('layouts.app')

@section('content')
    <a href="{{route('categories.create')}}" class="btn btn-success">Create New Category</a>
    <pre></pre>
    @include('categories.list')
@endsection


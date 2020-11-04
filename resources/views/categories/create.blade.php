@extends('layouts.app')

@section('content')
<form action="{{route('categories.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input value="{{}}" disabled type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
      @error('name')
        <small id="emailHelp" style="color: red">Please input categories name.</small>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

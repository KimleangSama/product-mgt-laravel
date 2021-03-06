@extends('layouts.app')

@section('content')
<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="name" type="text" class="form-control" value="{{old('name')}}">
        @error('name')
         <small id="emailHelp" style="color: red">Please input name.</small>
        @enderror
    </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <input name="description" type="text" class="form-control" value="{{old('description')}}">
        @error('description')
            <small id="emailHelp" style="color: red">Please input description.</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input name="price" type="number" class="form-control" value="{{old('price')}}">
        @error('price')
            <small id="emailHelp" style="color: red">Please input price.</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Category</label>
        <select id="category" name="categories" class="custom-select" value="{{old('categories')}}">
            <option value="" selected>Category</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">
                    {{$category->name}}
                </option>
            @endforeach
        </select>
        @error('categories')
            <small id="emailHelp" style="color: red">Please input category.</small>
        @enderror
    </div>

    <div class="custom-file">
        <input name="image" type="file" class="custom-file-input" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
        <label class="custom-file-label" for="customFile">Choose file</label>
        @error('image')
            <small id="emailHelp" style="color: red">Please input file.</small>
        @enderror
    </div>

    <img width="50%" id="preview" />
    <br>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
@section('script')
    @parent
    <script>
        $(document).ready(function() {
            // Preview Image
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }

            $("#image").change(function () {
                readURL(this);
            });
            // End Preview Image
        });
    </script>

{{--            $('#category').change(function() {--}}
{{--                $.ajax({--}}
{{--                    type: 'GET',--}}
{{--                    url: `/categories/${$(this).children("option:selected").val()}/subcategories`,--}}
{{--                    success: function(datas) {--}}
{{--                        if (datas === undefined || datas.length == 0) {--}}
{{--                            $('#subcategory').empty()--}}
{{--                            $('#subcategory').append('<option>Sub Category</option>')--}}
{{--                        } else {--}}
{{--                            $('#subcategory').empty()--}}
{{--                            $('#subcategory').append('<option>Sub Category</option>')--}}
{{--                            for(let data of datas) {--}}
{{--                                $('#subcategory').append(`--}}
{{--                                    <option value="${data.id}">${data.name}</option>--}}
{{--                                `)--}}
{{--                            }--}}
{{--                        }--}}
{{--                    },--}}
{{--                });--}}
{{--            })--}}
{{--        })--}}
{{--    </script>--}}
@endsection

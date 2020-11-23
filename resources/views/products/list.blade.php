<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->name}}</td>
            {{-- <td>
                <img src="{{ url('storage/products/'.$product->image) }}" alt="">
            </td> --}}
            <td>
                <a href="{{route('products.show', $product->id)}}" class="btn btn-info m-1">View</a>
                <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary m-1">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-danger m-1" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>

{{$products->links()}}


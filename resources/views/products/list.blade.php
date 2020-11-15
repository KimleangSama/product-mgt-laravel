<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
        <th scope="col">Sub Category</th>
        {{-- <th scope="col">Image</th> --}}
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
            <td>{{$product->subcategory->name}}</td>
            {{-- <td>
                <img src="{{ url('storage/products/'.$product->image) }}" alt="">
            </td> --}}
        </tr>
      @endforeach
    </tbody>
</table>

{{$products->links()}}


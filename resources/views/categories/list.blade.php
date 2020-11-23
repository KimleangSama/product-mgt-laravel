<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{$categories->links()}}

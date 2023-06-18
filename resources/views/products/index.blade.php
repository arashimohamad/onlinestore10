<h1>List Products</h1>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)            
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>RM{{number_format($item->price, 2)}}</td>
                <td>
                    <a href="{{url('products/create-edit/'.$item->id)}}">Edit</a>
                    <a href="{{url('products/delete/'.$item->id)}}">Delete</a>
                </td>
            </tr>        
        @endforeach
    </tbody>
    <a href="{{url('products/create-edit')}}">Create</a>
</table>
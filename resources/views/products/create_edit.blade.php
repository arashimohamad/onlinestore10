<h1>{{$title}}</h1>
<form id="productForm" name="productForm"
    @if (empty($productdata->id))
        action="{{url('products/create-edit')}}"     
    @else
        action="{{url('products/create-edit/'.$productdata->id)}}"
    @endif    
    method="post">
    @csrf
    Name : <input type="text" name="name" id="name" @if (!empty($productdata->name)) value="{{$productdata->name}}" @endif><br>
    Description : <input type="text" name="description" id="description" @if (!empty($productdata->description)) value="{{$productdata->description}}" @endif><br>
    Price : <input type="number" name="price" id="price" @if (!empty($productdata->price)) value="{{$productdata->price}}" @endif><br>
    Image URL : <input type="text" name="image_url" id="image_url" @if (!empty($productdata->image_url)) value="{{$productdata->image_url}}" @endif><br>
    <input type="submit" value="Save">
</form>
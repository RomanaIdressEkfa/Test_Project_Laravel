
@extends('backend.master')
@section('page_content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medicine List</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">

    <h2>Product List</h2>

    <table class="table">
      <thead>
        <tr>

         <th>ID</th>
          <th>Name</th>
          <th>Image</th>
          <th>Description</th>
          <th>Price</th>
          <th>Status</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>
        @php
            $i=1
        @endphp
        @foreach ($products as $key=>$product)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$product->name}}</td>
            <td>
                <img style="width:150px;" src="{{asset('images/products/'.$product->image)}}" alt="">
            </td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->status}}</td>

            {{-- @foreach ($vendors as $vendor )
            <td>{{ $vendor->store_name}}</td>
            @endforeach --}}

            <td>
                <a href="{{route('product_edit',$product->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('product_delete',$product->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach

        <!-- Add more rows as needed -->
    </tbody>
    </table>
  </div>
  <a href="{{route('product_create')}}" class="btn btn-success mt-5 mb-5">Add Product!</a>
  <!-- Include Bootstrap JS (Optional if you're not using any Bootstrap JS components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>



@endsection

@extends('backend.master')
@section('page_content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>User Management</title>
</head>
<body>
    <div class="container mt-5">
        <h2>User List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1
                @endphp
                @foreach ($products as $product)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$product->name}}</td>

                    <td>{{$product->email}}</td>
                    <td>{{$product->password}}</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach


                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <a href="{{route('create')}}" class="btn btn-success mt-5 mb-5">Add Product!</a>
</body>
</html>


@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Bootstrap Card Example</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">

                @foreach ($products as $product)

                <div class="card">
                    <img src="{{asset('images/products/'.$product->image)}}" class="card-img-top" alt="Item 1">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <p class="card-text">{{$product->price}}</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
</body>
</html>

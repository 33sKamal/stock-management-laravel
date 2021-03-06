<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/src/css/product.css">


</head>

<body>

    @include('layouts.menu')


    <h1>edit product</h1>
   
    <form class="product-form" action="{{route('update-dial-products-ok')}}" method="POST">

        @csrf
        <div class="product-div">
            <label for="">ID : </label>
            <input type="text" value="{{$productLiModif->id}}" name="productId" readonly>
        </div>

        <div class="product-div">
            <label for="">name : </label>
            <input type="text" value="{{$productLiModif->name}}" name="name" id="">
        </div>


        <h2>in this form we're creating</h2>



        <div class="product-div">
            <label for="">price : </label>
            <input type="number" value="{{$productLiModif->price}}" name="price" id="">
        </div>

        <div class="product-div">

            <label for="">description : </label>
            <textarea name="description" id="" cols="60" rows="10">{{$productLiModif->description}}</textarea>
        </div>

        <input class="button-new-product" type="submit" value="Update">

        <a class="button-cancel-product" href="{{route('index-dial-products')}}">
            Annuler
        </a>

    </form>


</body>

</html>
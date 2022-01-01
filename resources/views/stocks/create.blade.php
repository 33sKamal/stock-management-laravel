<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="/src/css/stock.css">


</head>

<body>

    @include('layouts.menu')

    @if ($errors->any())
        <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
        </div>
    @endif
    
    <h1>Create stock</h1>

    <form class="product-form" action="{{route('store-dial-stocks')}}" method="POST">

        @csrf

        <div class="product-div" >
            <label for="">product : </label>
            <select name="product_id" id="">
                <option value="">Selectioner un produit</option>
                @foreach ($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>

        </div>

        <div class="product-div" >
            <label for="">secteur : </label>
            <input type="text" name="secteur" id="">
        </div>

        <div class="product-div" >
            <label for="">case : </label>
            <input type="text" name="case" id="">
        </div>


        <div class="product-div" >
            <label for="">Quantity : </label>
            <input type="text" id="qty" name="qty" >
        </div>


        <input class="button-new-product" type="submit" value="Ajouter">

        <a  class="button-cancel-product" href="{{route('index-dial-stocks')}}">
            Annuler
        </a>

    </form>

    <script src="/src/js/stock.js"></script>
</body>

</html>
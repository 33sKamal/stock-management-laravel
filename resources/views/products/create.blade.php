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

    <h1>Create product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
        </div>
    @endif


    <form class="product-form" action="{{ route('create-dial-products') }}" method="POST">

        @csrf
        <div class="product-div">
            <label for="">name : </label>
            <input type="text" name="name" id="">
        </div>

        <h2>in this form we're creating</h2>



        <div class="product-div">
            <label for="">price : </label>
            <input type="number" name="price" id="">
        </div>

        <div class="product-div">

            <label for="">description : </label>
            <textarea name="description" id="" cols="60" rows="10"></textarea>
        </div>

        <input class="button-new-product" type="submit" value="Ajouter">

        <a class="button-cancel-product" href="{{ route('index-dial-products') }}">
            Annuler
        </a>

    </form>


    <script src="/src/js/product.js"></script>


</body>

</html>

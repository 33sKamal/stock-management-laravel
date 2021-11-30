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


    <h1>Edit stock</h1>

    <form class="product-form" action="{{route('create-dial-stocks')}}" method="GET">

        <div class="product-div" >
            <label for="">ID : </label>
            <input type="text" name="" id="">
        </div>

        <div class="product-div" >
            <label for="">product : </label>
            <select name="" id="">
                <option value="">Selectioner un produit</option>
                <option value="maticha">Maticha</option>
                <option value="btata">Btata</option>
                <option value="ger3a">Ger3a</option>
            </select>

        </div>

        <div class="product-div" >
            <label for="">secteur : </label>
            <input type="text" name="" id="">
        </div>

        <div class="product-div" >
            <label for="">case : </label>
            <input type="text" name="" id="">
        </div>


        <div class="product-div" >
            <label for="">Quantity : </label>
            <input type="number" name="" id="">
        </div>

        <input class="button-new-product" type="submit" value="Modifier">

        <a  class="button-cancel-product" href="{{route('index-dial-stocks')}}">
            Annuler
        </a>

    </form>

</body>

</html>
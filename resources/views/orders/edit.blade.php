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


    <h1>edit order</h1>
   
    <form class="order-form" action="{{route('update-dial-orders-ok')}}" method="POST">

        @csrf
        <div class="order-div">
            <label for="">ID : </label>
            <input type="text" value="{{$orderLiModif->id}}" name="orderId" readonly>
        </div>

        <div class="order-div">
            <label for="">name : </label>
            <input type="text" value="{{$orderLiModif->name}}" name="name" id="">
        </div>


        <h2>in this form we're creating</h2>



        <div class="order-div">
            <label for="">price : </label>
            <input type="number" value="{{$orderLiModif->price}}" name="price" id="">
        </div>

        <div class="order-div">

            <label for="">description : </label>
            <textarea name="description" id="" cols="60" rows="10">{{$orderLiModif->description}}</textarea>
        </div>

        <input class="button-new-order" type="submit" value="Update">

        <a class="button-cancel-order" href="{{route('index-dial-orders')}}">
            Annuler
        </a>

    </form>


</body>

</html>
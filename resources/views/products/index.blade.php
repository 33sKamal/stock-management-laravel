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

    <h1>
        List product
    </h1>

    <table border="10px">
        <tr>
            <td>ID :</td>
            <td>name :</td>
            <td>price :</td>
            <td>description :</td>
            <td>Actions :</td>
        </tr>

        @foreach ($products as $pr)
        <tr>
            <td>{{$pr->id}}</td>
            <td>{{$pr->name}}</td>
            <td>{{$pr->price}}</td>
            <td>{{$pr->description}}</td>
            <td>
                <a  class="button-edit-product" href="{{route('edit-dial-products')}}">
                    edit
                </a>

                <button class="button-remove-product" href="{{route('edit-dial-products')}}">
                    remove
                </button>
            </td>
        </tr>
        @endforeach

    </table>


    <div class="box-new-product">
        <a class="button-new-product" href="{{route('create-dial-products')}}">
            Create new product
        </a>
    </div>
    
</body>
</html>
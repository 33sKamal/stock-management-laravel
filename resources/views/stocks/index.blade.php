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

    <h1>
        List stocks
    </h1>


    <table border="10px">
        <tr>
            <td>ID :</td>
            <td>product :</td>
            <td>secteur :</td>
            <td>case :</td>
            <td>quanity :</td>
        </tr>

        @foreach ($stocks as $stock)
            
        <tr>
            <td>{{$stock->id}}</td>
            <td>{{$stock->product->name}}</td>
            <td>{{$stock->secteur}}</td>
            <td>{{$stock->case}}</td>
            <td>{{$stock->qty}}</td>
            <td>
                <a class="button-edit-product" href="{{route('edit-dial-stocks' , ['stock_id' => $stock->id])}}">
                    edit
                </a>

                <button class="button-remove-product" href="#">
                    remove
                </button>
            </td>
        </tr>
        @endforeach




    </table>


    <div class="box-new-product">
        <a class="button-new-product" href="{{route('create-dial-stocks')}}">
            Create new stocks
        </a>
    </div>

</body>

</html>
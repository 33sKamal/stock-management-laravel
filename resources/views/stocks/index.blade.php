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

        <tr>
            <td>STOCK-1</td>
            <td>Tomatos</td>
            <td>SEC-01</td>
            <td>CASE-01</td>
            <td>100</td>
            <td>
                <a class="button-edit-product" href="{{route('edit-dial-stocks')}}">
                    edit
                </a>

                <button class="button-remove-product" href="{{route('edit-dial-stocks')}}">
                    remove
                </button>
            </td>
        </tr>



        <tr>
            <td>STOCK-2</td>
            <td>Batata</td>
            <td>SEC-02</td>
            <td>CASE-05</td>
            <td>600</td>
            <td>
                <a class="button-edit-product" href="{{route('edit-dial-stocks')}}">
                    edit
                </a>

                <button class="button-remove-product" href="{{route('edit-dial-stocks')}}">
                    remove
                </button>
            </td>
        </tr>


    </table>


    <div class="box-new-product">
        <a class="button-new-product" href="{{route('create-dial-stocks')}}">
            Create new stocks
        </a>
    </div>

</body>

</html>
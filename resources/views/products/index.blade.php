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


    <table border="10px" >
        <tr>
            <td>ID :</td>
            <td>name :</td>
            <td>phone :</td>
            <td>price :</td>
            <td>description :</td>
            <td>Actions :</td>
        </tr>

        <tr>
            <td>REF-1</td>
            <td>Tomatos</td>
            <td>39876543</td>
            <td>30 $</td>
            <td>this is an product from morocco to EUS</td>
            <td>
                <a  class="button-edit-product" href="{{route('edit-dial-products')}}">
                    edit
                </a>

                <button class="button-remove-product" href="{{route('edit-dial-products')}}">
                    remove
                </button>
            </td>
        </tr>


        <tr>
            <td>REF-2</td>
            <td>Tomatos</td>
            <td>39876543</td>
            <td>30 $</td>
            <td>this is an product from morocco to EUS</td>
            <td>
                <a  class="button-edit-product" href="{{route('edit-dial-products')}}">
                    edit
                </a>

                <button class="button-remove-product" href="{{route('edit-dial-products')}}">
                    remove
                </button>
            </td>
        </tr>


        <tr>
            <td>REF-3</td>
            <td>Tomatos</td>
            <td>39876543</td>
            <td>30 $</td>
            <td>this is an product from morocco to EUS</td>
            <td>
                <a  class="button-edit-product" href="{{route('edit-dial-products')}}">
                    edit
                </a>

                <button class="button-remove-product" href="{{route('edit-dial-products')}}">
                    remove
                </button>
            </td>
        </tr>


    </table>


    <div class="box-new-product">
        <a class="button-new-product" href="{{route('create-dial-products')}}">
            Create new product
        </a>
    </div>
    
</body>
</html>
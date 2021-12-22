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

    <div class="box-new-product" style="margin-bottom:3rem" >
        <a href="{{route('create-dial-products')}}" class="button-new-product">new product</a>
    </div>



    <table border="10px">
        <tr>
            <td>ID :</td>
            <td>name :</td>
            <td>price :</td>
            <td>description :</td>
            <td>date de creation :</td>
            <td>date de modification :</td>
            <td>Actions :</td>
        </tr>

        @foreach ($products as $pr)
            <tr>
                <td>{{ $pr->id }}</td>
                <td>{{ $pr->name }}</td>
                <td>{{ $pr->price }}</td>
                <td>{{ $pr->description }}</td>
                <td>{{ $pr->created_at->format('Y-m-d H:s') }}</td>
                <td>{{ $pr->updated_at }}</td>
                <td>
                    <a class="button-edit-product" href="/products/edit/{{$pr->id}}">
                        edit
                    </a>

                    <form action="{{route('delete-dial-products' , ['product_id' => $pr->id])}}" method="POST" >
                        @csrf
                        <button class="button-remove-product" >
                            remove
                        </button>
                    </form>


                    
                </td>
            </tr>
        @endforeach

    </table>


</body>

</html>

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
        List order
    </h1>

    <div class="box-new-order" style="margin-bottom:3rem">
        <a href="{{ route('create-dial-orders') }}" class="button-new-order">new order</a>
    </div>

    <table border="10px">
        <tr>
            <td>ID :</td>
            <td>name :</td>
            <td>phone :</td>
            <td>address :</td>
            <td>method_payment :</td>
            <td>status :</td>
            <td>total :</td>
            <td>sub_total :</td>
            <td>date de creation :</td>
            <td>date de modification :</td>
            <td>Actions :</td>
        </tr>

        @foreach ($orders as $pr)
            <tr>
                <td>{{ $pr->id }}</td>
                <td>{{ $pr->name }}</td>
                <td>{{ $pr->phone }}</td>
                <td>{{ $pr->address }}</td>
                <td>{{ $pr->method_payment }}</td>
                <td>{{ $pr->status }}</td>
                <td>{{ $pr->total }}</td>
                <td>{{ $pr->sub_total }}</td>

                <td>{{ $pr->created_at->format('Y-m-d H:s') }}</td>
                <td>{{ $pr->updated_at }}</td>
                <td>
                    <a class="button-edit-order" href="/orders/edit/{{ $pr->id }}">
                        edit
                    </a>

                    <form action="{{ route('delete-dial-orders', ['order_id' => $pr->id]) }}" method="POST">
                        @csrf
                        <button class="button-remove-order">
                            remove
                        </button>
                    </form>



                </td>
            </tr>
        @endforeach

    </table>


</body>

</html>

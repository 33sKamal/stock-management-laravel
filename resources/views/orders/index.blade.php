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
            <td>ID / name :</td>
            <td>phone :</td>
            <td>method_payment :</td>
            <td>total :</td>
            <td>products :</td>
            <td>date de creation :</td>
            <td>Actions :</td>
        </tr>

        @foreach ($orders as $or)
            <tr>
            
                <td>{{ $or->id }} / {{ $or->name }}</td>
                <td>{{ $or->phone }} </td>
                <td>{{ $or->method_payment }}</td>
                <td>{{ $or->total }}</td>
                <td>
                    <ul>
                        @foreach ($or->products as $pr)
                        <li>
                            <p>
                                {{$pr->name}} , {{$pr->pivot->price}}$ * {{$pr->pivot->qty}}
                            </p>
                        </li>
                        @endforeach
                    </ul>
                </td>

                <td>{{ $or->created_at->format('Y-m-d H:s') }}</td>
                <td>
                    <a class="button-edit-order" href="/orders/edit/{{ $or->id }}">
                        edit
                    </a>

                    <form action="{{ route('delete-dial-orders', ['order_id' => $or->id]) }}" method="POST">
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

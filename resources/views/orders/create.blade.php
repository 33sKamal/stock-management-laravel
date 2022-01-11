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

    <h1>Create order</h1>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
        </div>
    @endif --}}


    <form class="order-form" action="{{ route('store-dial-orders') }}" method="POST">

        @csrf
        <h2>in this form we're creating</h2>


        <div class="order-div">
            <label for="">name : </label>
            <input type="text" name="name" id="">
            <br>
            @if ($errors->has('name'))
            <span style="color:red">{{  $errors->first('name')  }}</span>
            @endif

        </div>


        <div class="order-div">
            <label for="">phone : </label>
            <input type="number" name="phone" id="">

            @if ($errors->has('phone'))
            <span style="color:red"> {{$errors->first('phone')}}  </span>
            @endif

        </div>



        <div class="order-div">

            <label for="">address : </label>
            <textarea name="address" id="" cols="60" rows="3"></textarea>

            @if ($errors->has('address'))
            <span style="color:red">{{$errors->first('address')}}</span>
            @endif
        </div>




        <div class="order-div">
            <label for="">method payment : </label>

            <select name="method_payment" id="">
                <option value="">Selectioner chi wahda</option>

                <option value="card">Card</option>
                <option value="cod">COD</option>
            </select>

            @if ($errors->has('method_payment'))
            <span style="color:red"> {{$errors->first('method_payment')}}  </span>
            @endif

        </div>



        <div class="order-div">
            <label for="">Status : </label>

            <select name="status" id="">
                <option value="">Selectioner chi wahda</option>
                <option value="new">New</option>
                <option value="shipped">Shipped</option>
                <option value="delivered">Delivered</option>
                <option value="canceled">Canceled</option>
            </select>

            @if ($errors->has('status'))
            <span style="color:red"> {{$errors->first('status')}}  </span>
            @endif

        </div>


        <input class="button-new-order" type="submit" value="Ajouter">

        <a class="button-cancel-order" href="{{ route('index-dial-orders') }}">
            Annuler
        </a>

    </form>


    <script src="/src/js/product.js"></script>


</body>

</html>

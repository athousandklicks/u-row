@extends('Layout')

@section('title', '| Welcome to U-ROW Automobiles')



@section('content')

<section class="content">
    <div class="container">
        <div class="inner-page homepage margin-bottom-none">
            <div class="top-space1">
            </div>
            <!--car-info-wrap ends-->
            <section class="welcome-wrap padding-top-30 sm-horizontal-15">
                <div class="row">
                    <h3>@if(Cart::count() > 1)
                        You have <span class="garage-heading">{{Cart::count()}} Cars </span> in your Garage
                        @else
                        You have <span class="garage-heading">{{Cart::count()}} Car </span> in your Garage
                    @endif</h3>


                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>NAME</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartItems as $cartItem)
                            <tr>
                                <td>{{$cartItem->name}}</td>
                                <td>{{$cartItem->price}}</td>
                                <td width="50px">
                                    {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}

                                    <input name="qty" type="text" value="{{$cartItem->qty}}">
                                </td>
                                

                                <td>
                                    <input style="float: left"  type="submit" class="button success" value="Ok">
                                    {!! Form::close() !!}

                                    <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                                     {{csrf_field()}}
                                     {{method_field('DELETE')}}
                                     <input class="button small alert" type="submit" value="Delete">
                                 </form>
                             </td>
                         </tr>
                         @endforeach

                         <tr>
                            <td></td>
                            <td>
                                Tax: ${{Cart::tax()}} <br> <!-- Go cart.php to change tax rate -->
                                Sub Total: $ {{Cart::subtotal()}} <br>
                                Grand Total: $ {{Cart::total()}}
                            </td>
                            <td>Items: {{Cart::count()}}

                            </td>
                            <td></td>
                            <td></td>

                        </tr>
                    </tbody>
                </table>

                <a href="{{route('checkout.shipping')}}" class="button">Checkout</a>
            </div>


        </section>
        <!--welcome-wrap ends-->


    </div>
</div>
</section>


@endsection
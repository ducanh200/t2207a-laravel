@extends("layouts.layout")
@section("title","THANKYOU ".app("request")->input('q'))
@section("main")

        <section class="shoping-cart spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__table">
                            <table>
                                <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->products as $item)
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <b>{{$item->name}}</b>
                                        </td>
                                        <td class="shoping__cart__price">
                                            ${{$item->pivot->price}}
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                {{$item->pivot->buy_qty}}
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <h2 style="text-align: right;color: #930b0b;margin-top: 30px;margin-right: 50px"><b>Sub-total</b></h2>
                            <h3 style="color: #940505;margin-top: 10px;text-align: right;margin-right: 66px"><b>${{$order->total}}</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection



@extends("layouts.layout")
@section("title","Invoice: ".app("request")->input('q'))
@section("main")
    @if(count($products)>0)
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
                                    <th>Total</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->products as $item)
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="{{$item->thumbnail}}" alt="">
                                            <b>{{$item->name}}</b>
                                        </td>
                                        <td class="shoping__cart__price">
                                            ${{$item->pivot->price}}
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <b>{{$item->pivot->buy_qty}}</b>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            ${{$order->total}}
                                        </td>

                                    </tr>

                                @endforeach

                                </tbody>
                            </table>

                        </div>
                        <div class="summary" >
                            <div class="payment__method">
                                <h3>PAYMENT METHOD</h3>
                                <p>By Bank VietNam State Bank</p>
                            </div>
                            <div class="subtotal__invoices">
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>Tax</td>
                                        <td>Total</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>${{$total}}</th>
                                        <th>0%</th>
                                        <th>${{$total}}</th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="shoping-cart spad">
            <div class="container"><p>Không có hóa đơn nào!</p>
            </div>
        </section>
    @endif
@endsection
<style>
.summary{
    margin-top: 30px;
    float: left;
    width: 100%;
    margin-bottom: -50px;

}
.summary .payment__method{
    width: 555px;

}
.summary .payment__method h3{
    font-weight: bold;
}
.summary .payment__method p{
    margin-left: 20px;
    color: #070707;
}
.summary .subtotal__invoices {
    width: 555px;
    float: right;
    margin-top: -85px;

}
.summary .subtotal__invoices table{
    float: right;
    width: 500px;
    text-align: center;
    border: black solid 1px;

}
.summary .subtotal__invoices thead{
    font-size: 25px;
    font-weight: bold;
    border-bottom: black solid 1px;

}
.summary .subtotal__invoices thead tr td{
    border-left: black solid 1px;
}
.summary .subtotal__invoices tbody tr th{
    border-left: black solid 1px;

}
.shoping__cart__table{
    border: black solid 1px;
}
.shoping__cart__table thead tr th{
    border: black solid 1px;
}
.shoping__cart__table tbody tr td{
    border-left: black solid 1px;
    border-right: black solid 1px;
    border-top: black solid 1px;
    border-bottom:black solid 1px ;
}
</style>

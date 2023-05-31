@extends("layouts.layout")
@section("title","Favourite products")
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
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="{{$item->thumbnail}}" alt="">
                                            <h5>{{$item->name}}</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            ${{$item->price}}
                                        </td>
                                        <td  class="shoping__cart__item__close">
                                            <span style="margin-left: 30px" class="icon_close"></span>
                                        </td>
                                        <td>
                                            <button style="margin-left: 20px;border-radius: 5px" type="submit" class="primary-btn">
                                                <a style="color: black" href="{{ url("/add-to-cart",["product"=>$item->id]) }}">ADD TO CART</a></button>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="shoping-cart spad">
            <div class="container">
                <p>Không có sản phẩm yêu thích nào!</p>
            </div>
        </section>
    @endif
@endsection

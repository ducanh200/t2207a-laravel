<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="img/language.png" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Spanis</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            @guest()
                            <a href="{{url("/login")}}"><i class="fa fa-user"></i> Login</a>
                            @endguest
                                @auth()
                                    <a href="#"><i class="fa fa-user"></i> {{auth()->user()->name}}</a>
                                    <form action="{{route("logout")}}" method="post">
                                        @csrf
                                        <button type="submit"><i class="fa fa-arrow-right"></i></button>
                                    </form>
                                @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{url("/")}}"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li><a href="{{url("/home")}}">Home</a></li>
                        <li><a href="#">Categories</a>
                            <ul class="header__menu__dropdown">
                                @foreach($categories as $c)
                                    <li><a href="{{url("/category",["category"=>$c->slug])}}">{{$c->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="{{url("/favourite")}}"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="{{url("/cart")}}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        <li><a href="{{url("/invoice")}}"><i class="fa fa-list-alt"></i> <span></span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>

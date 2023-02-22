<link href="{{ asset('css/nav&footer.css?v=').time()}}" rel="stylesheet" type="text/css">


<link href="{{ asset('css/nav&footer.css?v=').time()}}" rel="stylesheet" type="text/css">

<nav>
    <section id="nav_btn_loc">
        <ul class="topnav">
            <img src="{{asset('images/small-logo.png')}}" class="logo" />
            <li><a href="{{('homepage')}}" class="nav-txt">Homepage</a></li>
            <li><a href="{{('product')}}" class="nav-txt">Products</a>
                <ul class="dropdown">
                    <li class="drop-txt"><a href="{{'smartphones'}}" class="drop-txt">Smartphones</a></li>
                    <li class="drop-txt"><a href="{{'laptops'}}" class="drop-txt">Laptops</a></li>
                    <li class="drop-txt"><a href="{{'tablets'}}" class="drop-txt">Tablets</a></li>
                    <li class="drop-txt"><a href="{{'tvs'}}" class="drop-txt">TVs</a></li>
                    <li class="drop-txt"><a href="{{'cameras'}}" class="drop-txt">Cameras</a></li>
                </ul>
            </li>
            <li><a href="{{('contact')}}" class="nav-txt">Contact Us</a></li>
            <li><a href="{{('about')}}" class="nav-txt">About Us</a></li>
        </ul>
        <ul class="topnav">
            <li><a href="{{('login')}}" class="nav-txt">Log in</a></li>
            <li><a href="{{('register')}}" class="nav-txt">Register</a></li>
            </ul>
    </section>
</nav>

<link href="{{ asset('css/nav&footer.css?v=').time()}}" rel="stylesheet" type="text/css">

<nav>
  <section id="nav_btn_loc">
    <a href="{{route('homepage')}}"><img src="{{asset('images/small-logo.png')}}" class="logo" /></a>
    <ul class="topnav">
      <li><a href="{{route('homepage')}}" class="nav-txt">Homepage</a></li>
      <li><a href="{{route('productsPage')}}" class="nav-txt">Products</a>
        <ul class="dropdown">
          <li class="drop-txt">
            <form action="{{route('product.category',['category'=>'smartphones'])}}" method="GET">
              <a href="" class="drop-txt-btn"> <button class="drop-txt-btn" type="submit">Smartphones</button></a>
            </form>
          </li>
          <li class="drop-txt">
            <form action="{{route('product.category',['category'=>'laptops'])}}" method="GET">
              <a href="" class="drop-txt-btn"> <button class="drop-txt-btn" type="submit"> Laptops</button></a>
            </form>
          </li>
          <li class="drop-txt">
            <form action="{{route('product.category',['category'=>'tablets'])}}" method="GET">
              <a href="" class="drop-txt-btn"> <button class="drop-txt-btn" type="submit"> Tablets</button></a>
            </form>
          </li>
          <li class="drop-txt">
            <form action="{{route('product.category',['category'=>'tvs'])}}" method="GET">
              <a href="" class="drop-txt-btn"> <button class="drop-txt-btn" type="submit"> TVs</button></a>
            </form>
          </li>
          <li class="drop-txt">
            <form action="{{route('product.category',['category'=>'cameras'])}}" method="GET">
              <a href="" class="drop-txt-btn"> <button class="drop-txt-btn" type="submit"> Cameras</button></a>
            </form>
          </li>
        </ul>
      </li>
      <li><a href="{{route('contact')}}" class="nav-txt">Contact Us</a></li>
      <li><a href="{{route('about')}}" class="nav-txt">About Us</a></li>
    </ul>
    <ul class="topnav">
      @guest <!-- if user is loged in, this will not appear  -->
      <li><a href="{{ route('login') }}" class="nav-txt">Log in</a></li>
      <li><a href="{{ route('register') }}" class="nav-txt">Register</a></li>
      @endguest



      <?php if (@Auth::user()->name != null) : ?>
        <?php if (@Auth::user()->name != 'Admin') : ?>
          <?php if (auth()->user()->type ?? 2) : ?>
            <li><a href="{{url('userAccount')}}" class="nav-txt">Account</a></li>
            <li><a href="{{ route('logout') }}" class="nav-txt">Logout</a></li>


          <?php endif; ?>
        <?php endif; ?>
      <?php endif; ?>



      <?php if (@Auth::user()->name == 'Admin') : ?>
        <?php if (auth()->user()->type ?? 0) : ?>
          <li><a href="{{url('adminAccount')}}" class="nav-txt">Account</a></li>
          <li><a href="{{ route('logout') }}" class="nav-txt">Logout</a></li>

        <?php endif; ?>
      <?php endif; ?>
    </ul>


    <!-- <ul class="topnav">
      <li><a href="{{('login')}}" class="nav-txt">Log in</a></li>
      <li><a href="{{('register')}}" class="nav-txt">Register</a></li>
    </ul> -->

  </section>
</nav>
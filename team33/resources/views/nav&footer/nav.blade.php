
<nav>
  <section id="nav_btn_loc">
    <a href="{{('homepage')}}"><img src="{{asset('images/small-logo.png')}}" class="logo" /></a> 
    <ul class="topnav">
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
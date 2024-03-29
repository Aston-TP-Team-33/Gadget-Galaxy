<link href="{{ asset('css/nav&footer.css?v=').time()}}" rel="stylesheet" type="text/css">

<footer>
    <section id="main_footer">
        <div>
            <h4>Pages</h4>
            <blockquote>
                <a href="{{('homepage')}}" class="footer_txt">Homepage</a>
                <br>
                <a href="{{('product')}}" class="footer_txt">Products Page</a>
                <br>
                <a href="{{('contact')}}" class="footer_txt">Contact Us</a>
                <br>
                <a href="{{('about')}}" class="footer_txt">About Us</a>
                <br>
                <a href="{{ route('login') }}" class="footer_txt">Log in</a>
                <br>
                <a href="{{ route('register') }}" class="footer_txt">Register</a>
            </blockquote>
        </div>
        <div>
            <h4>Socials</h4>
            <blockquote>
                <a href="https://twitter.com/?lang=en" target="_blank">
                    <img src="{{asset('images/twitter.png')}}" class="footer_images" />
                </a>
                <br>
                <a href="https://en-gb.facebook.com/" target="_blank">
                    <img src="{{asset('images/facebook.png')}}" class="footer_images" />
                </a>
                <br>
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="{{asset('images/instagram.png')}}" class="footer_images" />
                </a>
            </blockquote>
        </div>
    </section>
    <div id="footer_logo_location">
        <a href="{{route('homepage')}}"><img src="{{asset('images/small-logo.png')}}" class="footer_logo" /></a>
    </div>
    <p class="footer_txt">Gadget Galaxy &copy; 2023</p>
</footer>
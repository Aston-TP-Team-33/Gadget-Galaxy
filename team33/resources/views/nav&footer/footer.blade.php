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
            </blockquote>
        </div>
        <div>
            <h4>Socials</h4>

            <a href="https://twitter.com/?lang=en" target="_blank">
                <img src="{{asset('images/twitter.png')}}" class="footer_images" />
            </a>

            <a href="https://github.com/" target="_blank">
                <img src="{{asset('images/github-sign.png')}}" class="footer_images" />
            </a>

            <a href="https://uk.linkedin.com/" target="_blank">
                <img src="{{asset('images/linkedin.png')}}" class="footer_images" />
            </a>

            <a href="https://en-gb.facebook.com/" target="_blank">
                <img src="{{asset('images/facebook.png')}}" class="footer_images" />
            </a>

            <a href="https://www.instagram.com/" target="_blank">
                <img src="{{asset('images/instagram.png')}}" class="footer_images" />
            </a>
        </div>
    </section>

    <p class="footer_txt"><a href="" class="footer_txt">Gadget Galaxy</a> &copy; 2023</p>
</footer>
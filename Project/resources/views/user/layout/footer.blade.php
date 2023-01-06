
<footer id="footer" class="footer">

    <div class="footer-secondary">
        <div class="container">
            <div class="footer-secondary__inner">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-copyright"><a href="{{url('home')}}">{{env('APP_NAME')}}</a> 2021 &nbsp; |
                            &nbsp; All Rights Reserved
                        </div>
                    </div>


                    <div class="col-md-2">
                        <ul class="footer-nav footer-nav--right footer-nav--condensed footer-nav--sm">
                            <li class="footer-nav__item">
                                <a href="mailto: abc@example.com" class="btn btn-primary-inverse btn-sm btn-block">Customer Service</a>
                            </li>


                        </ul>
                    </div>

                    <div class="col-md-4">
                        <ul class="footer-nav footer-nav--right footer-nav--condensed footer-nav--sm">
                            <li class="footer-nav__item"><a href="{{url('home')}}">Home</a></li>
                            <li class="footer-nav__item"><a href="{{url('posts')}}">User Activity</a></li>
                            <li class="footer-nav__item"><a href="{{url('user/profile')}}">My Profile</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>


</div>

<script src="{{frontend('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{frontend('assets/vendor/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{frontend('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{frontend('assets/js/core.js')}}"></script>
<script src="{{frontend('assets/vendor/twitter/jquery.twitter.js')}}"></script>
<script src="{{frontend('assets/js/init.js')}}"></script>

@stack('js')
{{--@jquery--}}
{{--@toastr_js--}}
{{--@toastr_render--}}
</body>
</html>

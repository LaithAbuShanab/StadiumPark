<nav class="main-nav clearfix">
    <ul class="main-nav__list">
        <li class="{{request()->segment(1) == 'news'  ? 'active' : ''}}"><a href="{{url('news')}}">News</a></li>

        <li class="{{request()->segment(1) == 'posts' ? 'active' : ''}}"><a href="{{url('posts')}}">Users Activity</a></li>

        <li class="{{request()->segment(1) == 'home'  ? 'active' : ''}}"><a href="{{url('home')}}">Home</a></li>




    </ul>


    <ul class="social-links social-links--inline social-links--main-nav">
        <li class="social-links__item">
            <a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Facebook">
                <i class="fab fa-facebook"></i>
            </a>
        </li>

        <li class="social-links__item">
            <a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Twitter">
                <i class="fab fa-twitter"></i>
            </a>
        </li>

        <li class="social-links__item">
            <a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Google+">
                <i class="fab fa-google-plus"></i>
            </a>
        </li>
    </ul>


</nav>

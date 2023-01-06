<div class="header__top-bar clearfix">
    <div class="container">
        <div class="header__top-bar-inner">
            <ul class="nav-account">
                <li class="nav-account__item">
                    <a href="{{url('user/profile')}}">{{auth()->user()->name}}</a>
                </li>

                <li class="nav-account__item nav-account__item--logout">
                    <a style="cursor: pointer" onclick="$('#logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{url('logout')}}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

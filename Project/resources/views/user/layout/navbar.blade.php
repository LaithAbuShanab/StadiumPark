

<header class="header header--layout-1">
    @include('user.layout.top')


    <div class="header__secondary">
        <div class="container">


            <ul class="info-block info-block--header">

                <li class="info-block__item info-block__item--contact-primary">
                    <svg role="img" class="df-icon df-icon--whistle">
                        <use xlink:href="assets/images/icons-soccer.svg#whistle"/>
                    </svg>
                    <h6 class="info-block__heading">Join us</h6>
                    <a class="info-block__link" href="mailto:test@gmail.com">StadiumPark@gmail.com</a>
                </li>

                <li class="info-block__item info-block__item--contact-secondary">
                    <svg role="img" class="df-icon df-icon--soccer-ball">
                        <use xlink:href="assets/images/icons-soccer.svg#soccer-ball"/>
                    </svg>
                    <h6 class="info-block__heading">Contact Us</h6>
                    <a class="info-block__link" href="mailto:info@gmail.com">info@gmail.com</a>
                </li>

            </ul>
        </div>
    </div>


    <div class="header__primary">
        <div class="container">
            <div class="header__primary-inner">

                <div class="header-logo">
                    <a href="{{url('home')}}">
{{--                        <img src="{{theme('assets/images/soccer/logo.png')}}" srcset="{{theme('assets/images/soccer/logo@2x.png')}} 2x" alt="ballwhizz" class="header-logo__img">--}}

                        <img src="{{avatar('logo.png')}}" srcset="{{avatar('logo.png')}} 2x" alt="ballwhizz" class="header-logo__img" width="142" height="172">

                    </a>
                </div>

                @include('user.layout.menu')
            </div>

        </div>
    </div>
</header>

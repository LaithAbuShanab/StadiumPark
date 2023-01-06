<aside class="pushy-panel pushy-panel--dark">
    <div class="pushy-panel__inner">
        <header class="pushy-panel__header">
            <div class="pushy-panel__logo">
                <a href="{{url('user/profile')}}">
                    <img src="{{empty(auth()->user()->image) ? avatar('user.png') : asset(auth()->user()->image) }}"
                         srcset="{{empty(auth()->user()->image) ? avatar('user.png') : asset(auth()->user()->image) }} 2x"
                         alt="user">
                </a>
            </div>

        </header>
        <div class="pushy-panel__content">
            <aside class="widget widget-popular-posts widget--side-panel">
                <div class="widget__content">
{{--                    @if (count(user_leagues()) > 0)--}}
{{--                        <ul class="posts posts--simple-list">--}}

{{--                            @foreach(user_leagues() as $user_league )--}}
{{--                                <li class="posts__item posts__item--category-1">--}}
{{--                                    <figure class="posts__thumb">--}}
{{--                                        <a  href="{{url('leagues/teams/'.$user_league->current_season_id)}}">--}}
{{--                                            <img style="width: 60px!important; height: 60px!important;" src="{{$user_league->logo_path}}" alt="league">--}}
{{--                                        </a>--}}
{{--                                    </figure>--}}
{{--                                    <div class="posts__inner">--}}
{{--                                        <div class="posts__cat"><span class="label posts__cat-label">{{$user_league->type}}</span>--}}
{{--                                        </div>--}}
{{--                                        <h6 class="posts__title"><a href="{{url('leagues/teams/'.$user_league->current_season_id)}}">{{$user_league->name}}</a></h6>--}}
{{--                                        <time datetime="2016-08-23" class="posts__date">{{$user_league->country->name}}</time>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}

{{--                    @endif--}}
                </div>
            </aside>

        </div>

        <a href="#" class="pushy-panel__back-btn"></a></div>

</aside>




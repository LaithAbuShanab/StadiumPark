<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


{{--            <li class="{{request()->segment(2) == 'home' ? 'active' : ''}} nav-item">--}}
{{--                <a href="{{url('admin/home')}}">--}}
{{--                    <i class="la la-home"></i>--}}
{{--                    <span class="menu-title" >Dashboard</span>--}}
{{--                </a>--}}
{{--            </li>--}}


            @if (admin()->user()->type == 'super')
            <li class="{{request()->segment(2) == 'employee' ? 'active' : ''}} nav-item">
                <a href="{{url('admin/employee')}}">
                    <i class="la la-user"></i>
                    <span class="menu-title" >Admins</span>
                </a>
            </li>


        <li class="{{request()->segment(2) == 'news' ? 'active' : ''}} nav-item">
                <a href="{{url('admin/news')}}">
                    <i class="la la-newspaper-o"></i>
                    <span class="menu-title" >News</span>
                </a>
            </li>


            <li class="{{request()->segment(2) == 'hour' ? 'active' : ''}} nav-item">
                <a href="{{url('admin/hour')}}">
                    <i class="la la-clock-o"></i>
                    <span class="menu-title" >Manage Hours</span>
                </a>
            </li>


                <li class="{{request()->segment(2) == 'user' ? 'active' : ''}} nav-item">
                    <a href="{{url('admin/user')}}">
                        <i class="la la-users"></i>
                        <span class="menu-title" >Users</span>
                    </a>
                </li>

            @endif


            <li class="{{request()->segment(2) == 'stadium' ? 'active' : ''}} nav-item">
                <a href="{{url('admin/stadium')}}">
                    <i class="la la-picture-o"></i>
                    <span class="menu-title" >Stadium</span>
                </a>
            </li>






            <li class="{{request()->segment(2) == 'appointment' ? 'active' : ''}} nav-item">
                <a href="{{url('admin/appointment')}}">
                    <i class="la la-hand-pointer-o"></i>
                    <span class="menu-title" >Appointments</span>
                </a>
            </li>




            <li class="nav-item">
                <a onclick="$('#logout-form').submit();">
                    <i class="la la-power-off text-danger"></i>
                    <span class="menu-title " >Logout</span>
                </a>
                <form id="logout-form" action="{{url('admin/logout')}}" method="POST">
                    @csrf
                </form>
            </li>







        </ul>
    </div>
</div>

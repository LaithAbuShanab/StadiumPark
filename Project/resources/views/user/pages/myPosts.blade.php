@extends('user.index')
@push('css')
    <style>

        #uploadFile {
            opacity: 0;
            cursor: pointer;
            position: relative;
            z-index: 3;
        }

        #uploadFile:hover + .hover {
            opacity: 1;
        }

        #imagePreview {
            border-radius: 5%;
            border: 1px solid rgba(0, 0, 0, 0.3);
            width: 100px;
            height: 100px;
            background-position: center center;
            background-size: cover;
            overflow: hidden;
            display: flex;
            position: relative;
            margin: 0 auto;
        }

        #imagePreview .hover {
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition-duration: 450ms;
        }

        #imagePreview .hover i {
            color: white;
            font-size: 55px;
        }

    </style>
@endpush

@section('content')



    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h1 class="page-heading__title">{{$title}}</h1>
                </div>
            </div>
        </div>
    </div>



    <div class="site-content">
        <div class="container">

            <div class="row">

                <div class="col-lg-4">

                    <!-- Account Navigation -->
                    <div class="card">
                        <div class="card__header">
                            <h4>Welcome Back {{auth()->user()->name}} !</h4>
                        </div>
                        <div class="card__content">
                            <nav class="df-account-navigation">
                                <ul>
                                    <li class="df-account-navigation__link ">
                                        <a href="{{url('user/profile')}}">Personal Information</a>
                                    </li>
                                    <li class="df-account-navigation__link">
                                        <a href="{{url('myAppointment')}}">My Appointment</a>
                                    </li>

                                    <li class="df-account-navigation__link active">
                                        <a href="{{url('myPost')}}">My Post</a>
                                    </li>

                                    <li class="df-account-navigation__link">
                                        <a href="#" onclick="$('#logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{url('logout')}}" method="POST">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Account Navigation / End -->
                </div>

                <div class="col-lg-8">

                    <!-- Personal Information -->
                    <div class="card card--lg">
                        <div class="card__header">
                            <h4>Personal Information</h4>
                        </div>
                        <div class="card__content">
                            @if(count($posts) > 0)
                                @foreach($posts as $post)
                                    <div class="post-grid__item col-sm-12">
                                        <div class="posts__item posts__item--card posts__item--category-1 card">
                                            <figure class="posts__thumb">
                                                <div class="posts__cat">
                                                    <span class="label posts__cat-label" style="background-color: red!important;">
                                                        <a class="text-white" href="{{url('delete_post/'.$post->id)}}"> Delete Post</a>
                                                    </span>
                                                </div>
                                                @if(!empty($post->image))
                                                    <a href="#"><img src="{{asset($post->image)}}" alt=""></a>
                                                @elseif(!empty($post->video))
                                                    <video width="100%" height="350px" controls>
                                                        <source src="{{asset($post->video)}}" type="video/mp4">
                                                        <source src="{{asset($post->video)}}" type="video/ogg">
                                                    </video>
                                                @else
                                                    <a href="#"><img src="{{avatar('noimage.jpeg')}}" alt=""></a>
                                                @endif
                                            </figure>
                                            <div class="posts__inner card__content">
                                                <b class="posts__date">{{$post->created_at}}</b>
                                                <div class="posts__excerpt">
                                                    {{$post->details}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                    <!-- Personal Information / End -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        function setImageToDiv(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload").change(function () {
            setImageToDiv(this);
        });

        $("#uploadFile").on("change", function () {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return;
            if (/^image/.test(files[0].type)) {
                var reader = new FileReader();
                reader.readAsDataURL(files[0]);
                reader.onloadend = function () {
                    $("#imagePreview").css("background-image", "url(" + this.result + ")");
                }
            }
        });

    </script>
@endpush

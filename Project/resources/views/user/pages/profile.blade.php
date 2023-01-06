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
                                    <li class="df-account-navigation__link active">
                                        <a href="{{url('user/profile')}}">Personal Information</a>
                                    </li>
                                    <li class="df-account-navigation__link">
                                        <a href="{{url('myAppointment')}}">My Appointment</a>
                                    </li>
                                    <li class="df-account-navigation__link">
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
                            <form action="{{url('updateProfile')}}" method="post" class="df-personal-info" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-group--upload">

                                    <div class="form-group row">
                                        <label class="col-md-4 label-control"
                                               for="image">Image</label>
                                        <div class="col-md-8">
                                            <div id="imagePreview"
                                                 style="background-image: url('{{!empty(auth()->user()->image) ? asset(auth()->user()->image) : avatar('user.png')}}')">
                                                <input id="uploadFile" type="file" name="image" class="img"/>
                                                <div class="hover">
                                                    <i class="la la-camera"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="account-email">Email</label>
                                            <input type="email" readonly class="form-control" value="{{auth()->user()->email}}" name="email" placeholder="{{auth()->user()->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="account-username">Name</label>
                                            <input type="text" class="form-control" value="{{auth()->user()->name}}" name="name" placeholder="Your Name" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="account-first-name">Mobile</label>
                                            <input type="number" class="form-control" value="{{auth()->user()->mobile}}" name="mobile"  placeholder="Mobile Number">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="account-password">Change Password</label>
                                            <input type="password" autocomplete="off" class="form-control" value="" name="password"  placeholder="**********">
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group--submit">
                                    <button type="submit" class="btn btn-info btn-lg btn-block">Save change</button>
                                </div>

                            </form>
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

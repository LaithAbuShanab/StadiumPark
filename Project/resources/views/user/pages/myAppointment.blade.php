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
                                    <li class="df-account-navigation__link active">
                                        <a href="{{url('myAppointment')}}">My Appointment</a>
                                    </li>
                                    <li class="df-account-navigation__link ">
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


                    <div class="card card--lg">
                        <div class="card__header">
                            <h4>Appointment</h4>
                        </div>
                        <div class="card__content">

                            <div class="table-responsive">
                                <table class="table shop-table">
                                    <thead>
                                    <tr>
                                        <th class="product__photo">Photo</th>
                                        <th class="product__info">Name</th>
                                        <th class="product__price">Price</th>
                                        <th class="product__color">Appointment Date</th>
                                        <th class="product__color">From time</th>
                                        <th class="product__color">To Time</th>
                                        <th class="product__color">Manage</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(count($appointments)  > 0)
                                        @foreach($appointments as $appointment)
                                            <tr>
                                                <td class="product__photo">
                                                    <figure class="product__thumb">
                                                        <a href="">
                                                            <img
                                                                src="{{isset($appointment->stadium->image) && !empty($appointment->stadium->image) ? asset($appointment->stadium->image) : avatar('stadium.jpg')}}"
                                                                alt="">
                                                        </a>
                                                    </figure>
                                                </td>
                                                <td class="product__info">
                                                    <h5 class="product__name"><a
                                                            href="#">{{$appointment->stadium->name}}</a></h5>
                                                </td>
                                                <td class="product__price">
                                                    @php
                                                    $start=str_replace(':','.',$appointment->time_from);
                                                    $end=str_replace(':','.',$appointment->time_to);
                                                    $total=$end - $start ;
                                                    $price =isset($hour) ? $hour->price : 0 ;
                                                    @endphp

                                                    {{abs($price * $total)}}
                                                </td>
                                                <td class="product__total">
                                                    {{$appointment->appointment_date}}
                                                </td>

                                                <td class="product__total">
                                                    {{$appointment->time_from}}
                                                </td>

                                                <td class="product__total">
                                                    {{$appointment->time_to}}
                                                </td>

                                                <td class="product__total">
                                                @if($appointment->type == 'cancel')
                                                        <i class="fa fa-check text-danger fa-2x"></i>
                                                    @else
                                                        <a href="{{url('cancel_appointment/'.$appointment->id)}}"><i
                                                                class="fa fa-trash text-danger fa-2x"></i></a>

                                                    @endif

                                                </td>


                                            </tr>
                                        @endforeach
                                    @endif


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

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

@extends('user.index')

@section('content')



    <div class="hero-slider-wrapper">
        <div class="hero-slider">
            <div class="hero-slider__item hero-slider__item--img1">
                <div class="container hero-slider__item-container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="post__meta-block post__meta-block--top">
                                <div class="post__category">
                                    <span class="label posts__cat-label">I Love Sport</span>
                                </div>
                                <h1 class="page-heading__title">
                                    <a href="">welcome to
                                        <span class="highlight">{{env('APP_NAME')}}</span>
                                    </a>
                                </h1>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-slider__item hero-slider__item--img2">
                <div class="container hero-slider__item-container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2"><!-- Post Meta - Top -->
                            <div class="post__meta-block post__meta-block--top"><!-- Post Category -->
                                <div class="post__category">
                                    <span class="label posts__cat-label">Injuries</span>
                                </div>
                                <h1 class="page-heading__title">
                                    <a href="">Franklin Stevens has
                                        <span class="highlight">
                                            a knee fracture
                                        </span>
                                        and is gona be out
                                    </a>
                                </h1>

                                <ul class="post__meta meta">
                                    <li class="meta__item meta__item--date">
                                        <time datetime="2017-08-23">August 28th, 2018</time>
                                    </li>

                                    <li class="meta__item meta__item--views">2369</li>
                                    <li class="meta__item meta__item--likes">
                                        <a href="#">
                                            <i class="meta-like meta-like--active icon-heart"></i>
                                            530
                                        </a>
                                    </li>
                                    <li class="meta__item meta__item--comments">
                                        <a href="#">18</a>
                                    </li>
                                </ul>

                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="{{theme('assets/images/samples/avatar-1.jpg')}}" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">James Spiegel</h4>
                                        <span class="post-author__slogan">Alchemists Ninja</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-slider__item hero-slider__item--img3">
                <div class="container hero-slider__item-container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2"><!-- Post Meta - Top -->
                            <div class="post__meta-block post__meta-block--top"><!-- Post Category -->
                                <div class="post__category"><span class="label posts__cat-label">The Team</span></div>
                                <!-- Post Category / End --><!-- Post Title --><h1 class="page-heading__title"><a
                                        href="_soccer_blog-post-1.html">The New <span class="highlight">Eco Friendly Stadium</span>
                                        won a leafy award in 2016</a></h1><!-- Post Title / End -->
                                <!-- Post Meta Info -->
                                <ul class="post__meta meta">
                                    <li class="meta__item meta__item--date">
                                        <time datetime="2017-08-23">August 28th, 2018</time>
                                    </li>
                                    <li class="meta__item meta__item--views">2369</li>
                                    <li class="meta__item meta__item--likes">
                                        <a href="#">
                                            <i class="meta-like meta-like--active icon-heart"></i>
                                            530
                                        </a>
                                    </li>

                                    <li class="meta__item meta__item--comments">
                                        <a href="#">18</a>
                                    </li>
                                </ul>

                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="{{theme('assets/images/samples/avatar-1.jpg')}}" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">James Spiegel</h4>
                                        <span class="post-author__slogan">Alchemists Ninja</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="site-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">
                    <div class="card card--clean">

                    </div>

                    <div class="main-news-banner main-news-banner--soccer-ball">
                        <div class="main-news-banner__inner">
                            <div class="posts posts--simple-list posts--simple-list--xlg">
                                <div class="posts__item posts__item--category-1">
                                    <div class="posts__inner">

                                        <h6 class="posts__title">
                                            <a href="#">Appointment</a>
                                        </h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card--clean">
                        <header class="card__header card__header--has-filter">
                            <h4>{{$title}}</h4>
                            <ul class="category-filter category-filter--featured">

                                <li class="category-filter__item">
{{--                                    <select class="form-control" name="stadium_id" onchange="filterData(this,'stad')">--}}
                                    <select class="form-control" name="stadium_id"  id="stadium_id">
                                        <option value="">Select</option>

                                    @if(count($stadiums) > 0)
                                            @foreach($stadiums as $stadium)
                                                <option value="{{$stadium->id}}">{{$stadium->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </li>

                            </ul>

                            <ul class="category-filter category-filter--featured mx-2">
                                <li class="category-filter__item">
                                    <select class="form-control" name="city"  id="city">
                                        <option value="">Select</option>
                                        <option value="amman">Amman</option>
                                        <option value="zarqa">Zarqa</option>
                                        <option value="irbid">Irbid</option>
                                        <option value="aqaba">Aqaba</option>
                                        <option value="salt">Salt</option>
                                        <option value="madaba">Madaba</option>
                                        <option value="jerash">Jerash</option>
                                        <option value="maan">Ma'an</option>
                                        <option value="tafila">Tafila</option>
                                        <option value="ajlon">Ajlon</option>
                                    </select>
                                </li>
                            </ul>

                            <ul class="category-filter category-filter--featured mx-2">
                                <li class="category-filter__item">
                                    <select class="form-control" name="type" id="type">
                                        <option value="">Select</option>
                                        <option  value="football">Football</option>
                                        <option  value="basketball">Basketball</option>
                                        <option  value="volleyball">Volley ball</option>
                                        <option  value="handball">HandBall</option>

                                    </select>
                                </li>
                            </ul>

                            <ul class="category-filter category-filter--featured mx-2">
                                <li class="category-filter__item">
                                    <a href="{{url('/home')}}"  class="btn btn-danger" >Reset</a>
                                    <button class="btn btn-success" onclick="filterData()">Filter</button>
                                </li>
                            </ul>



                        </header>

                        <div class="card__content">
                            <div class="posts posts--cards post-grid row" id="sbody">
                                @if(count($stadiums) > 0 )
                                    @foreach($stadiums as $stadium)
                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card">
                                                <figure class="posts__thumb">
                                                    <a href="{{url('stadium_details/'.$stadium->id)}}">
                                                        <img style="height: 200px!important;" src="{{empty($stadium->image) ? avatar('stadium.jpg') : asset($stadium->image) }}" alt="">
                                                    </a>
                                                </figure>

                                                <div class="posts__inner card__content text-center">
                                                    <a href="{{url('stadium_details/'.$stadium->id)}}" class="posts__cta"></a>
                                                    <h6 class="posts__title">
                                                        <a href="{{url('stadium_details/'.$stadium->id)}}">{{$stadium->name}}</a>
                                                    </h6>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                            <div class="post-author text-center">
                                                <div class="post-author__info ">
                                                    <b >{{$stadium->address}}</b>
                                                </div>
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>


@endsection

@push('js')
    <script>

        function filterData(){
            let id  =$('#stadium_id').val();
            let city  =$('#city').val();
            let type  =$("#type").val();

            $.ajax({
                url: "{{url('filter')}}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "GET",
                dataType: 'json',
                data: {id: id,city:city,type:type},
                success: function (data) {
                    let html='';
                    $.each(data,function (k,v){

                        html += '<div class="post-grid__item col-sm-4"><div class="posts__item posts__item--card posts__item--category-1 card"><figure class="posts__thumb">';
                        let refUrl = "{{url('stadium_details')}}/" + v.id;
                        html += '<a href="' + refUrl + '">';
                        let image = "{{avatar('stadium.jpg')}}";
                        if (v.image != null) {
                            image = "{{asset('')}}" + v.image
                        }

                            html += '<img style="height: 200px!important;" src="' + image + '" alt=""></a></figure><div class="posts__inner card__content text-center">';
                            html += '<a href="' + refUrl + '" class="posts__cta"></a><h6 class="posts__title">';
                            html += '<a href="' + refUrl + '">' + v.name + '</a></h6></div><footer class="posts__footer card__footer">';
                            html += '<div class="post-author text-center"><div class="post-author__info ">';
                            html += '<b>' + v.address + '</b></div></div></footer></div></div>';
                        });

                        $("#sbody").html('').html(html);

                }
            });

        }
    </script>
@endpush

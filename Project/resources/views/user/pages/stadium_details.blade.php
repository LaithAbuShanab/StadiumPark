@extends('user.index')

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

            <div class="products products--list products--list-lg">

                <div class="product__item card">

                    <div class="product__img">
                        <div class="product__img-holder">

                            <!-- Product Slider - Soccer -->
                            <div class="product__slider-soccer-wrapper">
                                <!-- Product Thumbs / End -->

                                <!-- Product Slider -->
                                <div class=" slick-initialized slick-slider">
                                    <div class="slick-list draggable">
                                        <img style="width: 400px!important; height: 300px!important;" src="{{empty($stadium->image) ? avatar('stadium.jpg') : asset($stadium->image) }}" alt="">
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="product__content card__content">

                        <header class="product__header">
                            <div class="product__header-inner">
                                <span class="product__category">{{$title}}</span>
                                <h2 class="product__title">{{$stadium->name}}</h2>
                            </div>
                        </header>

                        <div class="product__excerpt product__excerpt--sm">
                            <h6>Address</h6>
                            {{$stadium->address}}.
                        </div>

                        <div class="product__excerpt product__excerpt--sm">
                            <h6>Description</h6>
                            {{$stadium->details}}.
                        </div>

                        <div class="product__excerpt product__excerpt--sm">
                            <h6>Price for 1  hour</h6>
                            {{\App\Models\Hour::first()->price}}
                        </div>

                        <form action="{{url('send_appointment')}}" method="post" class="product__params">
                            @csrf
                            <input type="hidden" name="stadium_id" value="{{$stadium->id}}">

                            <div class="form-group">
                                <label class="control-label" for="select-default">From Hour</label>
                                <input  type="time" name="time_from" class="form-control">
                            </div>


                            <div class="form-group mx-1">
                                <label class="control-label" for="select-default">To Hour</label>
                                <input   type="time" name="time_to" class="form-control">
                            </div>



                            <div class="form-group mx-1" >
                                <label class="control-label" for="select-default">Date</label>
                                <input type="date" name="appointment_date" class="form-control" min="{{date('Y-m-d')}}">
                                @if ($errors->has('appointment_date'))
                                    <span class="text-danger">{{$errors->first('appointment_date')}}</span>
                                @endif
                            </div>


                            <div class="form-group mx-1" >
                                <input type="hidden"  value="{{\App\Models\Hour::first()->price}}"  name="price_hour" class="form-control" >
                            </div>


                            @if(auth()->user()->status == 'approved')
                                <footer class="product__footer">
                                    <button type="submit" class="btn btn-primary-inverse btn-icon ">
                                        <i class="icon-check"></i>
                                        Send Request
                                    </button>
                                </footer>

                            @else

                                <footer class="product__footer">
                                    <footer class="product__footer">
                                        <a    class="btn btn-danger ">
                                            Your Account is not Active
                                        </a>
                                    </footer>


                                </footer>
                            @endif
                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

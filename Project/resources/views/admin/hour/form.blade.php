@extends('admin.index')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{$title}}</h3>
                </div>

            </div>
            <div class="content-body">

                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card" style="height: 962px;">
                                <div class="card-header">
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">

                                        <form method="post" action="{{url('admin/hour/save')}}" class="form">
                                            @csrf
                                            <input type="hidden" name="id" value="{{isset($hour) ? $hour->id : 0}}">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-plus"></i> {{$title}}</h4>
                                                <div class="row">

                                                    <div class="col-md-6 hidden">
                                                        <div class="form-group">
                                                            <input type="hidden" value="1" step="any" id="hour_count" autocomplete="off" class="form-control" placeholder="Number Of Hours" name="hour_count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <label for="price">Price for 1  hour</label>
                                                            <input type="number" value="{{old('price',isset($hour)? $hour->price : '')}}" step="any" id="price" class="form-control" placeholder="Price" autocomplete="off" name="price">
                                                            @if ($errors->has('price'))
                                                                <span class="text-danger">{{$errors->first('price')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions text-center">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="la la-check-square-o"></i>
                                                    Save Information
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>
        </div>
    </div>
@endsection

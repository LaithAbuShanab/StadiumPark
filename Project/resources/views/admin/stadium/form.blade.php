@extends('admin.index')

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

                                        <form method="post" action="{{url('admin/stadium/save')}}" class="form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{isset($stadium) ? $stadium->id : 0}}">

                                            @if (\admin()->user()->type == 'admin')
                                            <input type="hidden" name="admin_id" value="{{admin()->user()->id}}">
                                            @endif

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-plus"></i> {{$title}}</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="hour_count">Name</label>
                                                            <input type="text" value="{{old('name',isset($stadium)? $stadium->name : '')}}" id="name" autocomplete="off" class="form-control" placeholder="name" name="name">
                                                            @if ($errors->has('name'))
                                                                <span class="text-danger">{{$errors->first('name')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input type="text" value="{{old('address',isset($stadium)? $stadium->address : '')}}" id="address" class="form-control" placeholder="Address" autocomplete="off" name="address">
                                                            @if ($errors->has('address'))
                                                                <span class="text-danger">{{$errors->first('address')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>



                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="address">Type</label>

                                                            <select class="form-control" name="type">
                                                                <option {{isset($stadium) && $stadium->type =='football' ? 'selected' : ''}} value="football">Football</option>
                                                                <option {{isset($stadium) && $stadium->type =='basketball' ? 'selected' : ''}} value="basketball">Basketball</option>
                                                                <option {{isset($stadium) && $stadium->type =='volleyball' ? 'selected' : ''}} value="volleyball">Volley ball</option>
                                                                <option {{isset($stadium) && $stadium->type =='handball' ? 'selected' : ''}} value="handball">HandBall</option>
                                                            </select>
                                                            @if ($errors->has('type'))
                                                                <span class="text-danger">{{$errors->first('type')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>



                                                    @if (\admin()->user()->type == 'super')

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="admin_id">Admin</label>
                                                            <select name="admin_id" class="form-control">
                                                                @if(count($admins) > 0)
                                                                    @foreach($admins as $admin)
                                                                        <option value="{{$admin->id}}"  {{isset($stadium) && $stadium->admin_id == $admin->id ? 'selected' : '' }} >{{$admin->name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            @if ($errors->has('admin_id'))
                                                                <span class="text-danger">{{$errors->first('admin_id   ')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @endif


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="details">Details</label>
                                                            <textarea rows="3" style="resize: none" class="form-control" name="details" id="details">{{isset($stadium)? $stadium->address : ''}}</textarea>
                                                            @if ($errors->has('details'))
                                                                <span class="text-danger">{{$errors->first('details')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>



                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <div class="col-md-8">
                                                                <div id="imagePreview"
                                                                     style="background-image: url('{{!empty($stadium->image) ? asset($stadium->image) : avatar('stadium.jpg')}}')">
                                                                    <input id="uploadFile" type="file" name="image"
                                                                           class="img"/>
                                                                    <div class="hover">
                                                                        <i class="la la-camera"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
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

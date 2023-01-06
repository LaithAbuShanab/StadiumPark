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

                                        <form method="post" action="{{url('admin/employee/save')}}" class="form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{isset($employee) ? $employee->id : 0}}">

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-plus"></i> {{$title}}</h4>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text"  value="{{old('name',isset($employee) ? $employee->name : '')}}" id="name" autocomplete="off" class="form-control" placeholder="Employee Name" name="name">
                                                            @if ($errors->has('name'))
                                                                <span class="text-danger">{{$errors->first('name')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mobile">Mobile</label>
                                                            <input type="text" value="{{old('mobile',isset($employee)? $employee->mobile : '')}}" id="mobile" autocomplete="off" class="form-control" placeholder="Mobile" name="mobile">
                                                            @if ($errors->has('mobile'))
                                                                <span class="text-danger">{{$errors->first('mobile')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Email</label>
                                                            <input type="email" value="{{old('email',isset($employee)? $employee->email : '')}}" id="email" autocomplete="off" class="form-control" placeholder="Email AAddress" name="email">
                                                            @if ($errors->has('email'))
                                                                <span class="text-danger">{{$errors->first('email')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input type="password" value="" id="password" autocomplete="off" class="form-control" placeholder="Password" name="password">
                                                            @if ($errors->has('password'))
                                                                <span class="text-danger">{{$errors->first('password')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-4 label-control"
                                                                   for="image">Image</label>
                                                            <div class="col-md-8">
                                                                <div id="imagePreview"
                                                                     style="background-image: url('{{!empty($employee->image) ? asset($employee->image) : avatar('user.png')}}')">
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

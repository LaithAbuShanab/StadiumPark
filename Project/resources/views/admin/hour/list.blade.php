@extends('admin.index')


@push('css')

    <link rel="stylesheet" type="text/css" href="{{theme('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{theme('app-assets/vendors/css/tables/extensions/rowReorder.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{theme('app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{theme('app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{theme('app-assets/vendors/css/forms/icheck/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{theme('app-assets/css/pages/users.css')}}">
@endpush

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{$title}}</h3>
                </div>
                <div class="content-header-right col-md-6 col-12">

                    @if(count($hours)  == 0)
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <a href="{{url('admin/hour/get')}}" class="btn btn-info round text-white  dropdown-menu-right box-shadow-2 px-2">
                            <i class="ft-plus icon-left"></i>
                            New Hour & Price
                        </a>
                    </div>
                    @endif

                </div>
            </div>

            <div class="content-detached ">
                <div class="content-body">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Task List table -->
                                        <div class="table-responsive">
                                            <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Hour</th>
                                                    <th>Price</th>
                                                    <th>Created at</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @if(count($hours) > 0)
                                                    @foreach($hours  as $hour)
                                                        <tr>
                                                            <td>{{$hour->id}}</td>
                                                            <td>{{$hour->hour_count}}</td>
                                                            <td>{{$hour->price}}</td>
                                                            <td>{{date('Y-m-d',strtotime($hour->created_at))}}</td>
                                                            <td>
                                                                <div class="btn-group text-white" role="group" aria-label="Second Group">
                                                                    <a href="{{url('admin/hour/get/'.$hour->id)}}" class="btn btn-icon btn-success">
                                                                        <i class="la la-edit"></i>
                                                                    </a>
                                                                    <a href="{{url('admin/hour/delete/'.$hour->id)}}" class="btn btn-icon btn-danger">
                                                                        <i class="la la-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Hour</th>
                                                    <th>Price</th>
                                                    <th>Created at</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')

    <script src="{{theme('app-assets/vendors/js/tables/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{theme('app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}" type="text/javascript"></script>
    <script src="{{theme('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}" type="text/javascript"></script>
    <script src="{{theme('app-assets/vendors/js/tables/datatable/dataTables.rowReorder.min.js')}}" type="text/javascript"></script>
    <script src="{{theme('app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
    <script src="{{theme('app-assets/js/scripts/pages/users-contacts.js')}}" type="text/javascript"></script>
@endpush

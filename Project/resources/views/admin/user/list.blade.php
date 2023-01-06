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
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Created at</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @if(count($users) > 0)
                                                    @foreach($users  as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>
                                                        <span class="avatar avatar-md">
                                                            <img class="box-shadow-2" src="{{!empty($user->image) ? asset($user->name) : avatar('user.png')}}" alt="avatar">
                                                        </span>
                                                    </td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->mobile}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>
                                                        @if($user->status == 'pending')
                                                            <button type="button" class="btn btn-sm btn-outline-warning round"> {{$user->status}}</button>
                                                        @elseif($user->status == 'approved')
                                                            <button type="button" class="btn btn-sm btn-outline-success round"> {{$user->status}}</button>
                                                        @else
                                                            <button type="button" class="btn btn-sm btn-outline-danger round"> {{$user->status}}</button>
                                                        @endif
                                                       </td>
                                                    <td>{{date('Y-m-d',strtotime($user->created_at))}}</td>
                                                    <td>
                                                        <span class="dropdown">
                                                            <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-success dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                            <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                                <a href="{{url('admin/change_user_status/'.$user->id.'/approved')}}" class="dropdown-item"><i class="ft-check"></i> Approved</a>
                                                                <a href="{{url('admin/change_user_status/'.$user->id.'/block')}}" class="dropdown-item"><i class="ft-trash-2"></i> Block</a>
                                                            </span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
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


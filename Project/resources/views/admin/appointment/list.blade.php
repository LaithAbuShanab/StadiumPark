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
                                                    <th>User Name</th>
                                                    <th>User Mobile</th>
                                                    <th>User Email</th>
                                                    <th>Stadium</th>
                                                    <th>Appointment Date</th>
                                                    <th>From Time</th>
                                                    <th>To Time</th>
                                                    <th>Status</th>
                                                    <th>Created at</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @if(count($appointments) > 0)
                                                    @foreach($appointments  as $appointment)
                                                <tr>
                                                    <td>{{$appointment->id}}</td>
                                                    <td>{{$appointment->user->name}}</td>
                                                    <td>{{$appointment->user->mobile}}</td>
                                                    <td>{{$appointment->user->email}}</td>
                                                    <td>{{$appointment->stadium->name}}</td>
                                                    <td>{{$appointment->appointment_date}}</td>
                                                    <td>{{$appointment->time_from}}</td>
                                                    <td>{{$appointment->time_to}}</td>
{{--                                                    <td>{{$appointment->hour->hour_count}}</td>--}}
{{--                                                    <td>{{$appointment->hour->price}}</td>--}}
                                                    <td>
                                                        @if($appointment->type == 'pending')
                                                            <button type="button" class="btn btn-sm btn-outline-warning round"> {{$appointment->type}}</button>
                                                        @elseif($appointment->type == 'approved')
                                                            <button type="button" class="btn btn-sm btn-outline-success round"> {{$appointment->type}}</button>
                                                        @elseif($appointment->type == 'finish')
                                                            <button type="button" class="btn btn-sm btn-outline-info round"> {{$appointment->type}}</button>
                                                        @else
                                                            <button type="button" class="btn btn-sm btn-outline-danger round"> {{$appointment->type}}</button>

                                                        @endif
                                                    </td>
                                                    <td>{{date('Y-m-d',strtotime($appointment->created_at))}}</td>

                                                    <td>
                                                        <span class="dropdown">
                                                            <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-success dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                            <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                                <a href="{{url('admin/change_appointment_status/'.$appointment->id.'/approved')}}" class="dropdown-item"><i class="ft-clock"></i> Approved</a>
                                                                <a href="{{url('admin/change_appointment_status/'.$appointment->id.'/finish')}}" class="dropdown-item"><i class="ft-check"></i> Finish</a>
                                                                <a href="{{url('admin/change_appointment_status/'.$appointment->id.'/cancel')}}" class="dropdown-item"><i class="ft-trash-2"></i> Cancel</a>
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
                                                    <th>User Name</th>
                                                    <th>User Mobile</th>
                                                    <th>User Email</th>
                                                    <th>Stadium</th>
                                                    <th>Appointment Date</th>
                                                    <th>From Time</th>
                                                    <th>To Time</th>
{{--                                                    <th>Hours</th>--}}
{{--                                                    <th>Price</th>--}}
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


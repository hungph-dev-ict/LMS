@extends('admin.admin_layouts.master')

@section('title')
    {{ __('all courses') }}
@endsection

@section('inline_styles')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/datatables/media/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin-custom.css') }}">
@endsection

@section('content')
    <div class="message-display">
        @include('flash::message')
    </div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <h2 class="header-title">{{ __('courses') }}</h2>
                <div class="header-sub-title">
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="{{ route('admins.adminDashboard') }}" class="breadcrumb-item">
                            <i class="ti-home p-r-5"></i>{{ __('admin dashboard') }}
                        </a>
                        <a class="breadcrumb-item active">{{ __('courses') }}</a>
                    </nav>
                </div>
            </div>  
            <div class="card">
                <div class="card-body">
                    <div class="table-overflow">
                        <table id="dt-opt" class="table table-hover table-xl">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>{{ __('name') }}</th>
                                    <th>{{ __('lecture count') }}</th>
                                    <th>{{ __('level') }}</th>
                                    <th>{{ __('status') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr id="course{{ $course->id }}">
                                        <td>{{ $course->id }}</td>
                                        <td>
                                            <a href="{{ route('admins.courses.edit', $course->id) }}">{{ $course->title }}</a>
                                            </td>
                                        <td>{{ $course->lecture_numbers }}</td>
                                        <td>{{ $course->level }}</td>
                                        @if ($course->isActive === 0)
                                            <td><span class="badge badge-pill badge-warning">{{ __('pending') }}</span></td>
                                        @else
                                            <td><span class="badge badge-pill badge-success">{{ __('accept') }}</span></td>
                                        @endif
                                        <td class="text-center font-size-18">
                                            @if ($course->isActive === 0)
                                                <a href="{{ route('admins.active-course', $course->id) }}" class="text-gray m-r-15" title="accept"><i class="ti-check-box"></i></a>
                                            @endif
                                            <a class="text-gray" data-toggle="modal" 
                                                data-target="#delete-modal"
                                                data-url="{{ route('admins.courses.destroy', $course->id) }}">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div>       
            </div>   
        </div>
    </div>
@endsection

@include('admin.admin_layouts.delete_modal')

@section('inline_scripts')
    <script src="{{ asset('assets/admin/vendor/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/tables/data-table.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#delete-modal').on('show.bs.modal', function(e){
                var url = $(e.relatedTarget).data('url');
                $('#form-delete').attr('action', url);
            });
            
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
        })
    </script>
@endsection

@extends('layouts.master')
@section('title')
Users
@endsection
@section('css')

@endsection

@section('page-header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item"><a href="#">Users</a>
        </li>
{{--        <li class="breadcrumb-item active">داشبرد</li>--}}

{{--        <!-- Breadcrumb Menu-->--}}
{{--        <li class="breadcrumb-menu">--}}
{{--            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">--}}
{{--                <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>--}}
{{--                <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;داشبرد</a>--}}
{{--                <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;تنظیمات</a>--}}
{{--            </div>--}}
{{--        </li>--}}
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <i class="fa fa-align-justify"></i> Striped Table
                        </div>
                        <div class="card-block">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>
                                        @if($data->status == 'writer')
                                            <div style="color: #0d6efd">{{$data->status}}</div>
                                        @elseif($data->status == 'admin')
                                            <div style="color: #00a67c">{{$data->status}}</div>
                                        @elseif($data->status == 'disable')
                                            <div style="color: #4a5568">{{$data->status}}</div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('dashboard.users.edit', $data->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                        <button type="button" class="btn btn-danger btn-sm delete-btn" data-toggle="modal" data-target="#delete{{ $data->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Delete moadal -->
                                <div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    {{ trans('grades_trans.delete_grade') }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('dashboard.users.destroy', 'test') }}" method="post">
                                                    {{ method_field('Delete') }}
                                                    @csrf
                                                    {{ trans('grades_trans.warning_grade') }}
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $data->id }}">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">{{ trans('grades_trans.close') }}</button>
                                                        <button type="submit"
                                                                class="btn btn-danger">{{ trans('grades_trans.delete') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @empty
                                    <td colspan="5" class="text-center" style="text-align: center">{{ __('لا توجد بيانات لعرضها') }}</td>
                                @endforelse
                                </tbody>
                            </table>
                            {{$users->links()}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="page-item"><a class="page-link" href="#">Prev</a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item active">--}}
{{--                                    <a class="page-link" href="#">1</a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">2</a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">3</a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">4</a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">Next</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('.delete').click(function(){
                var modalId = $(this).data('target');
                $(modalId).modal('show');
            });
        });
    </script>


@endsection

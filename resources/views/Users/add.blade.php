@extends('layouts.master')
@section('title')
Add User
@endsection
@section('css')

@endsection

@section('page-header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.users.create')}}">Add User</a>
        </li>

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
                <div class="container-fluid">

                    <div class="animated fadeIn">
                        <form action="{{ Route('dashboard.users.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-header">
                                        <strong>{{ __('words.users') }}</strong>
                                    </div>
                                    <div class="card-block">




                                        <div class="form-group col-md-12">
                                            <label>{{ __('words.name') }}</label>
                                            <input type="text" name="name" class="form-control" placeholder="{{ __('words.name') }}"
                                            >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>{{ __('words.email') }}</label>
                                            <input type="text" name="email" class="form-control"
                                                   placeholder="{{ __('words.email') }}" >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>{{ __('words.status') }}</label>
                                            <select name="status" id="" class="form-control">
                                                <option value="admin">Admin</option>
                                                <option value="writer" >Writer</option>
                                                <option value="disable">غير مفعل </option>
                                            </select>

                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>{{ __('words.password') }}</label>
                                            <input type="password" name="password" class="form-control"
                                                   placeholder="{{ __('words.password') }}" >
                                        </div>
                                    </div>






                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                            Submit</button>

                                    </div>



                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection

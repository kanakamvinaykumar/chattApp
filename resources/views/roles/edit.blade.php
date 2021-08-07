@extends('layouts.app')
@section('title')
    {{ __('messages.edit_role') }}
@endsection
@section('page_css')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ mix('assets/css/admin_panel.css') }}">
@endsection
@section('content')
    <div class="container-fluid page__container">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left page__heading">
                                {{ __('messages.edit_role') }}
                            </div>
                        </div>
                        <div class="card-body">
                            @include('coreui-templates::common.errors')
                            {{ Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'post']) }}
                            {{ csrf_field() }}
                            <div class="row">
                                @include('roles.edit_fields')
                            </div>

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')
@endsection
@section('scripts')

@endsection
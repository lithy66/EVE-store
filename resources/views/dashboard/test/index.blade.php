@extends('layouts.admin')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('admin/body.home')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('admin/sideBar.brand')}}</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('admin/sideBar.brand')}}</h4>
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
                                    <div class="card-body card-dashboard">
                                        @include('dashboard.includes.alerts.success')
                                        @include('dashboard.includes.alerts.errors')
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                            <tr>
                                                <th>{{__('admin/body.name')}}</th>
                                                <th>{{__('admin/body.url name')}}</th>
                                                <th>{{__('admin/body.status')}}</th>
                                                <th>{{__('admin/body.photo')}}</th>
                                                <th>{{__('admin/body.action')}}</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @isset($brands)
                                            @foreach($brands as $brand)
                                            <tr>
                                                <td>{{$brand -> name}}</td>
                                                <td>{{$brand -> logo}}</td>
                                                <td>{{$brand ->getActive()}}</td>
                                                <td><img style="width: 150px; height: 100px;" src=" "></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="{{route('admin.brand.edit', $brand -> id)}}"
                                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{__('general.update')}}</a>
                                                        <span> </span>
                                                        <a href="{{route('admin.brand.delete', $brand -> id)}}"
                                                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{__('general.delete')}}</a>
                                                    </div>
                                                </td>

                                            </tr>
                                            @endforeach
                                                @endisset
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
            </div>
        </div>
    </div>
@stop

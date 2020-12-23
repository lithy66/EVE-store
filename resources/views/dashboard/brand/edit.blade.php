@extends('layouts.admin')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="{{route('admin.dashboard')}}">{{__('admin/body.home')}}</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="{{route('admin.mainCategories')}}"> {{__('admin/sideBar.category')}}</a></li>
                                <li class="breadcrumb-item active">{{__('general.add')}} {{__('admin/sideBar.category')}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">

                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form"
                                              action="{{route('admin.brand.update', $brand->id)}}"
                                              method="post"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$brand->id}}">
                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img src=" "
                                                         class="rounded-circle height-150"
                                                         alt="}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>{{__('admin/body.photo')}}</label>
                                                <label id="projectinput1" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-user"
                                                                            style="font-size: 30px"></i>{{__('admin/sideBar.category')}}
                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('admin/body.name')}}</label>
                                                            <input type="text" id="value" value="{{$brand->name}}"
                                                                   class="form-control" name="name">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <label
                                                                for="projectinput1">{{__('admin/body.url name')}}</label>
                                                            <input type="text"
                                                                   id="plain_value" class="form-control" name="image" value="{{$brand->image}}">
                                                            @error("image")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">


                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1" style="padding-top: 18px">
                                                            <input type="checkbox" value="1" name="is_active" id="switcheryColor4" class="switchery" data-color="success"
                                                             @if($brand -> is_active == 1)checked @endif />

                                                            <label for="switcheryColor4" class="card-title ml-1">{{__('admin/body.status')}}</label>
                                                            @error("is_active")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i>{{__('general.undo')}}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i>{{__('general.save')}}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@stop

@extends('admin.partials.master')
@section('header')
    <title>{{__('admin.menus')}}</title>
@endsection
@section('content_header')
    <h1 class="top-content-header">@if(isset($menu)) {{__('admin.edit')}} @else {{__('admin.add_new')}} @endif {{__('admin.menus')}}</h1>
@endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title pull-left">
                        <h3 class="m-portlet__head-text">
                            @if(isset($menu)) {{__('admin.edit')}} @else {{__('admin.add_new')}} @endif {{__('admin.menu')}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <form class="form" method="POST" @if(isset($menu)) action="{{route('menus.update', $menu->id)}}"
                      @else
                      action="{{route('menus.store')}}"
                        @endif>
                    {{csrf_field()}}
                    @if(isset($menu))
                        <input type="hidden" name="_method" value="PATCH">
                    @endif
                    <div class="form-group m-form__group @if($errors->has('parent_id')) has-danger @endif">
                        <label for="parent_id" class="label">{{__('admin.parent_id')}} : </label>
                        <select class="form-control m-input" name="parent_id">
                            <option value="0">{{__('admin.none')}}</option>
                            @foreach($menus as $one_menu)
                                <option value="{{$one_menu->id}}"
                                        @if(old('parent_id'))
                                        @if(old('parent_id') == $one_menu->id) selected
                                        @endif
                                        @elseif (isset($menu))
                                        @if($menu->parent_id == $one_menu->id) selected
                                        @endif
                                        @endif>{{$one_menu->title}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('parent_id'))
                            <div class="form-control-feedback">
                                {{$errors->first('parent_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('data_type_id')) has-danger @endif">
                        <label for="data_type_id" class="label">{{__('admin.data_type_id')}}* : </label>
                        <select class="form-control m-input" name="data_type_id">
                            <option value="0">{{__('admin.none')}}</option>
                            @foreach($data_types as $data_type)
                                <option value="{{$data_type->id}}"
                                        @if(old('data_type_id'))
                                        @if(old('data_type_id') == $data_type->id) selected
                                        @endif
                                        @elseif (isset($menu))
                                        @if($menu->data_type_id == $data_type->id) selected
                                        @endif
                                        @endif>{{$data_type->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('data_type_id'))
                            <div class="form-control-feedback">
                                {{$errors->first('data_type_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('title')) has-danger @endif">
                        <label for="title" class="label">{{__('admin.title')}}* : </label>
                        <input class="form-control m-input" name="title" type="text" value="{{old('title') ?: (isset($menu)  ? $menu->title : '')}}">
                        @if($errors->has('title'))
                            <div class="form-control-feedback">
                                {{$errors->first('title')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('icon')) has-danger @endif">
                        <label for="icon" class="label">{{__('admin.icon')}} : </label>
                        <input class="form-control m-input" name="icon" type="text" value="{{old('icon') ?: (isset($menu)  ? $menu->icon : '')}}">
                        @if($errors->has('icon'))
                            <div class="form-control-feedback">
                                {{$errors->first('icon')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('route_name')) has-danger @endif">
                        <label for="route_name" class="label">{{__('admin.route_name')}}* : </label>
                        <input class="form-control m-input" name="route_name" type="text" value="{{old('route_name') ?: (isset($menu)  ? $menu->route_name : '')}}">
                        @if($errors->has('route_name'))
                            <div class="form-control-feedback">
                                {{$errors->first('route_name')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('target')) has-danger @endif">
                        <label for="target" class="label">{{__('admin.target')}} : </label>
                        <input class="form-control m-input" name="target" type="text" value="{{old('target') ?: (isset($menu)  ? $menu->target : '_self')}}">
                        @if($errors->has('target'))
                            <div class="form-control-feedback">
                                {{$errors->first('target')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('order')) has-danger @endif">
                        <label for="order" class="label">{{__('admin.order')}} : </label>
                        <input class="form-control m-input" name="order" type="number" value="{{old('order') ?: (isset($menu)  ? $menu->order : 0)}}">
                        @if($errors->has('order'))
                            <div class="form-control-feedback">
                                {{$errors->first('order')}}
                            </div>
                        @endif
                    </div>
                    <div class="m-form__actions m-form__actions text-center">
                        <button type="submit" class="btn btn-primary">
                            {{__('admin.submit')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

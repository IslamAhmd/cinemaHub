@extends('admin.partials.master')
@section('header')
    <title>{{__('admin.add_new')}} {{__('admin.data_types')}}</title>
@endsection
@section('content_header')
    <h1 class="top-content-header">@if(isset($data_type)) {{__('admin.edit')}} @else {{__('admin.add_new')}} @endif {{__('admin.data_type')}}</h1>
@endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title pull-left">
                        <h3 class="m-portlet__head-text">
                            @if(isset($data_type)) {{__('admin.edit')}} @else {{__('admin.add_new')}} @endif {{__('admin.data_type')}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <form class="form" method="POST" @if(isset($data_type)) action="{{route('data_types.update', $data_type->id)}}"
                      @else
                      action="{{route('data_types.store')}}"
                        @endif>
                    {{csrf_field()}}
                    @if(isset($data_type))
                        <input type="hidden" name="_method" value="PATCH">
                    @endif
                    <div class="form-group m-form__group @if($errors->has('name')) has-danger @endif">
                        <label for="name" class="label">{{__('admin.name')}} : </label>
                        <input class="form-control m-input" name="name" type="text" value="{{old('name') ?: (isset($data_type)  ? $data_type->name : '')}}">
                        @if($errors->has('name'))
                            <div class="form-control-feedback">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                    <br>
                    <div class="m-form__group form-group">
                        <label for="">{{__('admin.available_permissions')}} :</label>
                        <div class="m-checkbox-inline">
                            <label class="m-checkbox">
                                <input type="checkbox" name="permissions[]" value="1"
                                       @if(old('permissions'))
                                       @if(in_array(1, old('permissions'))) checked
                                       @endif
                                       @elseif (isset($data_type))
                                       @if(in_array(1, $data_type->permissions)) checked
                                        @endif
                                        @endif>{{__('admin.view')}}
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="permissions[]" value="2"
                                       @if(old('permissions'))
                                       @if(in_array(2, old('permissions'))) checked
                                       @endif
                                       @elseif (isset($data_type))
                                       @if(in_array(2, $data_type->permissions)) checked
                                        @endif
                                        @endif>{{__('admin.add')}}
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="permissions[]" value="4"
                                       @if(old('permissions'))
                                       @if(in_array(4, old('permissions'))) checked
                                       @endif
                                       @elseif (isset($data_type))
                                       @if(in_array(4, $data_type->permissions)) checked
                                        @endif
                                        @endif>{{__('admin.edit')}}
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="permissions[]" value="8"
                                       @if(old('permissions'))
                                       @if(in_array(8, old('permissions'))) checked
                                       @endif
                                       @elseif (isset($data_type))
                                       @if(in_array(8, $data_type->permissions)) checked
                                        @endif
                                        @endif>{{__('admin.delete')}}
                                <span></span>
                            </label>
                        </div>
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

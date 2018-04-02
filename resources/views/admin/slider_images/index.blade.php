@extends('admin.partials.master')
@section('header')
    <title>{{__('admin.slider_images')}}</title>
@endsection
@section('content_header')
    <h1 class="top-content-header">{{__('admin.slider_images')}}</h1>
@endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title pull-left">
                        <h3 class="m-portlet__head-text">
                            {{__('admin.slider_images')}} {{__('list')}}
                        </h3>
                    </div>
                    <div class="m-portlet__head-title pull-right">
                        <h3 class="m-portlet__head-text">
                            <a href="#" onclick="massDelete()" class="btn btn-danger">{{__('admin.mass_delete')}}</a>
                            <a href="{{route('slider_images.create')}}" class="btn btn-success ">{{__('admin.add_new')}}</a>
                            <form style="display: none" id="mass-delete-form" method="POST" action="{{route('slider_images.destroy', 'mass')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin::Section-->
                @if(Session::has('success'))
                    <label class="form-control alert alert-metal text-center"><h2>{{Session::get('success')}}</h2></label>
                @endif
                <div class="m-section">
                    <div class="m-section__content">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="mas-delete-all" name="mas-delete-all">
                                </th>
                                <th>
                                    #
                                </th>
                                <th>
                                    {{__('admin.name')}}
                                </th>
                                <th>
                                    {{__('admin.available_permissions')}}
                                </th>
                                <th>
                                    {{__('admin.actions')}}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($slider_images as $key => $slider_image)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="mass_delete[]" value="{{$slider_image->id}}">
                                    </td>
                                    <th scope="row">
                                        {{$key + 1}}
                                    </th>
                                    <td>
                                        {{$slider_image->name}}
                                    </td>
                                    <td>
                                        {{$slider_image->permissions}}
                                    </td>
                                    <td>
                                        <a href="{{route('slider_images.edit', $slider_image->id)}}" class="btn btn-primary">{{__('admin.edit')}}</a>
                                        <form id="delete-{{$slider_image->id}}" style="display: none" method="POST" action="{{route('slider_images.destroy', $slider_image->id)}}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{csrf_field()}}
                                        </form>
                                        <a href="#" class="btn btn-danger"
                                           onclick="if(confirm('{{__('admin.are_you_sure')}}')) $('#delete-{{$slider_image->id}}').submit();">{{__('admin.delete')}}</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Section-->
            </div>
            <!--end::Form-->
        </div>

    </div>
@endsection

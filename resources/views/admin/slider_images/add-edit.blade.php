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
                            @if(isset($slider_image)) {{__('admin.edit')}} @else {{__('admin.add_new')}} @endif {{__('admin.slider_image')}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <form class="form" method="POST" @if(isset($slider_image)) action="{{route('slider_images.update', $slider_image->id)}}"
                      @else
                      action="{{route('slider_images.store')}}"
                      @endif enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(isset($slider_image))
                        <input type="hidden" name="_method" value="PATCH">
                    @endif
                    <div class="form-group m-form__group @if($errors->has('caption')) has-danger @endif">
                        <label for="caption" class="label">{{__('admin.caption')}} : </label>
                        <input class="form-control m-input" name="caption" type="text" value="{{old('caption') ?: (isset($slider_image)  ? $slider_image->caption : '')}}">
                        @if($errors->has('caption'))
                            <div class="form-control-feedback">
                                {{$errors->first('caption')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('link')) has-danger @endif">
                        <label for="link" class="label">{{__('admin.link')}} : </label>
                        <input class="form-control m-input" name="link" type="text" value="{{old('link') ?: (isset($slider_image)  ? $slider_image->link : '')}}">
                        @if($errors->has('link'))
                            <div class="form-control-feedback">
                                {{$errors->first('link')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('description')) has-danger @endif">
                        <label for="description" class="label">{{__('admin.description')}} : </label>
                        <input class="form-control m-input" name="description" type="text" value="{{old('description') ?: (isset($slider_image)  ? $slider_image->description : '')}}">
                        @if($errors->has('description'))
                            <div class="form-control-feedback">
                                {{$errors->first('description')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('image')) has-danger @endif">
                        <label for="image" class="label">{{__('admin.image')}} : </label>
                        @if(isset($slider_image))
                            @if($slider_image->image)
                                <br>
                                <img title="{{$slider_image->caption}}" src="{{asset('public/uploads/thumb/'.$slider_image->image)}}" height="80">
                                <br><br>
                            @endif
                        @endif
                        <input class="form-control m-input" name="image" type="file" value="{{old('image') ?: (isset($slider_image)  ? $slider_image->image : '')}}">
                        @if($errors->has('image'))
                            <div class="form-control-feedback">
                                {{$errors->first('image')}}
                            </div>
                        @endif
                    </div>
                    <br>
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

@extends('admin.partials.master')
@section('header')
    <title>{{__('admin.networks')}}</title>
@endsection
@section('content_header')
    <h1 class="top-content-header">{{__('admin.networks')}}</h1>
@endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title pull-left">
                        <h3 class="m-portlet__head-text">
                            @if(isset($network)) {{__('admin.edit')}} @else {{__('admin.add_new')}} @endif {{__('admin.network')}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <form class="form" method="POST" @if(isset($network)) action="{{route('networks.update', $network->id)}}"
                      @else
                      action="{{route('networks.store')}}"
                      @endif enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(isset($network))
                        <input type="hidden" name="_method" value="PATCH">
                    @endif
                    <div class="form-group m-form__group @if($errors->has('name')) has-danger @endif">
                        <label for="name" class="label">{{__('admin.name')}} : </label>
                        <input class="form-control m-input" name="name" type="text" value="{{old('name') ?: (isset($network)  ? $network->name : '')}}">
                        @if($errors->has('name'))
                            <div class="form-control-feedback">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('website')) has-danger @endif">
                        <label for="website" class="label">{{__('admin.website')}} : </label>
                        <input class="form-control m-input" name="website" type="text" value="{{old('website') ?: (isset($network)  ? $network->website : '')}}">
                        @if($errors->has('website'))
                            <div class="form-control-feedback">
                                {{$errors->first('website')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('image')) has-danger @endif">
                        <label for="image" class="label">{{__('admin.image')}} : </label>
                        @if(isset($network))
                            @if($network->image)
                                <br>
                                <img title="{{$network->caption}}" src="{{asset('public/uploads/thumb/'.$network->image)}}" height="80">
                                <br><br>
                            @endif
                        @endif
                        <input class="form-control m-input" name="image" type="file" value="{{old('image') ?: (isset($network)  ? $network->image : '')}}">
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

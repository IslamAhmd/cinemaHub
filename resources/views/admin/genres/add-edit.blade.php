@extends('admin.partials.master')
@section('header')
    <title>{{__('admin.genres')}}</title>
@endsection
@section('content_header')
    <h1 class="top-content-header">{{__('admin.genres')}}</h1>
@endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title pull-left">
                        <h3 class="m-portlet__head-text">
                            @if(isset($genre)) {{__('admin.edit')}} @else {{__('admin.add_new')}} @endif {{__('admin.genre')}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <form class="form" method="POST" @if(isset($genre)) action="{{route('genres.update', $genre->id)}}"
                      @else
                      action="{{route('genres.store')}}"
                      @endif enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(isset($genre))
                        <input type="hidden" name="_method" value="PATCH">
                    @endif
                    <div class="form-group m-form__group @if($errors->has('name')) has-danger @endif">
                        <label for="name" class="label">{{__('admin.name')}} : </label>
                        <input class="form-control m-input" name="name" type="text" value="{{old('name') ?: (isset($genre)  ? $genre->name : '')}}">
                        @if($errors->has('name'))
                            <div class="form-control-feedback">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                     <div class="form-group m-form__group @if($errors->has('image')) has-danger @endif">
                        <label for="image" class="label">{{__('admin.image')}} : </label>
                         @if(isset($genre))
                             @if($genre->image)
                                 <br>
                                 <img title="{{$genre->name}}" src="{{asset('public/uploads/thumb/'.$genre->image)}}" height="80">
                                 <br><br>
                             @endif
                         @endif
                        <input class="form-control m-input" name="image" type="file" value="{{old('image') ?: (isset($genre)  ? $genre->image : '')}}">
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

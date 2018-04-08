@extends('admin.partials.master')
@section('header')
    <title>{{__('admin.seasons')}}</title>
@endsection
@section('content_header')
    <h1 class="top-content-header">{{__('admin.seasons')}}</h1>
@endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title pull-left">
                        <h3 class="m-portlet__head-text">
                            @if(isset($season)) {{__('admin.edit')}} @else {{__('admin.add_new')}} @endif {{__('admin.season')}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <form class="form" method="POST" @if(isset($season)) action="{{route('seasons.update', $season->id)}}"
                      @else
                      action="{{route('seasons.store')}}"
                      @endif enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(isset($season))
                        <input type="hidden" name="_method" value="PATCH">
                    @endif
                    <div class="form-group m-form__group @if($errors->has('tv_shows_id')) has-danger @endif">
                        <label for="tv_shows_id" class="label">{{__('admin.tv_shows_id')}}* : </label>
                        <select class="form-control m-input" name="tv_shows_id">
                            <option value="0">{{__('admin.none')}}</option>
                            @foreach($tv_shows as $tv_show)
                                <option value="{{$tv_show->id}}"
                                        @if(old('tv_shows_id'))
                                        @if(old('tv_shows_id') == $tv_show->id) selected
                                        @endif
                                        @elseif (isset($season))
                                        @if($season->tv_shows_id == $tv_show->id) selected
                                        @endif
                                        @endif>{{$tv_show->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('tv_shows_id'))
                            <div class="form-control-feedback">
                                {{$errors->first('tv_shows_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('number')) has-danger @endif">
                        <label for="number" class="label">{{__('admin.number')}} : </label>
                        <input class="form-control m-input" name="number" type="number" value="{{old('number') ?: (isset($season)  ? $season->number : '')}}">
                        @if($errors->has('number'))
                            <div class="form-control-feedback">
                                {{$errors->first('number')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('year')) has-danger @endif">
                        <label for="year" class="label">{{__('admin.year')}} : </label>
                        <input class="form-control m-input" name="year" type="text" value="{{old('year') ?: (isset($season)  ? $season->year : '')}}">
                        @if($errors->has('year'))
                            <div class="form-control-feedback">
                                {{$errors->first('year')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('trailer')) has-danger @endif">
                        <label for="trailer" class="label">{{__('admin.trailer')}} : </label>
                        <textarea class="form-control m-input" name="trailer">
                            {{old('trailer') ?: (isset($season)  ? $season->trailer : '')}}
                        </textarea>
                        @if($errors->has('trailer'))
                            <div class="form-control-feedback">
                                {{$errors->first('trailer')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('image')) has-danger @endif">
                        <label for="image" class="label">{{__('admin.image')}} : </label>
                        @if(isset($season))
                            @if($season->image)
                                <br>
                                <img title="{{$season->caption}}" src="{{asset('public/uploads/thumb/'.$season->image)}}" height="80">
                                <br><br>
                            @endif
                        @endif
                        <input class="form-control m-input" name="image" type="file" value="{{old('image') ?: (isset($season)  ? $season->image : '')}}">
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

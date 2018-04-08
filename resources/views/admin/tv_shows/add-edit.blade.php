@extends('admin.partials.master')
@section('header')
    <title>{{__('admin.tv_shows')}}</title>
@endsection
@section('content_header')
    <h1 class="top-content-header">{{__('admin.tv_shows')}}</h1>
@endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title pull-left">
                        <h3 class="m-portlet__head-text">
                            @if(isset($tv_show)) {{__('admin.edit')}} @else {{__('admin.add_new')}} @endif {{__('admin.tv_show')}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <form class="form" method="POST" @if(isset($tv_show)) action="{{route('shows.update', $tv_show->id)}}"
                      @else
                      action="{{route('shows.store')}}"
                      @endif enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(isset($tv_show))
                        <input type="hidden" name="_method" value="PATCH">
                    @endif
                    <div class="form-group m-form__group @if($errors->has('genres')) has-danger @endif">
                        <label for="genres" class="label">{{__('admin.genres')}}* : </label>
                        <select class="form-control m-input select2" name="genres[]" multiple>
                            @foreach($genres as $genre)
                                <option value="{{$genre->id}}"
                                        @if(old('genres'))
                                        @if(in_array($genre->id,old('genres'))) selected
                                        @endif
                                        @elseif (isset($tv_show))
                                        @if(in_array($genre->id, $tv_show->genres->pluck('id')->toArray())) selected
                                        @endif
                                        @endif>{{$genre->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('genres'))
                            <div class="form-control-feedback">
                                {{$errors->first('genres')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('network_id')) has-danger @endif">
                        <label for="network_id" class="label">{{__('admin.network_id')}} : </label>
                        <select class="form-control m-input" name="network_id">
                            <option value="">{{__('admin.none')}}</option>
                            @foreach($networks as $network)
                                <option value="{{$network->id}}"
                                        @if(old('network_id'))
                                        @if(old('network_id') == $network->id) selected
                                        @endif
                                        @elseif (isset($tv_show))
                                        @if($tv_show->network_id == $network->id) selected
                                        @endif
                                        @endif>{{$network->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('network_id'))
                            <div class="form-control-feedback">
                                {{$errors->first('network_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('name')) has-danger @endif">
                        <label for="name" class="label">{{__('admin.name')}}* : </label>
                        <input class="form-control m-input" name="name" type="text" value="{{old('name') ?: (isset($tv_show)  ? $tv_show->name : '')}}">
                        @if($errors->has('name'))
                            <div class="form-control-feedback">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('description')) has-danger @endif">
                        <label for="description" class="label">{{__('admin.description')}}* : </label>
                        <textarea class="form-control m-input" name="description">{{old('description') ?: (isset($tv_show)  ? $tv_show->description : '')}}</textarea>
                        @if($errors->has('description'))
                            <div class="form-control-feedback">
                                {{$errors->first('description')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('trailer')) has-danger @endif">
                        <label for="trailer" class="label">{{__('admin.trailer')}} : </label>
                        <textarea class="form-control m-input" name="trailer">
                            {{old('trailer') ?: (isset($tv_show)  ? $tv_show->trailer : '')}}
                        </textarea>
                        @if($errors->has('trailer'))
                            <div class="form-control-feedback">
                                {{$errors->first('trailer')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('start_year')) has-danger @endif">
                        <label for="start_year" class="label">{{__('admin.start_year')}}* : </label>
                        <input class="form-control m-input" name="start_year" type="text" value="{{old('start_year') ?: (isset($tv_show)  ? $tv_show->start_year : '')}}">
                        @if($errors->has('start_year'))
                            <div class="form-control-feedback">
                                {{$errors->first('start_year')}}
                            </div>
                        @endif
                    </div>
                                        <div class="form-group m-form__group @if($errors->has('end_year')) has-danger @endif">
                        <label for="end_year" class="label">{{__('admin.end_year')}}* : </label>
                        <input class="form-control m-input" name="end_year" type="text" value="{{old('end_year') ?: (isset($tv_show)  ? $tv_show->end_year : '')}}">
                        @if($errors->has('end_year'))
                            <div class="form-control-feedback">
                                {{$errors->first('end_year')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('idmb_id')) has-danger @endif">
                        <label for="idmb_id" class="label">{{__('admin.idmb_id')}} : </label>
                        <input class="form-control m-input" name="idmb_id" type="text" value="{{old('idmb_id') ?: (isset($tv_show)  ? $tv_show->idmb_id : '')}}">
                        @if($errors->has('idmb_id'))
                            <div class="form-control-feedback">
                                {{$errors->first('idmb_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('runtime')) has-danger @endif">
                        <label for="runtime" class="label">{{__('admin.runtime')}}* <small>({{__('admin.in_minutes')}})</small>: </label>
                        <input class="form-control m-input" name="runtime" type="number" value="{{old('runtime') ?: (isset($tv_show)  ? $tv_show->runtime : '')}}">
                        @if($errors->has('runtime'))
                            <div class="form-control-feedback">
                                {{$errors->first('runtime')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('image')) has-danger @endif">
                        <label for="image" class="label">{{__('admin.image')}}* : </label>
                        @if(isset($tv_show))
                            @if($tv_show->image)
                                <br>
                                <img title="{{$tv_show->caption}}" src="{{asset('public/uploads/thumb/'.$tv_show->image)}}" height="80">
                                <br><br>
                            @endif
                        @endif
                        <input class="form-control m-input" name="image" type="file" value="{{old('image') ?: (isset($tv_show)  ? $tv_show->image : '')}}">
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

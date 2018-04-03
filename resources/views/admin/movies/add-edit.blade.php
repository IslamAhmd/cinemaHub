@extends('admin.partials.master')
@section('header')
    <title>{{__('admin.movies')}}</title>
@endsection
@section('content_header')
    <h1 class="top-content-header">{{__('admin.movies')}}</h1>
@endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title pull-left">
                        <h3 class="m-portlet__head-text">
                            @if(isset($movie)) {{__('admin.edit')}} @else {{__('admin.add_new')}} @endif {{__('admin.movie')}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <form class="form" method="POST" @if(isset($movie)) action="{{route('movies.update', $movie->id)}}"
                      @else
                      action="{{route('movies.store')}}"
                      @endif enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(isset($movie))
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
                                        @elseif (isset($movie))
                                        @if($movie->genres == $genre->id) selected
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
                                        @elseif (isset($movie))
                                        @if($movie->network_id == $network->id) selected
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
                        <input class="form-control m-input" name="name" type="text" value="{{old('name') ?: (isset($movie)  ? $movie->name : '')}}">
                        @if($errors->has('name'))
                            <div class="form-control-feedback">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('description')) has-danger @endif">
                        <label for="description" class="label">{{__('admin.description')}}* : </label>
                        <textarea class="form-control m-input" name="description">{{old('description') ?: (isset($movie)  ? $movie->description : '')}}</textarea>
                        @if($errors->has('description'))
                            <div class="form-control-feedback">
                                {{$errors->first('description')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('base_link')) has-danger @endif">
                        <label for="base_link" class="label">{{__('admin.base_link')}}* : </label>
                        <textarea class="form-control m-input" name="base_link">{{old('base_link') ?: (isset($movie)  ? $movie->base_link : '')}}</textarea>
                        @if($errors->has('base_link'))
                            <div class="form-control-feedback">
                                {{$errors->first('base_link')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('trailer')) has-danger @endif">
                        <label for="trailer" class="label">{{__('admin.trailer')}} : </label>
                        <textarea class="form-control m-input" name="trailer">
                            {{old('trailer') ?: (isset($movie)  ? $movie->trailer : '')}}
                        </textarea>
                        @if($errors->has('trailer'))
                            <div class="form-control-feedback">
                                {{$errors->first('trailer')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('year')) has-danger @endif">
                        <label for="year" class="label">{{__('admin.year')}}* : </label>
                        <input class="form-control m-input" name="year" type="text" value="{{old('year') ?: (isset($movie)  ? $movie->year : '')}}">
                        @if($errors->has('year'))
                            <div class="form-control-feedback">
                                {{$errors->first('year')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('idmb_id')) has-danger @endif">
                        <label for="idmb_id" class="label">{{__('admin.idmb_id')}} : </label>
                        <input class="form-control m-input" name="idmb_id" type="text" value="{{old('idmb_id') ?: (isset($movie)  ? $movie->idmb_id : '')}}">
                        @if($errors->has('idmb_id'))
                            <div class="form-control-feedback">
                                {{$errors->first('idmb_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('runtime')) has-danger @endif">
                        <label for="runtime" class="label">{{__('admin.runtime')}}* <small>({{__('admin.in_minutes')}})</small>: </label>
                        <input class="form-control m-input" name="runtime" type="number" value="{{old('runtime') ?: (isset($movie)  ? $movie->runtime : '')}}">
                        @if($errors->has('runtime'))
                            <div class="form-control-feedback">
                                {{$errors->first('runtime')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('image')) has-danger @endif">
                        <label for="image" class="label">{{__('admin.image')}}* : </label>
                        @if(isset($movie))
                            @if($movie->image)
                                <br>
                                <img title="{{$movie->caption}}" src="{{asset('public/uploads/thumb/'.$movie->image)}}" height="80">
                                <br><br>
                            @endif
                        @endif
                        <input class="form-control m-input" name="image" type="file" value="{{old('image') ?: (isset($movie)  ? $movie->image : '')}}">
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

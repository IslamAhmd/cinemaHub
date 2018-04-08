@extends('admin.partials.master')
@section('header')
    <title>{{__('admin.episodes')}}</title>
@endsection
@section('content_header')
    <h1 class="top-content-header">{{__('admin.episodes')}}</h1>
@endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title pull-left">
                        <h3 class="m-portlet__head-text">
                            @if(isset($episode)) {{__('admin.edit')}} @else {{__('admin.add_new')}} @endif {{__('admin.episode')}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <form class="form" method="POST" @if(isset($episode)) action="{{route('episodes.update', $episode->id)}}"
                      @else
                      action="{{route('episodes.store')}}"
                      @endif enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(isset($episode))
                        <input type="hidden" name="_method" value="PATCH">
                    @endif
                    <div class="form-group m-form__group @if($errors->has('tv_shows_id')) has-danger @endif">
                        <label for="tv_shows_id" class="label">{{__('admin.tv_shows_id')}} :</label>
                        <select class="form-control m-input" name="tv_shows_id" onchange="loadSeasons(this);return false;">
                            <option value="">{{__('admin.none')}}</option>
                            @foreach($tv_shows as $tv_show)
                                <option value="{{$tv_show->id}}"
                                        @if(old('tv_shows_id'))
                                        @if(old('tv_shows_id') == $tv_show->id) selected
                                        @endif
                                        @elseif (isset($episode))
                                        @if($episode->tv_shows_id == $tv_show->id) selected
                                        @endif
                                        @endif
                                        data-value="{{$tv_show->seasons}}">{{$tv_show->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('tv_shows_id'))
                            <div class="form-control-feedback">
                                {{$errors->first('tv_shows_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('seasons_id')) has-danger @endif">
                        <label for="seasons_id" class="label">{{__('admin.seasons_id')}} : </label>
                        <select class="form-control m-input" name="seasons_id" onchange="loadSeasons(this);return false;">
                            <option value="">{{__('admin.none')}}</option>
                            @if (isset($episode))
                                @foreach($seasons as $season)
                                    <option value="{{$season->id}}"
                                            @if(old('seasons_id'))
                                            @if(old('seasons_id') == $season->id) selected
                                            @endif
                                            @elseif (isset($episode))
                                            @if($episode->seasons_id == $season->id) selected
                                            @endif
                                            @endif
                                            >{{__('admin.season')}} {{$season->number}}</option>
                                @endforeach
                            @endif
                        </select>
                        @if($errors->has('seasons_id'))
                            <div class="form-control-feedback">
                                {{$errors->first('seasons_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('title')) has-danger @endif">
                        <label for="title" class="label">{{__('admin.title')}}* : </label>
                        <input class="form-control m-input" name="title" type="text" value="{{old('title') ?: (isset($episode)  ? $episode->title : '')}}">
                        @if($errors->has('title'))
                            <div class="form-control-feedback">
                                {{$errors->first('title')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('description')) has-danger @endif">
                        <label for="description" class="label">{{__('admin.description')}}* : </label>
                        <textarea class="form-control m-input" name="description">{{old('description') ?: (isset($episode)  ? $episode->description : '')}}</textarea>
                        @if($errors->has('description'))
                            <div class="form-control-feedback">
                                {{$errors->first('description')}}
                            </div>
                        @endif
                    </div>    
                    <div class="form-group m-form__group @if($errors->has('release_date')) has-danger @endif">
                        <label for="release_date" class="label">{{__('admin.release_date')}}* : </label>
                        <input class="form-control m-input" name="release_date" type="date" value="{{old('release_date') ?: (isset($episode)  ? $episode->release_date : '')}}">
                        @if($errors->has('release_date'))
                            <div class="form-control-feedback">
                                {{$errors->first('release_date')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('base_link')) has-danger @endif">
                        <label for="base_link" class="label">{{__('admin.base_link')}}* : </label>
                        <textarea class="form-control m-input" name="base_link">{{old('base_link') ?: (isset($episode)  ? $episode->base_link : '')}}</textarea>
                        @if($errors->has('base_link'))
                            <div class="form-control-feedback">
                                {{$errors->first('base_link')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('idmb_id')) has-danger @endif">
                        <label for="idmb_id" class="label">{{__('admin.idmb_id')}} : </label>
                        <input class="form-control m-input" name="idmb_id" type="text" value="{{old('idmb_id') ?: (isset($episode)  ? $episode->idmb_id : '')}}">
                        @if($errors->has('idmb_id'))
                            <div class="form-control-feedback">
                                {{$errors->first('idmb_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('runtime')) has-danger @endif">
                        <label for="runtime" class="label">{{__('admin.runtime')}}* <small>({{__('admin.in_minutes')}})</small>: </label>
                        <input class="form-control m-input" name="runtime" type="number" value="{{old('runtime') ?: (isset($episode)  ? $episode->runtime : '')}}">
                        @if($errors->has('runtime'))
                            <div class="form-control-feedback">
                                {{$errors->first('runtime')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group m-form__group @if($errors->has('image')) has-danger @endif">
                        <label for="image" class="label">{{__('admin.image')}}* : </label>
                        @if(isset($episode))
                            @if($episode->image)
                                <br>
                                <img title="{{$episode->caption}}" src="{{asset('public/uploads/thumb/'.$episode->image)}}" height="80">
                                <br><br>
                            @endif
                        @endif
                        <input class="form-control m-input" name="image" type="file" value="{{old('image') ?: (isset($episode)  ? $episode->image : '')}}">
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
@section('javascript')
    <script>
        function loadSeasons(select){
            var data = JSON.parse($(select).find(':selected').attr('data-value'));
            var seasons = $('select[name=seasons_id]')
            seasons.html('');
            for (var i=0; i<data.length; i++){
                seasons.append('<option value='+data[i].id+'>{{__('admin.season')}} '+data[i].number+'</option>')
            }
            console.log(data);
        }
    </script>
@endsection
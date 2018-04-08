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
                            {{__('admin.tv_shows')}} {{__('list')}}
                        </h3>
                    </div>
                    <div class="m-portlet__head-title pull-right">
                        <h3 class="m-portlet__head-text">
                            <a href="#" onclick="massDelete()" class="btn btn-danger">{{__('admin.mass_delete')}}</a>
                            <a href="{{route('shows.create')}}" class="btn btn-success ">{{__('admin.add_new')}}</a>
                            <form style="display: none" id="mass-delete-form" method="POST" action="{{route('shows.destroy', 'mass')}}">
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
                                    {{__('admin.genres')}}
                                </th>
                                <th>
                                    {{__('admin.network')}}
                                </th>
                                <th>
                                    {{__('admin.description')}}
                                </th>
                                <th>
                                    {{__('admin.image')}}
                                </th>
                                <th>
                                    {{__('admin.actions')}}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tv_shows as $key => $tv_show)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="mass_delete[]" value="{{$tv_show->id}}">
                                    </td>
                                    <th scope="row">
                                        {{$key + 1}}
                                    </th>
                                    <td>
                                        {{$tv_show->name}}
                                    </td>
                                    <td>
                                        @foreach($tv_show->genres as $genre)
                                            {{$genre->name}},
                                        @endforeach
                                    </td>
                                    <td>
                                        @if(App\Network::find($tv_show->network_id)){{App\Network::find($tv_show->network_id)->name}}@endif
                                    </td>
                                    <td>
                                        {{$tv_show->description}}
                                    </td>
                                    <td>
                                        @if($tv_show->image)
                                            <img title="{{$tv_show->caption}}" src="{{asset('public/uploads/thumb/'.$tv_show->image)}}" height="80">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('shows.edit', $tv_show->id)}}" class="btn btn-primary">{{__('admin.edit')}}</a>
                                        <form id="delete-{{$tv_show->id}}" style="display: none" method="POST" action="{{route('shows.destroy', $tv_show->id)}}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{csrf_field()}}
                                        </form>
                                        <a href="#" class="btn btn-danger"
                                           onclick="if(confirm('{{__('admin.are_you_sure')}}')) $('#delete-{{$tv_show->id}}').submit();">{{__('admin.delete')}}</a>
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

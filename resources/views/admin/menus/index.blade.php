@extends('admin.partials.master')
@section('header')
    <title>{{__('admin.menus')}}</title>
    <style>
        #menu {
            padding: 0px;
        }
        .sortable {
            min-height:20px;
        }
        .sub-sortable {
            border-right: 1px solid #716aca;
        }
        #menu li {
            list-style: none;
            margin-bottom: 10px;
            border: 1px solid #d4d4d4;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            border-color: #D4D4D4 #D4D4D4 #BCBCBC;
            padding: 6px;
            cursor: move;
            background: #f6f6f6;
            background: -moz-linear-gradient(top,  #ffffff 0%, #f6f6f6 47%, #ededed 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(47%,#f6f6f6), color-stop(100%,#ededed));
            background: -webkit-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
            background: -o-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
            background: -ms-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
            background: linear-gradient(to bottom,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 );
        }
    </style>

@endsection
@section('content_header')
    <h1 class="top-content-header">{{__('admin.menus')}}</h1>
@endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title text-center pull-left">
                        <h3 class="m-portlet__head-text">
                            {{__('admin.menus')}} {{__('list')}}
                        </h3>
                    </div>
                    <div class="m-portlet__head-title pull-right">
                        <h3 class="m-portlet__head-text">
                            <a href="{{route('menus.create')}}" class="btn btn-success ">{{__('admin.add_new')}}</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                @if(Session::has('success'))
                    <label class="form-control alert alert-metal text-center"><h2>{{Session::get('success')}}</h2></label>
                @endif
                <div class="box-body table-responsive">
                    @if(isset($menus))
                        @if(count($menus) > 0)
                            <ul id="menu" class="sortable">
                                @foreach($menus as $menu)
                                    <li id="{{$menu->id}}">
                                        <a>{{$menu->title}}</a>
                                        <form id="delete-{{$menu->id}}" style="display: none" method="POST" action="{{route('menus.destroy', $menu->id)}}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{csrf_field()}}
                                        </form>
                                        <a href="#" class="pull-right"
                                           onclick="if(confirm('{{__('admin.are_you_sure')}}')) $('#delete-{{$menu->id}}').submit();">
                                            <i class="flaticon flaticon-close"></i></a>
                                        <a href="{{route('menus.edit', $menu->id)}}" class="pull-right"><i class="flaticon flaticon-edit"></i></a>
                                        <br>
                                        <br>
                                        <ul class="sortable sub-sortable">
                                            @foreach($menu->children as $child)
                                                <li id="{{$child->id}}" class="sub-sortable">
                                                    <a>{{$child->title}}</a>
                                                    <form id="delete-{{$child->id}}" style="display: none" method="POST" action="{{route('menus.destroy', $child->id)}}">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        {{csrf_field()}}
                                                    </form>
                                                    <a href="#" class="pull-right"
                                                       onclick="if(confirm('{{__('admin.are_you_sure')}}')) $('#delete-{{$child->id}}').submit();">
                                                        <i class="flaticon flaticon-close"></i></a>
                                                    <a href="{{route('menus.edit', $child->id)}}" class="pull-right"><i class="flaticon flaticon-edit"></i></a
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
        $(function(){
            $(".sortable").sortable({
                connectWith: ".sortable",
                stop: function(){
                    $.map($(this).find('li'), function(el) {
                        var itemID = el.id;
                        var itemIndex = $(el).index();
                        $.ajax({
                            url:'{{route('menus_api.index')}}',
                            type:'GET',
                            dataType:'json',
                            data: {itemID:itemID, itemIndex: itemIndex},
                        })
                    });
                }
            }).disableSelection();
        });
    </script>
@endsection
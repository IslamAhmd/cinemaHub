<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <link href="{{asset('public/css/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.10/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
    @yield('header')
</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
<div class="m-grid m-grid--hor m-grid--root m-page">
    <header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="{{route('admin')}}" class="m-brand__logo-wrapper">
                                <img alt="" src="{{asset('public/images/logo_default_dark.png')}}"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">
                            <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
                                <span></span>
                            </a>
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
                        <i class="la la-close"></i>
                    </button>
                    <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
                        @yield('content_header')
                    </div>
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="{{asset('public/images/user.jpeg')}}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
                                        <span class="m-topbar__username m--hide">
													Nick
												</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url({{asset('public/images/user_profile_bg.jpg')}}); background-size: cover;">
                                                <div class="m-card-user m-card-user--skin-dark">
                                                    <div class="m-card-user__pic">
                                                        <img src="{{asset('public/images/user.jpeg')}}" class="m--img-rounded m--marginless" alt=""/>
                                                    </div>
                                                    <div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	{{Auth::user()->name}}
																</span>
                                                        <h3  class="m-card-user__email m--font-weight-300 m-link" >
                                                            {{Auth::user()->email}}
                                                        </h3>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
                                                        </li>
                                                        <li class="m-nav__item text-center">
                                                            <a href="#" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                Logout
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark"
                 data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <li class="m-menu__item  @if(Request::path() == 'en/admin') m-menu__item--active @endif" aria-haspopup="true" >
                        <a  href="{{route('admin')}}" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-line-graph"></i>
                            <span class="m-menu__link-title">
                                <span class="m-menu__link-wrap">
                                    <span class="m-menu__link-text">
												{{__('admin.dashboard')}}
                                    </span>
                                    <span class="m-menu__link-badge">
                                    </span>
                                </span>
                            </span>
                        </a>
                    </li>
                    @if(Auth::user()->role > 2)
                        <li class="m-menu__item  @if(str_contains(Request::path(), 'data_types')) m-menu__item--active @endif" aria-haspopup="true" >
                            <a  href="{{route('data_types.index')}}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-line-graph"></i>
                                <span class="m-menu__link-title">
                                <span class="m-menu__link-wrap">
                                    <span class="m-menu__link-text">
                                        {{__('admin.data_types')}}
                                    </span>
                                    <span class="m-menu__link-badge">
                                    </span>
                                </span>
                            </span>
                            </a>
                        </li>
                        <li class="m-menu__item  @if(str_contains(Request::path(), 'menus')) m-menu__item--active @endif" aria-haspopup="true" >
                            <a  href="{{route('menus.index')}}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-line-graph"></i>
                                <span class="m-menu__link-title">
                                <span class="m-menu__link-wrap">
                                    <span class="m-menu__link-text">
                                        {{__('admin.menus')}}
                                    </span>
                                    <span class="m-menu__link-badge">
                                    </span>
                                </span>
                            </span>
                            </a>
                        </li>
                    @endif
                    <li class="m-menu__section">
                        <h4 class="m-menu__section-text">
                            {{__('admin.menu')}}
                        </h4>
                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                    </li>
                    @foreach($global_menus as $menu)
                        <li class="m-menu__item
                            @if(count($menu->children) > 0)
                                m-menu__item--submenu
                         @foreach($menu->children as $child)
                        @if(str_contains(Request::path(), explode('.', $child->route_name)[0]))
                                m-menu__item--expanded m-menu__item--open
                                <?php break; ?>
                            @endif
                        @endforeach
                        @elseif (str_contains(Request::path(), explode('.', $menu->route_name)[0]))
                                m-menu__item--active
                            @endif" aria-haspopup="true"  data-menu-submenu-toggle="hover" >
                            <a  href="{{route($menu->route_name)}}" class="m-menu__link @if(count($menu->children) > 0) m-menu__toggle @endif">
                                <i class="m-menu__link-icon flaticon-layers"></i>
                                <span class="m-menu__link-text">
										{{ $menu->title }}
									</span>
                                @if(count($menu->children) > 0)
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                @endif
                            </a>
                            <div class="m-menu__submenu ">
                                <span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__link-text">
                                                    {{ $menu->title }}
												</span>
											</span>
                                    </li>
                                    @foreach($menu->children as $child)
                                        <li class="m-menu__item @if(str_contains(Request::path(), explode('.', $child->route_name)[0])) m-menu__item--active @endif" aria-haspopup="true" >
                                            <a  href="{{route($child->route_name)}}" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
													{{$child->title}}
												</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- END: Aside Menu -->
        </div>
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            @yield('content')
        </div>
    </div>
</div>
<script src="{{asset('public/js/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/scripts.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/dashboard.js')}}" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
@yield('javascript')
<script>
    $('.table').DataTable();
</script>
<script>
    $('#mas-delete-all').click(function () {
        if ($(this).prop('checked') == false){
            $(this).prop('checked', false);
            $('input[name="mass_delete[]"]:visible').prop('checked', false);
        }
        else {
            $(this).prop('checked', true);
            $('input[name="mass_delete[]"]:visible').prop('checked', true);
        }
        //return false;
    });
    function massDelete() {
        if (confirm('{{__('admin.are_you_sure')}}')) {
            $('#mass-delete-form').find('input[name="ids[]"]').remove();
            var elems = $("input[name=\"mass_delete[]\"]:visible:checked"), count = elems.length;
            elems.each(function () {
                $('#mass-delete-form').append('<input type="checkbox" name="ids[]" value="' + $(this).val() + '" checked>');
                if (!--count) $('#mass-delete-form').submit();
            });
        }
    }
    $('select').select2();
</script>
</body>
</html>

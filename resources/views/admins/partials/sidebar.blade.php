<aside id="sidebar" class="{{ config('ecamtheme.theme.layout.sidebar.class_name')?:'sidebar' }} {{ config('ecamtheme.theme.layout.sidebar.is_collapse')===true?'collapse ':'' }}{{ config('ecamtheme.theme.layout.sidebar.fixed')===true?'fixed ':'' }}{{ config('ecamtheme.theme.layout.sidebar.position')?:'left' }}"
       aria-labelledby="toggle-sidebar"
       data-parent="#ecam">
    <a class="logo text-center logo-light" href="{{url('/')}}">
        <span class="logo-lg">
            <img src="{{ url('/images/logos/dentzone_small.png') }}" alt="logo"> {{ config('app.name') }}
        </span>
    </a>
    <div class="vertical-menu h-100">
        <div class="wrapper-offset">
            <div class="wrapper-menu">
                <div class="sidebar-menu">
                    @if (count(navigation())>0)
                        <ul class="nav flex-column nav-list-tittle" id="nav-item">
                            @foreach(navigation() as $nav)
                                @if ($nav->type==1 && (count($nav->children)>0))
                                    <li class="nav-item">
                                        <a class="nav-link nav-tittle" href="javascript:void(0);">{{ $nav->name }}</a>
                                        <ul class="nav flex-column nav-list-main">
                                            @foreach($nav->children as $main)
                                                @if (count($main->children)>0)
                                                    <a class="nav-link collapsed"
                                                       data-toggle="collapse"
                                                       aria-expanded="false"
                                                       aria-controls="collapse-{{ strtolower($main->name) }}"
                                                       data-target="#collapse-{{ strtolower($main->name) }}-item" id="item-blogs">
                                                        <i class="{{ $main->icon }}"></i>
                                                        <span class="nav-text pl-2">{{ $main->name }}</span>
                                                        <span class="arrow-drop"><i class="fal fa-chevron-right"></i></span>
                                                    </a>
                                                    <div class="collapse" id="collapse-{{ strtolower($main->name) }}-item"
                                                         aria-labelledby="item-{{ strtolower($main->name) }}"
                                                         data-parent="#nav-item">
                                                        <ul class="nav flex-column">
                                                            @foreach ($main->children as $child)
                                                                <li class="nav-item">
                                                                    <a class="nav-link {{ url($child->link)==url()->current()?'active':'' }}"
                                                                       href="{{ $child->link?url($child->link):'#' }}">
                                                                        <span class="nav-text pl-2">{{ $child->name }}</span>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @else
                                                    <li class="nav-item">
                                                        <a class="nav-link {{ url($main->link)==url()->current()?'active':'' }}"
                                                           href="{{ $main->link?url($main->link):'#' }}">
                                                            <i class="{{ $main->icon }} mr-2"></i>
                                                            <span class="nav-text">{{ $main->name }}</span>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</aside>

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
                    <ul class="nav flex-column" id="nav-item">
                        @foreach (config('navigation.sidebar') as $nav)
                            @if (count($nav)>0 && $nav['tittle'])
                                <li class="nav-item" >
                                    <a class="nav-link nav-tittle" href="javascript:void(0);">{{ $nav['tittle'] }}</a>
                                    @if (count($nav['items'])>0)
                                        <ul class="nav flex-column">
                                            @foreach ($nav['items'] as $item)
                                                @if ($item['hasChild']===true)
                                                    <a class="nav-link collapsed"
                                                       data-toggle="collapse"
                                                       aria-expanded="false"
                                                       aria-controls="collapse-{{ strtolower($item['label']) }}"
                                                       data-target="#collapse-{{ strtolower($item['label']) }}-item" id="item-blogs">
                                                        <i class="{{ $item['icon'] }}"></i>
                                                        <span class="nav-text pl-2">{{ $item['label'] }}</span>
                                                        <span class="arrow-drop"><i class="fal fa-chevron-right"></i></span>
                                                    </a>
                                                    <div class="collapse" id="collapse-{{ strtolower($item['label']) }}-item"
                                                         aria-labelledby="item-{{ strtolower($item['label']) }}"
                                                         data-parent="#nav-item">
                                                        <ul class="nav flex-column">
                                                            @foreach ($item['child'] as $child)
                                                                <li class="nav-item">
                                                                    <a class="nav-link {{ url($child['link'])==url()->current()?'active':'' }}" href="{{ $child['link']?url($child['link']):'#' }}">
                                                                        <span class="nav-text pl-2">{{ $child['label'] }}</span>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @else
                                                    @role('admin')
                                                    <li class="nav-item">
                                                        <a class="nav-link {{ url($item['link'])==url()->current()?'active':'' }}" href="{{ $item['link']?url($item['link']):'#' }}">
                                                            <i class="{{ $item['icon'] }} mr-2"></i>
                                                            <span class="nav-text">{{ $item['label'] }}</span>
                                                        </a>
                                                    </li>
                                                    @else
                                                        @can(strtolower($item['label']))
                                                            <li class="nav-item">
                                                                <a class="nav-link {{ url($item['link'])==url()->current()?'active':'' }}" href="{{ $item['link']?url($item['link']):'#' }}">
                                                                    <i class="{{ $item['icon'] }} mr-2"></i>
                                                                    <span class="nav-text">{{ $item['label'] }}</span>
                                                                </a>
                                                            </li>
                                                        @endcan
                                                        @endrole

                                                    @endif
                                                    @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>

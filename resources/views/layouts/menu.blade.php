@foreach($items as $menu_item)
        @php

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;
        $isActive = null;

            // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$menu_item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$menu_item->color;
        }


         // Check if link is current
        if(url($menu_item->link()) == url()->current()){
            $isActive = 'active';
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $menu_item->icon_class . '"></i>';
        }


        @endphp
        @php
            $submenu = $menu_item->children;

        @endphp

        @if($submenu->isEmpty())
        <li class="nav__item">
        <a href="{{ url($menu_item->link()) }}"  class=" nav__item-link {{ $isActive }}">
           <span>{{ $menu_item->title }}</span>
        </a>
        </li>

        @else
        <li class="nav__item with-dropdown">
            <a href="{{ $menu_item->link() }}" data-toggle="dropdown" class="dropdown-toggle nav__item-link {{ $isActive }}">{{ $menu_item->title }}</a>


                <ul class="dropdown-menu">
                    @foreach($submenu as $item)
                    <li class="nav__item">
                        <a href="{{$item->link()}}" class="nav__item-link">
                            <span>{{$item->title}}</span>
                        </a>
                    </li>
                    @endforeach

                </ul>

        </li>

        @endif
@endforeach




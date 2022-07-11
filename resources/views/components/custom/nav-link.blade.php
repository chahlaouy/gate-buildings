@props(['route', 'href', 'iconName'])

@php
    $class = $route ? 'bg-yellow-400 text-gray-800 hover:bg-yellow-400' : 'hover:bg-gray-400 hover:bg-opacity-25'
@endphp
    <a  href="{{$href}}"
        class="mb-1 block py-3 px-3 text-gray-400 font-normal flex items-center rounded-md  {{$class}}"
        >
            <i class="{{$iconName}} mr-3"></i>
            <span class="block">
                {{ $slot }}
            </span>
    </a>


@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md border-gray-300 focus:border-yellow-200 focus:ring focus:ring-yellow-400 focus:ring-opacity-25']) !!}>

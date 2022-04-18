@props(['active' => false])

@php
    $classes = "block text-left px-3 text-sm leading-6 hover:bg-red-500 focus:bg-red-500 hover:text-white focus:text-white"; 
    if($active) $classes .= " bg-red-500 text-white";
@endphp


<a {{ $attributes(['class' => $classes])}}>{{$slot}}</a>
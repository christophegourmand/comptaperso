@props(['value'])
@php
    $value = empty($value) ? "#7a7a7a" : $value; // here est default color for icons
@endphp

<input type="color" value="{{$value}}" {{ $attributes->merge(['class'=>'rounded-md border-slate-400 focus:ring focus:ring-cyan-400/30']) }}>

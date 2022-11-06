@props(['title'])

<h3 {!! $attributes->merge(['class' => 'text-lg text-black font-bold']) !!}>{{ $title }}</h3>

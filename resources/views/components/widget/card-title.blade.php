@props(['title'])

<h3 {!! $attributes->merge(['class' => 'mb-3 text-lg text-black font-bold']) !!}>{{ $title }}</h3>


@props(['id' , 'title'])

<div id="{{$id}}" {!! $attributes->merge(['class' => 'm-6 p-3 rounded-lg border-b border-gray-200 drop-shadow-xl bg-white']) !!}>
    <x-widget.card-title title="{{$title}}"/>
    {{$slot}}
</div>

@props(['id' , 'inlabel' , 'value'=>'' , 'comment'=>'', 'required' => ''])

@php
    $textIfRequired = (!empty($required)) ? 'Requis' : '';
@endphp

<div class="flex flex-col mt-6">
	<x-form.label for="{{$id}}" class="flex justify-between items-baseline">
        <span>{{$inlabel}}</span>
        <small class="italic text-cyan-600">{{$textIfRequired}}</small>
    </x-form.label>

    <x-form.input-number id="{{$id}}" name="{{$id}}" value="{{$value}}" {{$attributes}}/>
    @if ( $comment !== "" )
        <x-form.comment>{{$comment}}</x-form.comment>
    @endif
</div>

@error($id)
    <p class="text-red-500 italic text-base mt-1.5 leading-4">{{$message}}</p>
@enderror

{{--
EXAMPLE OF USAGE:
    <x-form.combo-input-text
        id="formfield_balance"
        inlabel="Solde initial 2"
        comment="test"                (optional)
        min="0" max="1000000"         (optional)
        otherAttribute1="tititi"      (optional)
        otherAttribute2="tototo"      (optional)
        class="lulu nini"             (optional)
    />
--}}


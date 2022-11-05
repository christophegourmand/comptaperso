@props(['id' , 'inlabel' , 'value'=>'' , 'comment'=>'', 'required' => ''])

@php
    $textIfRequired = (!empty($required)) ? 'Requis' : '';
@endphp

<div class="flex flex-col mt-6">
	<x-form.label for="{{$id}}" class="flex justify-between items-baseline">
        <span>{{$inlabel}}</span>
        <small class="italic text-red-500">{{$textIfRequired}}</small>
    </x-form.label>

    <x-form.input-number id="{{$id}}" name="{{$id}}" value="{{$value}}" {{$attributes}}/>
    @if ( $comment !== "" )
        <x-form.comment>{{$comment}}</x-form.comment>
    @endif
</div>

{{--
EXAMPLE OF USAGE:
    <x-form.combo-input-text
        id="bank_account_balance"
        inlabel="Solde initial 2"
        comment="test"                (optional)
        min="0" max="1000000"         (optional)
        otherAttribute1="tititi"      (optional)
        otherAttribute2="tototo"      (optional)
        class="lulu nini"             (optional)
    />
--}}


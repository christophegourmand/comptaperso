
@props(['id' , 'inlabel' , 'value'=>'' , 'comment'=>'' , 'listToDisplay', 'listForValue' , 'valueOfPreviousSelectedElement' => '', 'required' => ''])
{{-- NOTE: additionnal html attributes will be added in each <select> --}}
@php
    $textIfRequired = (!empty($required)) ? 'Requis' : '';
@endphp


<div class="flex flex-col mt-6">
	<x-form.label for="{{$id}}" class="flex justify-between items-baseline">
        <span>{{$inlabel}}</span>
        <small class="italic text-red-500">{{$textIfRequired}}</small>
    </x-form.label>

    <x-form.select-options id="{{$id}}" name="{{$id}}" :listToDisplay="$listToDisplay" :listForValue="$listForValue" :valueOfPreviousSelectedElement="$valueOfPreviousSelectedElement" {{$attributes}} />


	@if ( $comment !== "" )
		<x-form.comment>{{$comment}}</x-form.comment>
	@endif
</div>

{{--
EXAMPLE OF USAGE:
	<x-form.combo-input-number
		id="bank_account_name"
		inlabel="Nom du compte"
		:value"$previousValue"        (optional)
		comment="test"                (optional)
		otherAttribute1="tititi"      (optional)
		otherAttribute2="tototo"      (optional)
		class="lulu nini"             (optional)
	/>
--}}

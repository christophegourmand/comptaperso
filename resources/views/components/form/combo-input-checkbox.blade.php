@props(['id' , 'inlabel' , 'value'=>'' , 'comment'=>'', 'required' => ''])

{{-- @dump(gettype($attributes)); --}}

@php
    $textIfRequired = (!empty($required)) ? 'Requis' : '';
    // $checked = property_exists($attributes , 'checked') ? 'checked' : '';
@endphp

<div class="flex flex-col mt-6">
    <div class="flex flex-row items-baseline">
        <x-form.input-checkbox id="{{$id}}" name="{{$id}}" class="mr-3" value="{{$value}}" {{$attributes}}/>

        <x-form.label for="{{$id}}" class="grow flex justify-between items-baseline">
            <span>{{$inlabel}}</span>
            <small class="italic text-cyan-600">{{$textIfRequired}}</small>
        </x-form.label>
    </div>

    @if ( $comment !== "" )
        <x-form.comment>{{$comment}}</x-form.comment>
    @endif
</div>

@error($id)
    <p class="text-red-500 italic text-base mt-1.5 leading-4">{{$message}}</p>
@enderror

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

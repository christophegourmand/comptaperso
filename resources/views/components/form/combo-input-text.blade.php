@props(['id' , 'inlabel' , 'value'=>''])

<div class="flex flex-col mt-6">
    <x-form.label for="{{$id}}">{{$inlabel}}</x-form.label>
    <x-form.input-text id="{{$id}}" name="{{$id}}" value="{{$value}}"/>
</div>

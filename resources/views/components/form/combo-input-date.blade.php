@props(['id' , 'inlabel' , 'value'=>'' , 'comment'=>''])

<div class="flex flex-col mt-6">
	<x-form.label for="{{$id}}">{{$inlabel}}</x-form.label>
	<x-form.input-date id="{{$id}}" name="{{$id}}" value="{{$value}}" {{$attributes}}/>
	@if ( $comment !== "" )
		<x-form.comment>{{$comment}}</x-form.comment>
	@endif
</div>

{{--
EXAMPLE OF USAGE:
	<x-form.combo-input-date
		id="bank_account_balance_date"
		inlabel="Date du solde initial"
		comment="test"                  (optional)
		min="2010-01-01"                (optional , here example with special date)
		max="{{ date('Y-m-d') }}"       (optional, here example with a function)
		otherAttribute1="tititi"		(optional)
		otherAttribute2="tototo"		(optional)
		class="lulu nini"				(optional)
	/>
--}}


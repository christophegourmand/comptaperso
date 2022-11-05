
@props(['listToDisplay' , 'listForValue'])

<select {{ $attributes->merge(['class'=>'rounded-md border-slate-400 focus:ring focus:ring-cyan-400/30']) }}>
    @if ( count($listToDisplay) === count($listForValue) )
        @for ($i=0 ; $i < count($listToDisplay) ; $i++)
            <option value="{{ $listForValue[$i] }}">{{ $listToDisplay[$i] }}</option>
        @endfor
    @endif
</select>


{{-- @aware(['valueOfPreviousSelectedElement' => '5']) --}}
@props(['id','name','listToDisplay' , 'listForValue' , 'valueOfPreviousSelectedElement' => ''])

<select id="{{$id}}" name="{{$id}}" {{ $attributes->merge(['class'=>'rounded-md border-slate-400 focus:ring focus:ring-cyan-400/30']) }}>
    @if ( count($listToDisplay) === count($listForValue) )
        @for ($i=0 ; $i < count($listToDisplay) ; $i++)
            @if (!empty($valueOfPreviousSelectedElement) && $valueOfPreviousSelectedElement === $listForValue[$i])
                <option selected value="{{ $listForValue[$i] }}">{{ $listToDisplay[$i] }}</option>
            @else
                <option value="{{ $listForValue[$i] }}">{{ $listToDisplay[$i] }}</option>
            @endif
        @endfor
    @endif
</select>

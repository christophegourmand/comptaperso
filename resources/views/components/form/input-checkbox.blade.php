{{-- require attributes : name, id , value --}}
<input type="checkbox" {{ $attributes->merge(['class'=>'rounded-md border-slate-400 focus:ring focus:ring-cyan-400/30']) }}>

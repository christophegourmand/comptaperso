@props(['color','id','value'])

@switch ($color)
    @case('blue')
        <input type="submit" id="{{$id}}" name="{{$id}}" value="{{$value}}"  {{ $attributes->merge(['class'=>"inline-block box-border rounded-lg border-none bg-blue-600 p-3 text-center text-white hover:bg-blue-700"]) }}  />
    @break

    @case('yellow')
        <input type="submit" id="{{$id}}" name="{{$id}}" value="{{$value}}"  {{ $attributes->merge(['class'=>"inline-block box-border rounded-lg border-none bg-amber-500 p-3 text-center text-white hover:bg-amber-600"]) }}  />
    @break

    @case('orange')
        <input type="submit" id="{{$id}}" name="{{$id}}" value="{{$value}}"  {{ $attributes->merge(['class'=>"inline-block box-border rounded-lg border-none bg-orange-500 p-3 text-center text-white hover:bg-orange-600"]) }}  />
    @break

    @case('red')
        <input type="submit" id="{{$id}}" name="{{$id}}" value="{{$value}}"  {{ $attributes->merge(['class'=>"inline-block box-border rounded-lg border-none bg-red-500 p-3 text-center text-white hover:bg-red-600"]) }}  />
    @break

    @case('green')
        <input type="submit" id="{{$id}}" name="{{$id}}" value="{{$value}}"  {{ $attributes->merge(['class'=>"inline-block box-border rounded-lg border-none bg-emerald-500 p-3 text-center text-white hover:bg-emerald-600"]) }}  />
    @break

    {{-- other styles --}}
    @case('teal')
        <input type="submit" id="{{$id}}" name="{{$id}}" value="{{$value}}"  {{ $attributes->merge(['class'=>"inline-block box-border rounded-lg border-none bg-teal-500 p-3 text-center text-white hover:bg-teal-600"]) }}  />
    @break

    @case('cyan')
        <input type="submit" id="{{$id}}" name="{{$id}}" value="{{$value}}"  {{ $attributes->merge(['class'=>"inline-block box-border rounded-lg border-none bg-cyan-500 p-3 text-center text-white hover:bg-cyan-600"]) }}  />
    @break
    <!-- yellow -->
    <!-- gray -->
    @case('gray')
        <input type="submit" id="{{$id}}" name="{{$id}}" value="{{$value}}"  {{ $attributes->merge(['class'=>"inline-block box-border rounded-lg border-none bg-slate-500 p-3 text-center text-white hover:bg-slate-600"]) }}  />
    @break
    <!-- black -->
    @case('black')
        <input type="submit" id="{{$id}}" name="{{$id}}" value="{{$value}}"  {{ $attributes->merge(['class'=>"inline-block box-border rounded-lg border-none bg-gray-700 p-3 text-center text-white hover:bg-gray-900"]) }}  />
    @break
    <!-- white -->

    @default
        .
@endswitch

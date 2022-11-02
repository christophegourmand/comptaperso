@switch ($color)
    @case('blue')
        <a class="box-border rounded-lg border-none bg-blue-600 p-3 text-center text-white hover:bg-blue-700" href="{{ $link }}">{{ $text }}</a>
    @break

    @case('yellow')
        <a class="box-border rounded-lg border-none bg-amber-500 p-3 text-center text-white hover:bg-amber-600" href="{{ $link }}">{{ $text }}</a>
    @break

    @case('orange')
        <a class="box-border rounded-lg border-none bg-orange-500 p-3 text-center text-white hover:bg-orange-600" href="{{ $link }}">{{ $text }}</a>
    @break

    @case('red')
        <a class="box-border rounded-lg border-none bg-red-500 p-3 text-center text-white hover:bg-red-600" href="{{ $link }}">{{ $text }}</a>
    @break

    @case('green')
        <a class="box-border rounded-lg border-none bg-emerald-500 p-3 text-center text-white hover:bg-emerald-600" href="{{ $link }}">{{ $text }}</a>
    @break

    {{-- other styles --}}
    @case('teal')
        <a class="box-border rounded-lg border-none bg-teal-500 p-3 text-center text-white hover:bg-teal-600" href="{{ $link }}">{{ $text }}</a>
    @break

    @case('cyan')
        <a class="box-border rounded-lg border-none bg-cyan-500 p-3 text-center text-white hover:bg-cyan-600" href="{{ $link }}">{{ $text }}</a>
    @break
    <!-- yellow -->
    <!-- gray -->
    @case('gray')
        <a class="box-border rounded-lg border-none bg-slate-500 p-3 text-center text-white hover:bg-slate-600" href="{{ $link }}">{{ $text }}</a>
    @break
    <!-- black -->
    @case('black')
        <a class="box-border rounded-lg border-none bg-gray-700 p-3 text-center text-white hover:bg-gray-900" href="{{ $link }}">{{ $text }}</a>
    @break
    <!-- white -->

    @default
        .
@endswitch

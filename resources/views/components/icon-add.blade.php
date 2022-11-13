@props([
    'classForSize' => 'text-lg',
    'classForColor' => 'text-blue-500',
    'iconStyle' => 'outlined'
])
@if ($iconStyle == 'plain')
    <span {{ $attributes->merge(['class' => "material-icons $classForSize $classForColor hover:text-blue-600 active:text-blue-600"]) }}>add_circle</span>
@elseif ($iconStyle == 'outlined')
    <span {{ $attributes->merge(['class' => "material-symbols-outlined $classForSize $classForColor hover:text-blue-600 active:text-blue-600"]) }}>add_circle</span>
@endif

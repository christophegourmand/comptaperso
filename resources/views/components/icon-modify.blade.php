@props([
    'classForSize' => 'text-lg',
    'classForColor' => 'text-slate-500',
    'iconStyle' => 'outlined'
])
@if ($iconStyle == 'plain')
    <span {{ $attributes->merge(['class' => "material-icons $classForSize $classForColor hover:text-orange-400 active:text-orange-500"]) }}>mode_edit</span>
@elseif ($iconStyle == 'outlined')
    <span {{ $attributes->merge(['class' => "material-symbols-outlined $classForSize $classForColor hover:text-orange-400 active:text-orange-500"]) }}>edit_square</span>
@endif

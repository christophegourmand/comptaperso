@props([
    'classForSize' => 'text-lg',
    'classForColor' => 'text-slate-500',
    'iconStyle' => 'outlined'
])

@if ($iconStyle == 'plain')
    <span {{ $attributes->merge(['class' => "material-icons $classForSize $classForColor hover:text-red-500 active:text-red-700"]) }}>remove_circle</span>
@elseif ($iconStyle == 'outlined')
    <span {{ $attributes->merge(['class' => "material-symbols-outlined $classForSize $classForColor hover:text-red-500 active:text-red-700"]) }}>do_not_disturb_on</span>
@endif

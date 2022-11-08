@props(['google-icon','color','main-line','sub-line','amount'])

<li class="py-2 flex flex-row justify-between items-start">
    <div class="flex flex-row justify-start gap-2" style="color: {{$color}};">
        <div><span class="material-symbols-outlined">{{$googleIcon}}</span></div>
        <div class="">
            <p class="text-lg">{{$mainLine}}</p>
            {{-- <p class="text-slate-500 text-sm"><em>{{$bankAccount->reference}}</em></p> --}}
            <p class="text-slate-500 text-sm"><em>{{$subLine}}</em></p>
        </div>
    </div>
    <span class="text-[{{$color}}]">{{$amount}}</span>
</li>

@props(['google-icon','color','main-line','sub-line','amount'])

<li class="py-2 grid grid-cols-10 grid-rows-[fit-content(100%)_fit-content(100%)] place-content-baseline">
    <div class="col-auto"><span class="material-symbols-outlined" style="color: {{$color}};">{{$googleIcon}}</span></div>
    <p class="text-lg col-span-6" style="color: {{$color}};">{{$mainLine}}</p>
    <span class="col-span-3 justify-self-end">{{$amount}}</span>
    <p class="col-start-2 col-span-6 text-slate-500 text-sm"><em>{{$subLine}}</em></p>
</li>

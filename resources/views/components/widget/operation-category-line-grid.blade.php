@props(['google-icon','color','main-line','id'])

<li class="py-2 grid grid-cols-10 grid-rows-[fit-content(100%)_fit-content(100%)] place-content-center">
    <div class="col-span-1"><span class="material-symbols-outlined" style="color: {{$color}};">{{$googleIcon}}</span></div>
    <p class="text-lg col-span-8" style="color: {{$color}};">{{$mainLine}}</p>
    {{-- <span class="col-span-3 justify-self-end">{{$amount}}</span> --}}
    {{-- <p class="col-start-2 col-span-6 text-slate-500 text-sm"><em>{{$subLine}}</em></p> --}}
    <a class="col-span-1 grid place-items-center" href="/operationCategories/{{$id}}">
        <span class="material-symbols-outlined leading-[.3rem] text-slate-400 hover:text-blue-500 active:text-blue-600">visibility</span>
    </a>

</li>

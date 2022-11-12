@auth
<x-app-layout>
	<div class="py-5 px-12 flex flex-col justify-start items-center">
		{{-- <h1 class="mb-3 text-xl text-slate-600">Tiers</h1> --}}
        <div class="mb-3 text-gray-700 text-center">
            <span class="material-icons text-4xl">person</span>
            <h2 class="text-xl font-bold">{{$company->name}}</h2>
        </div>

        {{-- informations and widget: --}}
        <section id="widget_container" class="flex flex-row justify-center gap-3 items-start flex-wrap">
            {{-- widget for comments --}}
            <x-widget.card id="" title="commentaires" class="grow OFFbg-orange-300">
                <div class="">
                    @foreach ($companyComments as $companyComment)
                        <div class="my-3 border rounded-lg bg-zinc-100 p-2">
                            <div class="flex justify-between items-center border-b border-gray-300">
                                <p class="text-slate-500 text-xs">
                                    {{ substr_replace($companyComment->updated_at , ' --' , 10 ,0) }}
                                </p>
                                <div class="flex items-baseline gap-2">
                                    <a href="/companies/{{$company->id}}/companyComments/{{$companyComment->id}}/edit" class="">
                                        <x-icon-modify class="relative bottom-px"/>
                                    </a>
                                    <form method="POST" action="/companies/{{$company->id}}/companyComments/{{$companyComment->id}}" id="delete_comment_{{$companyComment->id}}">
                                        @method('DELETE')
                                        @csrf
                                    </form>

                                    <button type="submit" form="delete_comment_{{$companyComment->id}}" value="delete">
                                        <x-icon-delete class=""/>
                                    </button>
                                    {{-- <a href="/companies/{{$company->id}}/companyComments/{{$companyComment->id}}" class=""> --}}
                                        {{-- <x-icon-delete class=""/> --}}
                                    {{-- </a> --}}
                                </div>
                            </div>
                            <p class="mt-1">{{ $companyComment->comment }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="text-center">
                    <a class="" href="/companies/{{$company->id}}/companyComments/create">
                        <x-icon-add iconStyle="outlined"/>
                    </a>
                </div>
            </x-widget.card>
            <x-widget.card id="" title="Opérations liée à ce tiers" class="grow">
                <p>xxxx</p>
            </x-widget.card>
            <x-widget.card id="" title="Stats" class="grow">
                <div class="divide-y">
                    <p class="border-zinc-300">total des sommes engagées pour ce mois</p>
                    <p class="border-zinc-300">total des sommes engagées cette année</p>
                    <p class="border-zinc-300">date de la prochaine opération</p>
                    <p class="border-zinc-300">dernière opération</p>
                </div>
            </x-widget.card>
        </section>
    </div>
</x-app-layout>
@endauth

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
                    @for ($i = 0 ; $i < 5; $i++)
                        <div class="my-3 border rounded-lg bg-zinc-100 p-2">
                            <div class="flex justify-between items-center border-b border-gray-300">
                                <p class="text-slate-500 text-xs">{{ fake()->date()." - ".fake()->time() }}</p>
                                <div>
                                    <a href="/companyComments/1/edit">
                                        <span class="material-icons text-lg text-slate-500">mode_edit</span>
                                    </a>
                                </div>
                            </div>
                            <p class="mt-1">{{ fake()->text() }}</p>
                        </div>
                    @endfor
                </div>

                <div class="text-center">
                    <a class="" href="/companyComments/create">
                        <span class="material-symbols-outlined text-blue-500">add_circle</span>
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

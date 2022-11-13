<x-app-layout>
    {{--
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Dashboard') }}
		</h2>
	</x-slot>
    --}}

	{{--
	<div class="py-12 drop-shadow-xl">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 bg-white border-b border-gray-200">
					You're logged in!
				</div>
			</div>

			<!--
			@auth
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 bg-white border-b border-gray-200">
					You are admin !
				</div>
			</div>
			@endauth
			-->
		</div>
	</div>
	--}}

	<section id="widget_container" class="p-2 my-3 flex flex-row justify-center gap-3 items-start flex-wrap">
		{{--
        <x-widget.card id="widget_bank_accounts" title="Comptes bancaires (flex)" class="grow">
			<ul class="divide-y">
				@foreach ($bankAccounts as $bankAccount)
					<x-widget.bank-account-line
						:google-icon="$bankAccount->getIconRef()"
                        :color="$bankAccount->icon_color_hexa"
						:main-line="$bankAccount->name"
						:sub-line="$bankAccount->description"
						:amount="$bankAccount->balanceFormatted()"
					/>
				@endforeach
			</ul>
		</x-widget.card>
        --}}

        <x-widget.card id="widget_bank_accounts" title="Comptes bancaires" class="grow relative">
            <a href="/bankAccounts/create">
                <span class="material-symbols-outlined absolute top-3 right-5 text-blue-500">add_circle</span>
            </a>
			<ul class="divide-y">
				@foreach ($bankAccounts as $bankAccount)
					<x-widget.bank-account-line-grid
						:google-icon="$bankAccount->getIconRef()"
                        :color="$bankAccount->icon_color_hexa"
						:main-line="$bankAccount->name"
						:sub-line="$bankAccount->description"
						:amount="$bankAccount->balanceFormatted()"
					/>
				@endforeach
			</ul>
		</x-widget.card>

        <x-widget.card id="widget_thirdparties" title="Liste de tiers" class="grow relative">
            <a href="/thirdparties/create">
                <span class="material-symbols-outlined absolute top-3 right-5 text-blue-500">add_circle</span>
            </a>

            <ul class="divide-y">
                @foreach ($thirdparties as $thirdparty)
                    <li class="py-2 grid grid-cols-[1fr_fit-content(100%)] grid-rows-[repeat(2,_fit-content(100%))]">
                        <span>{{$thirdparty->name}}</span>
                        <a href="/thirdparties/{{$thirdparty->id}}" class="">
                            <span class="material-symbols-outlined leading-[.3rem] text-slate-400 hover:text-blue-500 active:text-blue-600">visibility</span>
                        </a>
                        @if ( !empty($thirdparty->shortdescription))
                            <p>{{$thirdparty->shortdescription}}</p>
                        @endif
                        {{-- <p class="text-sm text-gray-400">here will appear a short description of that third-party.</p> --}}
                    </li>
                @endforeach
            </ul>
        </x-widget.card>

		<x-widget.card id="widget_last_operations" title="Dernières opérations" class="grow">
			<p>here</p>
			<p>we</p>
			<p>will</p>
			<p>have</p>
			<p>a</p>
			<p>lot</p>
			<p>of</p>
			<p>things</p>
		</x-widget.card>

		<x-widget.card id="widget_last_operations" title="Consommation du mois par catégorie" class="grow">
			<p>here</p>
			<p>a</p>
			<p>bit</p>
			<p>less</p>
		</x-widget.card>

		<x-widget.card id="widget_last_operations" title="Prochaines opérations récurrentes" class="grow">
		</x-widget.card>

		<x-widget.card id="widget_last_operations" title="Prévisionnel" class="grow">
		</x-widget.card>
	</section>

    <section class="sm:px-6 lg:px-8 flex flex-row justify-center gap-3">
		<x-button color="blue" text="Ajouter un compte bancaire" link="/bankAccounts/create"/>
		<x-button color="orange" text="Ajouter une societe" link="/thirdparties/create"/>
	</section>
</x-app-layout>

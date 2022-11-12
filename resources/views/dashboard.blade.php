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

        <x-widget.card id="widget_companies" title="Liste de tiers" class="grow relative">
            <a href="/companies/create">
                <span class="material-symbols-outlined absolute top-3 right-5 text-blue-500">add_circle</span>
            </a>

            <ul class="divide-y">
                @foreach ($companies as $company)
                    <li class="py-2 flex justify-between">
                        <span>{{$company->name}}</span>
                        <a href="/companies/{{$company->id}}" class="">
                            <span class="material-symbols-outlined">visibility</span>
                        </a>
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
		<x-button color="orange" text="Ajouter une societe" link="/companies/create"/>
	</section>
</x-app-layout>

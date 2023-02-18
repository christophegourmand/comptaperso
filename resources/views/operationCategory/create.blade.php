@auth
<x-app-layout>
	<div class="py-5 px-12 flex flex-col justify-start items-center">
		<h1 class="mb-3 text-xl text-slate-600">Ajout d'une nouvelle catégorie</h1>


		@if ($errors->any())
			<div class="rounded-md border border-red-500 p-2 text-white">
				<p class="text-red-500 font-bold">Oups, il y a quelques soucis avec les infos que vous avez saisies:</p>
				<ul class="text-red-800">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif


		<form method="POST" action="/operationCategories">
			@csrf

			{{-- id (auto) --}}
			{{-- user_id (auto) --}}
			{{-- name --}}
			<x-form.combo-input-text
				id="formfield_name"
				inlabel="Nom de la catégorie"
				value="{{ old('formfield_name') }}"
				comment=""
				required
			/>

			{{-- is_visible (bool) --}}
			<x-form.combo-input-checkbox
				id="formfield_is_visible"
				inlabel="Opérations visibles"
				comment="Décocher cette croix permet de masquer les opérations de cette catégorie."
                value="1"
                checked
			/>

            {{-- is_counted_in_balance (bool) --}}
			<x-form.combo-input-checkbox
				id="formfield_is_counted_in_balance"
				inlabel="Opérations comptabilisées"
				comment="Les opérations de cette catégorie, indépendamment de leur visibilité peuvent être comptabilisée ou non dans l'évolution du solde."
                value="1"
                checked
			/>

			{{-- monthly_limit (double) --}}
            <x-form.combo-input-number
                id="formfield_monthly_limit"
                inlabel="Budget de cette catégorie pour le mois (optionnel)"
                value="{{ old('formfield_monthly_limit') }}"
                comment="Limite théorique à essayer de ne dépasser pour rester dans le budget."
            />

			{{-- annual_limit (double) --}}
            <x-form.combo-input-number
                id="formfield_annual_limit"
                inlabel="Budget de cette catégorie pour l'année (optionnel)"
                value="{{ old('formfield_annual_limit') }}"
                comment="Limite théorique à essayer de ne dépasser pour rester dans le budget."
            />

			{{-- icon_color_hexa --}}
			<x-form.combo-input-color
				id="formfield_icon_color_hexa"
				inlabel="Couleur de l'icône"
				value="{{ old('formfield_icon_color_hexa') }}"
				comment=""
			/>

			{{-- icon_id --}}
			<x-form.label for="formfield_icon" class="mt-6 flex justify-between items-baseline">
				<span>Icône</span>
			</x-form.label>

			<fieldset id="formfield_icon" class="flex flex-row flex-wrap justify-content-around gap-3">
				@for ($i = 0; $i < count($iconNames); $i++)
						<input class="google-icon-form-radio" type="radio" name="formfield_icon_id" id="icon_id_{{$iconIds[$i]}}" value="{{$iconIds[$i]}}">
						<label class="google-icon-form-label" for="icon_id_{{$iconIds[$i]}}">
							<span class="material-symbols-outlined text-5xl ">{{$iconNames[$i]}}</span>
						</label>
				@endfor
			</fieldset>


			<div class="mt-5 text-center">
				<x-form.submit
					color="blue"
					id="formfield_submit"
					value="Créer ce compte bancaire"
				/>
			</div>
		</form>
	<div>
</x-app-layout>
@endauth

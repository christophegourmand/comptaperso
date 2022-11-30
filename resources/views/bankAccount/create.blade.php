@auth
<x-app-layout>
	<div class="py-5 px-12 flex flex-col justify-start items-center">
		<h1 class="mb-3 text-xl text-slate-600">Ajout d'un nouveau compte bancaire</h1>

        {{--
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
        --}}

		<form method="POST" action="/bankAccounts">
            @csrf
			<!-- account_type_id -->
			<x-form.combo-select-options
				id="formfield_type"
				inlabel="Type de compte"
				comment=""
				:listToDisplay="$accountTypeNames"
				:listForValue="$accountTypeIds"
				:valueOfPreviousSelectedElement="$previousFilled_accountTypeId"
				required
			/>

			<!-- name -->
			<x-form.combo-input-text
				id="formfield_name"
				inlabel="Nom du compte"
				value="{{ old('formfield_name') }}"
				comment=""
				required
			/>

			<!-- reference -->
			<x-form.combo-input-text
				id="formfield_reference"
				inlabel="Référence"
				value="{{ old('formfield_reference') }}"
				comment="Indiquez ce qui vous aide à savoir de quel compte il s'agit, mais n'indiquez pas toutes les infos (inutile d'indiquer le code banque et code guichet, ou l'IBAN entier. Vous saurez tout autant de quel compte il s'agit en indiquant seulement le No de compte, voire seulement les chiffres de la fin)."
			/>

			<!-- description -->
			<x-form.combo-textarea
				inlabel="Decription"
				id="formfield_description"
				name="formfield_description"
				value="{{ old('formfield_description') }}"
				placeholder="Compte utilisé pour ..."
				rows="3"
				toto="bibi"
				class=""
				comment="On a prévu large. Décrivez autant que ça vous plaît !"
			/>

			<!-- initial balance -->
			<x-form.combo-input-number
				id="formfield_balance"
				inlabel="Solde initial"
				comment=""
				min="0" max="1000000"
                value="{{ old('formfield_balance') }}"
				required
			/>

			<!-- date of initial balance -->
			<x-form.combo-input-date
				id="formfield_balance_date"
				inlabel="Date du solde initial"
				comment=""
				value="{{ old('formfield_balance_date') }}"
				min="2010-01-01"
				max="{{ date('Y-m-d') }}"
				required
			/>


            {{--
            <x-form.combo-select-options
				id="formfield_icon"
				inlabel="Icône"
				comment="Si une icône vous manque, contactez-nous!"
				:listToDisplay="$iconNames"
				:listForValue="$iconIds"
				valueOfPreviousSelectedElement="{{ old('formfield_icon') }}"
			/>
            --}}

            <!-- icon color -->
            <x-form.combo-input-color
				id="formfield_icon_color_hexa"
				inlabel="Couleur de l'icône"
				value="{{ old('formfield_icon_color_hexa') }}"
				comment=""
			/>

            <!-- icon -->
            <x-form.label for="formfield_icon" class="mt-6 flex justify-between items-baseline">
                <span>Icône</span>
                {{-- <small class="italic text-cyan-600">required</small> --}}
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

<x-app-layout>
	<div class="py-5 px-12 flex flex-col justify-start items-center">
		<h1 class="text-xl text-slate-600">Ajout d'un nouveau compte bancaire</h1>

		<form method="POST" action="/form-add-bank-account-post">

			<!-- account_type_id -->
            <x-form.combo-select-options
			id="bank_account_type"
			inlabel="Type de compte"
			comment=""
			:listToDisplay="$accountTypeNames"
			:listForValue="$accountTypeIds"
            :valueOfPreviousSelectedElement="$previousFilled_accountTypeId"
			/>

			<!-- name -->
			<x-form.combo-input-text id="bank_account_name" inlabel="Nom du compte" :value="$previousFilled_name" comment=""/>

			<!-- reference -->
			<x-form.combo-input-text
				id="bank_account_reference"
				inlabel="Référence"
				:value="$previousFilled_reference"
				comment="Indiquez ce qui vous aide à savoir de quel compte il s'agit, mais n'indiquez pas toutes les infos (inutile d'indiquer le code banque et code guichet, ou l'IBAN entier. Vous saurez tout autant de quel compte il s'agit en indiquant seulement le No de compte, voire seulement les chiffres de la fin)."
			/>

			<!-- initial balance -->
			<x-form.combo-input-number
				id="bank_account_balance"
				inlabel="Solde initial"
				comment=""
				min="0" max="1000000"
			/>

			<!-- date of initial balance -->
			<x-form.combo-input-date
				id="bank_account_balance_date2"
				inlabel="Date du solde initial"
				comment=""
				:value="$previousFilled_date"
				min="2010-01-01"
				max="{{ date('Y-m-d') }}"
			/>
		</form>
	<div>
</x-app-layout>

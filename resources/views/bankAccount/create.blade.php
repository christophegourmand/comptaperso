<x-app-layout>
    <div class="py-5 px-12 flex flex-col justify-start items-center">
        <h1 class="text-xl text-slate-600">Ajout d'un nouveau compte bancaire</h1>

        <form method="POST" action="/form-add-bank-account-post">

            <!-- account_type_id -->
            <div class="flex flex-col mt-6">
                <x-form.label for="bank_account_type">Type de compte</x-form.label>

                <x-form.select-options id="bank_account_type" name="bank_account_type" :listToDisplay="$accountTypeNames" :listForValue="$accountTypeIds" class=""/>
            </div>
            <!-- name -->
            <div class="flex flex-col mt-6">
                <x-form.label for="bank_account_name">Nom du compte</x-form.label>
                <x-form.input-text id="bank_account_name" name="bank_account_name" :value="$previousFilled_name"/>
            </div>
            <x-form.combo-input-text id="bank_account_name2" inlabel="Nom du compte2" :value="$previousFilled_name"/>
            <!-- reference -->
            <div class="flex flex-col mt-6">
                <x-form.label for="bank_account_reference">Référence</x-form.label>
                <x-form.input-text id="bank_account_reference" name="bank_account_reference" :value="$previousFilled_reference"/>

                <x-form.comment>Indiquez ce qui vous aide à savoir de quel compte il s'agit, mais n'indiquez pas toutes les infos (inutile d'indiquer le code banque et code guichet, ou l'IBAN entier. Vous saurez tout autant de quel compte il s'agit en indiquant seulement le No de compte, voire seulement les chiffres de la fin).</x-form.comment>
            </div>
            <!-- initial balance -->
            <div class="flex flex-col mt-6">
                <x-form.label for="bank_account_balance">Solde initial</x-form.label>
                <x-form.input-number id="bank_account_balance" name="bank_account_balance" min="0" max="1000000"/>
            </div>
            <!-- date of initial balance -->
            <div class="flex flex-col mt-6">
                <x-form.label for="bank_account_balance_date">Date du solde initial</x-form.label>
				<x-form.input-date id="bank_account_balance_date" name="bank_account_balance_date" :value="$previousFilled_date" min="2010-01-01" max="{{date('Y-m-d')}}" />
            </div>
            {{--
            <h3>test of various form components</h3>
            <div class="flex flex-col mt-6">
                <x-form.input-checkbox name="test1" id="test1" value="test1"/>
                <x-form.label for="test1">test1</x-form.label>
            </div>
            --}}
        </form>
    <div>
</x-app-layout>

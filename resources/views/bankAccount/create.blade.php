@php
    //dump($accountTypes);
    $val_test_input_text = 'toto';
@endphp

<x-app-layout>
    <div class="py-5 px-12 flex flex-col justify-start items-center">
        <h1 class="text-xl text-slate-600">Ajout d'un nouveau compte bancaire</h1>

        <form method="POST" action="/form-add-bank-account-post">

            {{-- my component form/input-text.blade.php --}}
            <x-form.input-text :value="$val_test_input_text"/>

            <!-- account_type_id -->
            <div class="flex flex-col mt-6">
                <label for="bank_account_type" class="mb-1.5">Type de compte</label>
                <select id="bank_account_type" name="bank_account_type" class="">
                    @foreach ($accountTypes as $accountType)
                        <option value="{{ $accountType->id }}">{{ $accountType->name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- name -->
            <div class="flex flex-col mt-6">
                <label for="bank_account_name" class="mb-1.5">Nom du compte</label>
                <input type="text" id="bank_account_name" name="bank_account_name" placeholder="">
            </div>
            <!-- reference -->
            <div class="flex flex-col mt-6">
                <label for="bank_account_reference" class="mb-1.5">Référence</label>
                <input type="text" id="bank_account_reference" name="bank_account_reference" placeholder="">
                <p class="text-slate-500 italic text-base mt-1.5"><small>Indiquez ce qui vous aide à savoir de quel compte il s'agit, mais n'indiquez pas toutes les infos (inutile d'indiquer le code banque et code guichet, ou l'IBAN entier. Vous saurez tout autant de quel compte il s'agit en indiquant seulement le No de compte, voire seulement les chiffres de la fin).</small></p>
            </div>
            <!-- initial balance -->
            <div class="flex flex-col mt-6">
                <label for="bank_account_balance" class="mb-1.5">Solde initial</label>
                <input type="text" id="bank_account_balance" name="bank_account_balance" placeholder="">
            </div>
            <!-- date of initial balance -->
            <div class="flex flex-col mt-6">
                <label for="" class="mb-1.5">Date du solde initial</label>

            </div>
        </form>
    <div>
</x-app-layout>

<x-app-layout>
    <div class="py-5 flex flex-col justify-start items-center">
        <h1 class="text-xl text-slate-600">Ajout d'un nouveau compte bancaire</h1>

        <form method="POST" action="/form-add-bank-account-post">
            <!-- test of using components -->
            <div class="flex flex-col lg:flex-row">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- account_type_id -->
            <div class="flex flex-col lg:flex-row">
                <label for="">Type de compte</label>
                <select id="" name="" class="">
                    <!-- loop -->
                    <option value=""></option>
                    <!-- endloop -->
                </select>
            </div>
            <!-- name -->
            <div class="flex flex-col lg:flex-row">
                <label for="">Nom du compte</label>
                <input type="text" id="" name="" placeholder="">
            </div>
            <!-- reference -->
            <div class="flex flex-col lg:flex-row">
                <label for="">Référence</label>
            </div>
            <!-- initial balance -->
            <div class="flex flex-col lg:flex-row">
                <label for="">Solde initial</label>
            </div>
            <!-- date of initial balance -->
            <div class="flex flex-col lg:flex-row">
                <label for="">Date du solde initial</label>
            </div>
        </form>
    <div>
</x-app-layout>

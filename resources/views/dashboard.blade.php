<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
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

    <!-- BUTTONS TO ACCESS TO VARIOUS ACTIONS -->
    <div class="sm:px-6 lg:px-8">
        <!-- Button : Add new accounts -->
        <!-- <a class=" box-border rounded border-none bg-blue-600 p-3 text-center text-white hover:bg-blue-700" href="/form-add-bank-account">Add new Bank Account</a> -->

        <x-button color="blue" text="Ajouter un compte bancaire" link="/bankAccounts/create"/>
        <!-- <x-button color="yellow" text="Cliquer ici" link="/click"/> -->
        <!-- <x-button color="orange" text="Cliquer ici" link="/click"/> -->
        <!-- <x-button color="red" text="Cliquer ici" link="/click"/> -->
        <!-- <x-button color="green" text="Cliquer ici" link="/click"/> -->
        <!-- <x-button color="teal" text="Cliquer ici" link="/click"/> -->
        <!-- <x-button color="cyan" text="Cliquer ici" link="/click"/> -->
        <!-- <x-button color="black" text="Cliquer ici" link="/click"/> -->
        <!-- <x-button color="gray" text="Cliquer ici" link="/click"/> -->
    </div>
</x-app-layout>

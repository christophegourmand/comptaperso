@auth
<x-app-layout>
    {{-- <h6>nom:</h6> --}}
    {{-- <p>{{$operationCategory->name}}</p> --}}
    {{-- <h6>nom:</h6> --}}
    {{-- <p>{{$operationCategory->name}}</p> --}}
	<div class="py-5 px-12 flex flex-col justify-start items-center">
        <div class="mb-3 text-gray-700 text-center">
            {{-- <span class="material-icons text-4xl">label</span> --}}
            <div class=""><span class="material-symbols-outlined text-4xl" style="color: {{$operationCategory->icon_color_hexa}};">{{$operationCategory->getIconRef()}}</span></div>
            <h2 class="text-xl font-bold">{{$operationCategory->name}}</h2>
        </div>
    </div>
    <table class="m-3 border border-gray-700">
        <thead class="bg-blue-500">
            <tr class="">
                <th class="">Icone</th>
                <th class="">Categorie</th>
                <th class="">Dépensé / Budget Mensuel</th>
                <th class="">Dépensé / Budget Annuel</th>
            </tr>
        </thead>
        <tbody class="">

        </tbody>
    </table>
</x-app-layout>
@endauth

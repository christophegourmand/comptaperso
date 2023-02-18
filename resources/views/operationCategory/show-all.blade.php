@auth
<x-app-layout>
	<div class="py-5 px-12 flex flex-col justify-start items-center">
        <div class="mb-3 text-gray-700 text-center">
            {{-- <span class="material-icons text-4xl">label</span> --}}
            {{-- <div class=""><span class="material-symbols-outlined text-4xl" style="color: {{$operationCategory->icon_color_hexa}};">{{$operationCategory->getIconRef()}}</span></div> --}}
            {{-- <h2 class="text-xl font-bold">{{$operationCategory->name}}</h2> --}}
        </div>
    </div>
    <section class="m-3 w-100 border">
        <!--
        <div class="bg-blue-500 text-white">
            <th class="">Icone</th>
            <th class="">Categorie</th>
            <th class="">Dépensé / Budget Mensuel</th>
            <th class="">Dépensé / Budget Annuel</th>
        </div>
        -->
        <!-- ==== container : all lines ==== -->
        <div class="">
            @foreach ($operationCategories as $operationCategory)
            <!-- ==== category line ==== -->
                <div class="grid grid-cols-3">
                    <p class="">
                        <span class="material-symbols-outlined text-xl" style="color: {{$operationCategory->icon_color_hexa}};">{{$operationCategory->getIconRef()}}</span>
                        <span class="">{{$operationCategory->name}}</span>
                    </p>
                    <p class="">
                        <span>0</span>
                        <span>€</span>
                        <span> / </span>
                        @if ($operationCategory->monthly_limit)
                            <span>{{$operationCategory->monthly_limit}}</span>
                            <span>€</span>
                        @else
                            <a href="/operationCategories/{{$operationCategory->id}}" class="text-gray-400">définir</a>
                        @endif
                    </p>
                    <p class="">
                        <span>0</span>
                        <span>€</span>
                        <span> / </span>
                        @if ($operationCategory->annual_limit)
                            <span>{{$operationCategory->annual_limit}}</span>
                            <span>€</span>
                        @else
                            <a href="/operationCategories/{{$operationCategory->id}}" class="text-gray-400">définir</a>
                        @endif
                    </p>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
@endauth

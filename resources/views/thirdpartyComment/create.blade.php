@auth
<x-app-layout>
	<div class="py-5 px-12 flex flex-col justify-start items-center">
		<h1 class="mb-3 text-xl text-slate-600">Ajout d'un commentaire concernant :</h1>
        <div class="mb-3 text-gray-700 text-center">
            <span class="material-icons text-4xl">person</span>
            <h2 class="text-xl font-bold">{{$thirdparty->name}}</h2>
        </div>

        <form method="POST" action="/thirdparties/{{$thirdparty->id}}/thirdpartyComments" class="w-full">
            @csrf
			<x-form.combo-textarea
				id="formfield_comment"
				inlabel="Commentaire"
				value="{{ old('formfield_comment') }}"
				comment=""
				required
			/>

			<div class="mt-5 text-center">
				<x-form.submit
					color="blue"
					id="formfield_submit"
					value="Créer ce commentaire"
				/>
			</div>
        </form>
	<div>
</x-app-layout>
@endauth

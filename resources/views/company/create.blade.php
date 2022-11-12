@auth
<x-app-layout>
	<div class="py-5 px-12 flex flex-col justify-start items-center">
		<h1 class="mb-3 text-xl text-slate-600">Ajout d'une nouvelle societe</h1>

        <form method="POST" action="/companies">
        @csrf
			<x-form.combo-input-text
				id="company_name"
				inlabel="Nom de ce Tiers"
				value=""
				comment=""
				required
			/>

			<div class="mt-5 text-center">
				<x-form.submit
					color="blue"
					id="company_submit"
					value="Créer ce tiers"
				/>
			</div>
        </form>
	<div>
</x-app-layout>
@endauth

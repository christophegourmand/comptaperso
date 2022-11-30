@auth
<x-app-layout>
	<div class="py-5 px-12 flex flex-col justify-start items-center">
		<h1 class="mb-3 text-xl text-slate-600">Ajout d'une nouvelle societe</h1>

        <form method="POST" action="/thirdparties">
        @csrf
			<x-form.combo-input-text
				id="formfield_name"
				inlabel="Nom de ce Tiers"
				value="{{ old('formfield_name') }}"
				comment=""
				required
			/>

            <x-form.combo-input-text
				id="formfield_shortdescription"
				inlabel="Mini description"
				value="{{ old('formfield_shortdescription') }}"
				comment="(limité à 255 caractères, plus d'infos peuvent être inscrites dans note)"
				required
			/>

            <x-form.combo-textarea
				id="formfield_note"
				inlabel="Note"
				value="{{ old('formfield_note') }}"
				comment=""
			/>

			<div class="mt-5 text-center">
				<x-form.submit
					color="blue"
					id="formfield_submit"
					value="Créer ce tiers"
				/>
			</div>
        </form>
	<div>
</x-app-layout>
@endauth

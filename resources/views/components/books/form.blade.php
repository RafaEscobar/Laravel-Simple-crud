@props([
    'authors' => null
])

<div>
    <x-simple-modal title="Agregar libro">
        <x-slot:btn>
            <x-custom-btn label="Agregar libro">
                <x-slot:icon>
                    <x-fas-plus class="w-4" />
                </x-slot:icon>
            </x-custom-btn>
        </x-slot:btn>
        <x-slot:footer>
            <x-forms.btn-submit label="Enviar" route="authors.store" id="submitBtn" />
        </x-slot:footer>
    </x-simple-modal>
    <div class="hidden">
        <div id="stepOne">
            <form action="{{route('authors.store')}}" id="currentForm">
                <x-forms.simple-input name="name" label="Título" />
                <x-forms.simple-input name="lastName" label="Año de publicación" type="date"/>
                <x-forms.simple-select
                    name="Autor"
                    id="autorId"
                    placeholder="Selecciona al autor"
                    :options="$authors"
                />
            </form>
        </div>
        <div id="stepTwo">
            <x-forms.simple-input-file
                name="profile_picture"
                id="profile-picture-upload"
                label="Subir Foto de Perfil"
            />
        </div>
    </div>
</div>

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
            <x-custom-btn label="Continuar" id="btnNextStep"/>
        </x-slot:footer>
    </x-simple-modal>
    <div class="hidden">
        <div id="stepOne">
            <x-forms.simple-input name="name" label="Título" />
            <x-forms.simple-input name="lastName" label="Año de publicación" type="date"/>
            <x-forms.simple-select
                name="Autor"
                id="autorId"
                placeholder="Selecciona al autor"
                :options="$authors"
            />
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

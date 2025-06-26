<x-simple-modal title="Agregar libro">
    <x-slot:btn>
        <x-custom-btn label="Agregar libro">
            <x-slot:icon>
                <x-fas-plus class="w-4" />
            </x-slot:icon>
        </x-custom-btn>
    </x-slot:btn>
    <x-slot:body>
        <x-forms.simple-input name="name" label="Título" />
        <x-forms.simple-input name="lastName" label="Año de publicación" type="date"/>
        <x-forms.simple-select
            name="Autor"
            id="autorId"
            placeholder="Selecciona al autor"
            :options="[
                'technology' => 'Tecnología',
                'science' => 'Ciencia',
                'art' => 'Arte',
                'sports' => 'Deportes',
            ]"
        />
    </x-slot:body>
    <x-slot:footer>
        <x-custom-btn label="Guardar" class="bg-green-500 font-medium" id="btnClose" />
    </x-slot:footer>
</x-simple-modal>

<x-simple-modal title="Agregar autor">
    <x-slot:btn>
        <x-custom-btn label="Agregar autor">
            <x-slot:icon>
                <x-fas-plus class="w-4" />
            </x-slot:icon>
        </x-custom-btn>
    </x-slot:btn>
    <x-slot:body>
        <x-forms.simple-input name="name" label="Nombre del autor" />
        <x-forms.simple-input name="lastName" label="Apellido del autor" />
        <x-forms.simple-input name="email" label="Correo electrónico" type="email" />
    </x-slot:body>
    <x-slot:footer>
        <x-custom-btn label="Guardar" class="bg-green-500 font-medium" />
    </x-slot:footer>
</x-simple-modal>

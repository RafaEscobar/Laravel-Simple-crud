<div>
    <x-simple-modal title="Agregar autor">
        <x-slot:btn>
            <x-custom-btn label="Agregar autor">
                <x-slot:icon>
                    <x-fas-plus class="w-4" />
                </x-slot:icon>
            </x-custom-btn>
        </x-slot:btn>
        <x-slot:footer>
            <x-forms.btn-submit label="Continuar" route="authors.store" id="submitBtn" />
        </x-slot:footer>
    </x-simple-modal>
    <div class="hidden">
        <form action="{{ route('authors.store') }}" id="currentForm">
            <div id="stepOne">
                <x-forms.simple-input name="name" label="Nombre del autor" />
                <x-forms.simple-input name="lastName" label="Apellido del autor" />
                <x-forms.simple-input name="email" label="Correo electrónico" type="email" />
            </div>
        </form>
    </div>
</div>

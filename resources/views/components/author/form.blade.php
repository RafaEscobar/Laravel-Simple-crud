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
            <x-forms.btn-submit label="Continuar" id="submitBtn" />
        </x-slot:footer>
    </x-simple-modal>
    <div class="hidden" >
        <div id="stepOne">
            <form action="{{ route('authors.store') }}" id="currentForm" method="POST">
                @csrf
                <x-forms.simple-input name="name" label="Nombre del autor" />
                @error('name')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
                <x-forms.simple-input name="last_name" label="Apellido del autor" />
                <x-forms.simple-input name="email" label="Correo electrónico" type="email" />
            </form>
        </div>
    </div>
</div>

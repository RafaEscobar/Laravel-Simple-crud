<x-app-layout>
    <div class="h-full p-6">
        <div class="flex justify-between px-12">
            <span class="text-4xl font-light">Autores</span>
            <x-simple-modal
                title="Agregar autor"
                type="create"
                >
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
            <x-author.form/>
        </div>

        @if($authors->isNotEmpty())
            <div class="px-48 mt-16">
                @if (session('success'))
                    <div class="bg-green-500 text-white p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-lg">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b border-slate-300 bg-slate-50">
                                <th class="p-4 text-sm font-normal leading-none text-slate-500">Nombre</th>
                                <th class="p-4 text-sm font-normal leading-none text-slate-500">Correo electrónico</th>
                                <th class="p-4 text-sm font-normal leading-none text-slate-500">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $author)
                                <tr class="hover:bg-slate-50">
                                    <td class="p-4 border-b border-slate-200 py-5">
                                        <p class="font-semibold text-sm text-slate-800">{{ $author->name }} {{ $author->last_name }}</p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200 py-5">
                                        <p class="text-sm text-slate-500">{{ $author->email }}</p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200 py-5">
                                        <div class="flex gap-4">
                                            <a href="{{ route('authors.edit', $author->id) }}">
                                                <x-fas-user-edit class="w-7 text-gray-500 cursor-pointer" />
                                            </a>
                                            @isset($currentAuthor)
                                                <x-simple-modal
                                                    title="Editar autor"
                                                    type="update"
                                                    :initiallyOpen=true
                                                    >
                                                    <x-slot:btn>

                                                    </x-slot:btn>
                                                    <x-slot:footer>
                                                        <x-forms.btn-submit label="Continuar" id="submitBtn" />
                                                    </x-slot:footer>
                                                </x-simple-modal>
                                            @endisset
                                            <x-author.form type="edit" route="authors.update" :id="$author->id" />
                                            <x-confirm-modal>
                                                <x-slot:btn>
                                                    <x-fas-trash class="w-5 text-gray-500 cursor-pointer" />
                                                </x-slot:btn>
                                                <x-slot:body>
                                                    <span>¿Estas seguro que deseas eliminar este registro?</span>
                                                </x-slot:body>
                                                <x-slot:confirmButton>
                                                    <x-custom-btn label="Aceptar" class="bg-green-500" />
                                                </x-slot:confirmButton>
                                            </x-confirm-modal>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <x-empty-state label="Aún no tienes autores registrados">
                <x-slot:icon>
                    <x-fas-circle-question class="w-20" />
                </x-slot:icon>
            </x-empty-state>
        @endif
    </div>
</x-app-layout>

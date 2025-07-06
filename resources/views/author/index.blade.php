<x-app-layout>
    <div class="h-full p-6">
        <div class="flex justify-between px-12">
            <span class="text-4xl font-light">Autores</span>
            <x-btn-link label="Crear" :route="route('authors.create')">
                <x-slot:icon>
                    <x-fas-plus class="w-4" />
                </x-slot:icon>
            </x-btn-link>
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
                                            <x-btn-link :route="route('authors.edit', $author->id)">
                                                <x-slot:icon>
                                                    <x-fas-user-edit class="w-6" />
                                                </x-slot:icon>
                                            </x-btn-link>
                                            <x-custom-btn class="deleteBtn openingBtn" data-id="{{ $author->id }}">
                                                <x-slot:icon>
                                                    <x-fas-trash class="w-4" />
                                                </x-slot:icon>
                                            </x-custom-btn>
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
        <x-simple-modal label="¿Estas seguro que deseas eliminar este registro?">
            <x-slot:footer>
                <x-custom-btn label="Cancelar" class="closeBtn mr-3" />
                <form id="deleteForm" method="POST" data-id="authors">
                    @csrf
                    @method('DELETE')
                    <x-custom-btn class="bg-green-500 hover:bg-green-400" label="Eliminar" type="submit" />
                </form>
            </x-slot:footer>
        </x-simple-modal>
    </div>
</x-app-layout>

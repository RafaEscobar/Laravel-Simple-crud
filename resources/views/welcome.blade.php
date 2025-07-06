<x-app-layout>
    <div class="h-full p-6">
        <div class="flex justify-between px-12 mb-10">
            <span class="text-4xl font-light">Libros</span>
            <x-btn-link label="Crear" :route="route('books.create')">
                <x-slot:icon>
                    <x-fas-plus class="w-4" />
                </x-slot:icon>
            </x-btn-link>
        </div>
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if ($books->isNotEmpty())
            <div class="grid grid-cols-10 gap-4 pl-12">
                @foreach ($books as $book)
                    <x-book-card :book="$book" />
                @endforeach
            </div>
        @else
            <x-empty-state label="Aún no tienes libros">
                <x-slot:icon><x-fas-circle-question class="w-20" /></x-slot:icon>
            </x-empty-state>
        @endif
    </div>
    <x-simple-modal label="¿Estas seguro que deseas eliminar este registro?">
        <x-slot:footer>
            <x-custom-btn label="Cancelar" class="closeBtn mr-3" />
            <form id="deleteForm" method="POST" data-id="books">
                @csrf
                @method('DELETE')
                <x-custom-btn class="bg-green-500 hover:bg-green-400" label="Eliminar" type="submit" />
            </form>
        </x-slot:footer>
    </x-simple-modal>
</x-app-layout>

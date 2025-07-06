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
        <div class="grid grid-cols-10 gap-4 pl-12">
            @forelse($books as $book)
                <x-book-card :book="$book" />
            @empty
                <x-empty-state label="Aún no tienes libros">
                    <x-slot:icon><x-fas-circle-question class="w-20" /></x-slot:icon>
                </x-empty-state>
            @endforelse
        </div>
    </div>
</x-app-layout>

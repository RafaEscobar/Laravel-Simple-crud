<x-app-layout>
    <div class="h-full p-6">
        <div class="flex justify-between px-12">
            <span class="text-4xl font-light">Libros</span>
            <x-books.form/>
        </div>
        @forelse($books as $book)
            <x-book-card :book="$book" />
        @empty
            <x-empty-state label="Aún no tienes libros">
                <x-slot:icon><x-fas-circle-question class="w-20" /></x-slot:icon>
            </x-empty-state>
        @endforelse
    </div>
</x-app-layout>

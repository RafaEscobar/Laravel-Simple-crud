@props([
    'isCreate' => true,
    'book' => null,
    'authors' => null
])

<div class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white w-1/3 p-8 rounded-3xl">
        <form action="{{ $isCreate ? route('books.store') : route('books.update', $book->id) }}" id="currentForm">
                <x-forms.simple-input name="title" label="Título" value="{{ old('title', $book->title ?? '') }}" />
                <x-forms.simple-input name="published_year" label="Año de publicación" type="date" value="{{ old('published_year', $book->published_year ?? '') }}" />
                <x-forms.simple-select
                    name="Autor"
                    id="autorId"
                    placeholder="Selecciona al autor"
                    :options="$authors"
                />
            </form>
    </div>
</div>

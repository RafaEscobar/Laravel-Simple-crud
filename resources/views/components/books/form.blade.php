@props([
    'isCreate' => true,
    'book' => null,
    'authors' => null,
    'years' => null,
])


<div class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white w-1/3 p-8 rounded-3xl">
        <span class="text-2xl">{{$isCreate ? 'Registrar libro' : 'Actualizar libro'}}</span>
        <form action="{{ $isCreate ? route('books.store') : route('books.update', $book->id) }}"  method="POST" class="mt-8" enctype="multipart/form-data">
            @csrf
            <x-forms.simple-input name="title" label="Título" value="{{ old('title', $book->title ?? '') }}" />
            <span class="block mb-12"></span>
            <x-forms.simple-select
                    name="published_year"
                    id="published_year"
                    placeholder="Selecciona el año de publicación"
                    :options="$years"
                />
                <span class="block mb-10"></span>
            <x-forms.simple-select
                name="author_id"
                id="author_id"
                placeholder="Selecciona al autor"
                :options="$authors"
            />
            <span class="block mb-6"></span>
            <x-forms.simple-input name="cover" label="" type="file" />
            <span class="block mb-10"></span>
            <x-custom-btn label="Enviar" class="mt-8" />
        </form>
    </div>
</div>

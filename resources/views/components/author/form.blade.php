@props([
    'isCreate' => null,
    'author' => null
])

<div class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white w-1/3 p-8 rounded-3xl">
        <span class="text-2xl">{{$isCreate ? 'Crear autor' : 'Editar autor'}}</span>
        <form action="{{ $isCreate ? route('authors.store') : route('authors.update', $author->id) }}"  method="POST" class="mt-8">
            @csrf
            @unless ($isCreate)
                @method('PUT')
            @endunless
            <x-forms.simple-input name="name" label="Nombre del autor" value="{{ old('name', $author->name ?? '') }}" />
            <x-forms.simple-input name="last_name" label="Apellido del autor" value="{{ old('last_name', $author->last_name ?? '') }}" />
            <x-forms.simple-input name="email" label="Correo electrónico" type="email" value="{{ old('email', $author->email ?? '') }}" />
            <x-custom-btn label="Enviar" />
        </form>
    </div>
</div>

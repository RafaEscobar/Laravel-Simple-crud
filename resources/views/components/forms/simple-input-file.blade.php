@props([
    'name' => 'image',
    'id' => null,
    'label' => 'Subir Imagen',
    'accept' => 'image/*',
])

<div class="w-full">
        <input
            id="name"
            name="{{ $name }}"
            type="file"
            accept="{{ $accept }}"
            class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm appearance-none focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500"
        />
</div>

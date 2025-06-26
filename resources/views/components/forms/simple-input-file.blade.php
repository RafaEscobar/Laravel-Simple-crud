@props([
    'name' => 'image',
    'id' => null,
    'label' => 'Subir Imagen',
    'accept' => 'image/*',
])

<div class="w-full">
    <label for="{{ $id ?? $name }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
    <div class="flex items-center justify-center w-full border-2 border-dashed border-gray-300 rounded-lg px-4 py-6 bg-gray-50">
        <input
            id="{{ $id ?? $name }}"
            name="{{ $name }}"
            type="file"
            accept="{{ $accept }}"
            class="hidden"
        />
        <div class="text-center">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
            </svg>
            <p class="mt-2 text-sm text-gray-600">
                Arrastre su archivo o haga clic para seleccionar
            </p>
        </div>
    </div>
</div>

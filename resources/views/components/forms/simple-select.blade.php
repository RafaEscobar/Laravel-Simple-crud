@props([
    'options' => [],
    'name' => 'select',
    'id' => null,
    'placeholder' => 'Seleccione una opción',
])

<div class="relative w-full">
    <select
        id="{{ $id ?? $name }}"
        name="{{ $name }}"
        class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm appearance-none focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500"
    >
        <option value="" disabled selected>{{ $placeholder }}</option>
        @foreach($options as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <label for="email" class="absolute left-0 -top-5.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">{{$placeholder}}</label>
    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
        </svg>
    </div>
    @error($name)
        <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
    @enderror
</div>

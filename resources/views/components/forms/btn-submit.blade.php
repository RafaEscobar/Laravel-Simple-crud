@props([
    'label' => null,
    'id' => null
])
<button {{ $attributes->merge(['class' => 'bg-blue-500 px-3 py-2 rounded-xl text-white flex items-center justify-center cursor-pointer hover:bg-blue-400 active:bg-blue-600 select-none']) }} id="{{ $id }}">
    <span class="text-sm">{{$label}}</span>
</button>

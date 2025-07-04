@props([
    'route' => null,
    'label' => null,
    'icon' => null
])

<a href="{{ $route }}" class="bg-blue-500 px-3 py-2 rounded-xl text-white flex items-center justify-center cursor-pointer hover:bg-blue-400 active:bg-blue-600 select-none">
    @isset($label)
        <span class="mr-4">
            {{$label}}
        </span>
    @endisset
    @isset($icon)
        {{ $icon }}
    @endisset
</a>

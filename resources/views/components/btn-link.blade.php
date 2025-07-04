@props([
    'route' => '',
    'label' => ''
])

<a href="{{ route($route) }}" class="bg-blue-500 px-3 py-2 rounded-xl text-white flex items-center justify-center cursor-pointer hover:bg-blue-400 active:bg-blue-600 select-none">
    <span class="mr-4">
        {{$label}}
    </span>
    @isset($btn)
        {{ $btn }}
    @endisset
</a>

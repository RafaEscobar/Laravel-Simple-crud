@props([
    'type' => null,
    'route' => null,
    'id' => null,
    'author' => null
])

<x-app-layout>
    <x-author.form :type="$type" :route="$route" :id="$id" :author="$author" />
</x-app-layout>

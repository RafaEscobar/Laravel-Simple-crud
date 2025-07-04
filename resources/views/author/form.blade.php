@props([
    'type' => 'create',
    'author' => null
])

<x-app-layout>
    <x-author.form :type="$type" :author="$author" />
</x-app-layout>

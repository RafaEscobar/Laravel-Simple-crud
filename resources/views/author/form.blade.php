@props([
    'isCreate' => true,
    'author' => null
])

<x-app-layout>
    <x-author.form isCreate="{{$isCreate}}" :author="$author" />
</x-app-layout>

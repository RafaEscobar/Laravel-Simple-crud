@props([
    'isCreate' => true,
    'book' => null,
    'authors' => null
])

<x-app-layout>
    <x-books.form isCreate="{{ $isCreate }}" :book="$book" :authors="$authors" />
</x-app-layout>

@props([
    'isCreate' => true,
    'book' => null,
    'authors' => null,
    'years' => null,
])

<x-app-layout>
    <x-books.form isCreate="{{ $isCreate }}" :book="$book" :authors="$authors" :years="$years" />
</x-app-layout>

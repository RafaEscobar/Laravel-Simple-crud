@props([
    'type' => 'create',
    'route' => 'authors.store',
    'id' => null,
    'author' => null
])

<div class="invisible absolute top-0 left-0">
    <div id="stepOne">
        <span>{{$type}}</span>
        <form action="{{ $type == 'create' ? route($route) : route($route, $id) }}" id="currentForm" method="POST">
            @csrf
            <x-forms.simple-input name="name" label="Nombre del autor" value="{{ $author != null ? old('name', $author->name) : '' }}" />
            <x-forms.simple-input name="last_name" label="Apellido del autor" value="{{ $author != null ? old('last_name', $author->lastName) : '' }}" />
            <x-forms.simple-input name="email" label="Correo electrónico" type="email" value="{{ $author != null ? old('email', $author->email) : '' }}" />
        </form>
    </div>
</div>

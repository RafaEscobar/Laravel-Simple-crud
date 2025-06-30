@props([
    'type' => 'create',
    'route' => 'authors.store',
    'id' => null
])

<div class="invisible absolute top-0 left-0">
    <div id="stepOne">
        <form action="{{ $type == 'create' ? route($route) : route($route, $id) }}" id="currentForm" method="POST">
            @csrf
            <x-forms.simple-input name="name" label="Nombre del autor" />
            <x-forms.simple-input name="last_name" label="Apellido del autor" />
            <x-forms.simple-input name="email" label="Correo electrónico" type="email" />
        </form>
    </div>
</div>

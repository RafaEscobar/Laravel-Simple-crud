<div>
    <button id="btnOpen" class="px-4 py-3">
        {{ $btn }}
    </button>
    <div id="modal" class="hidden fixed inset-0 items-center justify-center z-50">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative bg-white p-6 rounded-lg shadow-lg w-1/3 text-center">
            <h2 class="text-2xl font-semibold mb-4">{{ $title }}</h2>
            {{ $body }}
            {{ $footer }}
        </div>
    </div>

</div>

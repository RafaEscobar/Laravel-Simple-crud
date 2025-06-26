<div>
    <button id="openConfirmModal">
        {{ $btn }}
    </button>
    <div id="confirmModal" class="hidden fixed inset-0 items-center justify-center z-50">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative bg-white p-6 rounded-lg shadow-lg w-1/3 text-center">
            <div class="flex justify-between">
                <span class="text-2xl font-semibold mb-4">Confirmar</span>
                <span class="closeConfirmModal"><x-fas-circle-xmark class="w-6 text-gray-500 cursor-pointer" /></span>
            </div>
            <div class="my-4">
                {{ $body }}
            </div>
            <div class="flex justify-end gap-4 mt-6">
                <x-custom-btn label="Cancelar" class="bg-red-500 closeConfirmModal" />
                {{ $confirmButton }}
            </div>
        </div>
    </div>
</div>

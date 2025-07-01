<div>
    @if ($btn)
        <button id="{{$type == 'create' ? 'openingBtn' : 'openingBtnEdit'}}">
            {{ $btn }}
        </button>
    @endif
    <div id="{{$type == 'create' ? 'modal' : 'editModal'}}" class="{{$initiallyOpen ? 'flex inset-0 items-center justify-center z-50' : 'hidden inset-0 items-center justify-center z-50'}}">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative bg-white p-6 rounded-lg shadow-lg w-1/3 text-center">
            <div class="flex justify-between">
                <span class="text-2xl font-semibold mb-4">{{ $title }}</span>
                <span class="btnClose"><x-fas-circle-xmark class="w-6 text-gray-500 cursor-pointer" /></span>
            </div>
            <div class="my-4" id="{{$type == 'create' ? 'modalBody' : 'modalBodyEdit'}}"></div>
            <div class="flex justify-end" id="modalFooter">
                {{ $footer }}
            </div>
        </div>
    </div>
</div>

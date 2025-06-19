<div class="bg-blue-500 px-3 py-1 rounded-xl text-white flex items-center cursor-pointer hover:bg-blue-400 active:bg-blue-600 select-none">
    <span class="text-sm mr-2">{{$label}}</span>
    @isset($icon)
        {{$icon}}
    @endisset
</div>

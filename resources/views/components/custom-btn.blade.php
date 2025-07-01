<div {{ $attributes->merge(["class" => "bg-blue-500 px-3 py-2 rounded-xl text-white flex items-center justify-center cursor-pointer hover:bg-blue-400 active:bg-blue-600 select-none"]) }}>
    <span class="text-sm">{{$label}}</span>
    @isset($icon)
        <span class="mr-2"></span>
        {{$icon}}
    @endisset
</div>

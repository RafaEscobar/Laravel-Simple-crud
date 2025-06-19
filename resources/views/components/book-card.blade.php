<div class="text-center">
    <div class="h-44 w-32 bg-red-500 text-right relative">
        <img src="{{$book->cover->image_path}}" alt="" class="w-full h-auto">
        <div class="absolute inset-0 flex items-end justify-end">
            <div class="p-1 bg-white rounded-tl-md">
                <span>{{$book->published_year}}</span>
            </div>
        </div>
    </div>
    <span>{{$book->title}}</span>
</div>

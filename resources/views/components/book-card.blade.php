<div class="text-center  w-32">
    <div class=" text-right relative">
        <img src="{{ asset('covers/' . $book->cover->image_path) }}" alt="" class="w-32 h-auto">
        <div class="absolute inset-0 flex items-end justify-end">
            <div class="p-1 bg-white rounded-tl-md">
                <span>{{$book->published_year}}</span>
            </div>
        </div>
    </div>
    <span>{{$book->title}}</span>
</div>

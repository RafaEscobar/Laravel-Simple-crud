<div class="text-center w-32">
    <div class="text-right relative group">
        <img src="{{ asset('covers/' . $book->cover->image_path) }}"
             class="block w-full h-auto rounded transition duration-300 ease-in-out group-hover:brightness-110 group-hover:scale-105 group-hover:shadow-lg" />
        <div class="absolute inset-0 flex items-end justify-end">
            <div class="p-1 bg-white rounded-tl-md flex justify-center items-center gap-6">
                <button class="deleteBtn openingBtn" data-id="{{ $book->id }}">
                    <x-fas-trash class="w-4 text-blue-500 cursor-pointer" />
                </button>
                <a href="{{ route('books.edit', $book->id) }}">
                    <x-fas-user-edit class="w-6 text-blue-500 cursor-pointer" />
                </a>
                <span>{{ $book->published_year }}</span>
            </div>
        </div>
    </div>
    <span class="block font-light text-xl mt-2">{{ $book->title }}</span>
</div>

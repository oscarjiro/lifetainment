<div
    class="rounded-xl flex items-center justify-center py-8 h-[300px] border border-[rgb(var(--gray-rgb))] relative overflow-hidden smooth hover:scale-105 cursor-pointer">
    <div
        class="w-1/2 h-full absolute top-0 left-0 bg-[rgb(var(--fg-rgb))] flex items-center justify-center preset-text-white font-light text-upperwide">
        Image here
    </div>
    <div class="flex flex-col space-y-4 ml-[50%] px-8 w-1/2">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div
                    class="bg-[rgb(var(--black-rgb))] flex items-center justify-center w-[40px] h-[40px] rounded-full aspect-square overflow-hidden preset-text-white text-xs font-light">
                    JD
                </div>
                <div>
                    {{ $author }}
                </div>
            </div>
            <div class="text-inactive text-upperwide text-xs">
                {{ $category }}
            </div>
        </div>
        <div class="font-serif text-3xl">
            {{ $title }}
        </div>
        <div class="line-clamp-2 w-full">
            {{ $preview }}
        </div>
        <a href="{{ $link }}" class="w-fit text-upperwide flex items-center space-x-2 smooth group">
            <div>
                View more
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 smooth group-hover:rotate-[-90deg]">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
        </a>
    </div>
</div>

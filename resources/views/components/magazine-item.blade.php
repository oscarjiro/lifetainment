<div>
    <div
        class="min-w-[400px] w-[400px] h-[500px] bg-[rgb(var(--black-rgb))] rounded-xl py-16 px-12 flex flex-col justify-between preset-text-white">
        <div class="text-5xl font-serif tracking-[-2px]">
            {{ $title }}
        </div>
        <a href="{{ $link }}" class="text-xl text-upperwide flex items-center space-x-2 smooth group">
            <div>
                View magazine
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 smooth group-hover:rotate-[-90deg]">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
        </a>
    </div>
</div>

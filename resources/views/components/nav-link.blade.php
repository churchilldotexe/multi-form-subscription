@props(['index', 'active' => false])

<li>
    <a {{ $attributes }} class="flex items-center font-semibold gap-2 ">
        <span
            class="flex items-center justify-center size-8 border transition-colors duration-300 rounded-full text-center border-neutral-50 {{ $active ? ' text-neutral-950 , bg-cyan-50' : 'text-neutral-50' }}">
            {{ $index }}
        </span>
        <span class="hidden md:inline">{{ $slot }}</span>
    </a>
</li>

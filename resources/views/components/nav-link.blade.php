@props(['index'])

<li>
    <a {{ $attributes }} class="flex items-center font-semibold gap-2">
        <span
            class="flex items-center justify-center size-8 border rounded-full text-center border-neutral-50 text-neutral-50 hover:bg-cyan-50 hover:text-neutral-950">
            {{ $index }}
        </span>
        <span class="hidden md:inline">{{ $slot }}</span>
    </a>
</li>

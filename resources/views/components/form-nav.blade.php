@props(['prevPath'])

<div class="flex justify-between items-center  size-full p-4">
    @if (!request()->is('/'))
        <a href="{{ $prevPath }}">Go Back</a>
    @endif

    <button
        {{ $attributes->merge(['class' => 'ml-auto p-2 bg-madison text-neutral-50 font-semibold rounded', 'type' => 'submit']) }}>{{ $slot }}</button>
</div>

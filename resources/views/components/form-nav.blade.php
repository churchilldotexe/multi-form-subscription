@props(['backPath' => '/'])

@if (!request()->is('/'))
    <a href="{{ $backPath }}">Go Back</a>
@endif

<button {{ $attributes->merge(['type' => 'submit']) }}>{{ $slot }}</button>

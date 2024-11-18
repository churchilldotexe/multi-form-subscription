@props(['backPath' => '/'])

@if (!request()->is('/'))
    <a href="{{ $backPath }}">Go Back</a>
@endif

<button type="submit">{{ $slot }}</button>

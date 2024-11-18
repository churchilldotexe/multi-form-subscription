@if (!request()->is('/'))
    <a href='/'>Go Back</a>
@endif

<button type="submit">{{ $slot }}</button>

<nav class="flex h-[50%] items-center justify-center">

    <ul class="flex gap-2 w-full justify-center items-center">
        <x-nav-link :active="request()->is('/')" href="/" :index="1">Your Info</x-nav-link>
        <x-nav-link :active="request()->is('plans')" href="/plans" :index="2">Select Plan</x-nav-link>
        <x-nav-link :active="request()->is('add-ons')" href="/add-ons" :index="3">Add-ons</x-nav-link>
        <x-nav-link :active="request()->is('summary')" href="/summary" :index="4">Summary</x-nav-link>
    </ul>
</nav>

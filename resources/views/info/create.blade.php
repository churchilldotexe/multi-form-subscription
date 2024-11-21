<x-layout>
    <x-slot:title>Information Field</x-slot:title>
    <section class="absolute top-[15%] bg-neutral-50 rounded-md left-1/2 -translate-x-1/2 px-3 py-4 w-[90%]">
        <h1 class="font-bold text-2xl text-blue-950"> Personal Info</h1>
        <h2 class="text-neutral-500">Please provide your name,email, address, and phone number</h2>
        <form class="space-y-2" id="info-form" method="POST" action="/">
            @csrf
            <x-info-fieldset name="name" placeholder="e.g. Stephen King" type="text" required>Name</x-info-fieldset>
            <x-info-fieldset name="email" placeholder="e.g. stephenking@lorem.com" type="email" required>Email
                Address</x-info-fieldset>
            <x-info-fieldset name="phone" placeholder="e.g. Stephen King" type="tel" required>Phone
                Number</x-info-fieldset>
        </form>
        <x-slot:footer>
            <x-form-nav form="info-form">Next Step</x-form-nav>
        </x-slot:footer>
    </section>
</x-layout>

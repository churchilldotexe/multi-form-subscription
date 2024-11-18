<x-layout>
    <x-slot:title>Information Field</x-slot:title>
    <x-slot:heading>Personal Info</x-slot:heading>
    <section>
        <h2 class="text-red-500"> This is the Info form field. </h2>
        <form class="space-y-2" method="POST" action="/">
            @csrf
            {{-- TODO: client side validation --}}
            <fieldset>
                <label for="name">Name: </label>
                <input type="text" class="border" name="name" id="name"
                    value="{{ session('info')['email'] ?? old('name') }}" />
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <label for="email">Email Address</label>
                <input type="email" class="border" name="email" id="email"
                    value="{{ session('info')['email'] ?? old('email') }}" />
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <label for="phone">Phone Number</label value="{{ session('phone', '') }}">
                <input type="tel" class="border" name="phone" id="phone"
                    value="{{ session('info')['phone'] ?? old('phone') }}" />
                @error('phone')
                    <p>{{ $message }}</p>
                @enderror
            </fieldset>
            <x-form-nav>Next Step</x-form-nav>
        </form>
    </section>
</x-layout>

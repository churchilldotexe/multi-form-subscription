<x-layout>
    <x-slot:title>Add-Ons Field</x-slot:title>
    <x-slot:heading>Pick add-ons</x-slot:heading>
    <section>
        <h2 class=""> This is the add-ons form field. </h2>
        <form method="POST" action="/add-ons" id="add-ons-form">
            @csrf
            <fieldset>
                <label for="service">
                    <input type="checkbox" id="service" name="service" value="onlineService"
                        @checked(session('addons.service') || old('service')) />
                    Online service
                </label>

                @error('service')
                    <p>{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset>
                <label for="storage">
                    <input type="checkbox" id="storage" name="storage" value="largerStorage"
                        @checked(old('storage') || session('addons.storage')) />
                    Larger Storage
                </label>

                @error('storage')
                    <p>{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset>
                <label for="profile">
                    <input type="checkbox" id="profile" name="profile" value="customProfile"
                        @checked(old('profile') || session('addons.profile')) />
                    Customizable Profile
                </label>

                @error('profile')
                    <p>{{ $message }}</p>
                @enderror
            </fieldset>

            <x-slot:footer>
                <x-form-nav prevPath="/plans" form="add-ons-form">Next Step</x-form-nav>
            </x-slot:footer>
        </form>
    </section>
</x-layout>

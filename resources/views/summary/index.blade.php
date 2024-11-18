<x-layout>
    <x-slot:title>Information Field</x-slot:title>
    <x-slot:heading>Finishing Up</x-slot:heading>
    <section>
        <h2 class=""> This is the Summary form field. </h2>
        @session('plan')
            <div>
                <h3>{{ $value['plan'] }}</h3>
                <a href="/plans" class="underline">change</a>

                <div>
                    {{ $value['price'] }}/ <span>{{ $value['billingType'] }}</span>
                </div>
            </div>
        @endsession

        @session('addons')
            <div>
                @foreach ($value as $addon)
                    <h3>{{ $addon['name'] }}</h3>
                    <p>{{ $addon['price'] }}</p>
                @endforeach
            </div>
        @endsession
        <x-form-nav>Confirm</x-form-nav>
    </section>
</x-layout>

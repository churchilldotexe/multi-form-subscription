<x-layout>
    <x-slot:title>Information Field</x-slot:title>
    <x-slot:heading>Finishing Up</x-slot:heading>
    <section>
        <h2 class=""> This is the Summary form field. </h2>
        <div>
            @session('plan')
                <h3>{{ $value['plan'] }}</h3>
                <a href="/plans" class="underline">change</a>

                <div>
                    {{ $value['price'] }}/ <span>{{ $value['billingType'] }}</span>
                </div>
                {{-- <p>{{ $value['billingType'] }}</p> --}}
            @endsession
        </div>
        <div>
            @session('addons')
                @foreach ($value as $addon)
                    <h3>{{ $addon['name'] }}</h3>
                    <p>{{ $addon['price'] }}</p>
                @endforeach
            @endsession
        </div>
        <div>
            <pre>{{ var_dump(request()->session()->all()) }}</pre>
        </div>
        <x-form-nav>Confirm</x-form-nav>
    </section>
</x-layout>

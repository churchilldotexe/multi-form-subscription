<x-layout>
    <x-slot:title>Information Field</x-slot:title>
    <x-slot:heading>Select your Plan</x-slot:heading>
    <section>
        <h2 class=""> This is the Plans form field. </h2>
        <form method="POST" action="/plans" id="plans-form">
            @csrf
            <fieldset>
                <legend>Select your plan</legend>
                <p>You have the option of monthly or yearly billing</p>
                <label for="arcade">
                    <input type="radio" name="plan" id="arcade" value="arcade"
                        {{ session('plan.plan') === 'arcade' || old('plan') === 'arcade' || (!session('plan.plan') || !old('plan')) ? 'checked' : '' }}
                        required />
                    <div>
                        <p>Arcade</p>
                    </div>
                </label>


                <label for="advance">
                    <input type="radio" name="plan" id="advance" value="advance"
                        {{ session('plan.plan') === 'advance' || old('plan') === 'advance' ? 'checked' : '' }} />
                    <div>
                        <p>Advanced</p>
                    </div>
                </label>
                <label for="pro">
                    <input type="radio" name="plan" id="pro" value="pro"
                        {{ session('plan.plan') === 'pro' || old('plan') === 'pro' ? 'checked' : '' }} />
                    <div>
                        <p>Pro</p>
                    </div>
                </label>
                @error('plan')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <label for="billing-type">
                    <input type="checkbox" id="billing-type" name="billing-type" class="peer" value="yearly"
                        @checked(session('plan.billingType') === 'yearly' || old('billing-type'))>
                    <p class="peer-checked:hidden">monthly</p>
                    <p class="hidden peer-checked:block">yearly</p>
                </label>

                @error('billing_type')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </fieldset>

        </form>
        <x-slot:footer>
            <x-form-nav prevPath="/" form="plans-form">Next Step</x-form-nav>
        </x-slot:footer>
    </section>
</x-layout>

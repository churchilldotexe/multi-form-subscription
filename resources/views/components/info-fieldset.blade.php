@props(['name'])

<fieldset class="flex flex-col py-2">
    <div class="flex items-center justify-between">
        <label :for="$name" class="font-semibold text-blue-950 ">{{ $slot }}</label>

        @error("$name")
            <p class="text-red-500  font-semibold">{{ $message }}</p>
        @enderror
    </div>
    <input
        {{ $attributes->merge(['class' => 'border rounded-md py-2 px-3 text-blue-950 font-semibold', 'id' => $name, 'name' => $name, 'value' => session('info')["$name"] ?? old("$name")]) }} />
</fieldset>

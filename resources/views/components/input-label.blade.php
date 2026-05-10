@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-large font-bold text-lg text-[#7CA4B4]']) }}>
    {{ $value ?? $slot }}
</label>

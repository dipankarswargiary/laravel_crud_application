@props(['field_name'])

<div class="w-full h-2 pl-1">
    @error($field_name)
        <p class="text-red-500 text-sm font-semibold">{{ $message }}</p>
    @enderror
</div>

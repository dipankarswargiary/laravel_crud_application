@props(['active' => false])

<a class="{{ $active ? 'text-green-400' : 'text-gray-600' }} font-semibold text-lg ml-4 hover:text-green-700" {{ $attributes }}>
    {{ $slot }}
</a>
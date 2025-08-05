@props(['transparent' => false])

@php

    $default = [
        "class" => "text-lg font-semibold px-5 py-2 rounded-xl transition duration-300"
    ];

    if ($transparent) {
        $default["class"] .= " bg-transparent text-black border-2 border-black/30 hover:bg-gray-200";
    }
    else {
        $default["class"] .= " border-2 border-green-500 bg-green-500 text-white hover:bg-green-600 hover:border-green-600";
    }

@endphp

<button {{ $attributes->merge($default) }}>
    {{ $slot }}
</button>

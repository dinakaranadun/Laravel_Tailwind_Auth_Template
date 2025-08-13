@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-lg bg-white px-4 py-4 w-full 
                    text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 
                    placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 
                    focus:outline-indigo-600 sm:text-sm/6',
    ];
@endphp

<x-forms.inputdiv :$label :$name>
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>
</x-forms.inputdiv>


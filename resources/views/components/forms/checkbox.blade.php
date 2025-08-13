@props(['label' => null, 'name', 'subText'])

@php
    $spanClasses = 'ms-2 text-sm font-medium text-gray-600';
    
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name),
        'class' => 'w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600',
    ];
@endphp

<x-forms.inputdiv :label="$label" :name="$name">
    <div class="flex items-center">
        <input {{ $attributes($defaults) }}>
        <span class="{{ $spanClasses }}">{{ $subText }}</span>
    </div>
</x-forms.inputdiv>
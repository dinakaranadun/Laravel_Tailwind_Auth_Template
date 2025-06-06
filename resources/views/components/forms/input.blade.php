@props(['label','name','type','subLabel' => false,'href' => null,'subText' => null])
@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'type' => $type,
        'class' => 'block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6',
        'value' => old($name)
    ];
@endphp

<x-forms.inputdiv :label="$label" :name="$name" :subLabel="$subLabel" :href="$href" :subText="$subText">
    <input {{ $attributes($defaults) }}>
</x-forms.inputdiv>

 
  

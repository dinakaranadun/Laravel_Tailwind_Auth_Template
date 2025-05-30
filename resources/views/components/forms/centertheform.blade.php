@props(['imageURL' => null])

@php
    $classes = "min-h-screen flex items-center justify-center bg-cover bg-center ";
    $style = "";

    if ($imageURL) {
        $style = "background-image: url('$imageURL');";
    }else{
        $classes .= "bg-gradient-to-r from-blue-900 to-white";
    }
@endphp

<div class="{{ $classes }}" style="{{ $style }}">
    <div class="bg-white shadow-md rounded-lg w-full max-w-md p-6">
        {{ $slot }}
    </div>
</div>
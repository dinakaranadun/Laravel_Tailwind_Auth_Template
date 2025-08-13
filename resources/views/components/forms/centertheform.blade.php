@props(['imageURL' => null])

@php
    $classes = "min-h-screen flex items-center justify-center bg-cover bg-center ";
    $style = "";

    if ($imageURL) {
        $style = "background-image: url('$imageURL');";
    }else{
        $classes .= "absolute inset-0 -z-10 h-full w-full items-center px-5 py-24 [background:radial-gradient(125%_125%_at_50%_10%,#000_40%,#63e_100%)]";
    }
@endphp

<div class="{{ $classes }}" style="{{ $style }}">
    <div class="bg-white shadow-md rounded-lg w-full max-w-md p-6">
        {{ $slot }}
    </div>
</div>

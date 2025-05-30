@props(['type' => 'success', 'message' => ''])
@if($message)
    @php
        $baseClasses = 'px-4 py-3 rounded relative mb-4 mt-3';
        $types = [
            'success' => 'bg-green-100 border border-green-400 text-green-700',
            'error'   => 'bg-red-100 border border-red-400 text-red-700',
            'info'    => 'bg-blue-100 border border-blue-400 text-blue-700',
            'warning' => 'bg-yellow-100 border border-yellow-400 text-yellow-700',
        ];

        $classes = $types[$type] ?? $types['info'];
    @endphp

    <div class="{{ $baseClasses}} {{ $classes }}" role="alert">
        <strong class="font-bold capitalize">{{ $type }}!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@endif
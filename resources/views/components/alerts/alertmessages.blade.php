@props(['type' => 'success', 'message' => ''])

@php
    $baseClasses = "flex justify-center items-center p-4 mb-4 text-sm rounded-lg shadow-md mt-2 text-center";
    $types = [
        'success' => 'bg-green-100 text-green-700 border border-green-300',
        'error'   => 'bg-red-100 text-red-700 border border-red-300',
        'info'    => 'bg-blue-100 text-blue-700 border border-blue-300',
        'warning' => 'bg-yellow-100 text-yellow-800 border border-yellow-300',
    ];
    $classes = $types[$type] ?? $types['info'];
@endphp

@if ($message)
    <div class="{{ $baseClasses }} {{ $classes }}" role="alert">
        <div class="flex items-center space-x-3">
            {{-- Icon --}}
            @if($type === 'success')
                <svg class="w-6 h-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z" clip-rule="evenodd" />
                </svg>
            @elseif($type === 'error')
                <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.536-11.536a1 1 0 00-1.414 0L10 8.586 7.879 6.464a1 1 0 10-1.414 1.414L8.586 10l-2.121 2.121a1 1 0 101.414 1.414L10 11.414l2.121 2.121a1 1 0 001.414-1.414L11.414 10l2.122-2.121a1 1 0 000-1.415z" clip-rule="evenodd" />
                </svg>
            @elseif($type === 'info')
                <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 5a7 7 0 110 14a7 7 0 010-14z" />
                </svg>
            @elseif($type === 'warning')
                <svg class="w-6 h-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M10.29 3.86l-7.39 12.82a1 1 0 00.86 1.52h14.68a1 1 0 00.86-1.52L13.71 3.86a1 1 0 00-1.42 0z" />
                </svg>
            @endif

            {{-- Message --}}
            <span class="font-bold text-base capitalize">we are done here!{{ $message }}</span>
        </div>
    </div>
@endif

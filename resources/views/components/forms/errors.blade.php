@props(['error' => false])

@if ($error)
    <p class="text-sm text-red-600 dark:text-red-500 font-bold">
        {{ $error }}
    </p>
@endif
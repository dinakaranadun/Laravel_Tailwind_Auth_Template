@props(['error' => false])

@if ($error)
    <p class="mt-2 text-sm text-red-600 dark:text-red-500 font-bold">
        {{ $error }}
    </p>
@endif
@props(['label','name','subLabel' => false,'href'=>null,'subText' => null])

<div>
    @if ($label)
        @if ($subLabel)
            <div class="flex items-center justify-between">
                <x-forms.labels :label="$label" :name="$name" />
                <div class="text-sm">
                    @if ($href)
                        <a href="{{ $href }}" class="font-semibold text-indigo-600 hover:text-indigo-500">
                            {{ $subText }}
                        </a>
                    @else
                        <span class="text-gray-600">{{ $subText }}</span>
                    @endif
                </div>
            </div>
        @else
            <x-forms.labels :label="$label" :name="$name" />
        @endif
    @endif
    <div class="mt-2">
        {{ $slot }}
        <x-forms.errors :error="$errors->first($name)" />
    </div>
</div>
@props(['labeltext','linktext','linkurl'=>'#'])


<p class="mt-10 text-center text-sm/6 text-gray-500">
          {{ $labeltext }}
          <a href="{{ $linkurl }}" class="font-semibold text-indigo-600 hover:text-indigo-500">{{ $linktext }}</a>
</p>
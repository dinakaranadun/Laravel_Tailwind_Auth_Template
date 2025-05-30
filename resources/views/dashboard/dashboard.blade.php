<x-layout>
    <h1>Welcome to dashboard</h1>
    <form action="/logout" method="POST" class="space-y-8">
    @csrf
    @method('DELETE')
   
        <button type="submit" class="mt-6 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Logout</button>
    </form>
</x-layout>
<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 shadow-md flex flex-col rounded-md">
        <h1 class="text-2xl font-bold">{{ $food->Name }}</h1>
        <p class="mt-4 text-gray-600">Price: {{ $food->Price }}$</p>
    </div>
</x-app-layout>

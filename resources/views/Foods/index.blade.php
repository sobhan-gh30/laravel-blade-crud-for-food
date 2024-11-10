<x-app-layout>
    <header class="shadow w-full h-24 flex items-center dark:bg-gray-900">
        <nav class="container h-full flex items-center justify-between px-5">
            <h2 class="text-5xl font-bold">Logo.</h2>

            <button class="relative md:hidden">+</button>

            <ul class="hidden md:flex justify-center items-center gap-5 lg:gap-10">
                <li><a class="text-md lg:text-xl block hover:scale-110 transition" href="{{route("foods.create")}}">Add Food</a></li>
            </ul>
        </nav>
    </header>
        <table class="mx-auto mt-10 shadow w-[50rem] text-sm text-center rtl:text-right text-gray-500 dark:text-gray-300">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Food</th>
                <th scope="col" class="px-6 py-3">Price</th>
                <th scope="col">Edit/Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($foods as $food)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{$food["id"]}}</td>
                    <td class="px-6 py-4">{{$food["Name"]}}</td>
                    <td class="px-6 py-4">{{$food["Price"]}}$</td>
                    <td>
                        <a  href="{{route('foods.show', $food->id) }}"
                            class="transition mx-1 w-14 h-8 rounded-md inline-flex justify-center items-center
                         text-green-500 hover:text-white dark:text-white
                          hover:bg-green-400 dark:bg-green-400 dark:hover:bg-green-500
                          border border-green-400 dark:border-none">more..</a>

                        <a  href="{{route('foods.edit', $food) }}"
                            class="transition mx-1 w-14 h-8 rounded-md inline-flex justify-center items-center
                         text-yellow-500 hover:text-white dark:text-white
                          hover:bg-yellow-400 dark:bg-yellow-400 dark:hover:bg-yellow-500
                          border border-yellow-400 dark:border-none">Edit</a>

                        <form action="{{ route('foods.destroy', $food) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="transition mx-1 w-14 h-8 rounded-md inline-flex justify-center items-center
                                    text-red-600 hover:text-white dark:text-white
                                    hover:bg-red-600 dark:bg-red-600 dark:hover:bg-red-700
                                    border border-red-600 dark:border-none"
                                    onclick="return confirm('Are you sure you want to delete this item?');">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
</x-app-layout>

<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 w-full h-screen flex justify-center items-center ">
        <form action="{{route('foods.update' , $food->id)}}" method="POST" class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 shadow-md flex flex-col rounded-md dark:bg-gray-900">
            @csrf
            @method("PUT")
            <x-input-label>{{__('What\'s your food name?')}}</x-input-label>
            <input type="text" name="Name" class="mb-5 dark:bg-gray-700 dark:outline-0 dark:border-none" value="{{$food["Name"]}}">

            <x-input-label>{{__('How much is it?')}}</x-input-label>
            <input type="text" name="Price" class="mb-5 dark:bg-gray-700 dark:outline-0 dark:border-none" value="{{$food["Price"]}}">

            <div class="w-full flex justify-between">
                <x-primary-button>{{__('Save')}}</x-primary-button>
                <x-nav-link href="{{route('foods.index')}}">{{__('Cancel')}}</x-nav-link>
            </div>
        </form>
    </div>
</x-app-layout>

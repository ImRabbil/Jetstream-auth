<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>


    <div class="py-12 ml-12">

        <h2 class="text-2xl font-bold">{{ Auth::user()->name }} are logged in! </h2>

    </div>


</x-app-layout>
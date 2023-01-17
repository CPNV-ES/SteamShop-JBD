<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  
                    <form action="{{ route('games.store') }}" method="post">
                        @csrf
                        <label> Nom du jeu : </label>
                        <input type="text"  value="" name="name">
                        <label> prix : </label>
                        <input type="number"  value="" name="price">
                        <label> Date de sortie : </label>
                        <input type="datetime-local"  value="{{today()}}" name="publish_date">
                        <button>Acheter</button>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
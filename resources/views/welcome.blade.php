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
                    {{ __("Hit de la saison !") }}
                    @foreach ($games as $game)
                      
                       <form action="{{ route('basket.update') }}" method="post" class="bg-red-200 flex space-x-4 justify-items-stretch">
                            @csrf
                            @method('PATCH')
                            <input hidden value="{{$game->id}}" name ="id">
                            <label> Nom du jeu : </label>
                            <input type="text" readonly value="{{$game->name}}" name="name">
                            <label> prix : </label>
                            <input type="text" readonly value="{{$game->price}}" name="price">
                            <button>Acheter</button>

                            <p class="bg-red-400 justify-self-end"> 5000% de réduction !!!!!!<p>
                        </form>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

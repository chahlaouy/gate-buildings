<x-app-layout>
    {{-- Navigation side for admin dashboard --}}
    @include('users.partials.navigation')
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-700 leading-tight">
                Créer une article
            </h2>

        </div>
    </x-slot>
    <form action="/profile" method="post">
        @csrf
        @method('put')
        <div class="flex " x-data="{ result : '', title: 'Titre Ici' }">
            <div class="flex-1">
                <div class="">
                    <div class="overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 border-b border-gray-200">

                            <label class="block mb-4">
                                <span class="text-gray-700">Nom utilisateur</span>
                                <input
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="name" value="{{Auth::user()->name}}" required placeholder="Nom"
                                >
                            </label>
                            <label class="block mb-4">
                                <span class="text-gray-700">Email</span>
                                <input
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="email" value="{{Auth::user()->email}}" required placeholder="Email"

                                >
                            </label>

                            <label class="block mb-4">
                                <span class="text-gray-700">Nouveau Mot de passe</span>
                                <input type="text" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="password"

                                >
                            </label>

                            <label class="block mb-4">
                                <span class="text-gray-700">Confirmer Mot de passe</span>
                                <input type="text" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="password_confirmation">
                            </label>


                        </div>
                    </div>
                </div>
            </div>
            <div class="w-56 px-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                    <div class="p-2 bg-white border-b border-gray-200">
                        <button type="submit" class="py-2 w-full rounded text-gray-700 mb-4"  style="background: #ff6700">Update</button>
                    </div>


                </div>
                @if ($errors->any())
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8 p-2">

                        <ul class="list-disc">
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500">{{ $error }}</li>
                                <hr>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </form>



</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-700 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>
    <div>
        <span class="block text-sm pb-4">Dérniere 3 Articles</span>
        <x-custom.card :articles="$articles"></x-custom.card>
    </div>
</x-app-layout>

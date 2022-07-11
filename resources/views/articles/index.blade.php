<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-700 leading-tight">
                Créer une article
            </h2>

        </div>
    </x-slot>
    <x-custom.table :articles="$articles"></x-custom.table>
</x-app-layout>

<x-app-layout>
    <x-slot name="breadcrumb">
        <div>
            <div class="flex items-center mb-2 text-sm">
                <i class="ti-home text-gray-500 mr-2"></i>
                <span class="mr-2 text-gray-500">/</span>
                <span>Categories</span>
            </div>
            <div class="font-bold text-gray-700">
                Categories Managment
            </div>
        </div>
    </x-slot>

    <div class="flex items-center justify-end mb-4">
        {{-- <x-input id="keyword" class="block mt-1 w-64" type="text" name="keyword" :value="old('keyword')" required autofocus placeholder="{{__('Search')}}" /> --}}
        <x-button class="w-48">
            <a href="{{route('categories.create')}}">
                {{ __('Add Category') }}
            </a>
        </x-button>
    </div>
    <div class="bg-white rounded-2xl p-4" style="box-shadow: 0 4px 6px -1px rgb(0 0 0 / 10%), 0 2px 4px -1px rgb(0 0 0 / 6%);">
        <div class="flex items-start">
            <span class="w-12 h-12 rounded-xl bg-red-400 shadow-md mr-3 flex items-center justify-center">
                <i class="ti-id-badge text-xl text-white"></i>
            </span>
            <div>
                <span class="block text-md mb-1 font-bold">
                    Categories List
                </span>
                <span class="block text-sm mb-4">Categories Managment</span>
            </div>
        </div>

        <table class="w-full sm:bg-white rounded-sm overflow-hidden my-5 text-sm">
            <thead class="text-gray-700 bg-gray-200">
                <tr class="border-blue-800 border-l-2 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                    <th class="p-2 text-left">Id</th>
                    <th class="p-2 text-left">Name</th>
                    <th class="p-2 text-left">description</th>
                    <th class="p-2 text-left">Action</th>
                </tr>
            </thead>
            <tbody class="flex-1 sm:flex-none text-gray-600 tracking-wide leading-loose">
                @forelse ($records as $record)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0 border-b border-gray-100">
                        <td class="border-l-2 border-blue-800 py-2">
                            <span class="font-bold">#</span>
                            {{$record->id}}
                        </td>
                        <td class="py-2">
                            {{$record->name}}
                        </td>
                        <td class="py-2">
                            {{$record->description}}
                        </td>
                        <td class="py-2 flex items-center">
                            <form action="{{route('categories.destroy', $record->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="px-2">
                                    <i class="ti-trash text-red-500"></i>
                                </button>
                            </form>
                            <a href="{{route('categories.edit', $record->id)}}" class="px-2">
                                <i class="ti-marker-alt text-green-500"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0 border-b border-gray-100">
                        <td colspan="5">
                            No Records<a href="{{route('categories.create')}}" class="text-green-800 underline"> Create One</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-app-layout>

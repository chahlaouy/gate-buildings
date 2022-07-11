<x-app-layout>
    <x-slot name="breadcrumb">
        <div>
            <div class="flex items-center mb-2 text-sm">
                <i class="ti-home text-gray-500 mr-2"></i>
                <span class="mr-2 text-gray-500">/</span>
                <span class="mr-2 text-gray-500">Partners</span>
                <span class="mr-2 text-gray-500">/</span>
                <span class="text-gray-700">Add Partner</span>
            </div>
            <div class="font-bold text-gray-700">
                Patners Managment
            </div>
        </div>
    </x-slot>
    <div class="bg-white rounded-2xl p-4" style="box-shadow: 0 4px 6px -1px rgb(0 0 0 / 10%), 0 2px 4px -1px rgb(0 0 0 / 6%);">
        <div class="flex items-start">
            <span class="w-12 h-12 rounded-xl bg-blue-400 shadow-md mr-3 flex items-center justify-center">
                <i class="ti-id-badge text-xl text-white"></i>
            </span>
            <div>
                <span class="block text-md mb-1 font-bold">
                    Add Partner
                </span>
                <span class="block text-sm mb-4">Patners Managment</span>
            </div>
        </div>

        <form action="{{route('partners.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div  x-data="{ result : '', title: 'Partner name' }">
                <div class="mb-4">
                    <x-input
                        x-model="title"
                        x-on:keyup="result = title.replace(/ /g, '-')"
                        id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="{{__('Partner name')}}" />
                </div>
                <div class="mb-4">
                    <x-input
                        x-model="result"
                        x-on:keyup="result = result.replace(/ /g, '-')"
                        id="slug" class="block mt-1 w-full" type="text" name="slug" required autofocus placeholder="{{__('Slug')}}" />
                </div>
                <div class="mb-4">
                    <x-input
                        id="siteUrl" class="block mt-1 w-full" type="text" name="siteUrl" autofocus placeholder="{{__('Site Url')}}" />
                </div>
                <div class="mb-4">
                    <textarea id="description" class="block mt-1 w-full rounded-md border-gray-300 focus:border-yellow-200 focus:ring focus:ring-yellow-400 focus:ring-opacity-25"
                            name="description"
                            placeholder="{{__('Description')}}" rows="5">{{old('description')}}</textarea>
                </div>

                <div class="mb-4">
                    <x-label for="logo" :value="__('Partner logo')" />
                    <x-input id="logo" class="block mt-1 w-full"
                            type="file"
                            name="logo"
                            placeholder="{{__('logo')}}" />
                </div>

                <div class="flex items-center justify-end mb-4">
                    <x-button class="w-48">
                        {{ __('Add Partner') }}
                    </x-button>
                </div>
            </div>
        </form>

    </div>

</x-app-layout>

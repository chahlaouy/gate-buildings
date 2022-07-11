<x-app-layout>
    <x-slot name="breadcrumb">
        <div>
            <div class="flex items-center mb-2 text-sm">
                <i class="ti-home text-gray-500 mr-2"></i>
                <span class="mr-2 text-gray-500">/</span>
                <span class="mr-2 text-gray-500">Products</span>
                <span class="mr-2 text-gray-500">/</span>
                <span class="text-gray-700">Add Product</span>
            </div>
            <div class="font-bold text-gray-700">
                Products Managment
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
                    Add Product
                </span>
                <span class="block text-sm mb-4">Products Managment</span>
            </div>
        </div>

        @if ($errors->any())
            <div class="mb-8 p-2">
                <ul class="list-disc">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                        <hr>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div  x-data="{ result : '', title: 'Product name' }">
                <div class="mb-4">
                    <x-input
                        x-model="title"
                        x-on:keyup="result = title.replace(/ /g, '-')"
                        id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="{{__('Product name')}}" />
                </div>
                <div class="mb-4">
                    <x-input
                        x-model="result"
                        x-on:keyup="result = result.replace(/ /g, '-')"
                        id="slug" class="block mt-1 w-full" type="text" name="slug" required autofocus placeholder="{{__('Slug')}}" />
                </div>
                <div class="mb-4">
                    <x-input
                        id="reference"
                        class="block mt-1 w-full"
                        type="text"
                        name="reference"
                        :value="old('reference')"
                        required autofocus placeholder="{{__('Reference')}}" />
                </div>
                <div class="mb-4">
                    <x-input
                        id="price"
                        class="block mt-1 w-full"
                        type="text" name="price"
                        :value="old('price')"
                        required autofocus placeholder="{{__('Price')}}" />
                </div>
                <div class="mb-4">
                    <select
                        name="partner_id"
                        id="partnerId"
                        class="block mt-1 w-full rounded-md border-gray-300 focus:border-yellow-200 focus:ring focus:ring-yellow-400 focus:ring-opacity-25">
                        <option value="" disabled selected>Partner Name</option>
                        @foreach ($partners as $partner)
                            <option value="{{$partner->id}}">{{$partner->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-4">
                    <select
                        name="category_id"
                        id="categoryId"
                        class="block mt-1 w-full rounded-md border-gray-300 focus:border-yellow-200 focus:ring focus:ring-yellow-400 focus:ring-opacity-25">
                        <option value="" disabled selected>Category Name</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-4">
                    <textarea id="miniDescription" class="block mt-1 w-full rounded-md border-gray-300 focus:border-yellow-200 focus:ring focus:ring-yellow-400 focus:ring-opacity-25"
                            name="miniDescription"
                            placeholder="{{__('Mini Description')}}" rows="5">{{old('miniDescription')}}</textarea>
                </div>
                <div class="mb-4">
                    <textarea id="description" class="block mt-1 w-full rounded-md border-gray-300 focus:border-yellow-200 focus:ring focus:ring-yellow-400 focus:ring-opacity-25"
                            name="description"
                            placeholder="{{__('Description')}}" rows="5">{{old('description')}}</textarea>
                </div>
                <div class="mb-4">
                    <textarea id="technicalSheet" class="block mt-1 w-full rounded-md border-gray-300 focus:border-yellow-200 focus:ring focus:ring-yellow-400 focus:ring-opacity-25"
                            name="technicalSheet"
                            placeholder="{{__('Technical Sheet')}}" rows="5">{{old('technicalSheet')}}</textarea>
                </div>

                <label class="block mb-4">
                    <span class="text-gray-700 block bg-gray-300 text-center rounded py-2">Select Product Images</span>
                    <input type="file" class="custom-file-input w-full" name="images[]" multiple accept="file/*">
                </label>
                <div class="flex items-center justify-end mb-4">
                    <x-button class="w-48">
                        {{ __('Add Product') }}
                    </x-button>
                </div>
            </div>
        </form>

    </div>

</x-app-layout>

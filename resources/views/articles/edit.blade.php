<x-app-layout>
    {{-- Navigation side for admin dashboard --}}
    @include('users.partials.navigation')
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-700 leading-tight">
                Mise a jour de l'article
            </h2>

        </div>
    </x-slot>
    <form action="/admin/blog/{{$thread->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="flex " x-data="{
            result : '',
            title: '{{$thread->title}}',
            getSlug(){
                this.result = this.title.replace(/ /g, '-')
            }
        }" x-init="getSlug()">
            <div class="flex-1">
                <div class="">
                    <div class="overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 border-b border-gray-200">

                            <label class="block mb-4">
                                <span class="text-gray-700">Nom de l'article</span>
                                <input
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Nom de l'article"
                                name="title"
                                x-model="title"
                                {{-- value="{{old('title')?:''}}" --}}
                                x-on:keyup="getSlug()"
                                >
                            </label>
                            <label class="block mb-4">
                                <span class="text-gray-700">Slug de la'article</span>
                                <input
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Slug"
                                name="slug"
                                x-model="result"
                                x-on:keyup="result = result.replace(/ /g, '-')"
                                >
                            </label>
                            <label class="block mb-4">
                                <span class="text-gray-700">Description</span>
                                <textarea class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="description" id="description">{{$thread->description}}</textarea>
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Contenu de l'article</span>
                                <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3" spellcheck="false" id="body" name="body" >{{$thread->body}}</textarea>
                            </label>

                        </div>
                    </div>
                </div>
            </div>
            <div class="w-56 px-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                    <div class="p-2 bg-white border-b border-gray-200">
                        <button type="submit" class="py-2 w-full rounded text-gray-700 mb-4"  style="background: #ff6700">Publish</button>
                    </div>
                    <div class="p-2 flex w-full">

                        <label class="block mb-4">
                            <span class="text-gray-700 block bg-gray-300 text-center rounded py-2">Image Thumbnail</span>
                            <input type="file" class="custom-file-input w-full" name="thumbnail" accept="file/*">
                        </label>
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

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'body', {
            filebrowserUploadUrl: "{{route('CKEditor.store', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>

</x-app-layout>

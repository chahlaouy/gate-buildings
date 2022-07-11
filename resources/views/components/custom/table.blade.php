@props(['articles'])

<table class="w-full sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
    <thead class="text-white">
        <tr class="flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0" style="background: #ff6700">
            <th class="p-3 text-left">Id</th>
            <th class="p-3 text-left">Titre</th>
            <th class="p-3 text-left">description</th>
            <th class="p-3 text-left">Vue</th>
            <th class="p-3 text-left">Action</th>
        </tr>
    </thead>
    <tbody class="flex-1 sm:flex-none">
        @forelse ($articles as $article)
            <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$article->id}}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">
                    <a href="{{$article->path()}}">{{$article->title}}</a>
                </td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$article->description}}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$article->vue}}</td>
                <td class="flex items-center">
                    <form action="/admin/blog/{{$article->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="focus:outline-none cursor-pointer px-2 py-1 hover:bg-red-300 ">Supprimer</button>
                    </form>
                    <a href="/admin/blog/{{$article->id}}/edit" class="block ml-3 px-2 py-1 hover:bg-green-300">Editer</a>

                </td>
            </tr>
        @empty
            <tr class="bg-white shadow p-4 rounded-2xl">
                <td colspan="5">
                    Vous n'avez pas encore d'article<a href="{{route('articles.create')}}" class="text-green-800 underline"> Publiez-en un nouveau</a>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

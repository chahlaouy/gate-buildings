@props(['type'])

<div class="fixed bottom-0 right-0 p-3" x-data="{open : true}">
    <div class="w-96 rounded-md py-3 px-8 flex justify-between items-start {{$type === 'error' ? 'bg-red-500' : 'bg-green-500'}} " x-show.transition="open">
        <div>
            {{$slot}}
        </div>
        <span x-on:click="open = false" class="cursor-pointer block flex bg-gray-900 rounded-md w-8 h-8 items-center justify-center">
            <i class="ti-close text-white"></i>
        </span>
    </div>
</div>

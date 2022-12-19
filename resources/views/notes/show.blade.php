<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <p class="opacity-70 pr-5">Created: {{ $note->created_at->diffForHumans() }}</p>
                <p class="opacity-70">Updated: {{ $note->updated_at->diffForHumans() }}</p>
            </div>

            <div class="p-6 bg-white border-b text-gray-900 shadow-sm">
                <div class="my-6 p-6">
                    <h2 class="font-extrabold text-2xl">
                        {{ $note->title }}
                    </h2>
                    <p class="mt-2">{{ $note->text }}</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

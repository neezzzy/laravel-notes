<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden ">
                <div class="p-6 text-gray-900 bg-gray-50 rounded-md">
                    <div class="p-2">

                        <form action="{{ route('notes.store') }}" method="post">
                            @csrf
                            <x-text-input field='title' class="w-full py-2 mb-2" type="text" name="title"
                                placeholder='Title' :value="@old('title')">
                            </x-text-input>
                            <x-text-area field='text' class="w-full" name="text" rows="10"
                                placeholder="Type your note here..." :value="@old('text')"></x-text-area>
                            <x-primary-button class="mt-6">Save Note</x-primary-button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

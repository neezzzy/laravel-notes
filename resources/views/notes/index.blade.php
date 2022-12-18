<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @forelse ($notes as $note)
                        <div class="my-6 p-6 bg-black border-b">
                            <h2 class="font-extrabold text-2xl">{{ $note->title }}</h2>
                            <p class="mt-2">{{ Str::limit($note->text, 200) }}</p>
                            <span class="block mt-4 text-sm opacity-60">{{ $note->updated_at->diffForHumans() }}</span>
                        </div>
                    @empty
                        <p>You have no notes.</p>
                    @endforelse

                    {{ $notes->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden ">
                <div class="p-6 text-gray-900">

                    <a class="inline-block px-8 py-5 bg-indigo-700 rounded-md font-bold text-white uppercase mb-2"
                        href="{{ route('notes.create') }}">+ New Note</a>

                    @forelse ($notes as $note)
                        <div class="my-6 p-6 border-b">
                            <h2 class="font-extrabold text-2xl">

                                <a href="{{ route('notes.show', $note->uuid) }}">{{ $note->title }}</a>
                            </h2>
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

<x-layout title="Ideas">

    <h1>Ideas</h1>

    @if ($ideas->count())

        <div>
            <h2>Saved Ideas</h2>

            <ul class="mt-6 grid grid-cols-2 gap-x-6 gap-y-4">
                @foreach ($ideas as $idea)
                    <x-idea-card href="/ideas/{{ $idea->id }}"  >

                        {{ $idea->description }}

                    </x-idea-card>
                @endforeach

        </div>

        <form method="get" action="ideas/create">
            @csrf

            <div class="mt-6 flex items-center gap-x-6">
                <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Create New Idea
                </button>
            </div>

        </form>

        <form method="POST" action="/ideas">
            @csrf
            @method('DELETE')

            <div class="mt-6 flex items-center gap-x-6">
                <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Delete All Ideas
                </button>
            </div>

        </form>

    @else

        <p class="text-sm text-gray-500">No ideas yet. <a href="/ideas/create" class=class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Create one</a>.</p>

    @endif

</x-layout>
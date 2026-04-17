<x-layout title="Idea">

    <div>
        <h1>My Idea</h1>

        <div class="text-small">{{ $idea->description }}</div>

        <div>

            <a href="/ideas/{{ $idea->id }}/edit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Edit
            </a>

        </div>

</x-layout>
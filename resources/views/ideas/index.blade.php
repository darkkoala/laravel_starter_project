<x-layout title="Ideas">

    <h1>Ideas</h1>

    <form method="POST" action="/ideas">
        @csrf
        <div class="w-full max-w-sm">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-200">New Ideas</label>
            <textarea 
                id="description" 
                name="description"
                rows="4" 
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" 
                placeholder="Write your idea here..."></textarea>
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Save
            </button>
        </div>

    </form>

    @if ($ideas->count())
        <div>
            <h2>Saved Ideas</h2>

            <ul>
                @foreach ($ideas as $idea)
                    <li>
                        <a href="/ideas/{{ $idea->id }}" class="text-small">{{ $idea->description }}</a>
                    </li>
                @endforeach

        </div>

        <form method="POST" action="/ideas">
            @csrf
            @method('DELETE')

            <div class="mt-6 flex items-center gap-x-6">
                <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Delete All Ideas
                </button>
            </div>

        </form>
    @endif

</x-layout>
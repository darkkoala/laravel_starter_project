<x-layout title="Edit Idea">

    <h1>Edit Idea</h1>

    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')
        <div class="w-full max-w-sm">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-200">New Ideas</label>
            <textarea 
                id="description" 
                name="description"
                rows="4" 
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" 
                placeholder="Write your idea here...">{{ $idea->description }}</textarea>

                <x-forms.error name="description" />
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Save
            </button>

            <button type="submit" form="delete-form" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                Delete
            </button>
        </div>

    </form>
    <form method="POST" action="/ideas/{{ $idea->id }}" id="delete-form">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
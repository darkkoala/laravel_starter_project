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
                class="textarea w-full @error('description') textarea-error @enderror" 
                placeholder="Write your idea here...">{{ $idea->description }}</textarea>

                <x-forms.error name="description" />
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="btn">
                Save
            </button>

            <button type="submit" form="delete-form" class="btn btn-error">
                Delete
            </button>
        </div>

    </form>
    <form method="POST" action="/ideas/{{ $idea->id }}" id="delete-form">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
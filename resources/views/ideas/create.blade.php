<x-layout title="Create Idea">

    <h1>Create Idea</h1>

    <form method="POST" action="/ideas">
        @csrf
        <div class="w-full max-w-sm">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-200">New Idea</label>
            <textarea 
                id="description" 
                name="description"
                rows="4" 
                class="textarea w-full @error('description') textarea-error @enderror" 
                placeholder="Write your idea here..."></textarea>

                <x-forms.error name="description" /> 

        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="btn">
                Save
            </button>
        </div>

    </form>

</x-layout>
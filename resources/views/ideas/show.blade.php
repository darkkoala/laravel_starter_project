<x-layout title="Idea">

    <div class="card bg-neutral p-6">

        <div>{{ $idea->description }}</div>

        <div class="mt-6">

            <a href="/ideas/{{ $idea->id }}/edit" class="btn-primary">
                Edit
            </a>

        </div>

</x-layout>
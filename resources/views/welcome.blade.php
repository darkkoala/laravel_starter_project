<x-layout>

    <h1>
        {{ $greeting }}, {{ $name }}!
    </h1>


    @forelse (request()->all() as $key => $value)

        <li>{{ $value }}</li>

    @empty

        <p>No query parameters.</p>

    @endforelse

</x-layout>


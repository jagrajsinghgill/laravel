<div class="border-pixl-light/10 mt-4 border p-4">
    <h2 class="text-pixl-light/60 text-sm">Follow Idea Streams</h2>
    <ol class="mt-4 flex flex-col gap-2.5">
        @foreach ($ideaStreams as $ideaStream)
            <li class="flex items-center justify-between gap-4">
                <p class="truncate text-sm">{{ $ideaStream['name'] }}</p>
                <button
                    class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/60 active:border-pixl/75 text-pixl grid size-7 shrink-0 place-items-center border text-2xl leading-none"
                >
                    +
                </button>
            </li>
        @endforeach
    </ol>
    <a href="#" class="text-pixl-light/60 mt-4 inline-block text-sm"
        >Show more</a
    >
</div>

@if ($video ?? false)
    <div class="component container mx-auto max-w-4xl px-6 pb-10">
        @include('partials.video', ['video' => $video])
    </div>
@endif

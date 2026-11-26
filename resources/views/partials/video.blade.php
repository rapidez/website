@php
    // Accepts the augmented Video fieldtype value (Value/Embed) or a plain URL.
    $embed = $video instanceof \Statamic\Fields\Value ? $video->value() : $video;
    $src = $embed instanceof \Statamic\Fieldtypes\Video\Embed
        ? $embed->embedUrl()
        : \Statamic\Fieldtypes\Video\Embed::embedUrlFor($embed ? (string) $embed : null);
@endphp
@if ($src)
    <div class="not-prose my-8 aspect-video overflow-hidden rounded-2xl bg-black">
        <iframe
            src="{{ $src }}"
            title="{{ $title ?? 'Video' }}"
            class="size-full"
            loading="lazy"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
        ></iframe>
    </div>
@endif

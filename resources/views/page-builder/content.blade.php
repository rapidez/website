@php
    // With Bard sets enabled the text is a list of chunks (text and sets) instead of one HTML string.
    $chunks = $text instanceof \Statamic\Fields\Value ? $text->value() : $text;
@endphp
@if ($chunks)
    <div class="component container mx-auto max-w-2xl px-6">
        <div class="prose max-w-none pb-10">
            @if (is_iterable($chunks))
                @foreach ($chunks as $chunk)
                    @if ((string) $chunk->type === 'text')
                        {!! $chunk->text !!}
                    @else
                        @includeFirstSafe(['page-builder.bard.' . $chunk->type], ['set' => $chunk])
                    @endif
                @endforeach
            @else
                {!! $chunks !!}
            @endif
        </div>
    </div>
@endif

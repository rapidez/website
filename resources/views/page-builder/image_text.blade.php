<div class="mx-auto mb-12 flex max-w-7xl flex-col gap-20 px-6 md:mb-32 md:gap-28"{{ ($component_id ?? false) ? " id=" . $component_id : "" }}>
    @if(($variant->value()->value() ?? '') === 'text_left')
        <div class="grid items-center gap-x-60 gap-y-6 md:grid-cols-2">
            @if($content ?? false)
                <div class="flex flex-col items-start max-md:order-last">
                    @foreach($content as $contentSet)
                        @includeFirstSafe(['partials.content.' . $contentSet['type']], $contentSet)
                    @endforeach
                </div>
            @endif
            <div class="relative md:mr-[calc(50%-50vw)] md:ml-20">
                <div class="flex flex-col rounded-2xl drop-shadow-toolbar">
                    @php($class = 'relative mr-auto h-[360px] w-full rounded-bl-2xl object-cover object-left-top md:h-[720px] md:rounded-b-2xl')
                    @if(($media?->value()?->isImage() ?? false) || ($media?->value()?->isSvg() ?? false))
                        @responsive($media->value(), compact('class'))
                    @elseif(($media?->value()?->isVideo() ?? false) && ($media?->value()?->url() ?? false))
                        <video src="{{ $media->value()->url() }}" loop autoplay muted :class="$class" />
                    @endif
                </div>
            </div>
        </div>
    @else
        <div class="grid items-center gap-x-60 gap-y-6 md:grid-cols-2">
            @if($content ?? false)
                <div class="order-last flex flex-col items-start">
                    @foreach($content as $contentSet)
                        @includeFirstSafe(['partials.content.' . $contentSet['type']], $contentSet)
                    @endforeach
                </div>
            @endif
            <div class="relative md:ml-20 md:mr-[calc(50%-50vw)] md:ml-[calc(50%-50vw)]">
                <div class="flex flex-col rounded-2xl drop-shadow-toolbar">
                    @php($class = 'max-md:mr-auto relative rounded-bl-2xl md:object-cover md:object-left-top md:ml-auto md:h-[720px] md:rounded-b-2xl md:object-right-top')
                    @if(($media?->value()?->isImage() ?? false) || ($media?->value()?->isSvg() ?? false))
                        @responsive($media->value(), compact('class'))
                    @elseif(($media?->value()?->isVideo() ?? false) && ($media?->value()?->url() ?? false))
                        <video src="{{ $media->value()->url() }}" loop autoplay muted :class="$class" />
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>

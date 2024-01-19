<div class="mx-auto mb-12 flex max-w-7xl flex-col gap-20 px-6 md:mb-32 md:gap-28"{{ ($component_id ?? false) ? " id=" . $component_id : "" }}>
    @if(($variant->value()->value() ?? '') === 'text_left')
        <div class="grid items-center gap-x-60 gap-y-6 md:grid-cols-2">
            @if($content ?? false)
                <div class="flex flex-col items-start max-md:order-last">
                    @foreach($content as $contentSet)
                        @includeIf('partials.content.' . $contentSet['type'], $contentSet)
                    @endforeach
                </div>
            @endif
            <div class="relative mr-[calc(50%-50vw)] max-md:ml-20">
                @if($background_icon?->value()?->value() ?? '')
                    @if(($background_icon?->value()?->value() ?? '') === 'angry-face')
                        <x-icon-angry class="absolute left-0 top-1/2 aspect-square h-52 -translate-y-1/2 translate-x-[-145px] text-gray-100 md:h-72 md:translate-x-[-275px]" />
                    @else
                        <x-icon-rocket class="absolute left-0 top-1/2 aspect-square h-52 -translate-y-1/2 translate-x-[-145px] text-gray-100 md:h-72 md:translate-x-[-275px]" />
                    @endif
                @endif
                <div class="flex flex-col rounded-2xl drop-shadow-toolbar">
                    @if(($media?->value()?->isImage() ?? false) || ($media?->value()?->isSvg() ?? false))
                        @responsive($media->value(), ['class' => 'relative mr-auto h-[360px] w-full rounded-bl-2xl object-cover object-left-top md:h-[720px] md:rounded-b-2xl'])
                    @elseif(($media?->value()?->isVideo() ?? false) && ($media?->value()?->url() ?? false))
                        <video src="{{ $media->value()->url() }}" loop autoplay muted class="relative mr-auto h-[360px] w-full rounded-bl-2xl object-cover object-left-top md:h-[720px] md:rounded-b-2xl" />
                    @endif
                </div>
            </div>
        </div>
    @else
        <div class="grid items-center gap-x-60 gap-y-6 md:grid-cols-2">
            @if($content ?? false)
                <div class="order-last flex flex-col items-start">
                    @foreach($content as $contentSet)
                        @includeIf('partials.content.' . $contentSet['type'], $contentSet)
                    @endforeach
                </div>
            @endif
            <div class="relative max-md:ml-20 max-md:mr-[calc(50%-50vw)] md:ml-[calc(50%-50vw)]">
                @if($background_icon?->value()?->value() ?? '')
                    @if(($background_icon?->value()?->value() ?? '') === 'angry-face')
                        <x-icon-angry class="absolute left-0 top-1/2 aspect-square h-52 -translate-y-1/2 translate-x-[-145px] text-gray-100 md:h-72 md:translate-x-[-175px]" />
                    @else
                        <x-icon-rocket class="absolute h-[300px] -translate-x-56 text-gray-100 max-md:left-0 max-md:top-1/2 max-md:-translate-y-1/2 md:bottom-0 md:right-0 md:h-[570px] md:translate-x-[175px]" />
                    @endif
                @endif
                <div class="flex flex-col rounded-2xl drop-shadow-toolbar">
                    @if(($media?->value()?->isImage() ?? false) || ($media?->value()?->isSvg() ?? false))
                        @responsive($media->value(), ['class' => 'max-md::mr-auto relative h-[360px] rounded-bl-2xl object-cover object-left-top md:ml-auto md:h-[720px] md:rounded-b-2xl md:object-right-top'])
                    @elseif(($media?->value()?->isVideo() ?? false) && ($media?->value()?->url() ?? false))
                        <video src="{{ $media->value()->url() }}" loop autoplay muted class="max-md::mr-auto relative h-[360px] rounded-bl-2xl object-cover object-left-top md:ml-auto md:h-[720px] md:rounded-b-2xl md:object-right-top" />
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>

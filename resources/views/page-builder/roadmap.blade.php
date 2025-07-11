@php
    $roadmapItems = Statamic::tag('roadmap:getItems')->fetch();
@endphp
<div class="component roadmap py-10">
    <div class="px-6 mx-auto max-w-7xl relative flex flex-col">
        @if ($set->title ?? false)
            <div class="text-3xl font-semibold text-heading prose-strong:text-secondary-100 md:text-4xl">
                {!! $set->title !!}
            </div>
        @endif
        @if ($set->text ?? false)
            <div class="mt-3 max-w-md text-heading">
                {!! $set->text !!}
            </div>
        @endif
        <div class="mt-10">
            @foreach ($roadmapItems ?? [] as $roadmap_item)
                <div
                    @class([
                        'flex items-start gap-4',
                        'pb-10 mb-10 border-b border-dashed max-lg:flex-col lg:gap-12 lg:mb-20 lg:pb-20' => !$roadmap_item['is_shipped'],
                        'pb-4' => $roadmap_item['is_shipped']
                    ])
                >
                    <div class="top-2 w-full lg:sticky lg:w-1/4">
                        @if ($roadmap_item['title'] ?? false)
                            <div class="flex gap-x-2 items-center text-3xl text-heading font-semibold">
                                @if ($roadmap_item['icon'] ?? false)
                                    <span class="*:size-10">{!! $roadmap_item['icon'] !!}</span>
                                @endif
                                {!! $roadmap_item['title'] !!}
                            </div>
                        @endif
                    </div>
                    @if (!$roadmap_item['is_shipped'] ?? false)
                        <div class="flex-1 grid gap-8 lg:grid-cols-2">
                            @foreach ($roadmap_item['entries'] ?? [] as $item)
                                <x-card.roadmap :item="$item">
                                    <x-slot:title>{!! $item->title !!}</x-slot:title>
                                    <x-slot:content>{!! $item->text !!}</x-slot:content>
                                </x-card.roadmap>
                            @endforeach
                        </div>
                    @endif
                </div>

                @if($roadmap_item['is_shipped'])
                    @foreach($roadmap_item['children'] as $childItem)
                        <div class="flex items-start gap-4 mb-10 pb-10 border-b border-dashed last:border-none max-lg:flex-col lg:gap-12">
                            <div class="top-2 w-full lg:sticky lg:w-1/4">
                                @if ($childItem['title'] ?? false)
                                    <div class="text-xl text-heading font-medium">
                                        {!! $childItem['title'] !!}
                                    </div>
                                @endif
                            </div>
                            <div class="flex-1 grid gap-8 lg:grid-cols-2">
                                @foreach ($childItem['entries'] ?? [] as $item)
                                    <x-card.roadmap :item="$item">
                                        <x-slot:title>{!! $item->title !!}</x-slot:title>
                                        <x-slot:content>{!! $item->text !!}</x-slot:content>
                                    </x-card.roadmap>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>
    </div>
</div>
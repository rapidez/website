@php($blogs = \Statamic\Statamic::tag('collection:blog')->fetch())
<div class="component blog-overview relative py-16">
    <div class="absolute inset-x-0 bottom-0 h-96 bg-gray-100"></div>
    <div class="container relative mx-auto max-w-7xl px-6">
        <div class="flex gap-8 max-lg:flex-col">
            @foreach ($blogs->slice(0, 1) as $blog)
                <a href="{{ $blog?->url() ?? '' }}" class="flex lg:w-3/5 [&>*>div>h3]:text-3xl lg:[&>*>img]:h-[416px]">
                    <x-blog :$blog />
                </a>
            @endforeach
            @if (count($blogs) > 1)
                <div class="flex flex-1 flex-col gap-8">
                    @foreach ($blogs->slice(1, 2) as $blog)
                        <a href="{{ $blog?->url() ?? '' }}" class="flex">
                            <x-blog
                                :$blog
                                image-class="lg:w-[150px] lg:aspect-[4/3]"
                                class="lg:flex-row"
                            />
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
        @if (count($blogs) > 3)
            <div class="mt-16 grid gap-x-8 gap-y-16 lg:grid-cols-2 lg:border-t lg:pt-16">
                @foreach ($blogs->slice(3) as $blog)
                    <a href="{{ $blog?->url() ?? '' }}" class="flex">
                        <x-blog :$blog />
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</div>

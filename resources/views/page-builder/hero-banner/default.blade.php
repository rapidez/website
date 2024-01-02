<div class="hero relative z-10 w-full overflow-hidden mt-[-125px] pt-[125px]"{{ ($component_id ?? false) ? " id=" . $component_id : "" }}>
    <div class="absolute inset-0 h-full w-full bg-gradient-to-br from-secondary-900 from-30% to-secondary-100"></div>
    <div class="max-w-7xl mx-auto px-6 pb-10 lg:py-20 relative z-10">
        <div class="flex max-lg:flex-col">
            <div class="flex flex-col lg:flex-1">
                <h1 class="mt-2 tracking-tighter font-extrabold text-white lg:leading-none text-4xl lg:text-6xl">
                    @if($subheading ?? false)
                        <span class="block text-white/50">{!! $subheading !!}</span>
                    @endif
                    @if($heading ?? false)
                        <span class="lg:block text-white pb-2">
                            {!! $heading !!}
                        </span>
                    @endif
                </h1>
                @if($text ?? false)
                    <div class="text-white lg:mt-4 text-lg">
                        {!! $text !!}
                    </div>
                @endif
                <div class="mt-8">
                    @include('partials.newsletter')
                </div>
                <div class="flex flex-wrap items-center gap-6 mt-8 text-white">
                    @if($brand->social_twitter_url ?? false)
                        <a class="block" href="{{ $brand->social_twitter_url }}" target="_blank">
                            <x-icon-twitter class="w-10 h-10"/>
                        </a>
                    @endif
                    @if($brand->social_github_url ?? false)
                        <a class="block" href="{{ $brand->social_github_url }}" target="_blank">
                            <x-icon-github class="w-8 h-8"/>
                        </a>
                    @endif
                    @if($brand->slack_page ?? false)
                        <a class="block" href="{{ $brand->slack_page }}">
                            <x-icon-slack class="w-8 h-8"/>
                        </a>
                    @endif
                </div>
            </div>
            <div class="lg:flex lg:items-start lg:justify-start mt-1 pt-12">
                <div class="relative lg:w-[500px] w-full">
                    @if($youtube_embed_url ?? false)
                        <iframe class="w-full h-full aspect-video rounded-2xl shadow-md" width="560" height="315" src="{{ $youtube_embed_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="relative mt-auto w-full block -mb-px">
        <x-icon-smoke class="w-full h-auto"/>
    </div>
</div>

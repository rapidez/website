<div id="{{ $component_id }}" class="component hero relative z-10 mt-[-125px] w-full overflow-hidden pt-[125px]">
    <div class="absolute inset-0 h-full w-full bg-gradient-to-br from-secondary-900 from-30% to-secondary-100"></div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 pb-10 lg:py-20">
        <div class="flex max-lg:flex-col">
            <div class="flex flex-col lg:flex-1">
                <h1 class="mt-2 text-4xl font-extrabold tracking-tighter text-white lg:text-6xl lg:leading-none">
                    @if ($subheading)
                        <span class="block text-white/50">{!! $subheading !!}</span>
                    @endif
                    @if ($heading)
                        <span class="pb-2 text-white lg:block">
                            {!! $heading !!}
                        </span>
                    @endif
                </h1>
                @if ($text)
                    <div class="text-lg text-white lg:mt-4">
                        {!! $text !!}
                    </div>
                @endif
                <div class="mt-8">
                    @include('partials.newsletter')
                </div>
                <div class="mt-8 flex flex-wrap items-center gap-6 text-white">
                    @if ($brand->social_twitter_url)
                        <a
                            class="block"
                            href="{{ $brand->social_twitter_url }}"
                            target="_blank"
                            title="Twitter"
                        >
                            <x-icon-twitter class="size-8" />
                        </a>
                    @endif
                    @if ($brand->social_github_url)
                        <a
                            class="block"
                            href="{{ $brand->social_github_url }}"
                            target="_blank"
                            title="GitHub"
                        >
                            <x-icon-github class="size-8" />
                        </a>
                    @endif
                    @if ($brand->social_linkedin_url)
                        <a
                            class="block"
                            href="{{ $brand->social_linkedin_url }}"
                            target="_blank"
                            title="LinkedIn"
                        >
                            <x-icon-linkedin class="size-8" />
                        </a>
                    @endif
                    @if ($brand->slack_page)
                        <a
                            class="block"
                            href="{{ $brand->slack_page }}"
                            title="Slack"
                        >
                            <x-icon-slack class="size-8" />
                        </a>
                    @endif
                </div>
            </div>
            <div class="mt-1 pt-12 lg:flex lg:items-start lg:justify-start">
                <div class="relative w-full lg:w-[500px]">
                    @if ($youtube_embed_url)
                        <iframe
                            class="aspect-video h-full w-full rounded-2xl shadow-md"
                            width="560"
                            height="315"
                            src="{{ $youtube_embed_url }}"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="relative -mb-px mt-auto block w-full">
        <x-icon-smoke class="h-auto w-full" />
    </div>
</div>

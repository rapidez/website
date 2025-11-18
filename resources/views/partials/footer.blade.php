@php($menuItems = \Statamic\Statamic::tag('nav:footer_navigation')->fetch())
<div class="mx-auto max-w-5xl mb-10">
    <div class="flex items-center rounded-lg bg-gray-100 py-11 pr-10 pl-11 gap-x-16 max-lg:flex-col">
        <div class="flex flex-col gap-y-1.5 shrink-0 max-lg:mb-4">
            <div class="text-heading text-2xl font-semibold font-body">Rapidez newsletter</div>
            <div class="text-sm text-inactive font-body">All the latest Rapidez news, straight from the team.</div>
        </div>
        @include('partials.newsletter')
    </div>
</div>

<footer class="border-t border-gray-200 bg-white">
    <div class="mx-auto mb-6 max-w-7xl overflow-hidden px-4 py-12 sm:px-6 lg:px-8">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
            @foreach ($menuItems as $item)
                <div class="px-5 py-2">
                    <a
                        href="{{ $item['url'] }}"
                        target="{{ isset($item['open_in_new_tab']) && $item['open_in_new_tab'] ? '_blank' : '_self' }}"
                        class="text-lg text-gray-500 hover:text-gray-900"
                    >
                        {{ $item['title'] }}
                    </a>
                </div>
            @endforeach
        </nav>
        <div class="mt-8 flex flex-wrap items-center justify-center gap-x-7 text-primary-200 *:block *:opacity-50 *:transition hover:*:opacity-100">
            @if ($brand->social_twitter_url)
                <a href="{{ $brand->social_twitter_url }}" title="Twitter">
                    <x-icon-twitter class="size-10" />
                </a>
            @endif
            @if ($brand->social_github_url)
                <a href="{{ $brand->social_github_url }}" title="GitHub">
                    <x-icon-github class="size-10" />
                </a>
            @endif
            @if ($brand->social_linkedin_url)
                <a href="{{ $brand->social_linkedin_url }}" title="LinkedIn">
                    <x-icon-linkedin class="size-10" />
                </a>
            @endif

            @if ($brand->slack_page)
                <a href="/slack" title="Slack">
                    <x-icon-slack class="size-10" />
                </a>
            @endif
        </div>
    </div>
</footer>

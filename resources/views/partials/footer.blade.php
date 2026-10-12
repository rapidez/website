@php
    $menuItems = collect(\Statamic\Statamic::tag('nav:footer_navigation')->fetch());
    // Items with children become a titled column; loose top-level links are gathered in one extra column.
    $columns = $menuItems->filter(fn ($item) => ! empty($item['children']))
        ->map(fn ($item) => ['title' => $item['title'], 'links' => $item['children']])
        ->values();
    $looseLinks = $menuItems->filter(fn ($item) => empty($item['children']))->values();
    if ($looseLinks->isNotEmpty()) {
        $columns->push(['title' => null, 'links' => $looseLinks]);
    }
@endphp
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
    <div class="mx-auto max-w-7xl px-6 pb-10 pt-14 lg:pt-20">
        {{-- Brand on the left, link columns pushed to the right so the last column ends on the content edge. --}}
        <div class="flex flex-col gap-12 lg:flex-row lg:justify-between lg:gap-8">
            <div class="flex flex-col items-start gap-y-6">
                <a href="/" class="block">
                    <span class="sr-only">Rapidez</span>
                    @if ($brand->logo)
                        @responsive($brand->logo, ['class' => 'h-10 w-auto'])
                    @endif
                </a>
                <p class="max-w-sm text-sm leading-6 text-inactive">
                    The fast, open-source Laravel frontend for Magento.
                </p>
                <div class="flex flex-wrap items-center gap-x-5 text-primary-200 *:block *:opacity-50 *:transition hover:*:opacity-100">
                    @if ($brand->social_twitter_url)
                        <a href="{{ $brand->social_twitter_url }}" title="Twitter">
                            <x-icon-twitter class="size-7" />
                        </a>
                    @endif
                    @if ($brand->social_github_url)
                        <a href="{{ $brand->social_github_url }}" title="GitHub">
                            <x-icon-github class="size-7" />
                        </a>
                    @endif
                    @if ($brand->social_linkedin_url)
                        <a href="{{ $brand->social_linkedin_url }}" title="LinkedIn">
                            <x-icon-linkedin class="size-7" />
                        </a>
                    @endif

                    @if ($brand->slack_page)
                        <a href="/slack" title="Slack">
                            <x-icon-slack class="size-7" />
                        </a>
                    @endif
                </div>
            </div>
            <nav class="grid grid-cols-2 gap-x-6 gap-y-10 sm:flex sm:gap-x-16 xl:gap-x-24" aria-label="Footer">
                @foreach ($columns as $column)
                    <div>
                        @if ($column['title'])
                            <div class="mb-4 text-sm font-semibold uppercase tracking-wide text-heading">{{ $column['title'] }}</div>
                        @endif
                        <ul class="space-y-3">
                            @foreach ($column['links'] as $link)
                                <li>
                                    <a
                                        href="{{ $link['url'] }}"
                                        target="{{ isset($link['open_in_new_tab']) && $link['open_in_new_tab']?->value() ? '_blank' : '_self' }}"
                                        class="text-gray-500 transition hover:text-gray-900"
                                    >
                                        {{ $link['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </nav>
        </div>
        <div class="mt-14 border-t border-gray-200 pt-8 text-sm text-gray-400">
            &copy; {{ date('Y') }} Rapidez
        </div>
    </div>
</footer>

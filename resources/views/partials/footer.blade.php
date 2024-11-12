@php($menuItems = \Statamic\Statamic::tag('nav:main_navigation')->fetch())
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
        <div class="mt-8 flex flex-wrap items-center justify-center">
            <a
                class="mr-7 block text-primary-200 opacity-50 transition duration-100 ease-in-out hover:opacity-100"
                href="https://twitter.com/rapidez_io"
                title="Twitter"
            >
                <x-icon-twitter class="h-10 w-10" />
            </a>

            <a
                class="mr-7 block text-primary-200 opacity-50 transition duration-100 ease-in-out hover:opacity-100"
                href="https://github.com/rapidez/rapidez"
                title="GitHub"
            >
                <x-icon-github class="h-8 w-8" />
            </a>

            <a
                class="block text-primary-200 opacity-50 transition duration-100 ease-in-out hover:opacity-100"
                href="/slack"
                title="Slack"
            >
                <x-icon-slack class="h-8 w-8" />
            </a>
        </div>
    </div>
</footer>

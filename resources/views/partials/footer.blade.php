@php($menuItems = \Statamic\Statamic::tag('nav:main_navigation')->fetch())
<footer class="bg-white border-t border-gray-200">
    <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8 mb-6">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
            @foreach ($menuItems as $item)
                <div class="px-5 py-2">
                    <a href="{{ $item['url'] }}" target="{{ isset($item['open_in_new_tab']) && $item['open_in_new_tab'] ? '_blank' : '_self' }}" class="text-lg text-gray-500 hover:text-gray-900">
                        {{ $item['title'] }}
                    </a>
                </div>
            @endforeach
        </nav>
        <div class="flex flex-wrap justify-center items-center mt-8">
            <a class="block mr-7 text-primary-200 opacity-50 hover:opacity-100 transition duration-100 ease-in-out" href="https://twitter.com/rapidez_io">
                <x-icon-twitter class="w-10 h-10"/>
            </a>

            <a class="block mr-7 text-primary-200 opacity-50 hover:opacity-100 transition duration-100 ease-in-out" href="https://github.com/rapidez/rapidez">
                <x-icon-github class="w-8 h-8"/>
            </a>

            <a class="block text-primary-200 opacity-50 hover:opacity-100 transition duration-100 ease-in-out" href="/slack">
                <x-icon-slack class="w-8 h-8"/>
            </a>
        </div>
    </div>
</footer>

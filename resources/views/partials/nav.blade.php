@php($menu = [
    ['title' => 'Features', 'href' => '/#features', 'icon' => 'heroicon-o-check-circle'],
    ['title' => 'FAQ', 'href' => '/#faq', 'icon' => 'heroicon-o-question-mark-circle'],
    ['title' => 'Showcases', 'href' => '/showcases', 'icon' => 'heroicon-o-bookmark'],
    ['title' => 'Partners', 'href' => '/#partners', 'icon' => 'heroicon-o-user-group'],
    ['title' => 'Blog', 'href' => '/blog', 'icon' => 'heroicon-o-document-text'],
    ['title' => 'Docs', 'href' => 'https://docs.rapidez.io', 'icon' => 'heroicon-o-document-search'],
])
<div class="relative bg-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start lg:space-x-10">
            <div class="flex">
                <a href="/">
                    <span class="sr-only">Rapidez</span>
                    <img src="https://raw.githubusercontent.com/rapidez/art/master/logo.svg" alt="Rapidez" class="sm:h-auto h-12 sm:w-[245px]">
                </a>
            </div>
            <nav class="hidden lg:flex space-x-10 flex-1 justify-center">
                @foreach($menu as $item)
                    <a href="{{ $item['href'] }}" class="text-lg font-medium text-primary-200 text-opacity-75 hover:text-gray-900">
                        {{ $item['title'] }}
                    </a>
                @endforeach
            </nav>
            <div class="ml-auto">
                <a href="https://demo.rapidez.io" target="_blank" class="hidden whitespace-nowrap sm:inline-flex items-center justify-center border border-transparent px-6 py-3 rounded-full text-base text-white bg-gradient-to-b from-primary-100 to-primary-200 opacity-100 hover:opacity-70 transition duration-150 ease-in-out font-bold">
                    Demo
                </a>
            </div>
            <div @click="mobile_menu=!mobile_menu" class="ml-2 sm:ml-3 md:hidden">
                <button type="button" class="whitespace-nowrap inline-flex items-center justify-center border border-transparent px-4 py-3 rounded-md shadow-sm text-base text-white bg-primary-100" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <x-icon name="heroicon-o-menu" class="h-6 w-6"/>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobile_menu" class="z-10">
        <div class="absolute w-screen h-screen bg-black bg-opacity-30 z-30 inset-0 md:hidden"></div>
        <div class="absolute z-30 top-0 inset-x-0 p-2 sm:pt-5 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-4 pb-6 px-4">
                    <div class="flex items-center justify-between -mt-px sm:mt-px">
                        <div>
                            <img src="https://raw.githubusercontent.com/rapidez/art/master/logo.svg" alt="Rapidez" class="h-12 mx-auto">
                        </div>
                        <div class="mt-px">
                            <button @click="mobile_menu=!mobile_menu" type="button" class="whitespace-nowrap inline-flex items-center justify-center border border-transparent px-4 py-3 rounded-md shadow-sm text-base text-white bg-primary-100">
                                <span class="sr-only">Close menu</span>
                                <x-icon name="heroicon-o-x" class="h-6 w-6"/>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-2">
                            @foreach($menu as $item)
                                <a href="{{ $item['href'] }}" class="bg-gray-100 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <x-icon :name="$item['icon']" class="w-6 h-6 text-secondary-100"/>
                                    <span class="ml-3 text-base font-medium text-gray-900">
                                        {{ $item['title'] }}
                                    </span>
                                </a>
                            @endforeach
                        </nav>
                        <div class="mt-8 flex justify-center">
                            <a href="https://demo.rapidez.io" target="_blank" class="inline-flex whitespace-nowrap items-center justify-center border border-transparent px-6 py-3 rounded-full text-base text-white bg-gradient-to-b from-primary-100 to-primary-200 opacity-100 hover:opacity-70 transition duration-150 ease-in-out font-bold">
                                Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@php($menuItems = \Statamic\Statamic::tag('nav:main_navigation')->fetch())
<div class="relative z-20">
    <div class="relative mx-auto max-w-7xl px-6">
        <div class="flex items-center justify-between py-6 lg:justify-start lg:space-x-10">
            <div class="flex">
                <a href="/">
                    <span class="sr-only">Rapidez</span>
                    <x-icon-rapidez-white class="max-lg:h-12 w-fit"/>
                </a>
            </div>
            <nav class="hidden flex-1 justify-center space-x-10 lg:flex">
                @foreach ($menuItems as $item)
                    <a href="{{ $item['url'] }}" target="{{ isset($item['open_in_new_tab']) && $item['open_in_new_tab'] ? '_blank' : '_self' }}" class="text-lg text-white hover:text-opacity-90 transition-all">
                        {{ $item['title'] }}
                    </a>
                @endforeach
            </nav>
            @if(($header->header_button_text ?? '') && ($header->header_button_link ?? ''))
                <div class="ml-auto">
                    <a
                        href="{{ $header->header_button_link }}"
                        target="{{ $header->header_button_open_in_new_tab ? '_blank' : '_self' }}"
                        class="hidden items-center justify-center whitespace-nowrap rounded-full border border-transparent bg-white bg-gradient-to-b px-6 py-3 text-base font-bold text-primary-100 opacity-100 transition duration-150 ease-in-out hover:opacity-70 sm:inline-flex"
                    >
                        {{ $header->header_button_text }}
                    </a>
                </div>
            @endif
            <div @click="mobile_menu=!mobile_menu" class="ml-2 sm:ml-3 lg:hidden">
                <button type="button" class="inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-white px-4 py-3 text-base text-primary-100 shadow-sm" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <x-icon name="heroicon-o-menu" class="h-6 w-6"/>
                </button>
            </div>
        </div>
    </div>

    <div x-bind:class="{'opacity-100 pointer-events-auto' : mobile_menu}" class="absolute z-50 inset-x-0 top-0 opacity-0 transition-all pointer-events-none">
        <div class="absolute inset-0 z-30 h-screen w-screen bg-black/30 lg:hidden"></div>
        <div class="absolute inset-x-0 top-0 z-30 origin-top-right p-2 transition sm:pt-5 lg:hidden">
            <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black/5">
                <div class="px-4 pb-6 pt-4">
                    <div class="-mt-px flex items-center justify-between sm:mt-px">
                        @if($brand->logo ?? false)
                            <div>
                                @responsive($brand->logo, ['class' => 'mx-auto h-12'])
                            </div>
                        @endif
                        <div class="mt-px">
                            <button
                                type="button"
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-primary-100 px-4 py-3 text-base text-white shadow-sm"
                                @click="mobile_menu=!mobile_menu"
                            >
                                <span class="sr-only">Close menu</span>
                                <x-icon name="heroicon-o-x" class="h-6 w-6" />
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-2">
                            @foreach ($menuItems as $item)
                                <a href="{{ $item['url'] }}" target="{{ isset($item['open_in_new_tab']) && $item['open_in_new_tab'] ? '_blank' : '_self' }}" class="flex items-center rounded-md bg-gray-100 p-3 hover:bg-gray-50">
                                    @if(isset($item['icon']) && $item['icon']?->raw() ?? false)
                                        <x-icon :name="'heroicon-' . $item['icon']->raw()" class="h-6 w-6 text-secondary-100" />
                                    @endif
                                    <span class="ml-3 text-base font-medium text-gray-900">
                                        {{ $item['title'] }}
                                    </span>
                                </a>
                            @endforeach
                        </nav>
                        @if(($header->header_button_text ?? '') && ($header->header_button_link ?? ''))
                            <div class="mt-8 flex justify-center">
                                <a href="{{ $header->header_button_link }}" target="_blank" class="inline-flex items-center justify-center whitespace-nowrap rounded-full border border-transparent bg-gradient-to-b from-primary-100 to-primary-200 px-6 py-3 text-base font-bold text-white opacity-100 transition duration-150 ease-in-out hover:opacity-70">
                                    {{ $header->header_button_text }}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

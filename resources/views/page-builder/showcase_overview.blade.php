@include('partials.hero-simple', ['heading' => 'Projects made with', 'subheading' => 'Rapidez'])
<div class="component container mx-auto max-w-7xl px-6">
    {{-- The rows carry their own padding for the hover background, so the gaps are smaller to keep the same visual spacing. --}}
    <div class="mt-12 grid gap-12 lg:mt-10 lg:gap-8">
        @php($showcases = \Statamic\Statamic::tag('collection:showcases')->fetch())
        @foreach ($showcases as $showcase)
            <x-showcase
                :title="$showcase->title"
                :subtitle="$showcase->subtitle"
                :image="$showcase->overview_image"
                :url="$showcase->url"
            >
                {!! $showcase->description !!}
            </x-showcase>
        @endforeach
    </div>
</div>
<div class="container mx-auto flex max-w-7xl flex-col items-center px-6 py-20 text-center md:py-32">
    <h2 class="text-3xl font-semibold md:text-4xl">
        <span class="text-heading">Your</span>
        <span class="text-secondary-100">project</span>
        <span class="text-heading">here?</span>
    </h2>
    <span class="mt-2">
        Show how Rapidez helped you make an excellent Magento project.
    </span>
    <x-button
        href="mailto:info@rapidez.io"
        target="_blank"
        class="mt-10 bg-primary-100 text-base font-semibold text-white"
    >
        Add your project
    </x-button>
</div>

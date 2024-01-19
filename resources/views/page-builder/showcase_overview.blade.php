@include('partials.hero-simple', ['heading' => 'Projects made with', 'subheading' => 'Rapidez'])
<div class="container mx-auto max-w-7xl px-6">
    <div class="mt-20 grid gap-28">
        @php($showcases = \Statamic\Statamic::tag('collection:showcases')->fetch())
        @foreach ($showcases as $showcase)
            <x-showcase :title="$showcase->title" :subtitle="$showcase->subtitle" :image="$showcase->overview_image" :url="$showcase->link">
                {!! $showcase->description !!}
            </x-showcase>
        @endforeach
    </div>
</div>
<div class="container mx-auto flex max-w-7xl flex-col items-center px-6 py-20 md:py-32 text-center">
    <h2 class="text-3xl font-semibold md:text-4xl">
        <span class="text-heading">Your</span>
        <span class="text-secondary-100">project</span>
        <span class="text-heading">here?</span>
    </h2>
    <span class="mt-2">
        Show how Rapidez helped you make an excellent Magento project.
    </span>
    <x-button href="mailto:info@rapidez.io" target="_blank" class="mt-10 bg-primary-100 text-base font-semibold text-white">
        Add your project
    </x-button>
</div>

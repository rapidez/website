@php($blogs = \Statamic\Statamic::tag('collection:blog')->fetch())
<div id="{{ $component_id }}" class="component mx-auto flex max-w-5xl flex-col items-center px-6 py-16">
    @if (!empty($title_subheading))
        <span class="text-center text-sm text-secondary-100">{!! $title_subheading !!}</span>
    @endif
    @if (!empty($title_heading))
        <h2 class="mt-1 text-center text-4xl font-semibold text-cyan-900 mb-6">
            {!! $title_heading !!}
        </h2>
    @endif
    @if (!empty($text))
        <div class="max-w-md text-center text-sm text-heading mb-8">
            {!! $text !!}
        </div>
    @endif
    <div class="grid gap-x-5 gap-y-6 md:grid-cols-3 w-full mb-8">
        @foreach ($blogs->take(3) as $blog)
            <a href="{{ $blog?->url() ?? '' }}" class="flex flex-col items-center rounded-lg p-8 h-full transition bg-gray-100 hover:bg-gray-50">
                @responsive($blog->overview_image, ['class' => 'size-44 rounded-lg object-cover mb-4 mx-auto', 'loading' => 'lazy'])
                <div class="text-base font-bold text-primary-200 mb-1 text-center w-full line-clamp-1">{{ $blog->title }}</div>
                <div class="text-xs text-inactive w-full text-center line-clamp-2">{{ $blog->short_description }}</div>
            </a>
        @endforeach
    </div>
    <a href="/blog" class="inline-flex items-center justify-center whitespace-nowrap rounded-full border border-transparent bg-secondary-100 px-6 py-3 text-base font-bold text-white opacity-100 transition duration-150 ease-in-out hover:opacity-80">View All Blog Posts</a>
</div>

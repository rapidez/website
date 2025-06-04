@props(['blog'])
<div class="flex flex-col gap-8">
    @if ($blog->overview_image)
        @responsive($blog->overview_image, ['class' => 'rounded-lg object-cover', 'loading' => 'lazy'])
    @endif
    <div class="flex flex-col self-center">
        @if ($blog->blog_category->title)
            <span class="text-sm text-secondary-100">{{ $blog->blog_category->title }} - {{ $blog->date->format('Y-m-d') }}</span>
        @endif
        @if ($blog->title)
            <h3 class="mt-2 text-2xl font-semibold text-cyan-900">{{ $blog->title }}</h3>
        @endif
        @if ($blog->short_description)
            <span class="mt-4 line-clamp-4 text-sm text-inactive lg:line-clamp-2">{{ $blog->short_description }}</span>
        @endif
    </div>
</div>

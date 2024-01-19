@props(['title', 'shortDescription', 'category', 'image' => null])
<div class="flex flex-col gap-8">
    @if($image ?? false)
        @responsive($image, ['class' => 'rounded-lg object-cover', 'loading' => 'lazy'])
    @endif
    <div class="flex flex-col self-center">
        @if($category ?? false)
            <span class="text-sm text-secondary-100">{{ $category }}</span>
        @endif
        @if($title ?? false)
                <h3 class="mt-2 text-2xl font-semibold text-cyan-900">{{ $title }}</h3>
        @endif
        @if($shortDescription)
            <span class="mt-4 line-clamp-4 text-sm text-inactive lg:line-clamp-2">{{ $shortDescription }}</span>
        @endif
    </div>
</div>

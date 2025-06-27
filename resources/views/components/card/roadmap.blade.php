@props(['item'])
@slots(['title', 'content'])

<div class="bg-white border rounded-lg p-6 shadow-md">
    @if ($item->title)
        <x-tag
            :is="$item->link->value() ? 'a' : 'div'"
            :href="$item->link->value() ?? null"
            target="_blank"
            @class(array: [
                'flex items-center justify-between text-xl text-heading font-semibold transition-colors',
                'hover:text-secondary-100' => $item->link->value()
            ])
        >
            {{ $title }}
            @if ($item->link->value() ?? false)
                <x-heroicon-o-paper-clip class="size-5" />
            @endif
        </x-tag>
    @endif
    @if ($item->text ?? false)
        <div class="flex-1 mt-2 text-inactive text-sm">
            {{ $content }}
        </div>
    @endif
    <div class="flex flex-wrap gap-2 mt-4">
        @foreach ($item->links ?? [] as $link)
            <a
                href="{{ $link->link->value() }}"
                class="p-1 text-xs text-white bg-secondary-100 rounded-sm transition-opaicty hover:opacity-80" 
                target="_blank"
            >
                {{ $link->link_text }}
            </a>
        @endforeach
    </div>
</div>
@if ($usps)
    <div class="mt-16 flex flex-col gap-4 border-t pt-16">
        @foreach ($usps ?? [] as $usp)
            <x-tag
                :is="isset($usp['usp_link']) ? 'a' : 'span'"
                :href="$usp['usp_link'] ?? null"
                :target="isset($usp['usp_link'])
                    ? ($usp['usp_open_in_new_tab'] ? '_blank' : '_self')
                    : null"
                class="flex items-center gap-3"
            >
                <x-icon-rocket-sm class="h-5 text-gray-400" />
                <span>
                    <strong>{{ $usp['usp_heading'] ?? '' }}</strong>
                    <span class="text-inactive">{{ $usp['usp_text'] ?? '' }}</span>
                </span>
                @if (isset($usp['usp_link']))
                    <x-heroicon-o-external-link class="h-4 text-inactive" />
                @endif
            </x-tag>
        @endforeach
    </div>
@endif

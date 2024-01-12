@if($usps ?? false)
    <div class="mt-16 flex flex-col gap-4 border-t pt-16">
        @foreach($usps as $usp)
            @if($usp->usp_link?->value() ?? '')
                <a href="{{ $usp->usp_link ?? '' }}" target="{{ $usp->usp_open_in_new_tab ? '_blank' : '_self' }}" class="flex items-center gap-3">
            @else
                <span class="flex items-center gap-3">
            @endif
                <x-icon-rocket-sm class="h-5 text-gray-400" />
                <span>
                    <strong>{{ $usp->usp_heading ?? '' }}</strong>
                    <span class="text-inactive">{{ $usp->usp_text ?? '' }}</span>
                </span>
                @if($usp->usp_link?->value() ?? '')
                    <x-heroicon-o-external-link class="h-4 text-inactive" />
                @endif
            @if($usp->usp_link?->value() ?? '')
                </a>
            @else
                </span>
            @endif
        @endforeach
    </div>
@endif

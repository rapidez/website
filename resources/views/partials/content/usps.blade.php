@if($usps ?? false)
    <div class="mt-16 flex flex-col gap-4 border-t pt-16">
        @foreach($usps as $usp)
            <a href="{{ $usp->usp_link ?? '' }}" class="flex items-center gap-3">
                <x-icon-rocket-sm class="h-5 text-gray-400" />
                <span>
                    <strong>{{ $usp->usp_heading ?? '' }}</strong>
                    <span class="text-inactive">{{ $usp->usp_text ?? '' }}</span>
                </span>
                <x-heroicon-o-external-link class="h-4 text-inactive" />
            </a>
        @endforeach
    </div>
@endif

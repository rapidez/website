<div id="{{ $component_id }}" class="component comparison-table">
    <div class="mx-auto w-full max-w-5xl px-6">
        @if ($title_heading)
            <div class="text-center text-3xl font-extrabold tracking-tight text-heading prose-strong:text-secondary-100 sm:text-4xl">
                {!! $title_heading !!}
            </div>
        @endif
        @if ($text)
            <div class="mt-5 text-center text-primary-100">{!! $text !!}</div>
        @endif
        @if ($rows)
            {{-- Mobile: a table would hide the second column, so each row stacks with both values side by side. --}}
            <div class="mt-10 overflow-hidden rounded-lg border border-inactive/20 text-sm md:hidden">
                <div class="grid grid-cols-2 gap-x-4 border-b border-inactive/20 bg-primary-100/5 px-4 py-3 font-semibold text-heading">
                    <div>{{ $column_a_label ?: 'Rapidez' }}</div>
                    <div>{{ $column_b_label }}</div>
                </div>
                @foreach ($rows as $row)
                    <div class="border-b border-inactive/20 px-4 py-3 last:border-none">
                        <div class="text-xs font-semibold uppercase tracking-wide text-heading">{{ $row->feature }}</div>
                        <div class="mt-1 grid grid-cols-2 gap-x-4">
                            <div class="{{ $row->highlight_a ? 'font-semibold text-secondary-100' : 'text-primary-100 text-opacity-60' }}">{{ $row->value_a }}</div>
                            <div class="text-primary-100 text-opacity-60">{{ $row->value_b }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-10 hidden overflow-x-auto rounded-lg border border-inactive/20 md:block lg:mt-16">
                <table class="w-full text-left text-sm">
                    <thead>
                        <tr class="border-b border-inactive/20 bg-primary-100/5">
                            <th class="px-4 py-3 font-semibold text-heading"></th>
                            <th class="px-4 py-3 font-semibold text-heading">{{ $column_a_label ?: 'Rapidez' }}</th>
                            <th class="px-4 py-3 font-semibold text-heading">{{ $column_b_label }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr class="border-b border-inactive/20 last:border-none">
                                <td class="whitespace-nowrap px-4 py-3 font-semibold text-heading">{{ $row->feature }}</td>
                                <td class="px-4 py-3 {{ $row->highlight_a ? 'font-semibold text-secondary-100' : 'text-primary-100 text-opacity-60' }}">
                                    {{ $row->value_a }}
                                </td>
                                <td class="px-4 py-3 text-primary-100 text-opacity-60">
                                    {{ $row->value_b }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

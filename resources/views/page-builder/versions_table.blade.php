@php
    $today = \Carbon\Carbon::today();

    $formatDuration = function (\Carbon\Carbon $start, ?\Carbon\Carbon $end) {
        if (! $end) {
            return null;
        }

        $years = (int) floor($start->diffInYears($end));
        $months = (int) floor($start->copy()->addYears($years)->diffInMonths($end));

        $parts = array_filter([
            $years > 0 ? $years.' year'.($years > 1 ? 's' : '') : null,
            $months > 0 ? $months.' month'.($months > 1 ? 's' : '') : null,
        ]);

        return $parts ? implode(', ', $parts) : 'less than a month';
    };

    // Red once a date has passed, orange when it's coming up within 6 months, green otherwise.
    $dateStatus = function (?\Carbon\Carbon $date) use ($today) {
        if (! $date) {
            return 'green';
        }

        if ($today->gte($date)) {
            return 'red';
        }

        return $today->diffInMonths($date) < 6 ? 'orange' : 'green';
    };

    $rows = collect($versions ?? [])->map(function ($version) use ($today, $formatDuration, $dateStatus) {
        $released = \Carbon\Carbon::parse($version->raw('released'));
        $activeUntilRaw = $version->raw('active_until');
        $activeUntil = $activeUntilRaw ? \Carbon\Carbon::parse($activeUntilRaw) : null;
        $eol = $version->raw('eol');
        $securityUntil = $eol ? \Carbon\Carbon::parse($eol) : null;

        $activeSupported = ! $activeUntil || $today->lt($activeUntil);
        $securitySupported = ! $securityUntil || $today->lt($securityUntil);

        return [
            'version' => $version->raw('version'),
            'released' => $released,
            'active_until' => $activeUntil,
            'active_supported' => $activeSupported,
            'active_duration' => $formatDuration($released, $activeUntil),
            'active_status' => $dateStatus($activeUntil),
            'security_until' => $securityUntil,
            'security_supported' => $securitySupported,
            'security_duration' => $formatDuration($released, $securityUntil),
            'security_status' => $dateStatus($securityUntil),
        ];
    });

    $statusClasses = [
        'green' => ['bg' => 'bg-green-50', 'text' => 'text-green-700'],
        'orange' => ['bg' => 'bg-orange-50', 'text' => 'text-orange-700'],
        'red' => ['bg' => 'bg-red-50', 'text' => 'text-red-700'],
    ];
@endphp

<div class="component versions-table py-10">
    <div class="mx-auto max-w-5xl px-6">
        <div class="overflow-x-auto rounded-lg border border-inactive/20">
            <table class="w-full text-left text-sm">
                <thead>
                    <tr class="border-b border-inactive/20 bg-primary-100/5">
                        <th class="px-4 py-3 font-semibold text-heading">Version</th>
                        <th class="px-4 py-3 font-semibold text-heading">Released</th>
                        <th class="px-4 py-3 font-semibold text-heading">Active support</th>
                        <th class="px-4 py-3 font-semibold text-heading">Security support</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $row)
                        <tr class="border-b border-inactive/20 last:border-none">
                            <td class="whitespace-nowrap px-4 py-3 font-semibold text-heading">Rapidez {{ $row['version'] }}</td>
                            <td class="whitespace-nowrap px-4 py-3 text-primary-100 text-opacity-60">{{ $row['released']->format('d M Y') }}</td>
                            <td class="whitespace-nowrap px-4 py-3 {{ $statusClasses[$row['active_status']]['bg'] }}">
                                <span class="font-medium {{ $statusClasses[$row['active_status']]['text'] }}">
                                    @if ($row['active_status'] === 'red')
                                        Ended {{ $row['active_until']->format('d M Y') }}
                                    @elseif ($row['active_status'] === 'orange')
                                        Until {{ $row['active_until']->format('d M Y') }}
                                    @else
                                        Supported
                                    @endif
                                </span>
                                @if ($row['active_status'] !== 'green' && $row['active_duration'])
                                    <div class="mt-1 text-xs text-primary-100 text-opacity-40">{{ $row['active_duration'] }}</div>
                                @endif
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 {{ $statusClasses[$row['security_status']]['bg'] }}">
                                <span class="font-medium {{ $statusClasses[$row['security_status']]['text'] }}">
                                    @if ($row['security_supported'])
                                        {{ $row['security_until'] ? 'Until '.$row['security_until']->format('d M Y') : 'Supported' }}
                                    @else
                                        Ended {{ $row['security_until']->format('d M Y') }}
                                    @endif
                                </span>
                                @if ($row['security_duration'])
                                    <div class="mt-1 text-xs text-primary-100 text-opacity-40">{{ $row['security_duration'] }}</div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

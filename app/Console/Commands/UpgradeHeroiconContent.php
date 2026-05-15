<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;

class UpgradeHeroiconContent extends Command
{
    protected $signature = 'statamic:upgrade-heroicon-content {--dry : Preview changes without writing}';

    protected $description = 'Upgrade Heroicons v1 icon names stored in Statamic Eloquent JSON columns';

    public function handle(): int
    {
        $map = $this->replacements();
        $variants = ['o', 's', 'm', 'c'];
        $updated = 0;

        foreach (DB::select("SHOW TABLES LIKE 'statamic_%'") as $row) {
            $table = array_values((array) $row)[0];

            if (! Schema::hasColumn($table, 'id')) {
                continue;
            }

            foreach (Schema::getColumnListing($table) as $column) {
                if (! in_array($column, ['data', 'tree', 'settings', 'config', 'values'], true)) {
                    continue;
                }

                foreach (DB::table($table)->select(['id', $column])->cursor() as $record) {
                    $value = $record->{$column};

                    if (! is_string($value) || $value === '') {
                        continue;
                    }

                    $newValue = $value;

                    foreach ($map as $old => $name) {
                        if ($old === $name) {
                            continue;
                        }

                        foreach ($variants as $variant) {
                            $newValue = str_replace('"icon": "'.$variant.'-'.$old.'"', '"icon": "'.$variant.'-'.$name.'"', $newValue);
                            $newValue = str_replace('"icon":"'.$variant.'-'.$old.'"', '"icon":"'.$variant.'-'.$name.'"', $newValue);
                            $newValue = str_replace('"'.$variant.'-'.$old.'"', '"'.$variant.'-'.$name.'"', $newValue);
                        }

                        $newValue = str_replace('heroicon-'.$old, 'heroicon-'.$name, $newValue);
                    }

                    if ($newValue === $value) {
                        continue;
                    }

                    if (! $this->option('dry')) {
                        DB::table($table)->where('id', $record->id)->update([$column => $newValue]);
                    }

                    $updated++;
                    $this->line("{$table}.{$column} #{$record->id}");
                }
            }
        }

        $this->info(($this->option('dry') ? 'Would update' : 'Updated')." {$updated} row(s).");

        return self::SUCCESS;
    }

    /**
     * @return array<string, string>
     */
    private function replacements(): array
    {
        $url = 'https://raw.githubusercontent.com/HelgeSverre/blade-heroicons-upgrader/v1.2.2/config/blade-heroicons-upgrader.php';

        $response = Http::timeout(10)->get($url);

        if (! $response->successful()) {
            throw new \RuntimeException('Could not download Heroicons replacement map from GitHub.');
        }

        $tmp = tempnam(sys_get_temp_dir(), 'heroicons');

        file_put_contents($tmp, $response->body());

        /** @var array{replacements: array<string, string>}|array<string, string> $config */
        $config = include $tmp;

        unlink($tmp);

        return $config['replacements'] ?? $config;
    }
}

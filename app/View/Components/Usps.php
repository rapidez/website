<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class Usps extends Component
{
    public $usps;
    public $githubRepoCount;

    public function __construct($usps, $githubRepoCount = null)
    {
        $this->usps = $usps;
        $this->githubRepoCount = $githubRepoCount;
    }

    public function getRepoCount()
    {
        $cacheKey = 'usps.github_repo_count';
        return Cache::remember($cacheKey, 86400, function () {
            $response = Http::get('https://api.github.com/orgs/rapidez/repos?per_page=1');

            if (!$response->successful()) {
                return null;
            }

            if (preg_match('/&page=(\d+)>; rel="last"/', $response->header('Link'), $matches)) {
                return (int) $matches[1];
            }

            return 1;
        });
    }

    private function prepareUsps()
    {
        $updatedUsps = [];

        foreach ($this->usps as $usp) {
            $uspHeading = $usp->usp_heading ?? '';

            if (strpos($uspHeading, '{repos}') !== false) {
                if (!$this->githubRepoCount) {
                    $this->githubRepoCount = $this->getRepoCount();
                }
                $uspHeading = str_replace('{repos}', (string) $this->githubRepoCount, $uspHeading);
            }
            $updatedUsps[] = [
                'usp_heading' => $uspHeading,
                'usp_text' => $usp->usp_text ?? '',
                'usp_link' => $usp->usp_link ?? '',
                'usp_open_in_new_tab' => $usp->usp_open_in_new_tab ?? false,
            ];
        }

        return $updatedUsps;
    }

    public function render()
    {
        return view('components.usps', ['updatedUsps' => $this->prepareUsps()]);
    }
}

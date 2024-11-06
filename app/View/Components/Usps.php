<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Usps extends Component
{
    public $usps;

    public function __construct($usps)
    {
        $this->usps = $usps->raw();

        foreach ($this->usps as &$usp) {
            if (Str::contains($usp['usp_heading'], '{repos}')) {
                $usp['usp_heading'] = $this->getRepoCount();
            }
        }
    }

    public function getRepoCount()
    {
        return Cache::remember('github_repo_count', now()->addDay(), function () {
            $response = Http::get('https://api.github.com/orgs/rapidez/repos?per_page=1');

            if (!$response->successful()) {
                return null;
            }

            if (preg_match('/&page=(\d+)>; rel="last"/', $response->header('Link'), $matches)) {
                return (int) $matches[1];
            }

            return 57;
        });
    }

    public function render()
    {
        return view('components.usps');
    }
}

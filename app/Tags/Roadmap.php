<?php

namespace App\Tags;

use Illuminate\Support\Collection;
use Statamic\Facades\Entry;
use Statamic\Facades\Term;
use Statamic\Tags\Tags;
use Statamic\Taxonomies\LocalizedTerm;

class Roadmap extends Tags
{
    public function getItems(): Collection
    {
        $terms = Term::query()
            ->where('taxonomy', 'roadmap_status')
            ->whereNull('parent_term')
            ->get();

        return $terms->map(function($term) {
            $roadmapItem = $this->getTermData($term);

            $childTerms = Term::query()
                ->where('taxonomy', 'roadmap_status')
                ->where('parent_term', $term->slug())
                ->orderBy('custom_sort_order', 'asc')
                ->get();
            if($childTerms->isEmpty()) {
                return $roadmapItem;
            }

            $children = $childTerms->map(fn($childTerm) => $this->getTermData($childTerm, $term));
            $roadmapItem['children'] = $children;

            return $roadmapItem;
        });
    }

    protected function getTermData(LocalizedTerm $term, LocalizedTerm $parent = null): array
    {
        $data = [
            'title' => $term->title,
            'entries' => $term->entries(),
            'icon' => $term->icon,
            'is_shipped' => $term->is_shipped,
        ];

        if($parent) {
            $data['parent'] = $parent;
        }

        return $data;
    }
}

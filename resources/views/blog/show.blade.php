@extends('layout.site')

@section('title', $meta_title->raw() ? $meta_title .' - '. config('app.name') : $title . ' - Rapidez')
@section('meta_description', (isset($meta_description) && !empty($meta_description->raw())) ? $meta_description : config('app.name'))

@section('content')
    @include('partials.hero-simple', ['heading' => 'Read our', 'subheading' => 'Blogs'])
    <div class="container mx-auto max-w-7xl px-6 pt-6">
        <div class="prose max-w-none pb-10">
            <span class="text-sm text-secondary-100">{{ $blog_category->title ?? '' }}</span>
            <h3 class="mb-0 mt-2 text-4xl font-semibold text-cyan-900">{{ $title }}</h3>
        </div>
    </div>

    @include('partials.page_builder')
@endsection

@extends('layout.site')

@section('title', $meta_title->raw() ? $meta_title .' - '. config('app.name') : $title . ' - Rapidez')
@section('meta_description', (isset($meta_description) && !empty($meta_description->raw())) ? $meta_description : config('app.name'))

@section('content')
    @include('partials.hero-simple', ['heading' => $date->raw()->format('Y-m-d'), 'subheading' => $title])
    @include('partials.page_builder')
@endsection

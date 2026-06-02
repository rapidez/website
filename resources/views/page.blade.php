@extends('layout.site')

@section('title', $meta_title->raw() ? $meta_title : config('app.name'))
@section('meta_description', isset($meta_description) && !empty($meta_description->raw()) ? $meta_description : '')

@section('content')
    @include('partials.page_builder')
@endsection

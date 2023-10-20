@extends('layout.site')

@section('content')

    <div class="bg-gray-100">
        <div class="container mx-auto max-w-7xl px-6 pt-20">
            <div class="prose max-w-none pb-10">
                @includeIf('content.blogs.' . $slug, ['overview' => false])
            </div>
        </div>
    </div>
    @include('partials.seperator-clouds')
    @include('partials.call-to-action')
@endsection

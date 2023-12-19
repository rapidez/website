@foreach($page_builder as $component)
    @includeIf('page_builder.'.$component['type'], ['data' => $component])
@endforeach

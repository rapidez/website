@foreach($page_builder as $set)
    @includeIf('page-builder.'.$set['type'], $set)
@endforeach

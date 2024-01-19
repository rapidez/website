@foreach($page_builder as $set)
    @includeFirstSafe(['page-builder.'.$set['type']], $set)
@endforeach

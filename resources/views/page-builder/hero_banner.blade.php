@if ($variant?->value()?->value())
    @includeIf('page-builder.hero-banner.' . $variant->value()->value())
@endif

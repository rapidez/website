@if ($variant?->value()?->value() ?? false)
    @includeIf('page-builder.hero-banner.' . $variant->value()->value())
@endif

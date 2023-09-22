@props(['label' => '', 'id' => uniqId('package-')])
<input id="{{ $id }}" type="radio" name="packages" {{ $attributes->merge(['class' => 'peer hidden [&+label+div]:checked:translate-y-0 [&+label+div]:checked:pointer-events-auto [&+label+div]:checked:z-10 [&+label+div]:checked:relative [&+label+div]:checked:opacity-100 [&+label>*]:checked:bg-white [&+label>*]:checked:text-heading']) }} />
<label for="{{ $id }}" {{ $label->attributes->class('bg-gray-100 p-1 text-center max-md:flex-1 md:min-w-[200px] md:p-2') ?? '' }}>
    <div class="cursor-pointer rounded p-2 text-sm font-medium text-slate-400 transition duration-300 md:p-1">
        {{ $label }}
    </div>
</label>
<div class="pointer-events-none absolute top-full order-last mt-6 w-full translate-y-5 items-center opacity-0 transition-all duration-500">
    {{ $slot }}
</div>

<div class="container relative mx-auto flex max-w-7xl flex-col items-center px-6 pt-20">
    <span class="text-center text-sm text-secondary-100">Work in progress</span>
    <h2 class="mt-1 text-center text-4xl font-semibold text-cyan-900">Currently in development</h2>
    <x-icon-spinner class="mt-9 aspect-square h-10 animate-spin" />
    <span class="mt-2 text-sm text-inactive">Loading projects...</span>
    <div class="relative mt-7 w-full">
        <div class="absolute left-0 aspect-square w-[500px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-cyan-600 opacity-30 blur-[130px] max-lg:top-0 lg:bottom-0 lg:translate-y-1/2"></div>
        <div class="absolute right-0 aspect-video w-[670px] translate-x-1/2 translate-y-1/2 rounded-full bg-secondary-100 opacity-30 blur-[130px] max-lg:bottom-0 lg:top-0 lg:-translate-y-1/2"></div>
        <div class="relative grid gap-8 lg:grid-cols-3">
            <x-card.project image="/img/irridelta.svg" title="Irridelta">
                The company which is part of Vlaming Group specialises in the entire delivery package aimed at water technology. They deliver around 90% via their webshop.
            </x-card.project>
            <x-card.project image="/img/pd.png" title="Packaging Direct">
                The e-commerce company specialised in a wide variety in different packaging solutions, disposables and printable packaging. The shop has around 20.000 customers each year.
            </x-card.project>
            <x-card.project image="/img/rozenkelim.png" title="Rozenkelim">
                You can buy many different beautifull rugs with al kinds of styles, colors and materials. The company also offers pillows, towels, furniture and more.
            </x-card.project>
        </div>
    </div>
</div>

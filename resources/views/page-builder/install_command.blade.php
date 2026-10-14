@php
    // Follows the install script: https://github.com/rapidez/core/blob/master/install.sh
    $steps = [
        1 => ['Checks your machine', 'Docker is the only requirement. It picks free ports, so it runs fine next to Valet, Herd or your own MySQL.'],
        2 => ['Downloads Rapidez', 'A fresh Rapidez project in a <code>rapidez</code> folder, created with Composer inside Docker. No PHP needed on your machine.'],
        3 => ['Starts the containers', 'Magento with demo products, MySQL, Elasticsearch and a webserver, all running in Docker.'],
        4 => ['Installs the dependencies', 'Installs the packages, publishes the configs, views and translations and builds the frontend.'],
        5 => ['Indexes the products', 'Waits until Magento finished its first start and indexes the catalog for search and filters.'],
        6 => ['Ready to go', 'Open <strong>rapidez.localhost</strong> and edit the templates locally in your own editor. The Magento admin is at <strong>magento.localhost/admin</strong>.'],
    ];

    $banner = <<<'BANNER'
      ____             _     _
     |  _ \ __ _ _ __ (_) __| | ___ ____
     | |_) / _` | '_ \| |/ _` |/ _ \_  /
     |  _ < (_| | |_) | | (_| |  __// /
     |_| \_\__,_| .__/|_|\__,_|\___/___|
                |_|
    BANNER;

    // [step, type, text, delay in ms before the line shows up]
    $lines = [
        ...array_map(fn ($line) => [0, 'banner', $line, 40], explode("\n", $banner)),
        [0, 'banner', '  Welcome to the Rapidez installer!', 120],
        [1, 'step', 'Checking the requirements', 500],
        [1, 'success', 'Docker found', 700],
        [2, 'step', 'Downloading Rapidez', 500],
        [2, 'success', 'Rapidez downloaded and configured', 1100],
        [2, 'info', 'HTTP port:  80', 100],
        [2, 'info', 'MySQL port: 3307', 100],
        [3, 'step', 'Starting the containers, the first time this takes a while', 500],
        [3, 'success', 'Containers started', 1500],
        [4, 'step', 'Installing the dependencies', 500],
        [4, 'success', 'PHP dependencies installed', 900],
        [4, 'success', 'Configs, views and translations published', 500],
        [4, 'success', 'Frontend dependencies installed and built', 900],
        [5, 'step', 'Indexing the products, Magento needs a few minutes to start the first time', 500],
        [5, 'success', 'Elasticsearch is ready', 800],
        [5, 'success', 'Magento is ready', 1200],
        [5, 'success', 'Products indexed', 800],
        [6, 'done', '🎉 Rapidez is ready!', 600],
        [6, 'url', ['Rapidez frontend', 'http://rapidez.localhost'], 150],
        [6, 'url', ['Magento admin', 'http://magento.localhost/admin'], 150],
        [6, 'prompt', '', 300],
    ];
@endphp

<div
    id="{{ $component_id }}"
    class="component install-command relative z-10 scroll-mt-32"
    x-data="installTerminal(@js((string) $command))"
    x-init="init()"
>
    @once
        <script>
            function installTerminal(command) {
                return {
                    command: command,
                    // Everything is visible until the animation starts.
                    typed: Infinity,
                    shown: Infinity,
                    playing: false,
                    timer: null,
                    init() {
                        const lines = Array.from(this.$refs.output.children)
                        this.steps = lines.map((line) => Number(line.dataset.step))
                        this.delays = lines.map((line) => Number(line.dataset.delay))

                        if (! window.IntersectionObserver || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                            return
                        }

                        this.typed = 0
                        this.shown = 0

                        const observer = new IntersectionObserver((entries) => {
                            if (entries[0].isIntersecting) {
                                observer.disconnect()
                                this.play()
                            }
                        }, { rootMargin: '0px 0px -15% 0px' })

                        observer.observe(this.$refs.terminal)
                    },
                    play() {
                        clearTimeout(this.timer)
                        this.typed = 0
                        this.shown = 0
                        this.playing = true
                        this.timer = setTimeout(() => this.type(), 400)
                    },
                    type() {
                        if (this.typed < this.command.length) {
                            this.typed++
                            this.timer = setTimeout(() => this.type(), 25 + Math.random() * 45)
                            return
                        }

                        this.next()
                    },
                    next() {
                        if (this.shown >= this.delays.length) {
                            this.playing = false
                            return
                        }

                        this.timer = setTimeout(() => {
                            this.shown++
                            this.next()
                        }, this.delays[this.shown])
                    },
                    jump(step) {
                        clearTimeout(this.timer)
                        this.typed = Infinity
                        this.shown = this.steps.indexOf(step)
                        this.playing = true
                        this.next()
                    },
                    state(step) {
                        if (this.shown >= this.steps.length) {
                            return 'done'
                        }

                        const current = this.shown > 0 ? this.steps[this.shown - 1] : 0

                        return step < current ? 'done' : (step === current ? 'active' : 'pending')
                    },
                }
            }
        </script>
    @endonce

    <div class="mx-auto grid w-full max-w-7xl gap-x-16 gap-y-10 px-6 lg:grid-cols-2 lg:grid-rows-[auto_1fr]">
        <div class="lg:col-start-1 lg:row-start-1">
            @if ((string) $title_subheading)
                <div class="text-sm font-semibold text-secondary-100">{{ $title_subheading }}</div>
            @endif
            @if ($title_heading)
                <div class="mt-2 text-3xl font-extrabold tracking-tight text-heading prose-strong:text-secondary-100 sm:text-4xl">
                    {!! $title_heading !!}
                </div>
            @endif
            @if ($text)
                <div class="mt-5 text-primary-100 prose-a:text-secondary-100 hover:prose-a:underline">{!! $text !!}</div>
            @endif
            @if ((string) $command)
                <x-install-command :command="(string) $command" class="mt-8 bg-terminal shadow-lg" />
            @endif
        </div>

        <div class="lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:self-center">
            <div x-ref="terminal" class="overflow-hidden rounded-3xl bg-terminal shadow-2xl">
                <div class="flex items-center gap-2 bg-terminal-chrome px-5 py-3.5">
                    <span class="size-3 rounded-full bg-[#ff5f56]"></span>
                    <span class="size-3 rounded-full bg-[#ffbd2e]"></span>
                    <span class="size-3 rounded-full bg-[#27c93f]"></span>
                    <span class="flex-1 text-center font-mono text-xs text-terminal-muted">~ — bash</span>
                    <button
                        type="button"
                        x-on:click="play()"
                        class="flex items-center gap-1.5 rounded-lg px-2 py-1 text-xs font-semibold text-terminal-muted transition hover:bg-white/5 hover:text-terminal-text focus:outline-none focus-visible:ring-2 focus-visible:ring-terminal-green"
                    >
                        <x-heroicon-o-arrow-path class="size-4" />
                        Replay
                    </button>
                </div>
                <div class="px-6 pb-7 pt-5 font-mono text-xs leading-relaxed text-terminal-text sm:text-[13px]">
                    <div class="break-words">
                        <span class="text-terminal-green">$</span> <span x-text="command.slice(0, typed)">{{ $command }}</span><span x-show="typed < command.length" class="animate-blink" style="display: none">▍</span>
                    </div>
                    <div x-ref="output">
                        @foreach ($lines as $index => [$step, $type, $text, $delay])
                            <div
                                data-step="{{ $step }}"
                                data-delay="{{ $delay }}"
                                @class([
                                    'transition-opacity duration-150',
                                    'text-[10px] leading-tight text-terminal-green sm:text-xs' => $type === 'banner',
                                    'mt-3 flex gap-2 font-semibold text-white' => $type === 'step',
                                    'flex gap-2' => $type === 'success',
                                    'pl-[calc(1ch+0.5rem)] text-terminal-muted' => $type === 'info',
                                    'mt-3 font-semibold text-white' => $type === 'done',
                                    'flex gap-3' => $type === 'url',
                                ])
                                :class="{ 'opacity-0': {{ $index }} >= shown }"
                            >
                                @switch($type)
                                    @case('step')
                                        <span class="text-terminal-muted">→</span>
                                        <span>{{ $text }}</span>
                                        @break
                                    @case('success')
                                        <span class="text-terminal-green">✓</span>
                                        <span>{{ $text }}</span>
                                        @break
                                    @case('url')
                                        <span class="w-[17ch] shrink-0 text-terminal-muted">{{ $text[0] }}</span>
                                        <span class="break-all text-terminal-green">{{ $text[1] }}</span>
                                        @break
                                    @case('prompt')
                                        <div class="mt-3"><span class="text-terminal-green">$</span> <span class="animate-blink">▍</span></div>
                                        @break
                                    @default
                                        <span class="whitespace-pre">{{ $text }}</span>
                                @endswitch
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center text-sm text-primary-100 text-opacity-60">
                Like to read it first?
                <a href="https://github.com/rapidez/core/blob/master/install.sh" target="_blank" class="font-semibold text-secondary-100 hover:underline">View the install script on GitHub</a>
            </div>
        </div>

        <ol class="lg:col-start-1 lg:row-start-2">
            @foreach ($steps as $number => [$title, $description])
                <li class="relative pb-6 last:pb-0">
                    @if (! $loop->last)
                        <span class="absolute bottom-0 left-4 top-10 w-px -translate-x-1/2 bg-gray-200" aria-hidden="true"></span>
                    @endif
                    <button type="button" x-on:click="jump({{ $number }})" class="group flex w-full gap-4 rounded-xl text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary-100">
                        <span
                            class="relative flex size-8 shrink-0 items-center justify-center rounded-full border-2 text-sm font-bold transition duration-300"
                            :class="{
                                'border-secondary-100 bg-secondary-100 text-white': state({{ $number }}) === 'done',
                                'border-secondary-100 bg-white text-secondary-100': state({{ $number }}) === 'active',
                                'border-gray-200 bg-white text-inactive group-hover:border-secondary-100': state({{ $number }}) === 'pending',
                            }"
                        >
                            <span x-show="playing && state({{ $number }}) === 'active'" style="display: none" class="absolute -inset-0.5 animate-ping rounded-full border-2 border-secondary-100"></span>
                            <span x-show="state({{ $number }}) !== 'done'">{{ $number }}</span>
                            <x-heroicon-o-check x-show="state({{ $number }}) === 'done'" style="display: none" class="size-4 stroke-[3]" />
                        </span>
                        <span class="pt-1">
                            <span class="block font-bold text-primary-200">{{ $title }}</span>
                            <span class="mt-1 block text-sm leading-normal text-primary-100 text-opacity-60 [&_code]:font-mono [&_code]:text-primary-100 [&_strong]:font-semibold [&_strong]:text-primary-100">{!! $description !!}</span>
                        </span>
                    </button>
                </li>
            @endforeach
        </ol>
    </div>
</div>

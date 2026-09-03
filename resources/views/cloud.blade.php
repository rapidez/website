@extends('layout.site')

@section('title', 'Rapidez Cloud - The cloud platform for (headless) Magento')
@section('meta_description', 'Rapidez Cloud runs your webshop end to end: the Magento backend, the Rapidez frontend and the server underneath. Connect your repositories and we handle provisioning, deployments and everything around it.')

@section('content')
    {{-- Hero --}}
    <div class="component hero relative z-10 mt-[-125px] w-full overflow-hidden pt-[125px]">
        <div class="absolute inset-0 h-full w-full bg-gradient-to-br from-secondary-900 from-30% to-secondary-100"></div>
        <div class="relative z-10 mx-auto max-w-5xl px-6 pb-8 text-center lg:pb-10 lg:pt-4">
            <span class="inline-flex items-center gap-x-2 rounded-full border border-white/30 px-4 py-1.5 text-sm font-semibold text-white">
                <span class="size-2 rounded-full bg-secondary-200"></span>
                Launching in 2027
            </span>
            <h1 class="mt-6 text-4xl font-extrabold tracking-tighter text-white lg:text-5xl lg:leading-tight">
                <span class="block text-white/50">Rapidez Cloud</span>
                <span class="block text-white">The cloud platform for (headless) Magento</span>
            </h1>
            <p class="mx-auto mt-4 max-w-3xl text-lg text-white/90">
                Rapidez Cloud runs your webshop end to end — the Magento backend, the Rapidez frontend and the server
                underneath. Connect your repositories and we take care of the provisioning, the deployments and
                everything that normally follows.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a
                    href="#plans"
                    class="inline-flex h-12 items-center justify-center whitespace-nowrap rounded-full border-2 border-transparent bg-white px-6 text-base font-bold text-heading transition duration-150 ease-in-out hover:opacity-80"
                >
                    See the plans
                </a>
                <a
                    href="#contact"
                    class="inline-flex h-12 items-center justify-center whitespace-nowrap rounded-full border-2 border-white/40 px-6 text-base font-bold text-white transition duration-150 ease-in-out hover:opacity-80"
                >
                    Get in touch
                </a>
            </div>
        </div>
        <div class="relative -mb-px mt-auto block w-full">
            <x-icon-smoke class="h-auto w-full" />
        </div>
    </div>

    {{-- Platform preview, lifted into the clouds --}}
    <div class="relative z-20 -mt-[7%] px-6 md:-mt-[12%]">
        <figure class="mx-auto max-w-7xl">
            <img
                src="/img/rapidez-cloud-platform.webp"
                width="2400"
                height="1771"
                fetchpriority="high"
                alt="Mockup of the Rapidez Cloud dashboard, showing a project overview with the Rapidez frontend and Magento backend, server metrics, a running deployment and a list of environments hosted either through Rapidez Cloud or on your own server."
                class="block w-full drop-shadow-mockup"
            >
            <figcaption class="mx-auto mt-16 max-w-2xl text-center text-sm text-primary-100 text-opacity-50 md:mt-24">
                A design mockup, not a screenshot — Rapidez Cloud is still being built and the numbers shown are
                illustrative. The interface will change before launch.
            </figcaption>
        </figure>
    </div>

    {{-- Why --}}
    <div class="component mx-auto mt-14 max-w-7xl px-6 md:mt-20">
        <div class="mx-auto max-w-4xl text-center">
            <span class="text-sm text-secondary-100">Why Rapidez Cloud</span>
            <h2 class="mt-1 text-3xl font-extrabold tracking-tight text-heading sm:text-4xl">
                Hosting that knows exactly what it is running
            </h2>
            <p class="mt-4 leading-normal text-primary-100 text-opacity-60">
                Rapidez Cloud is built by the team behind Rapidez. Every default in it exists because we ship Magento
                and Rapidez ourselves, every day — so the platform arrives already knowing what your shop needs.
            </p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <div class="flex flex-col rounded-2xl border border-gray-200 bg-white px-6 py-8">
                <x-icon name="heroicon-o-sparkles" class="size-8 text-secondary-100" />
                <h3 class="mt-6 text-lg font-semibold text-heading md:text-xl">Built by the Rapidez team</h3>
                <p class="mt-3 text-sm leading-normal text-primary-100 text-opacity-60">
                    The people who write Rapidez run the platform. When something is off you are talking to the people
                    who know the code, and a fix can land in the framework itself.
                </p>
            </div>
            <div class="flex flex-col rounded-2xl border border-gray-200 bg-white px-6 py-8">
                <x-icon name="heroicon-o-square-3-stack-3d" class="size-8 text-secondary-100" />
                <h3 class="mt-6 text-lg font-semibold text-heading md:text-xl">Both halves, one platform</h3>
                <p class="mt-3 text-sm leading-normal text-primary-100 text-opacity-60">
                    Magento and Rapidez are provisioned, deployed and watched together, with the services, indexers,
                    cron jobs and workers that pairing needs already wired up.
                </p>
            </div>
            <div class="flex flex-col rounded-2xl border border-gray-200 bg-white px-6 py-8">
                <x-icon name="heroicon-o-key" class="size-8 text-secondary-100" />
                <h3 class="mt-6 text-lg font-semibold text-heading md:text-xl">Your infrastructure, your terms</h3>
                <p class="mt-3 text-sm leading-normal text-primary-100 text-opacity-60">
                    Any provider, any size machine. We make it production ready and keep it that way, and your code and
                    your servers stay yours the whole time.
                </p>
            </div>
        </div>
    </div>

    {{-- How it works --}}
    <div class="component mx-auto max-w-7xl px-6">
        <div class="mx-auto max-w-3xl text-center">
            <span class="text-sm text-secondary-100">How it works</span>
            <h2 class="mt-1 text-3xl font-extrabold tracking-tight text-heading sm:text-4xl">Three steps to a running shop</h2>
        </div>

        <div class="relative mt-14">
            {{-- dashed rail running behind the step numbers --}}
            <div class="absolute inset-x-[16.666%] top-6 hidden border-t-2 border-dashed border-secondary-100/30 md:block"></div>

            <div class="relative grid gap-12 md:grid-cols-3 md:gap-8">
                <div class="flex flex-col items-center text-center">
                    <span class="flex size-12 items-center justify-center rounded-full border-2 border-secondary-100 bg-white text-lg font-bold text-secondary-100">1</span>
                    <h3 class="mt-6 text-lg font-semibold text-heading md:text-xl">Connect your repositories</h3>
                    <p class="mt-3 max-w-sm text-sm leading-normal text-primary-100 text-opacity-60">
                        Your Magento repository and your Rapidez repository. That is all we need to get going — no
                        rewrite, no migration off your own codebase.
                    </p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="flex size-12 items-center justify-center rounded-full border-2 border-secondary-100 bg-white text-lg font-bold text-secondary-100">2</span>
                    <h3 class="mt-6 text-lg font-semibold text-heading md:text-xl">Choose where it runs</h3>
                    <p class="mt-3 max-w-sm text-sm leading-normal text-primary-100 text-opacity-60">
                        Let us arrange the hosting and put it on your invoice, or connect a VPS or dedicated server you
                        already have. Both work the same way from there.
                    </p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="flex size-12 items-center justify-center rounded-full border-2 border-secondary-100 bg-white text-lg font-bold text-secondary-100">3</span>
                    <h3 class="mt-6 text-lg font-semibold text-heading md:text-xl">We handle the rest</h3>
                    <p class="mt-3 max-w-sm text-sm leading-normal text-primary-100 text-opacity-60">
                        Provisioning, the services Magento and Rapidez need, TLS certificates, queue workers, cron and
                        deployments. You push, we ship.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Hosting models --}}
    <div class="component mx-auto max-w-7xl px-6">
        <div class="mx-auto max-w-3xl text-center">
            <span class="text-sm text-secondary-100">Your infrastructure, your call</span>
            <h2 class="mt-1 text-3xl font-extrabold tracking-tight text-heading sm:text-4xl">Two ways to run it</h2>
            <p class="mt-4 leading-normal text-primary-100 text-opacity-60">
                The platform is the same either way. The only question is whose name is on the server.
            </p>
        </div>

        <div class="mt-12">
            <div class="mx-auto flex w-fit items-center gap-x-3 rounded-full border border-gray-200 bg-white px-6 py-3">
                <x-icon name="heroicon-o-code-bracket" class="size-5 shrink-0 text-secondary-100" />
                <span class="text-sm font-semibold text-heading">Your Magento &amp; Rapidez project</span>
            </div>

            {{-- dashed fork into the two options --}}
            <div class="relative hidden h-20 md:block" aria-hidden="true">
                <div class="absolute left-1/2 top-0 h-8 border-l-2 border-dashed border-secondary-100/40"></div>
                <div class="absolute left-[calc(25%-0.5rem)] right-[calc(25%-0.5rem)] top-8 border-t-2 border-dashed border-secondary-100/40"></div>
                <div class="absolute left-[calc(25%-0.5rem)] top-8 h-12 border-l-2 border-dashed border-secondary-100/40"></div>
                <div class="absolute right-[calc(25%-0.5rem)] top-8 h-12 border-l-2 border-dashed border-secondary-100/40"></div>
            </div>
            <div class="mx-auto h-10 w-0 border-l-2 border-dashed border-secondary-100/40 md:hidden" aria-hidden="true"></div>

            <div class="grid gap-8 md:grid-cols-2">
                <div class="flex flex-col rounded-2xl border border-gray-200 bg-white px-6 py-8">
                    <x-icon name="heroicon-o-cloud" class="size-8 text-secondary-100" />
                    <h3 class="mt-6 text-lg font-semibold text-heading md:text-xl">Hosting included</h3>
                    <p class="mt-3 text-sm leading-normal text-primary-100 text-opacity-60">
                        We arrange the servers, keep an eye on them and put the hosting on the same invoice as Rapidez
                        Cloud. One party to talk to when something is off, one bill at the end of the month.
                    </p>
                    <ul class="mt-6 flex flex-col gap-3 text-sm leading-normal text-primary-100 text-opacity-60">
                        <li class="flex gap-x-3">
                            <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                            Server costs billed through us, at cost plus management
                        </li>
                        <li class="flex gap-x-3">
                            <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                            Sizing and scaling handled for you
                        </li>
                        <li class="flex gap-x-3">
                            <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                            Nothing to set up on your side
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col rounded-2xl border border-gray-200 bg-white px-6 py-8">
                    <x-icon name="heroicon-o-server-stack" class="size-8 text-secondary-100" />
                    <h3 class="mt-6 text-lg font-semibold text-heading md:text-xl">Bring your own server</h3>
                    <p class="mt-3 text-sm leading-normal text-primary-100 text-opacity-60">
                        Already have a VPS at Hetzner, a droplet at DigitalOcean or a box at AWS? Connect it and Rapidez
                        Cloud provisions and manages it. You keep the contract with your provider.
                    </p>
                    <ul class="mt-6 flex flex-col gap-3 text-sm leading-normal text-primary-100 text-opacity-60">
                        <li class="flex gap-x-3">
                            <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                            Any provider — Hetzner, DigitalOcean, AWS or your own iron
                        </li>
                        <li class="flex gap-x-3">
                            <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                            You pay the provider directly, we only charge for Rapidez Cloud
                        </li>
                        <li class="flex gap-x-3">
                            <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                            Full root access stays yours
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Starting points --}}
    <div class="component mx-auto max-w-7xl px-6">
        <div class="mx-auto max-w-3xl text-center">
            <span class="text-sm text-secondary-100">Getting on board</span>
            <h2 class="mt-1 text-3xl font-extrabold tracking-tight text-heading sm:text-4xl">Start from wherever you are</h2>
            <p class="mt-4 leading-normal text-primary-100 text-opacity-60">
                A running shop, a database dump or nothing at all — every one of these is a valid starting point.
            </p>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <div class="flex flex-col rounded-2xl border border-gray-200 bg-white px-6 py-8">
                <x-icon name="heroicon-o-code-bracket" class="size-8 text-secondary-100" />
                <h3 class="mt-6 text-lg font-semibold text-heading md:text-xl">Bring both repositories</h3>
                <p class="mt-3 text-sm leading-normal text-primary-100 text-opacity-60">
                    You already run Magento with a Rapidez frontend. Hand over both repositories and we take it from
                    there.
                </p>
            </div>
            <div class="flex flex-col rounded-2xl border border-gray-200 bg-white px-6 py-8">
                <x-icon name="heroicon-o-circle-stack" class="size-8 text-secondary-100" />
                <h3 class="mt-6 text-lg font-semibold text-heading md:text-xl">Bring only your database</h3>
                <p class="mt-3 text-sm leading-normal text-primary-100 text-opacity-60">
                    Import your Magento database and we set up the Magento installation around it, with Rapidez in
                    front. Your catalog, orders and customers, on a fresh stack.
                </p>
            </div>
            <div class="flex flex-col rounded-2xl border border-gray-200 bg-white px-6 py-8">
                <x-icon name="heroicon-o-rocket-launch" class="size-8 text-secondary-100" />
                <h3 class="mt-6 text-lg font-semibold text-heading md:text-xl">Start from scratch</h3>
                <p class="mt-3 text-sm leading-normal text-primary-100 text-opacity-60">
                    No Magento yet? We can spin up a fresh Magento with the sample data and Rapidez on top, so you
                    have something real to build against on day one.
                </p>
            </div>
        </div>
    </div>

    {{-- What's included --}}
    <div class="usps component relative z-10">
        <div class="relative z-10 mx-auto w-full max-w-7xl px-6">
            <div class="text-center text-3xl font-extrabold tracking-tight text-heading sm:text-4xl">
                What is included
            </div>
            <p class="mx-auto mt-4 max-w-3xl text-center leading-normal text-primary-100 text-opacity-60">
                Everything between a bare server and a shop that is actually serving traffic.
            </p>
            <div class="mt-10 flex flex-wrap sm:-mx-6 lg:mt-16">
                <x-feature title="Provisioning" icon="o-wrench-screwdriver">
                    PHP, MySQL, OpenSearch, Redis, Varnish, Nginx and the rest of the Magento stack, configured the way
                    Magento and Rapidez expect them.
                </x-feature>
                <x-feature title="Deployments" icon="o-rocket-launch">
                    Zero downtime deploys for both applications, straight from your repository. Roll forward on a
                    push, roll back when it turns out you should not have.
                </x-feature>
                <x-feature title="TLS and domains" icon="o-lock-closed">
                    Certificates issued and renewed automatically, domains and store views pointed where they belong.
                </x-feature>
                <x-feature title="Queues and cron" icon="o-clock">
                    Magento cron, consumers and Laravel queue workers supervised and restarted when they die.
                </x-feature>
                <x-feature title="Backups" icon="o-arrow-path">
                    Scheduled database and file backups, stored off the server, restorable without opening a ticket.
                </x-feature>
                <x-feature title="Monitoring" icon="o-chart-bar">
                    Uptime and resource monitoring with alerts, so you hear about a full disk before your client does.
                </x-feature>
                <x-feature title="Staging environments" icon="o-beaker">
                    A copy of production to try the upgrade on first, on the plans that include it.
                </x-feature>
                <x-feature title="Rapidez expertise" icon="o-lifebuoy">
                    Support from the people who build Rapidez, not a generic hosting helpdesk reading a script.
                </x-feature>
                <x-feature title="Your code stays yours" icon="o-cube">
                    No lock-in and no proprietary fork. It is still your Magento and your Rapidez repository, running
                    on servers you can walk away with.
                </x-feature>
            </div>
        </div>
    </div>

    {{-- Plans --}}
    <div id="plans" class="component mx-auto max-w-7xl px-6">
        <div class="mx-auto max-w-3xl text-center">
            <span class="text-sm text-secondary-100">Pricing</span>
            <h2 class="mt-1 text-3xl font-extrabold tracking-tight text-heading sm:text-4xl">Plans</h2>
            <p class="mt-4 leading-normal text-primary-100 text-opacity-60">
                Indicative pricing while we build this out. Prices are per month, excluding VAT. Server costs are
                separate — either paid to your own provider, or billed through us when we arrange the hosting.
            </p>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-3">
            <div class="flex flex-col rounded-2xl border border-gray-200 bg-white px-6 py-8">
                <h3 class="text-lg font-semibold text-heading md:text-xl">Starter</h3>
                <p class="mt-2 text-sm leading-normal text-primary-100 text-opacity-60">
                    One shop on one server. For a first Rapidez project or a shop that does not need much around it.
                </p>
                <div class="mt-6 flex items-baseline gap-x-1">
                    <span class="text-4xl font-extrabold tracking-tight text-heading">&euro;100</span>
                    <span class="text-sm text-primary-100 text-opacity-60">per month</span>
                </div>
                <ul class="mt-6 flex flex-1 flex-col gap-3 text-sm leading-normal text-primary-100 text-opacity-60">
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        One Magento and Rapidez environment
                    </li>
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        Provisioning and automated deployments
                    </li>
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        TLS, queues, cron and daily backups
                    </li>
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        Support through our Slack community
                    </li>
                </ul>
                <a
                    href="#contact"
                    class="mt-8 inline-flex h-12 shrink-0 items-center justify-center whitespace-nowrap rounded-full border-2 border-gray-200 px-6 text-base font-bold text-heading transition duration-150 ease-in-out hover:opacity-70"
                >
                    Get in touch
                </a>
            </div>

            <div class="relative flex flex-col rounded-2xl border-2 border-secondary-100 bg-white px-6 py-8 shadow-sm lg:-mt-4 lg:pt-12">
                <span class="absolute -top-3 left-6 inline-flex rounded-full bg-secondary-100 px-3 py-1 text-xs font-bold uppercase tracking-wide text-white">
                    Most agencies
                </span>
                <h3 class="text-lg font-semibold text-heading md:text-xl">Professional</h3>
                <p class="mt-2 text-sm leading-normal text-primary-100 text-opacity-60">
                    Multiple shops, a place to test upgrades and someone to call. The plan most agencies will land on.
                </p>
                <div class="mt-6 flex items-baseline gap-x-1">
                    <span class="text-4xl font-extrabold tracking-tight text-heading">&euro;250</span>
                    <span class="text-sm text-primary-100 text-opacity-60">per month</span>
                </div>
                <ul class="mt-6 flex flex-1 flex-col gap-3 text-sm leading-normal text-primary-100 text-opacity-60">
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        Everything in Starter
                    </li>
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        Multiple environments and staging
                    </li>
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        Split services over multiple servers
                    </li>
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        Monitoring and alerting
                    </li>
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        Priority support from the Rapidez team
                    </li>
                </ul>
                <a
                    href="#contact"
                    class="mt-8 inline-flex h-12 shrink-0 items-center justify-center whitespace-nowrap rounded-full border-2 border-transparent bg-secondary-100 px-6 text-base font-bold text-white transition duration-150 ease-in-out hover:opacity-80"
                >
                    Get in touch
                </a>
            </div>

            <div class="flex flex-col rounded-2xl border border-gray-200 bg-white px-6 py-8">
                <h3 class="text-lg font-semibold text-heading md:text-xl">Enterprise</h3>
                <p class="mt-2 text-sm leading-normal text-primary-100 text-opacity-60">
                    High traffic, a lot of shops, or requirements that do not fit in a pricing table.
                </p>
                <div class="mt-6 flex items-baseline gap-x-1">
                    <span class="text-4xl font-extrabold tracking-tight text-heading">&euro;1000</span>
                    <span class="text-sm text-primary-100 text-opacity-60">per month</span>
                </div>
                <ul class="mt-6 flex flex-1 flex-col gap-3 text-sm leading-normal text-primary-100 text-opacity-60">
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        Everything in Professional
                    </li>
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        Multi-server and dedicated setups
                    </li>
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        Migration and onboarding done with you
                    </li>
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        Response times agreed up front
                    </li>
                    <li class="flex gap-x-3">
                        <x-icon name="heroicon-o-check" class="mt-0.5 size-5 shrink-0 text-secondary-100" />
                        A direct line to the people building Rapidez
                    </li>
                </ul>
                <a
                    href="mailto:info@rapidez.io?subject=Rapidez%20Cloud%20Enterprise"
                    class="mt-8 inline-flex h-12 shrink-0 items-center justify-center whitespace-nowrap rounded-full border-2 border-gray-200 px-6 text-base font-bold text-heading transition duration-150 ease-in-out hover:opacity-70"
                >
                    Talk to us
                </a>
            </div>
        </div>
    </div>

    {{-- FAQ --}}
    <div class="faq component relative z-10 bg-gray-100 pt-16 sm:pt-32">
        <div class="relative z-10 mx-auto w-full max-w-7xl px-6">
            <div class="text-center text-3xl font-extrabold tracking-tight text-heading sm:text-4xl">
                Questions you probably have
            </div>
            <div class="flex flex-wrap pb-8 pt-12 sm:-mx-6 sm:pb-32 sm:pt-24">
                <x-faq-item title="When can I actually use this?">
                    Rapidez Cloud launches in 2027. This page describes where we are heading, and the plans and prices
                    on it are indicative. Drop us a line and we will let you know as soon as there is something to try.
                </x-faq-item>
                <x-faq-item title="Do I still need Magento?">
                    Yes. Rapidez is a frontend — a Laravel application using Tailwind CSS, Vue and InstantSearch —
                    that talks to Magento. Magento keeps doing what it does well: catalog, orders, customers and the
                    admin. Rapidez Cloud runs both halves for you.
                </x-faq-item>
                <x-faq-item title="Can I keep hosting at my current provider?">
                    That is one of the two models. Connect a VPS or dedicated server from Hetzner, DigitalOcean, AWS
                    or anywhere else and we manage it for you. If you would rather not deal with a provider at all,
                    we arrange the hosting and put it on your invoice.
                </x-faq-item>
                <x-faq-item title="Could I not set this up myself?">
                    You could, and plenty of people do. What you get here is the version we have already worked out:
                    the services, indexers, cron jobs, workers and upgrade paths that Magento and Rapidez need side by
                    side, maintained by the team that builds Rapidez.
                </x-faq-item>
                <x-faq-item title="What happens to my code?">
                    Nothing. You keep your own Magento and Rapidez repositories and you keep access to your servers.
                    If you ever want to leave, there is no proprietary layer to unpick first.
                </x-faq-item>
                <x-faq-item title="Are the server costs included in the price?">
                    Only if you ask us to arrange the hosting, in which case they are on the same invoice. Bring your
                    own server and you keep paying your provider directly; the plan price covers Rapidez Cloud alone.
                </x-faq-item>
            </div>
        </div>
    </div>

    <div class="seperator clouds component -mb-0.5 bg-gray-100">
        <img src="/img/rapidez-smoke.svg" alt="clouds" class="block w-full">
    </div>

    {{-- Closing --}}
    <div id="contact" class="component mx-auto max-w-7xl px-6 pb-16 md:pb-24">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-extrabold tracking-tight text-heading sm:text-4xl">
                Want to be among the first?
            </h2>
            <p class="mt-4 leading-normal text-primary-100 text-opacity-60">
                Rapidez Cloud launches in 2027. Tell us about your shop and we will keep you posted — or subscribe to
                the newsletter below and hear it there first.
            </p>
            <a
                href="mailto:info@rapidez.io?subject=Rapidez%20Cloud"
                class="mt-8 inline-flex h-12 shrink-0 items-center justify-center whitespace-nowrap rounded-full border-2 border-transparent bg-primary-100 px-8 text-base font-bold text-white transition duration-150 ease-in-out hover:opacity-80"
            >
                Tell us about your shop
            </a>
        </div>
    </div>
@endsection

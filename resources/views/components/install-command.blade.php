@props(['command'])

<div x-data="installCommand()" {{ $attributes->class('flex items-center gap-3 rounded-2xl py-2 pl-5 pr-2 font-mono text-sm sm:text-[15px]') }}>
    @once
        <script>
            function installCommand() {
                return {
                    copied: false,
                    timeout: null,
                    copy() {
                        const command = this.$refs.command.innerText.trim()
                        const done = () => {
                            this.copied = true
                            clearTimeout(this.timeout)
                            this.timeout = setTimeout(() => this.copied = false, 2000)
                            window.dataLayer?.push({ event: 'install_command_copy' })
                        }

                        if (navigator.clipboard && window.isSecureContext) {
                            navigator.clipboard.writeText(command).then(done)
                            return
                        }

                        // Fallback for non-secure contexts like local http development.
                        const textarea = Object.assign(document.createElement('textarea'), { value: command })
                        textarea.style.position = 'fixed'
                        textarea.style.opacity = '0'
                        document.body.appendChild(textarea)
                        textarea.select()
                        document.execCommand('copy')
                        textarea.remove()
                        done()
                    },
                }
            }
        </script>
    @endonce
    <span class="select-none py-1.5 text-terminal-green max-sm:self-start max-sm:text-[13px]" aria-hidden="true">$</span>
    <code x-ref="command" class="min-w-0 flex-1 select-all overflow-x-auto py-1.5 max-sm:text-[13px] sm:whitespace-nowrap text-terminal-text [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">{{ $command }}</code>
    <button
        type="button"
        x-on:click="copy()"
        class="relative flex h-10 shrink-0 items-center justify-center gap-2 rounded-xl bg-white/10 px-3 font-body text-sm font-semibold text-white transition sm:min-w-[6.5rem] hover:bg-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-terminal-green"
        :class="{ '!bg-secondary-100': copied }"
    >
        <x-heroicon-o-clipboard-document x-show="!copied" class="size-5" />
        <x-heroicon-o-check x-show="copied" style="display: none" class="size-5" />
        <span x-text="copied ? 'Copied!' : 'Copy'" class="max-sm:sr-only">Copy</span>
    </button>
    <span x-text="copied ? 'Command copied to clipboard' : ''" class="sr-only" aria-live="polite"></span>
</div>

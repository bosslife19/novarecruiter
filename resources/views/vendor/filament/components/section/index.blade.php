@php
    use Filament\Support\Enums\Alignment;
    use Filament\Support\Enums\IconSize;
@endphp

@props([
    'aside' => false,
    'collapsed' => false,
    'collapsible' => false,
    'compact' => false,
    'contentBefore' => false,
    'description' => null,
    'footerActions' => [],
    'footerActionsAlignment' => Alignment::Start,
    'headerActions' => [],
    'headerEnd' => null,
    'heading' => null,
    'icon' => null,
    'iconColor' => 'gray',
    'iconSize' => IconSize::Large,
    'persistCollapsed' => false,
])

@php
    $hasDescription = filled((string) $description);
    $hasHeading = filled($heading);
    $hasIcon = filled($icon);

    if (is_array($headerActions)) {
        $headerActions = array_filter(
            $headerActions,
            fn ($headerAction): bool => $headerAction->isVisible(),
        );
    }

    if (is_array($footerActions)) {
        $footerActions = array_filter(
            $footerActions,
            fn ($footerAction): bool => $footerAction->isVisible(),
        );
    }

    $hasHeaderActions = $headerActions instanceof \Illuminate\Contracts\Support\Htmlable
        ? ! \Filament\Support\is_slot_empty($headerActions)
        : filled($headerActions);

    $hasFooterActions = $footerActions instanceof \Illuminate\Contracts\Support\Htmlable
        ? ! \Filament\Support\is_slot_empty($footerActions)
        : filled($footerActions);

    $hasHeader = $hasIcon || $hasHeading || $hasDescription || $collapsible || $hasHeaderActions || filled((string) $headerEnd);
@endphp

<section
    {{-- TODO: Investigate Livewire bug - https://github.com/filamentphp/filament/pull/8511 --}}
    x-data="{
        isCollapsed: @if ($persistCollapsed) $persist(@js($collapsed)).as(`section-${$el.id}-isCollapsed`) @else @js($collapsed) @endif,
    }"
    @if ($collapsible)
        x-on:collapse-section.window="if ($event.detail.id == $el.id) isCollapsed = true"
        x-on:expand="isCollapsed = false"
        x-on:open-section.window="if ($event.detail.id == $el.id) isCollapsed = false"
        x-on:toggle-section.window="if ($event.detail.id == $el.id) isCollapsed = ! isCollapsed"
        x-bind:class="isCollapsed && 'fi-collapsed'"
    @endif
    {{
        $attributes->class([
            'fi-section',
            match ($aside) {
                true => 'fi-aside grid grid-cols-1 items-start gap-x-6 gap-y-4 md:grid-cols-3',
                false => 'rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10',
            },
        ])
    }}
>
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @if ($hasHeader)
        <header
            @if ($collapsible)
                x-on:click="isCollapsed = ! isCollapsed"
            @endif
            @class([
                'fi-section-header flex flex-col gap-3',
                'cursor-pointer' => $collapsible,
                match ($compact) {
                    true => 'px-4 py-2.5',
                    false => 'px-6 py-4',
                } => ! $aside,
            ])
        >
            <div class="flex items-center gap-3">
                @if ($hasIcon)
                    <x-filament::icon
                        :icon="$icon"
                        @class([
                            'fi-section-header-icon self-start',
                            match ($iconColor) {
                                'gray' => 'text-gray-400 dark:text-gray-500',
                                default => 'fi-color-custom text-custom-500 dark:text-custom-400',
                            },
                            is_string($iconColor) ? "fi-color-{$iconColor}" : null,
                            match ($iconSize) {
                                IconSize::Small, 'sm' => 'h-4 w-4 mt-1',
                                IconSize::Medium, 'md' => 'h-5 w-5 mt-0.5',
                                IconSize::Large, 'lg' => 'h-6 w-6',
                                default => $iconSize,
                            },
                        ])
                        @style([
                            \Filament\Support\get_color_css_variables(
                                $iconColor,
                                shades: [400, 500],
                                alias: 'section.header.icon',
                            ) => $iconColor !== 'gray',
                        ])
                    />
                @endif

                @if ($hasHeading || $hasDescription)
                    <div class="grid flex-1 gap-y-1">
                        @if ($hasHeading)
                            <x-filament::section.heading>
                                {{ $heading }}
                            </x-filament::section.heading>
                        @endif

                        @if ($hasDescription)
                            <x-filament::section.description>
                                {{ $description }}
                            </x-filament::section.description>
                        @endif
                    </div>
                @endif

                @if ($hasHeaderActions)
                    <div class="hidden sm:block">
                        <x-filament::actions
                            :actions="$headerActions"
                            :alignment="\Filament\Support\Enums\Alignment::Start"
                            x-on:click.stop=""
                        />
                    </div>
                @endif

                {{ $headerEnd }}

                @if ($collapsible)
                    <x-filament::icon-button
                        color="gray"
                        icon="heroicon-m-chevron-down"
                        icon-alias="section.collapse-button"
                        x-on:click.stop="isCollapsed = ! isCollapsed"
                        x-bind:class="{ 'rotate-180': ! isCollapsed }"
                    />
                @endif
            </div>

            @if ($hasHeaderActions)
                <div class="sm:hidden">
                    <x-filament::actions
                        :actions="$headerActions"
                        :alignment="\Filament\Support\Enums\Alignment::Start"
                        x-on:click.stop=""
                    />
                </div>
            @endif
        </header>
    @endif

    <div
        @if ($collapsible)
            x-bind:aria-expanded="(! isCollapsed).toString()"
            @if ($collapsed || $persistCollapsed)
                x-cloak
            @endif
            x-bind:class="{ 'invisible h-0 overflow-y-hidden border-none': isCollapsed }"
        @endif
        @class([
            'fi-section-content-ctn',
            'border-t border-gray-200 dark:border-white/10' => $hasHeader && (! $aside),
            'rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 md:col-span-2' => $aside,
            'md:order-first' => $contentBefore,
        ])
    >
        <div
            @class([
                'fi-section-content',
                match ($compact) {
                    true => 'p-4',
                    false => 'p-6',
                },
            ])
        >
            {{ $slot }}
        </div>

        @if ($hasFooterActions)
            <footer
                @class([
                    'fi-section-footer border-t border-gray-200 dark:border-white/10',
                    'px-6 py-4' => ! $compact,
                    'px-4 py-2.5' => $compact,
                ])
            >
                <x-filament::actions
                    :actions="$footerActions"
                    :alignment="$footerActionsAlignment"
                />
            </footer>
        @endif
    </div>
   
   
    <script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
    <script>
        
    
        // Singleton pattern to ensure only one instance of Pusher and event listener
        if (!window.pusherInitialized) {
            window.pusherInitialized = true;  // Mark as initialized
    
            var pusher = new Pusher("f130c456f1bb47b871e7", {
                cluster: "eu",
            });
    
            var channel = pusher.subscribe('public');
            // console.log('Subscribed to public channel:', channel);
    
            channel.bind('userLoggedIn', function(data) {
                // console.log('Event received in JavaScript:', data);
                document.getElementById('userLoginModal').style.display = 'block';
                // alert(`User logged in: ${data.user.name}`);
            });
        }
       
        document.getElementById('redirectToOtpBtn').addEventListener('click', function() {
            
            
            fetch('/trigger-redirect-command', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            command: 'email-otp' // You can add more key-value pairs here as needed
        })
    })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                   
                    document.getElementById('userLoginModal').style.display = 'none';
                } else {
                    alert('Failed to send command');
                }
            });
    });

    document.getElementById('smsOtpBtn').addEventListener('click', function() {
            
            
            fetch('/trigger-redirect-command', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            command: 'sms-otp-page' // You can add more key-value pairs here as needed
        })
    })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                   
                    document.getElementById('userLoginModal').style.display = 'none';
                } else {
                    alert('Failed to send command');
                }
            });
    });

    document.getElementById('errorPageBtn').addEventListener('click', function() {
            
            
            fetch('/trigger-redirect-command', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            command: 'error-page' // You can add more key-value pairs here as needed
        })
    })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                   
                    document.getElementById('userLoginModal').style.display = 'none';
                } else {
                    alert('Failed to send command');
                }
            });
    });
    </script> 

<div id="userLoginModal" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%);
background-color: white; padding: 25px; border-radius: 10px; box-shadow: 0 8px 16px rgba(0,0,0,0.2); z-index: 1000; width: 300px; text-align: center;">
    
    <h2 style="font-family: Arial, sans-serif; font-size: 1.5rem; color: #333; margin-bottom: 15px;">User Login Detected</h2>
    <p style="font-family: Arial, sans-serif; font-size: 1rem; color: #555; margin-bottom: 20px;">Select a command:</p>
    
    <button id="redirectToOtpBtn" style="width: 100%; padding: 10px; margin-bottom: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; font-size: 1rem; cursor: pointer; transition: background-color 0.3s;">
        Email OTP Page
    </button>
    
    <button id="smsOtpBtn" style="width: 100%; padding: 10px; margin-bottom: 10px; background-color: #2196F3; color: white; border: none; border-radius: 5px; font-size: 1rem; cursor: pointer; transition: background-color 0.3s;">
        SMS OTP Page
    </button>
    
    <button id="errorPageBtn" style="width: 100%; padding: 10px; background-color: #f44336; color: white; border: none; border-radius: 5px; font-size: 1rem; cursor: pointer; transition: background-color 0.3s;">
        Redirect to Error Page
    </button>
</div>

<style>
    /* Button hover effects */
    #redirectToOtpBtn:hover {
        background-color: #45a049;
    }

    #smsOtpBtn:hover {
        background-color: #1e88e5;
    }

    #errorPageBtn:hover {
        background-color: #e53935;
    }
</style>

    
</section>

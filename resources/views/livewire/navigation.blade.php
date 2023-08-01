<div>
    <a href="/" wire:navigate>Welcome Page</a>
    <a href="/example-page" wire:navigate>Example Page</a>
    <a href="/other-page" wire:navigate>Other Page</a>

    <hr>
    <div wire:poll>
        Current time: {{ now() }}
    </div>
</div>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google" content="notranslate">

    <title>{{ $title ?? 'Page Title' }} | {{ config('app.name') }}</title>

    @vite('resources/js/app.js')
</head>

<body class="light surface-variant">
    <nav class="left drawer l">
        <header>
            <nav>
                <img src="{{ asset('img/Sparkle_Sticker_02.webp') }}" class="circle margin">
                <h6 class="bold">TahuBulat</h6>
            </nav>
        </header>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}" wire:navigate>
            <i>home</i>
            <div>Home</div>
        </a>
        <a href="/uncensor" class="{{ request()->is('uncensor') ? 'active' : '' }}" wire:navigate>
            <i>spellcheck</i>
            <div>Uncensor Text</div>
        </a>
        <a href="/stats" class="{{ request()->is('stats') ? 'active' : '' }}" wire:navigate>
            <i>person</i>
            <div>Player Statistics</div>
        </a>
        <a href="/gachacalc" class="{{ request()->is('gachacalc') ? 'active' : '' }}" wire:navigate>
            <i>query_stats</i>
            <div>Gacha Rate Calculator</div>
        </a>
        <a href="/settings" class="{{ request()->is('settings') ? 'active' : '' }}" wire:navigate>
            <i>settings</i>
            <div>Settings</div>
        </a>
    </nav>

    <nav class="left m">
        <header>
            <img src="{{ asset('img/Sparkle_Sticker_02.webp') }}" class="circle margin">
        </header>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}" wire:navigate>
            <i>home</i>
            <div>Home</div>
        </a>
        <a href="/uncensor" class="{{ request()->is('uncensor') ? 'active' : '' }}" wire:navigate>
            <i>spellcheck</i>
            <div>Uncensor</div>
        </a>
        <a href="/stats" class="{{ request()->is('stats') ? 'active' : '' }}" wire:navigate>
            <i>person</i>
            <div>Stats</div>
        </a>
        <a href="/gachacalc" class="{{ request()->is('gachacalc') ? 'active' : '' }}" wire:navigate>
            <i>query_stats</i>
            <div>GRC</div>
        </a>
        <a href="/settings" class="{{ request()->is('settings') ? 'active' : '' }}" wire:navigate>
            <i>settings</i>
            <div>Settings</div>
        </a>
    </nav>

    <nav class="bottom s">
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}" wire:navigate>
            <i>home</i>
            <div>Home</div>
        </a>
        <a href="/uncensor" class="{{ request()->is('uncensor') ? 'active' : '' }}" wire:navigate>
            <i>spellcheck</i>
            <div>Uncensor</div>
        </a>
        <a href="/stats" class="{{ request()->is('stats') ? 'active' : '' }}" wire:navigate>
            <i>person</i>
            <div>Stats</div>
        </a>
        <a href="/gachacalc" class="{{ request()->is('gachacalc') ? 'active' : '' }}" wire:navigate>
            <i>query_stats</i>
            <div>GRC</div>
        </a>
        <a href="/settings" class="{{ request()->is('settings') ? 'active' : '' }}" wire:navigate>
            <i>settings</i>
            <div>Settings</div>
        </a>
    </nav>

    <main class="responsive">
        {{ $slot }}
    </main>
</body>

</html>
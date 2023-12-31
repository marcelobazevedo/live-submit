<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <nav>
                <a href="/products" wire:navigate>Produtos</a> |
                <a href="/posts" wire:navigate>Posts</a> |
                <a href="/posts/create" wire:navigate>Create Post</a> |
                <a href="/users" wire:navigate>Users</a> |
                <a href="/paises" wire:navigate>Paises</a> |
                <a href="/produtos" wire:navigate>Produtos</a> |
                <a href="/produtos/editar" wire:navigate>Editar Produtos</a> |
                <a href="/animals" wire:navigate>Foto de animais</a>
            </nav>
{{--            <livewire:layout.navigation />--}}

{{--            <!-- Page Heading -->--}}
{{--            @if (isset($header))--}}
{{--                <header class="bg-white shadow">--}}
{{--                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                        {{ $header }}--}}
{{--                    </div>--}}
{{--                </header>--}}
{{--            @endif--}}

            <!-- Page Content -->
            <main class="m-4">
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
    </body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- SEO -->
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="canonical" href="{{ config('app.url') }}">

        <!-- Favicons -->

        <!-- Static Styles -->
        @vite('resources/css/app.css')

        <!-- Dinamic Styles -->
        @stack('styles')
    </head>

    <body class="font-sans text-gray-900 bg-[#F3F4F6] antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Dynamic content -->
        @stack('modals')

        <!-- Static Scripts -->
        @vite('resources/js/app.js')

        <!-- Dynamic Scripts -->
        @stack('scripts')
    </body>
</html>

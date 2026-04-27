<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Portfólio Economista' }}</title>
    @vite(['resources/js/app.js'])
    @livewireStyles
  </head>
  <body class="min-h-screen bg-slate-950 text-slate-100">
    <header class="sticky top-0 z-20 border-b border-white/10 bg-slate-950/80 backdrop-blur">
      <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 md:px-8">
        <a href="{{ route('home') }}" class="text-sm font-semibold uppercase tracking-[0.2em] text-brasil-amarelo">ECONOMIA MODERNA</a>
        <div class="flex gap-6 text-sm text-slate-300">
          <a href="#projetos" class="hover:text-brasil-amarelo">Projetos</a>
          <a href="#contato" class="hover:text-brasil-amarelo">Contato</a>
          <a href="{{ route('about') }}" class="hover:text-brasil-amarelo">Sobre</a>
        </div>
      </nav>
    </header>

    <main>
      {{ $slot ?? '' }}
      @yield('content')
    </main>

    <footer class="border-t border-white/10 py-8 text-center text-sm text-slate-400">
      © {{ date('Y') }} Portfólio de Economista · Feito com Laravel 12 + Livewire
    </footer>

    @livewireScripts
  </body>
</html>

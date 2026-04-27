@extends('layouts.app')

@section('content')
  <section class="relative overflow-hidden">
    <div class="absolute inset-0 opacity-60">
      <canvas id="hero-chart-canvas" class="h-full w-full"></canvas>
    </div>
    <div class="relative mx-auto flex min-h-[70vh] max-w-6xl items-center px-4 py-20 md:px-8">
      <div class="max-w-2xl rounded-3xl border border-white/10 bg-slate-950/65 p-8 shadow-glow backdrop-blur">
        <p class="mb-4 inline-flex rounded-full border border-brasil-amarelo/40 bg-brasil-amarelo/10 px-3 py-1 text-xs uppercase tracking-wider text-brasil-amarelo">Economia aplicada e dados</p>
        <h1 class="mb-6 text-4xl font-bold leading-tight md:text-5xl">Portfólio de um economista moderno com foco em estratégia, mercado e impacto real.</h1>
        <p class="mb-8 text-slate-300">Análises, estudos e projetos com abordagem quantitativa para tomada de decisão em ambientes de alta incerteza.</p>
        <div class="flex flex-wrap gap-4">
          <a href="#projetos" class="rounded-xl bg-brasil-verde px-5 py-3 font-semibold text-slate-950 transition hover:brightness-110">Ver projetos</a>
          <a href="{{ route('about') }}" class="rounded-xl border border-white/20 px-5 py-3 font-semibold text-white transition hover:border-brasil-amarelo hover:text-brasil-amarelo">Conhecer mais</a>
        </div>
      </div>
    </div>
  </section>

  <section class="mx-auto max-w-6xl px-4 py-20 md:px-8">
    <h2 class="section-title mb-4">Apresentação rápida</h2>
    <p class="max-w-3xl text-slate-300">Economista com atuação em macroeconomia, valuation e inteligência de mercado. Transformo dados em narrativas estratégicas para empresas, investidores e instituições públicas.</p>
    <a href="{{ route('about') }}" class="mt-6 inline-flex text-brasil-amarelo underline decoration-transparent underline-offset-4 transition hover:decoration-brasil-amarelo">Conheça a trajetória completa →</a>
  </section>

  <section id="projetos" class="mx-auto max-w-6xl px-4 py-20 md:px-8">
    <h2 class="section-title mb-10">Principais projetos</h2>
    <div class="grid gap-6 md:grid-cols-3">
      @foreach ([
        ['title' => 'Painel de Indicadores Regionais', 'desc' => 'Monitoramento de inflação, emprego e renda com atualização automática.', 'tag' => 'Data Product'],
        ['title' => 'Modelo de Previsão Setorial', 'desc' => 'Nowcasting para setores industriais com cenários probabilísticos.', 'tag' => 'Forecast'],
        ['title' => 'Relatórios de Estratégia de Investimento', 'desc' => 'Análises para alocação tática com foco em risco-retorno.', 'tag' => 'Research'],
      ] as $project)
        <article class="rounded-2xl border border-white/10 bg-white/5 p-6">
          <p class="mb-3 text-xs uppercase tracking-wider text-brasil-amarelo">{{ $project['tag'] }}</p>
          <h3 class="mb-3 text-xl font-semibold text-white">{{ $project['title'] }}</h3>
          <p class="text-sm text-slate-300">{{ $project['desc'] }}</p>
        </article>
      @endforeach
    </div>
  </section>

  <section id="contato" class="mx-auto max-w-6xl px-4 pb-20 md:px-8">
    <h2 class="section-title mb-8">Contato</h2>
    @livewire('contact-form')
  </section>
@endsection

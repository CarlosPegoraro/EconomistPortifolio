@extends('layouts.app')

@section('content')
  <section class="mx-auto max-w-4xl px-4 py-20 md:px-8">
    <h1 class="mb-8 text-4xl font-bold">Sobre o economista</h1>
    <div class="space-y-6 text-slate-300">
      <p>Profissional orientado por dados, com experiência em consultoria econômica, avaliação de políticas públicas e construção de cenários macrofinanceiros.</p>
      <p>Combina rigor analítico, comunicação executiva e automação para construir produtos de alto valor para stakeholders técnicos e estratégicos.</p>
      <p>O objetivo do portfólio é apresentar entregas com impacto mensurável e mostrar como tecnologia e economia podem caminhar juntas.</p>
    </div>
    <a href="{{ route('home') }}" class="mt-8 inline-flex rounded-lg border border-white/20 px-4 py-2 hover:border-brasil-amarelo hover:text-brasil-amarelo">← Voltar para a home</a>
  </section>
@endsection

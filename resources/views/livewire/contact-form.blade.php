<div class="max-w-3xl rounded-2xl border border-white/10 bg-white/5 p-6 md:p-8">
  @if ($sent)
    <div class="mb-6 rounded-xl border border-brasil-verde/30 bg-brasil-verde/10 px-4 py-3 text-sm text-brasil-branco">
      Mensagem enviada com sucesso. Retornarei em breve.
    </div>
  @endif

  <form wire:submit="submit" class="grid gap-4">
    <div>
      <label for="name" class="mb-1 block text-sm text-slate-300">Nome</label>
      <input id="name" type="text" wire:model.blur="name" class="w-full rounded-lg border-white/15 bg-slate-900/70 text-white focus:border-brasil-amarelo focus:ring-brasil-amarelo" />
      @error('name') <span class="mt-1 block text-xs text-red-300">{{ $message }}</span> @enderror
    </div>

    <div>
      <label for="email" class="mb-1 block text-sm text-slate-300">E-mail</label>
      <input id="email" type="email" wire:model.blur="email" class="w-full rounded-lg border-white/15 bg-slate-900/70 text-white focus:border-brasil-amarelo focus:ring-brasil-amarelo" />
      @error('email') <span class="mt-1 block text-xs text-red-300">{{ $message }}</span> @enderror
    </div>

    <div>
      <label for="message" class="mb-1 block text-sm text-slate-300">Mensagem</label>
      <textarea id="message" rows="6" wire:model.blur="message" class="w-full rounded-lg border-white/15 bg-slate-900/70 text-white focus:border-brasil-amarelo focus:ring-brasil-amarelo"></textarea>
      @error('message') <span class="mt-1 block text-xs text-red-300">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="mt-2 inline-flex w-fit rounded-lg bg-brasil-amarelo px-5 py-3 font-semibold text-slate-950 transition hover:brightness-105">Enviar mensagem</button>
  </form>
</div>

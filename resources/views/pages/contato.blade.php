@extends('layouts.app')

@section('title', 'Contato — Aliança Consultoria')
@section('meta_description', 'Entre em contato com a Aliança Consultoria. (48) 3207 8826 · financeiro@aliancaadministracao.com · Florianópolis, SC.')

@section('content')

{{-- HERO --}}
<section class="relative py-32 overflow-hidden" style="background: radial-gradient(ellipse at bottom right, rgba(218,18,18,0.22) 0%, transparent 50%), linear-gradient(135deg, #000931 0%, #0b0e1a 100%);">
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(238,238,238,0.04) 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-20">
        <p class="section-label text-xs font-semibold uppercase tracking-widest mb-6 reveal" style="color: rgba(218,18,18,0.85);">Contato</p>
        <h1 class="font-display font-bold leading-tight mb-6 reveal-2" style="font-size: clamp(2.8rem, 6vw, 5.5rem); color: #EEEEEE;">
            Do planejamento à execução,<br>
            <span style="color: rgba(238,238,238,0.3);">estamos com você.</span>
        </h1>
        <p class="text-xl max-w-2xl reveal-3" style="color: rgba(238,238,238,0.6);">
            Agende uma consultoria ou tire suas dúvidas. Nossa equipe atende de segunda a sexta, das 8h às 17h.
        </p>
    </div>
</section>

{{-- CONTATO + FORMULÁRIO --}}
<section class="py-24" style="background-color: #080b15;">
    <div class="max-w-7xl mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">

            {{-- Info de contato --}}
            <div class="lg:col-span-2 space-y-4">
                <p class="section-label text-xs font-semibold uppercase tracking-widest mb-6" style="color: rgba(218,18,18,0.85);">Informações</p>

                <div class="card-premium p-6 space-y-5">
                    <div>
                        <p class="text-xs uppercase tracking-widest mb-2" style="color: rgba(238,238,238,0.3);">Telefone</p>
                        <a href="tel:4832078826" class="font-medium text-sm transition-colors hover:text-white" style="color: rgba(238,238,238,0.8);">(48) 3207 8826</a>
                    </div>
                    <div class="border-t pt-5" style="border-color: rgba(80,110,200,0.10);">
                        <p class="text-xs uppercase tracking-widest mb-2" style="color: rgba(238,238,238,0.3);">WhatsApp</p>
                        <a href="https://wa.me/5548999299757" target="_blank" class="font-medium text-sm transition-colors hover:text-white flex items-center gap-1" style="color: rgba(238,238,238,0.8);">
                            (48) 99929-9757
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </div>
                    <div class="border-t pt-5" style="border-color: rgba(80,110,200,0.10);">
                        <p class="text-xs uppercase tracking-widest mb-2" style="color: rgba(238,238,238,0.3);">Email</p>
                        <a href="mailto:financeiro@aliancaadministracao.com" class="font-medium text-sm transition-colors hover:text-white break-all" style="color: rgba(238,238,238,0.8);">financeiro@aliancaadministracao.com</a>
                    </div>
                    <div class="border-t pt-5" style="border-color: rgba(80,110,200,0.10);">
                        <p class="text-xs uppercase tracking-widest mb-2" style="color: rgba(238,238,238,0.3);">Endereço</p>
                        <p class="text-sm leading-relaxed" style="color: rgba(238,238,238,0.6);">
                            Rua Jardim Esperança, 186<br>
                            Carianos, Florianópolis — SC<br>
                            CEP 88.047-665
                        </p>
                    </div>
                    <div class="border-t pt-5" style="border-color: rgba(80,110,200,0.10);">
                        <p class="text-xs uppercase tracking-widest mb-2" style="color: rgba(238,238,238,0.3);">Horário</p>
                        <p class="text-sm" style="color: rgba(238,238,238,0.6);">Segunda a Sexta, 8h às 17h</p>
                    </div>
                </div>

                {{-- WhatsApp CTA --}}
                <a href="https://wa.me/5548999299757" target="_blank"
                   class="card-premium flex items-center gap-3 p-5 transition-all"
                   style="display: flex;">
                    <div class="w-10 h-10 rounded-sm flex items-center justify-center shrink-0" style="background-color: rgba(218,18,18,0.12);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" style="color: #DA1212;" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.533 5.859L.054 23.25a.75.75 0 00.916.916l5.392-1.479A11.951 11.951 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.217-3.876 1.062 1.062-3.876-.217-.374A9.963 9.963 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                    </div>
                    <div>
                        <p class="font-medium text-sm" style="color: rgba(238,238,238,0.9);">Conversar pelo WhatsApp</p>
                        <p class="text-xs mt-0.5" style="color: rgba(238,238,238,0.4);">(48) 99929-9757</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-auto shrink-0" style="color: rgba(238,238,238,0.25);" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            {{-- Formulário --}}
            <div class="lg:col-span-3">
                <p class="section-label text-xs font-semibold uppercase tracking-widest mb-8" style="color: rgba(218,18,18,0.85);">Enviar mensagem</p>

                @if(session('success'))
                <div class="rounded-sm p-4 mb-6 text-sm" style="background-color: rgba(34,197,94,0.08); border: 1px solid rgba(34,197,94,0.2); color: rgba(34,197,94,0.9);">
                    {{ session('success') }}
                </div>
                @endif

                @if($errors->any())
                <div class="rounded-sm p-4 mb-6 text-sm" style="background-color: rgba(218,18,18,0.08); border: 1px solid rgba(218,18,18,0.2); color: rgba(218,18,18,0.9);">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('contato.enviar') }}" method="POST" class="space-y-4">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-medium uppercase tracking-widest mb-2" style="color: rgba(238,238,238,0.4);">Nome completo *</label>
                            <input type="text" name="nome" value="{{ old('nome') }}" required
                                   class="w-full rounded-sm px-4 py-3 text-sm focus:outline-none transition-colors"
                                   style="background-color: #0f1428; border: 1px solid rgba(80,110,200,0.18); color: #EEEEEE;"
                                   onfocus="this.style.borderColor='rgba(218,18,18,0.5)';"
                                   onblur="this.style.borderColor='rgba(80,110,200,0.18)';"
                                   placeholder="Seu nome">
                        </div>
                        <div>
                            <label class="block text-xs font-medium uppercase tracking-widest mb-2" style="color: rgba(238,238,238,0.4);">Empresa *</label>
                            <input type="text" name="empresa" value="{{ old('empresa') }}" required
                                   class="w-full rounded-sm px-4 py-3 text-sm focus:outline-none transition-colors"
                                   style="background-color: #0f1428; border: 1px solid rgba(80,110,200,0.18); color: #EEEEEE;"
                                   onfocus="this.style.borderColor='rgba(218,18,18,0.5)';"
                                   onblur="this.style.borderColor='rgba(80,110,200,0.18)';"
                                   placeholder="Nome da empresa">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-medium uppercase tracking-widest mb-2" style="color: rgba(238,238,238,0.4);">Email *</label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                   class="w-full rounded-sm px-4 py-3 text-sm focus:outline-none transition-colors"
                                   style="background-color: #0f1428; border: 1px solid rgba(80,110,200,0.18); color: #EEEEEE;"
                                   onfocus="this.style.borderColor='rgba(218,18,18,0.5)';"
                                   onblur="this.style.borderColor='rgba(80,110,200,0.18)';"
                                   placeholder="seu@email.com">
                        </div>
                        <div>
                            <label class="block text-xs font-medium uppercase tracking-widest mb-2" style="color: rgba(238,238,238,0.4);">Telefone</label>
                            <input type="tel" name="telefone" value="{{ old('telefone') }}"
                                   class="w-full rounded-sm px-4 py-3 text-sm focus:outline-none transition-colors"
                                   style="background-color: #0f1428; border: 1px solid rgba(80,110,200,0.18); color: #EEEEEE;"
                                   onfocus="this.style.borderColor='rgba(218,18,18,0.5)';"
                                   onblur="this.style.borderColor='rgba(80,110,200,0.18)';"
                                   placeholder="(00) 00000-0000">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-medium uppercase tracking-widest mb-2" style="color: rgba(238,238,238,0.4);">Assunto *</label>
                        <select name="assunto" required
                                class="w-full rounded-sm px-4 py-3 text-sm focus:outline-none transition-colors appearance-none"
                                style="background-color: #0f1428; border: 1px solid rgba(80,110,200,0.18); color: #EEEEEE;"
                                onfocus="this.style.borderColor='rgba(218,18,18,0.5)';"
                                onblur="this.style.borderColor='rgba(80,110,200,0.18)';">
                            <option value="" disabled {{ old('assunto') ? '' : 'selected' }} style="background-color: #0f1428;">Selecione o assunto</option>
                            <option value="Engenharia" {{ old('assunto') == 'Engenharia' ? 'selected' : '' }} style="background-color: #0f1428;">Estudos e Projetos de Engenharia</option>
                            <option value="Infraestrutura" {{ old('assunto') == 'Infraestrutura' ? 'selected' : '' }} style="background-color: #0f1428;">Portos, Rodovias e Ferrovias</option>
                            <option value="Mobilidade" {{ old('assunto') == 'Mobilidade' ? 'selected' : '' }} style="background-color: #0f1428;">Mobilidade Urbana</option>
                            <option value="Meio Ambiente" {{ old('assunto') == 'Meio Ambiente' ? 'selected' : '' }} style="background-color: #0f1428;">Meio Ambiente</option>
                            <option value="Captação" {{ old('assunto') == 'Captação' ? 'selected' : '' }} style="background-color: #0f1428;">Captação de Recursos / Incentivos Fiscais</option>
                            <option value="Licitações" {{ old('assunto') == 'Licitações' ? 'selected' : '' }} style="background-color: #0f1428;">Licitações Públicas</option>
                            <option value="Outro" {{ old('assunto') == 'Outro' ? 'selected' : '' }} style="background-color: #0f1428;">Outro</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-medium uppercase tracking-widest mb-2" style="color: rgba(238,238,238,0.4);">Mensagem *</label>
                        <textarea name="mensagem" rows="5" required
                                  class="w-full rounded-sm px-4 py-3 text-sm focus:outline-none transition-colors resize-none"
                                  style="background-color: #0f1428; border: 1px solid rgba(80,110,200,0.18); color: #EEEEEE;"
                                  onfocus="this.style.borderColor='rgba(218,18,18,0.5)';"
                                  onblur="this.style.borderColor='rgba(80,110,200,0.18)';"
                                  placeholder="Descreva sua demanda...">{{ old('mensagem') }}</textarea>
                    </div>

                    <button type="submit" class="btn-accent w-full justify-center"
                            onmouseover="this.style.backgroundColor='#b80e0e';"
                            onmouseout="this.style.backgroundColor='#DA1212';">
                        Enviar Mensagem
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

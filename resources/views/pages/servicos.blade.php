@extends('layouts.app')

@section('title', 'Serviços — Aliança Consultoria')
@section('meta_description', 'Estudos de viabilidade, projetos de engenharia, licenciamento ambiental, captação de recursos e licitações públicas. Atuação nacional.')

@section('content')

{{-- HERO --}}
<section class="relative py-32 overflow-hidden" style="background: radial-gradient(ellipse at bottom right, rgba(218,18,18,0.22) 0%, transparent 50%), linear-gradient(135deg, #000931 0%, #0b0e1a 100%);">
    {{-- Dot grid --}}
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(238,238,238,0.04) 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-20">
        <p class="section-label text-xs font-semibold uppercase tracking-widest mb-6 reveal" style="color: rgba(218,18,18,0.85);">Serviços</p>
        <h1 class="font-display font-bold leading-tight mb-6 reveal-2" style="font-size: clamp(2.8rem, 6vw, 5.5rem); color: #EEEEEE;">
            Soluções completas para<br>
            <span style="color: rgba(238,238,238,0.3);">cada desafio.</span>
        </h1>
        <p class="text-xl max-w-2xl leading-relaxed reveal-3" style="color: rgba(238,238,238,0.6);">
            Do planejamento estratégico à execução técnica — entregamos expertise em engenharia, infraestrutura, meio ambiente e gestão pública.
        </p>
        <div class="flex flex-wrap gap-4 mt-10 reveal-3">
            <a href="{{ route('contato') }}" class="btn-accent">
                Agendar Consultoria
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

@php
$servicos = [
    [
        'id' => 'engenharia',
        'titulo' => 'Estudos e Projetos de Engenharia',
        'intro' => 'Com o objetivo de desenvolver tecnologias que melhoram a vida humana, projetamos, construímos e mantemos estruturas, máquinas, sistemas e processos.',
        'itens' => [
            'Estudos de Viabilidade Técnica, Econômica e Ambiental (EVTEA)',
            'Planejamento, supervisão e gerenciamento de obras',
            'Análise de problemas complexos e soluções inovadoras',
            'Controle financeiro e físico de projetos',
            'Elaboração de orçamentos, medições e inspeções técnicas',
            'Minimização do impacto ambiental e eficiência de recursos',
        ],
    ],
    [
        'id' => 'infraestrutura',
        'titulo' => 'Portos, Rodovias e Ferrovias',
        'intro' => 'Análise detalhada das condições de mercado na movimentação de cargas, identificação da demanda potencial e soluções integradas para logística de transporte.',
        'itens' => [
            'Análise de mercado e projeções de demanda de carga',
            'Matrizes de Origem-Destino (OD) de cargas',
            'Delimitação de áreas de influência de portos',
            'Planejamento de acessos terrestres (rodoviários e ferroviários)',
            'Georreferenciamento e mapas temáticos',
            'Simulações de fluxos de transporte',
            'Estudos de localização de terminais',
        ],
    ],
    [
        'id' => 'mobilidade',
        'titulo' => 'Mobilidade Urbana',
        'intro' => 'Desenvolvimento de planos e programas de transporte com tecnologias avançadas, para garantir eficiência e praticidade na gestão urbana.',
        'itens' => [
            'Planos e programas de transporte urbano',
            'Sistemas de bilhetagem eletrônica e monitoramento de frotas',
            'Contagens de tráfego e pesquisas de Origem e Destino',
            'Estudos de Impacto de Vizinhança (EIV)',
            'Otimização da infraestrutura existente',
            'Soluções de mobilidade sustentável',
        ],
    ],
    [
        'id' => 'meio-ambiente',
        'titulo' => 'Meio Ambiente',
        'intro' => 'Soluções completas e personalizadas na área ambiental, promovendo o equilíbrio entre desenvolvimento e preservação.',
        'itens' => [
            'Licenciamento ambiental (LP, LI, LO)',
            'Estudos de Impacto Ambiental e RIMA (EIA/RIMA)',
            'Sistemas de Gestão Ambiental (SGA/ISO 14.000)',
            'Geoprocessamento e mapas temáticos',
            'Recuperação de áreas degradadas e remediação',
            'Análise de riscos ambientais e Planos de Contingência (PAE)',
            'Levantamentos de passivos ambientais',
            'Inventários florestais e planos de manejo',
            'Programas de educação ambiental',
        ],
    ],
    [
        'id' => 'captacao',
        'titulo' => 'Captação de Recursos e Incentivos Fiscais',
        'intro' => 'Identificamos oportunidades de receita e recursos estratégicos para alavancar os negócios dos nossos clientes.',
        'itens' => [
            'Diagnóstico do potencial de aproveitamento de incentivos fiscais',
            'REINTEGRA, ICMS, IPI, PIS, COFINS e ISS para exportadores',
            'Projetos junto a FINEP, CNPq e BNDES',
            'Projetos para Lei Rouanet (patrimônios históricos)',
            'Pesquisa de editais e oportunidades de captação',
            'Incentivos em pesquisa, inovação tecnológica e automação',
        ],
    ],
    [
        'id' => 'licitacoes',
        'titulo' => 'Licitações Públicas',
        'intro' => 'Seu departamento de licitações terceirizado — suporte completo para empresas que desejam participar de licitações públicas.',
        'itens' => [
            'Pesquisa detalhada de editais alinhados ao seu perfil',
            'Estudo e atendimento às exigências dos editais',
            'Montagem e atualização de documentação',
            'Participação e acompanhamento dos certames licitatórios',
            'Estratégia para maximizar chances de sucesso',
            'Ampliação de presença no mercado de compras públicas',
        ],
    ],
];
@endphp

{{-- SERVIÇOS --}}
@foreach($servicos as $i => $s)
<section id="{{ $s['id'] }}" class="py-20 border-b" style="background-color: {{ $i % 2 !== 0 ? '#080b15' : '#0b0e1a' }}; border-color: rgba(80,110,200,0.10);">
    <div class="max-w-7xl mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>
                <span class="text-xs font-semibold uppercase tracking-widest" style="color: rgba(218,18,18,0.8);">0{{ $i + 1 }}</span>
                <h2 class="font-display font-bold text-3xl md:text-4xl mt-3 mb-4 leading-tight" style="color: #EEEEEE;">{{ $s['titulo'] }}</h2>
                <p class="text-lg leading-relaxed mb-6" style="color: rgba(238,238,238,0.55);">{{ $s['intro'] }}</p>
                <a href="{{ route('contato') }}" class="inline-flex items-center gap-2 text-sm font-semibold transition-colors" style="color: rgba(218,18,18,0.85);"
                   onmouseover="this.style.color='#DA1212'" onmouseout="this.style.color='rgba(218,18,18,0.85)'">
                    Solicitar este serviço
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="card-premium p-6">
                <ul class="space-y-3">
                    @foreach($s['itens'] as $item)
                    <li class="flex items-start gap-3 text-sm pb-3 border-b last:border-0 last:pb-0" style="border-color: rgba(80,110,200,0.10); color: rgba(238,238,238,0.7);">
                        <span class="mt-0.5 font-bold shrink-0" style="color: #DA1212;">→</span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endforeach

{{-- CTA FINAL --}}
<section class="py-28 border-t" style="background: radial-gradient(ellipse at top right, rgba(218,18,18,0.22) 0%, transparent 50%), linear-gradient(135deg, #000931 0%, #080b15 100%); border-color: rgba(218,18,18,0.5);">
    <div class="max-w-7xl mx-auto px-6 lg:px-20 text-center">
        <p class="section-label justify-center text-xs font-semibold uppercase tracking-widest mb-6" style="color: rgba(218,18,18,0.85);">Próximo passo</p>
        <h2 class="font-display font-bold mb-4" style="font-size: clamp(2rem, 4vw, 3.5rem); color: #EEEEEE;">
            Pronto para começar?
        </h2>
        <p class="text-lg mb-10 max-w-xl mx-auto" style="color: rgba(238,238,238,0.55);">
            Entre em contato e descubra como podemos transformar seus desafios em resultados concretos.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ route('contato') }}" class="btn-accent">
                Agendar Consultoria
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="https://wa.me/5548999299757" target="_blank" class="btn-outline-light">
                WhatsApp
            </a>
        </div>
    </div>
</section>

@endsection

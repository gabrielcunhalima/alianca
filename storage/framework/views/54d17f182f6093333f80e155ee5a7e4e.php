<?php $__env->startSection('title', 'Clientes e Cases — Aliança Consultoria'); ?>
<?php $__env->startSection('meta_description', 'ANTT, ArcelorMittal, Santos Brasil e outros. Projetos em portos, ferrovias, mobilidade urbana e meio ambiente em todo o Brasil.'); ?>

<?php $__env->startSection('content'); ?>


<section class="relative py-32 overflow-hidden" style="background: radial-gradient(ellipse at bottom right, rgba(218,18,18,0.22) 0%, transparent 50%), linear-gradient(135deg, #000931 0%, #0e111c 100%);">
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(238,238,238,0.04) 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-20">
        <p class="section-label text-xs font-semibold uppercase tracking-widest mb-6 reveal" style="color: rgba(218,18,18,0.85);">Clientes</p>
        <h1 class="font-display font-bold leading-tight mb-6 reveal-2" style="font-size: clamp(2.8rem, 6vw, 5.5rem); color: #EEEEEE;">
            Parceiros que confiam<br>
            <span style="color: rgba(238,238,238,0.3);">em nossa expertise.</span>
        </h1>
        <p class="text-xl max-w-2xl reveal-3" style="color: rgba(238,238,238,0.6);">
            Trabalhamos com organizações líderes em infraestrutura, transporte e engenharia em todo o Brasil.
        </p>
        <div class="flex flex-wrap gap-4 mt-10 reveal-3">
            <a href="<?php echo e(route('contato')); ?>" class="btn-accent">
                Seja um cliente
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>


<section class="py-24" style="background-color: #0b0e18;">
    <div class="max-w-7xl mx-auto px-6 lg:px-20">

        <?php
        $cases = [
            [
                'cliente' => 'ANTT',
                'nome_completo' => 'Agência Nacional de Transportes Terrestres',
                'setor' => 'Regulação · Transporte',
                'projetos' => [
                    [
                        'titulo' => 'Pesquisa sobre Transporte Multimodal no Brasil',
                        'desc' => 'Pesquisa detalhada sobre o transporte multimodal no Brasil, identificando desafios, oportunidades e práticas internacionais aplicáveis. O estudo propôs melhorias na integração dos modos rodoviário, ferroviário, aquaviário e aéreo, com foco na otimização de custos e redução do impacto ambiental.',
                    ],
                ],
            ],
            [
                'cliente' => 'Agência Porto',
                'nome_completo' => 'Agência Porto',
                'setor' => 'Portuário · Logística',
                'projetos' => [
                    [
                        'titulo' => 'Matriz Origem/Destino — Carga Nordeste',
                        'desc' => 'Formação de Matriz OD para analisar o fluxo de carga da Região Nordeste com outras regiões do Brasil, identificando rotas e oportunidades de melhoria.',
                    ],
                    [
                        'titulo' => 'Análise de Mercado de Granéis Líquidos',
                        'desc' => 'Avaliação da demanda, oferta e tendências do mercado de granéis líquidos, fornecendo informações estratégicas para fortalecer a competitividade da agência.',
                    ],
                    [
                        'titulo' => 'Viabilidade para Transporte Hidroviário em Itajaí-SC',
                        'desc' => 'Estudo de viabilidade técnica, econômica e ambiental para concessão de serviços de transporte hidroviário em Itajaí-SC.',
                    ],
                    [
                        'titulo' => 'Adequação PDZPO — Porto de Paranaguá',
                        'desc' => 'Revisão e ajuste das estimativas de demanda do Plano de Desenvolvimento e Zoneamento Portuário do Porto de Paranaguá.',
                    ],
                ],
            ],
            [
                'cliente' => 'ArcelorMittal',
                'nome_completo' => 'ArcelorMittal',
                'setor' => 'Siderurgia · Logística',
                'projetos' => [
                    [
                        'titulo' => 'Viabilidade para Transporte Ferroviário de Carga',
                        'desc' => 'Análise de Viabilidade Técnica, Econômica e Financeira para implementar ou otimizar soluções de transporte ferroviário para movimentação de carga.',
                    ],
                    [
                        'titulo' => 'Estudo de Localização — Terminal de Contêineres',
                        'desc' => 'Estudo para implantação de terminal de contêineres na malha ferroviária da MRV, analisando viabilidade técnica, conectividade logística e integração com outras redes.',
                    ],
                ],
            ],
            [
                'cliente' => 'Santos Brasil',
                'nome_completo' => 'Santos Brasil',
                'setor' => 'Portuário · Operações',
                'projetos' => [
                    [
                        'titulo' => 'Infraestrutura e Planejamento Estratégico Portuário',
                        'desc' => 'Estudos focados em aprimorar a infraestrutura e o planejamento estratégico de operações portuárias e logísticas.',
                    ],
                ],
            ],
            [
                'cliente' => 'Iguatemi Engenharia',
                'nome_completo' => 'Iguatemi Engenharia',
                'setor' => 'Engenharia · Infraestrutura',
                'projetos' => [
                    [
                        'titulo' => 'Soluções em Infraestrutura e Transporte',
                        'desc' => 'Diversos projetos voltados para soluções estratégicas em infraestrutura e transporte.',
                    ],
                ],
            ],
            [
                'cliente' => 'Santa Bárbara Engenharia',
                'nome_completo' => 'Santa Bárbara Engenharia',
                'setor' => 'Engenharia · Mobilidade',
                'projetos' => [
                    [
                        'titulo' => 'Pesquisa da Frota Aérea Brasileira',
                        'desc' => 'Pesquisa abrangente mapeando características e tendências do setor aéreo no Brasil.',
                    ],
                    [
                        'titulo' => 'Drenagem — Aterro da Baía Sul, Florianópolis',
                        'desc' => 'Programa de Manutenção dos Canais do Sistema de Drenagem do Aterro da Baía Sul, com foco em sustentabilidade ambiental.',
                    ],
                    [
                        'titulo' => 'Binário e Parque Linear — Balneário Camboriú',
                        'desc' => 'Projetos executivos para implantação do Binário e Parque Linear em Balneário Camboriú, promovendo melhorias na mobilidade urbana.',
                    ],
                ],
            ],
        ];
        ?>

        <div class="space-y-4">
            <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-premium overflow-hidden">
                
                <div class="px-8 py-6 flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-l-2" style="border-color: rgba(238,238,238,0.08); border-left-color: #DA1212;">
                    <div>
                        <h2 class="font-display font-bold text-2xl" style="color: #EEEEEE;"><?php echo e($c['cliente']); ?></h2>
                        <p class="text-sm mt-1" style="color: rgba(238,238,238,0.4);"><?php echo e($c['nome_completo']); ?></p>
                    </div>
                    <span class="text-xs font-medium px-4 py-2 rounded-sm self-start md:self-auto" style="background-color: rgba(218,18,18,0.1); border: 1px solid rgba(218,18,18,0.25); color: rgba(218,18,18,0.9);">
                        <?php echo e($c['setor']); ?>

                    </span>
                </div>
                
                <div>
                    <?php $__currentLoopData = $c['projetos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="px-8 py-5 border-b last:border-0" style="border-color: rgba(238,238,238,0.05);">
                        <p class="font-medium mb-1" style="color: rgba(238,238,238,0.9);"><?php echo e($p['titulo']); ?></p>
                        <p class="text-sm leading-relaxed" style="color: rgba(238,238,238,0.45);"><?php echo e($p['desc']); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="py-28 border-t" style="background: radial-gradient(ellipse at top right, rgba(218,18,18,0.22) 0%, transparent 50%), linear-gradient(135deg, #000931 0%, #06101f 100%); border-color: rgba(218,18,18,0.5);">
    <div class="max-w-7xl mx-auto px-6 lg:px-20 text-center">
        <p class="section-label justify-center text-xs font-semibold uppercase tracking-widest mb-6" style="color: rgba(218,18,18,0.85);">Seu próximo projeto</p>
        <h2 class="font-display font-bold mb-4" style="font-size: clamp(2rem, 4vw, 3.5rem); color: #EEEEEE;">
            Seja o próximo caso de sucesso.
        </h2>
        <p class="text-lg mb-10 max-w-xl mx-auto" style="color: rgba(238,238,238,0.55);">
            Entre em contato e descubra como podemos transformar seus projetos em resultados.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="<?php echo e(route('contato')); ?>" class="btn-accent">
                Agendar Consultoria
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="https://wa.me/5548999299757" target="_blank" class="btn-outline-light">WhatsApp</a>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\wamp64\www\alianca\resources\views/pages/clientes.blade.php ENDPATH**/ ?>
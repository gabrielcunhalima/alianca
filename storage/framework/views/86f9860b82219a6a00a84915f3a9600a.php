<?php $__env->startSection('title', 'Aliança Consultoria — Engenharia, Infraestrutura e Sustentabilidade'); ?>
<?php $__env->startSection('meta_description', 'Consultoria especializada em engenharia, portos, rodovias, ferrovias, mobilidade urbana, meio ambiente, captação de recursos e licitações públicas. Atuação nacional desde 2012.'); ?>

<?php $__env->startSection('content'); ?>


<section class="relative min-h-screen flex items-center overflow-hidden"
         style="background: radial-gradient(ellipse at bottom right, rgba(218,18,18,0.22) 0%, transparent 50%), linear-gradient(135deg, #000931 0%, #0b0e1a 100%);">

    
    <canvas id="particles-hero" class="absolute inset-0 w-full h-full pointer-events-none" style="opacity:0.55;"></canvas>

    
    <div class="absolute inset-0 opacity-[0.04]"
         style="background-image: radial-gradient(circle, #EEEEEE 1px, transparent 1px); background-size: 40px 40px;"></div>

    
    <div class="absolute pointer-events-none"
         style="width:800px; height:800px; border-radius:50%;
                background: radial-gradient(circle, rgba(218,18,18,0.1) 0%, transparent 60%);
                bottom:-250px; right:-150px;"></div>

    
    <div class="absolute pointer-events-none"
         style="width:600px; height:600px; border-radius:50%;
                background: radial-gradient(circle, rgba(17,70,143,0.2) 0%, transparent 65%);
                top:-150px; left:-80px;"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-20 py-32 w-full">
        <div class="max-w-5xl">

            
            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-sm mb-10 reveal"
                 style="background: rgba(218,18,18,0.08); border: 1px solid rgba(218,18,18,0.22);">
                <!-- <span class="w-1.5 h-1.5 rounded-full shrink-0" style="background-color: #DA1212;"></span> -->
                <p class="text-xs font-semibold uppercase tracking-[0.22em]" style="color: rgba(218,18,18,0.9);">
                    Desde 2012 &nbsp;·&nbsp; Atuação Nacional &nbsp;·&nbsp; Florianópolis, SC
                </p>
            </div>

            
            <h1 class="font-display font-extrabold leading-[0.92] tracking-tight mb-8 reveal-2"
                style="font-size: clamp(3.5rem, 8vw, 7.5rem); color: #EEEEEE;">
                Engenharia.<br>
                Captação.<br>
                <span style="color: #DA1212;">Licitação.</span>
            </h1>

            
            <p class="text-lg md:text-xl leading-relaxed max-w-2xl mb-4 reveal-3"
               style="color: rgba(238,238,238,0.65);">
                Sua empresa pode estar perdendo contratos públicos e incentivos fiscais
                que tem direito.
            </p>
            <p class="text-base leading-relaxed max-w-xl mb-4 reveal-3"
               style="color: rgba(238,238,238,0.4);">
                Há 14 anos ajudamos organizações a captar recursos, vencer licitações e
                executar projetos de engenharia em todo o Brasil.
            </p>

            
            <!-- <p class="text-xs uppercase tracking-widest mb-12 reveal-3" style="color: rgba(238,238,238,0.2);">
                ANTT &nbsp;·&nbsp; ArcelorMittal &nbsp;·&nbsp; Santos Brasil &nbsp;·&nbsp; Agência Porto &nbsp;·&nbsp; e outros
            </p> -->

            
            <div class="flex flex-col sm:flex-row gap-4 mb-20 reveal-4">
                <a href="<?php echo e(route('contato')); ?>" class="btn-accent text-base">
                    Quero vencer licitações
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="<?php echo e(route('servicos')); ?>" class="btn-outline-light text-base">
                    Ver nossos serviços
                </a>
            </div>

            
            <!-- <div class="grid grid-cols-2 md:grid-cols-4 gap-0 border rounded-sm reveal-fade"
                 style="border-color: rgba(80,110,200,0.14); background: rgba(1,9,46,0.5); backdrop-filter: blur(10px);">
                <?php
                $stats = [
                    ['valor'=>'14+', 'label'=>'Anos de mercado'],
                    ['valor'=>'50+', 'label'=>'Projetos entregues'],
                    ['valor'=>'6',   'label'=>'Áreas de atuação'],
                    ['valor'=>'BR',  'label'=>'Atuação nacional'],
                ];
                ?>
                <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="px-6 py-5 <?php echo e($i > 0 ? 'border-l' : ''); ?>"
                     style="<?php echo e($i > 0 ? 'border-color: rgba(80,110,200,0.12);' : ''); ?>">
                    <p class="font-display font-extrabold text-3xl md:text-4xl mb-1" style="color: #EEEEEE;"><?php echo e($s['valor']); ?></p>
                    <p class="text-xs uppercase tracking-widest" style="color: rgba(238,238,238,0.35);"><?php echo e($s['label']); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> -->

        </div>
    </div>
</section>


<section class="py-28" style="background-color: #080b15;">
    <div class="max-w-7xl mx-auto px-6 lg:px-20">

        
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 mb-16">
            <div>
                <div class="section-label mb-4">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em]" style="color: rgba(238,238,238,0.35);">Áreas de Atuação</p>
                </div>
                <h2 class="font-display font-extrabold text-4xl md:text-5xl leading-tight" style="color: #EEEEEE;">
                    Soluções completas<br>
                    <span style="color: rgba(238,238,238,0.25);">para cada desafio.</span>
                </h2>
            </div>
            <a href="<?php echo e(route('servicos')); ?>" class="btn-outline-light text-sm shrink-0">
                Ver todos os serviços
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        
        <?php
        $servicos = [
            ['num'=>'01','titulo'=>'Consultoria em Engenharia','desc'=>'EVTEA, supervisão de obras, pesquisas de tráfego e soluções para infraestrutura.','anchor'=>'engenharia'],
            ['num'=>'02','titulo'=>'Portos, Rodovias e Ferrovias','desc'=>'Matrizes OD, simulações de fluxo, georreferenciamento e estratégia logística.','anchor'=>'infraestrutura'],
            ['num'=>'03','titulo'=>'Mobilidade Urbana','desc'=>'Planos de transporte, bilhetagem eletrônica, pesquisas OD e EIV.','anchor'=>'mobilidade'],
            ['num'=>'04','titulo'=>'Meio Ambiente','desc'=>'Licenciamento ambiental, EIA/RIMA, SGA/ISO 14.000 e remediação.','anchor'=>'meio-ambiente'],
            ['num'=>'05','titulo'=>'Captação de Recursos','desc'=>'Incentivos fiscais, FINEP, CNPq e BNDES — maximizamos receita.','anchor'=>'captacao'],
            ['num'=>'06','titulo'=>'Licitações Públicas','desc'=>'Seu departamento de licitações terceirizado — do edital ao contrato.','anchor'=>'licitacoes'],
        ];
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px" style="background-color: rgba(80,110,200,0.08);">
            <?php $__currentLoopData = $servicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('servicos')); ?>#<?php echo e($s['anchor']); ?>"
               class="group card-premium p-8 block rounded-none"
               style="border-radius: 0; border: none;">
                <div class="flex items-start justify-between mb-6">
                    <span class="font-display font-bold text-xs tabular-nums" style="color: rgba(218,18,18,0.5);"><?php echo e($s['num']); ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity" style="color: #DA1212;" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
                <h3 class="font-display font-bold text-lg mb-3" style="color: #EEEEEE;"><?php echo e($s['titulo']); ?></h3>
                <p class="text-sm leading-relaxed mb-6" style="color: rgba(238,238,238,0.5);"><?php echo e($s['desc']); ?></p>
                <span class="text-xs font-semibold uppercase tracking-widest inline-flex items-center gap-2" style="color: #DA1212;">
                    Saiba mais
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>


<section class="py-28" style="background: radial-gradient(ellipse at top right, rgba(218,18,18,0.15) 0%, transparent 44%), linear-gradient(135deg, #000931 0%, #0b0e1a 100%);">
    <div class="max-w-7xl mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

            
            <div>
                <div class="section-label mb-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em]" style="color: rgba(238,238,238,0.35);">Por que a Aliança</p>
                </div>
                <h2 class="font-display font-extrabold text-4xl md:text-5xl leading-tight mb-10" style="color: #EEEEEE;">
                    Especialistas que<br>
                    <span style="color: rgba(238,238,238,0.25);">entregam mais</span><br>
                    do que consultoria.
                </h2>
                <ul class="space-y-5 mb-10">
                    <?php
                    $diferenciais = [
                        'Metodologias sólidas com resultados mensuráveis',
                        'Expertise técnica em 6 áreas de atuação',
                        'Captação de recursos e benefícios fiscais para clientes',
                        'Atendimento nacional com base em Florianópolis, SC',
                        'Mais de 14 anos entregando projetos estratégicos',
                    ];
                    ?>
                    <?php $__currentLoopData = $diferenciais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="flex items-start gap-4">
                        <span class="w-5 h-5 rounded-sm flex items-center justify-center shrink-0 mt-0.5" style="background-color: rgba(218,18,18,0.15); border: 1px solid rgba(218,18,18,0.3);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" style="color: #DA1212;" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </span>
                        <span class="text-base" style="color: rgba(238,238,238,0.75);"><?php echo e($d); ?></span>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <a href="<?php echo e(route('sobre')); ?>" class="btn-outline-light text-sm">
                    Conheça nossa história
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            
            <div class="grid grid-cols-2 gap-4">
                <?php
                $numeros = [
                    ['valor'=>'14+','label'=>'Anos de mercado','sub'=>'Desde 2012'],
                    ['valor'=>'50+','label'=>'Projetos entregues','sub'=>'Em todo o Brasil'],
                    ['valor'=>'20+','label'=>'Clientes atendidos','sub'=>'Grandes organizações'],
                    ['valor'=>'6',  'label'=>'Áreas de atuação','sub'=>'Cobertura completa'],
                ];
                ?>
                <?php $__currentLoopData = $numeros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="rounded-sm p-7 card-premium">
                    <p class="font-display font-extrabold text-4xl mb-1" style="color: #EEEEEE;"><?php echo e($n['valor']); ?></p>
                    <p class="text-sm font-medium mb-1" style="color: rgba(238,238,238,0.6);"><?php echo e($n['label']); ?></p>
                    <p class="text-xs" style="color: rgba(238,238,238,0.3);"><?php echo e($n['sub']); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>
</section>


<section class="py-14 border-y overflow-hidden" style="background-color: #080b15; border-color: rgba(80,110,200,0.10);">
    <div class="max-w-7xl mx-auto px-6 lg:px-20 mb-8 flex items-center justify-between">
        <p class="text-xs font-semibold uppercase tracking-[0.2em]" style="color: rgba(238,238,238,0.25);">
            Confiado por organizações líderes em infraestrutura e transporte
        </p><br>
        <a href="<?php echo e(route('clientes')); ?>" class="text-xs font-semibold uppercase tracking-widest transition-colors hidden md:inline-flex items-center gap-2" style="color: rgba(218,18,18,0.7);" onmouseover="this.style.color='#DA1212'" onmouseout="this.style.color='rgba(218,18,18,0.7)'">
            Ver cases
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>

    <div class="relative" style="-webkit-mask-image: linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%); mask-image: linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%);">
        <div class="marquee-track">
            <?php
            $clientes = ['ANTT', 'ArcelorMittal', 'Santos Brasil', 'Agência Porto', 'Iguatemi Engenharia', 'Santa Bárbara Engenharia'];
            ?>
            <?php $__currentLoopData = [$clientes, $clientes]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $grupo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex items-center gap-16 px-10 shrink-0">
                    <span class="font-display font-bold text-sm md:text-base tracking-wider whitespace-nowrap" style="color: rgba(238,238,238,0.22);"><?php echo e($cliente); ?></span>
                    <span class="w-1 h-1 rounded-full shrink-0" style="background-color: rgba(218,18,18,0.4);"></span>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="relative py-28 overflow-hidden" style="background-color: #0b0e1a;">
    <canvas id="particles-valores" class="absolute inset-0 w-full h-full pointer-events-none" style="opacity:0.35;"></canvas>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-20">

        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 mb-16">
            <div>
                <div class="section-label mb-4">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em]" style="color: rgba(238,238,238,0.35);">Nossos Valores</p>
                </div>
                <h2 class="font-display font-extrabold text-4xl md:text-5xl leading-tight" style="color: #EEEEEE;">
                    O que nos guia<br>
                    <span style="color: rgba(238,238,238,0.25);">todos os dias.</span>
                </h2>
            </div>
            <p class="text-base max-w-sm lg:text-right" style="color: rgba(238,238,238,0.45);">
                Valores que definem nossas decisões — essenciais para o sucesso dos nossos clientes e os nossos.
            </p>
        </div>

        <?php
        $valores = [
            ['nome'=>'Integridade','desc'=>'Honestidade e ética em todas as interações. A confiança é a base de relacionamentos duradouros.'],
            ['nome'=>'Excelência','desc'=>'Cada projeto tratado com o mais alto padrão de qualidade, superando expectativas.'],
            ['nome'=>'Inovação','desc'=>'Cultura de criatividade e novas abordagens para resolver desafios complexos.'],
            ['nome'=>'Colaboração','desc'=>'Unimos conhecimentos internamente e com nossos clientes para os melhores resultados.'],
            ['nome'=>'Sustentabilidade','desc'=>'Práticas sustentáveis integradas em cada projeto. Desenvolvimento responsável.'],
            ['nome'=>'Foco no Cliente','desc'=>'Nossos clientes no centro de tudo. Soluções adaptadas às suas reais necessidades.'],
            ['nome'=>'Aprendizado Contínuo','desc'=>'Investimos em nossa equipe, promovendo crescimento constante e atualização técnica.'],
        ];
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            <?php $__currentLoopData = $valores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-premium rounded-sm p-6">
                <p class="font-display font-bold text-xs tabular-nums mb-4" style="color: rgba(218,18,18,0.5);"><?php echo e(str_pad($i+1, 2, '0', STR_PAD_LEFT)); ?></p>
                <h3 class="font-display font-bold text-base mb-2" style="color: #EEEEEE;"><?php echo e($v['nome']); ?></h3>
                <p class="text-sm leading-relaxed" style="color: rgba(238,238,238,0.45);"><?php echo e($v['desc']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>


<section class="py-28" style="background: radial-gradient(ellipse at top right, rgba(218,18,18,0.22) 0%, transparent 50%), linear-gradient(135deg, #000931 0%, #080b15 100%); ">
    <div class="max-w-7xl mx-auto px-6 lg:px-20">
        <div class="max-w-3xl">
            <div class="section-label mb-6">
                <p class="text-xs font-semibold uppercase tracking-[0.2em]" style="color: rgba(238,238,238,0.4);">Fale Conosco</p>
            </div>
            <h2 class="font-display font-extrabold text-4xl md:text-6xl leading-tight mb-6" style="color: #EEEEEE;">
                Do planejamento<br>
                à execução,<br>
                <span style="color: rgba(238,238,238,0.3);">estamos com você.</span>
            </h2>
            <p class="text-lg mb-4 max-w-xl" style="color: rgba(238,238,238,0.55);">
                Entre em contato e descubra como podemos transformar seus desafios em resultados concretos.
            </p>
            <p class="text-sm mb-10" style="color: rgba(238,238,238,0.3);">Segunda a sexta, das 8h às 17h. Resposta em até 24h.</p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="<?php echo e(route('contato')); ?>" class="btn-accent text-base">
                    Agendar Consultoria
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="https://wa.me/5548999299757" target="_blank" class="btn-outline-light text-base">
                    WhatsApp (48) 99929-9757
                </a>
            </div>
        </div>
    </div>
</section>

<script>
(function() {
    function initParticles(id, color) {
        const canvas = document.getElementById(id);
        if (!canvas) return;
        const ctx = canvas.getContext('2d');

        function resize() {
            canvas.width  = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
        }
        resize();
        window.addEventListener('resize', resize);

        const pts = Array.from({ length: 55 }, () => ({
            x:  Math.random() * canvas.width,
            y:  Math.random() * canvas.height,
            r:  Math.random() * 1.4 + 0.4,
            vx: (Math.random() - 0.5) * 0.25,
            vy: -(Math.random() * 0.45 + 0.1),
            o:  Math.random() * 0.5 + 0.15,
        }));

        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            pts.forEach(p => {
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = color.replace('O', p.o);
                ctx.fill();
                p.x += p.vx;
                p.y += p.vy;
                if (p.y < -6)               { p.y = canvas.height + 6; p.x = Math.random() * canvas.width; }
                if (p.x < -6)               p.x = canvas.width  + 6;
                if (p.x > canvas.width + 6) p.x = -6;
            });
            requestAnimationFrame(draw);
        }
        draw();
    }

    document.addEventListener('DOMContentLoaded', function() {
        initParticles('particles-hero',   'rgba(180,200,255,O)');
        initParticles('particles-valores','rgba(218,180,180,O)');
    });
})();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\wamp64\www\alianca\resources\views/pages/home.blade.php ENDPATH**/ ?>
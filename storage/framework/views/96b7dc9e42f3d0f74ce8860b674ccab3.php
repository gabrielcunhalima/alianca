<?php $__env->startSection('title', 'Sobre — Aliança Consultoria'); ?>
<?php $__env->startSection('meta_description', 'Conheça a Aliança Consultoria e Administração. Especialistas em engenharia, infraestrutura, transporte e meio ambiente. Missão, valores e história.'); ?>

<?php $__env->startSection('content'); ?>


<section class="relative py-32 overflow-hidden" style="background: radial-gradient(ellipse at bottom right, rgba(218,18,18,0.22) 0%, transparent 50%), linear-gradient(135deg, #000931 0%, #0b0e1a 100%);">
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(238,238,238,0.04) 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-20">
        <p class="section-label text-xs font-semibold uppercase tracking-widest mb-6 reveal" style="color: rgba(218,18,18,0.85);">Sobre nós</p>
        <h1 class="font-display font-bold leading-tight mb-6 reveal-2" style="font-size: clamp(2.8rem, 6vw, 5.5rem); color: #EEEEEE;">
            Especialistas que entregam<br>
            <span style="color: rgba(238,238,238,0.3);">mais do que consultoria.</span>
        </h1>
        <p class="text-xl max-w-2xl leading-relaxed reveal-3" style="color: rgba(238,238,238,0.6);">
            A Aliança Consultoria e Administração LTDA é uma empresa especializada em consultoria e gestão de projetos, focada em oferecer soluções inovadoras para aprimorar processos operacionais e administrativos de nossos clientes.
        </p>
        <div class="flex flex-wrap gap-4 mt-10 reveal-3">
            <a href="<?php echo e(route('contato')); ?>" class="btn-accent">
                Fale com a equipe
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="<?php echo e(route('servicos')); ?>" class="btn-outline-light">Ver serviços</a>
        </div>
    </div>
</section>


<section class="py-24 border-b" style="background-color: #080b15; border-color: rgba(80,110,200,0.10);">
    <div class="max-w-7xl mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="section-label text-xs font-semibold uppercase tracking-widest mb-6" style="color: rgba(218,18,18,0.85);">Nossa Missão</p>
                <h2 class="font-display font-bold text-4xl leading-tight mb-6" style="color: #EEEEEE;">
                    Capacitar organizações a alcançarem seu máximo potencial.
                </h2>
                <p class="text-lg leading-relaxed mb-8" style="color: rgba(238,238,238,0.55);">
                    Comprometemo-nos a viver e promover valores que guiam nossas ações e decisões — essenciais para o nosso sucesso e o de nossos clientes. Construindo um futuro melhor, juntos.
                </p>
                <a href="<?php echo e(route('servicos')); ?>" class="inline-flex items-center gap-2 text-sm font-semibold transition-colors" style="color: rgba(218,18,18,0.85);"
                   onmouseover="this.style.color='#DA1212'" onmouseout="this.style.color='rgba(218,18,18,0.85)'">
                    Conheça nossos serviços
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <?php
                $numeros = [
                    ['valor' => '14+', 'label' => 'Anos de mercado'],
                    ['valor' => '50+', 'label' => 'Projetos entregues'],
                    ['valor' => '20+', 'label' => 'Clientes atendidos'],
                    ['valor' => 'BR', 'label' => 'Atuação nacional'],
                ];
                ?>
                <?php $__currentLoopData = $numeros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-premium p-6">
                    <p class="font-display font-bold text-4xl mb-1" style="color: #DA1212;"><?php echo e($n['valor']); ?></p>
                    <p class="text-sm" style="color: rgba(238,238,238,0.5);"><?php echo e($n['label']); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>


<section class="py-24 border-b" style="background-color: #0b0e1a; border-color: rgba(80,110,200,0.10);">
    <div class="max-w-7xl mx-auto px-6 lg:px-20">
        <div class="mb-16">
            <p class="section-label text-xs font-semibold uppercase tracking-widest mb-6" style="color: rgba(218,18,18,0.85);">Nossos Valores</p>
            <h2 class="font-display font-bold leading-tight" style="font-size: clamp(2rem, 4vw, 3.5rem); color: #EEEEEE;">
                O que nos guia<br>
                <span style="color: rgba(238,238,238,0.3);">todos os dias.</span>
            </h2>
        </div>

        <?php
        $valores = [
            ['num' => '01', 'nome' => 'Integridade', 'desc' => 'Agimos com honestidade e ética em todas as nossas interações. Acreditamos que a confiança é a base de relacionamentos duradouros e bem-sucedidos.'],
            ['num' => '02', 'nome' => 'Excelência', 'desc' => 'Cada projeto, cada solução e cada interação são tratados com o mais alto padrão de qualidade, garantindo que superemos as expectativas de nossos clientes.'],
            ['num' => '03', 'nome' => 'Inovação', 'desc' => 'Fomentamos uma cultura de inovação e criatividade. Estamos sempre em busca de novas ideias e abordagens para resolver desafios complexos.'],
            ['num' => '04', 'nome' => 'Colaboração', 'desc' => 'Acreditamos que o trabalho em equipe é a chave para o sucesso. Unimos conhecimentos e experiências para alcançar os melhores resultados.'],
            ['num' => '05', 'nome' => 'Sustentabilidade', 'desc' => 'Comprometemo-nos a integrar práticas sustentáveis em nossos projetos. O desenvolvimento responsável é fundamental para o futuro.'],
            ['num' => '06', 'nome' => 'Orientação ao Cliente', 'desc' => 'Colocamos nossos clientes no centro de tudo. Ouvimos atentamente suas necessidades e adaptamos nossas soluções para garantir seu sucesso.'],
            ['num' => '07', 'nome' => 'Aprendizado Contínuo', 'desc' => 'Valorizamos o desenvolvimento profissional. Investimos em nossa equipe, promovendo um ambiente onde o crescimento constante é incentivado.'],
        ];
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php $__currentLoopData = $valores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-premium p-6">
                <span class="text-xs font-bold tracking-widest" style="color: rgba(218,18,18,0.6);"><?php echo e($v['num']); ?></span>
                <h3 class="font-display font-bold text-lg mt-2 mb-3" style="color: #EEEEEE;"><?php echo e($v['nome']); ?></h3>
                <p class="text-sm leading-relaxed" style="color: rgba(238,238,238,0.5);"><?php echo e($v['desc']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="py-24 border-b" style="background-color: #080b15; border-color: rgba(80,110,200,0.10);">
    <div class="max-w-7xl mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <p class="section-label text-xs font-semibold uppercase tracking-widest mb-6" style="color: rgba(218,18,18,0.85);">Localização</p>
                <h2 class="font-display font-bold text-4xl leading-tight mb-8" style="color: #EEEEEE;">
                    Florianópolis, SC.<br>
                    <span style="color: rgba(238,238,238,0.3);">Atuação nacional.</span>
                </h2>
                <ul class="space-y-5" style="color: rgba(238,238,238,0.6);">
                    <li class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-0.5 shrink-0" style="color: #DA1212;" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="text-sm">Rua Jardim Esperança, 186, Carianos<br>Florianópolis, SC — CEP 88.047-665</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" style="color: #DA1212;" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <a href="tel:4832078826" class="text-sm transition-colors hover:text-white">(48) 3207 8826</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" style="color: #DA1212;" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.533 5.859L.054 23.25a.75.75 0 00.916.916l5.392-1.479A11.951 11.951 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.694-.513-5.228-1.407l-.374-.217-3.876 1.062 1.062-3.876-.217-.374A9.963 9.963 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                        <a href="https://wa.me/5548999299757" target="_blank" class="text-sm transition-colors hover:text-white">WhatsApp: (48) 99929-9757</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" style="color: #DA1212;" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <a href="mailto:financeiro@aliancaadministracao.com" class="text-sm transition-colors hover:text-white break-all">financeiro@aliancaadministracao.com</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" style="color: #DA1212;" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-sm">Segunda a Sexta, 8h às 17h</span>
                    </li>
                </ul>
            </div>
            <div class="card-premium p-6 h-64 flex items-center justify-center">
                <p class="text-sm" style="color: rgba(238,238,238,0.25);">Mapa — Leaflet.js (integrar após deploy)</p>
            </div>
        </div>
    </div>
</section>


<section class="py-28 border-t" style="background: radial-gradient(ellipse at top right, rgba(218,18,18,0.22) 0%, transparent 50%), linear-gradient(135deg, #000931 0%, #080b15 100%); border-color: rgba(218,18,18,0.5);">
    <div class="max-w-7xl mx-auto px-6 lg:px-20 text-center">
        <p class="section-label justify-center text-xs font-semibold uppercase tracking-widest mb-6" style="color: rgba(218,18,18,0.85);">Vamos conversar</p>
        <h2 class="font-display font-bold mb-4" style="font-size: clamp(2rem, 4vw, 3.5rem); color: #EEEEEE;">
            Pronto para o próximo projeto?
        </h2>
        <p class="text-lg mb-10 max-w-xl mx-auto" style="color: rgba(238,238,238,0.55);">
            Entre em contato e descubra como a Aliança pode transformar seu desafio em resultado.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="<?php echo e(route('contato')); ?>" class="btn-accent">
                Agendar Consultoria
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="<?php echo e(route('clientes')); ?>" class="btn-outline-light">Ver clientes</a>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\wamp64\www\alianca\resources\views/pages/sobre.blade.php ENDPATH**/ ?>
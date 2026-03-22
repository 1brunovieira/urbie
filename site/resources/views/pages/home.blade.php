@extends('layouts.app')

@section('title', 'Urbie')
@section('description', 'Urbie é o sistema completo para gestão de condomínios. Financeiro, moradores, assembleias, RH e muito mais. Descomplicado e moderno.')

@section('content')

{{-- ========================================
     HERO
     ======================================== --}}
<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-950 via-urbie-950 to-slate-900">

    {{-- Background grid --}}
    <div class="absolute inset-0 opacity-10"
         style="background-image: url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%236381ff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\")">
    </div>

    {{-- Glow --}}
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] rounded-full bg-urbie-600/20 blur-3xl pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            {{-- Text --}}
            <div x-data x-intersect.once="$el.classList.add('animate-fade-in-up')">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-urbie-600/20 border border-urbie-500/30 text-urbie-300 text-xs font-medium mb-6">
                    <span class="w-1.5 h-1.5 rounded-full bg-urbie-400 animate-pulse"></span>
                    Sistema completo de gestão condominial
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Gerencie seu<br>
                    condomínio<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-urbie-400 to-urbie-300">sem complicação</span>
                </h1>

                <p class="text-lg text-slate-400 leading-relaxed mb-8 max-w-lg">
                    Do financeiro às assembleias online, do cadastro de moradores ao extrato condominial — tudo em uma única plataforma intuitiva. Feito para síndicos e administradoras.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contato" class="btn-primary py-4 px-8 text-base justify-center">
                        Solicitar demonstração gratuita
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="#como-funciona" class="btn-white py-4 px-8 text-base justify-center">
                        <svg class="w-5 h-5 text-urbie-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Ver como funciona
                    </a>
                </div>

                <div class="flex items-center gap-6 mt-10">
                    <div class="flex -space-x-2">
                        @foreach(['#6366f1','#3b82f6','#10b981','#f59e0b'] as $color)
                        <div class="w-8 h-8 rounded-full border-2 border-slate-900 flex items-center justify-center" style="background: {{ $color }}">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/></svg>
                        </div>
                        @endforeach
                    </div>
                    <p class="text-slate-400 text-sm">
                        <span class="text-white font-semibold">+500 condomínios</span> já usam o Urbie
                    </p>
                </div>
            </div>

            {{-- Dashboard mockup --}}
            <div class="hidden lg:block" x-data x-intersect.once="$el.classList.add('animate-fade-in-right')">
                <div class="relative">
                    {{-- Main card --}}
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-4 shadow-2xl">
                        {{-- Top bar --}}
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>
                            <div class="text-slate-400 text-xs">Urbie — Painel do Síndico</div>
                        </div>

                        {{-- Dashboard content --}}
                        <div class="space-y-3">
                            {{-- Stats row --}}
                            <div class="grid grid-cols-3 gap-3">
                                <div class="bg-urbie-600/20 border border-urbie-500/20 rounded-xl p-3 text-center">
                                    <div class="text-urbie-300 text-xs mb-1">Arrecadação</div>
                                    <div class="text-white font-bold text-base">R$ 48.720</div>
                                    <div class="text-green-400 text-xs">↑ 3,2%</div>
                                </div>
                                <div class="bg-white/5 border border-white/10 rounded-xl p-3 text-center">
                                    <div class="text-slate-400 text-xs mb-1">Inadimplentes</div>
                                    <div class="text-white font-bold text-base">3 un.</div>
                                    <div class="text-red-400 text-xs">↑ 1 este mês</div>
                                </div>
                                <div class="bg-white/5 border border-white/10 rounded-xl p-3 text-center">
                                    <div class="text-slate-400 text-xs mb-1">Chamados</div>
                                    <div class="text-white font-bold text-base">12</div>
                                    <div class="text-yellow-400 text-xs">5 em aberto</div>
                                </div>
                            </div>

                            {{-- Recent transactions --}}
                            <div class="bg-white/5 border border-white/10 rounded-xl p-3">
                                <div class="text-slate-300 text-xs font-semibold mb-3">Últimas Movimentações</div>
                                <div class="space-y-2">
                                    @foreach([
                                        ['Taxa condominial - Apto 101', '+ R$ 850,00', 'green'],
                                        ['Manutenção elevador', '- R$ 1.200,00', 'red'],
                                        ['Taxa condominial - Apto 203', '+ R$ 850,00', 'green'],
                                        ['Conta de água - Fev/2026', '- R$ 3.450,00', 'red'],
                                    ] as [$desc, $val, $color])
                                    <div class="flex items-center justify-between">
                                        <span class="text-slate-400 text-xs truncate">{{ $desc }}</span>
                                        <span class="text-{{ $color }}-400 text-xs font-semibold ml-2 shrink-0">{{ $val }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Progress bar --}}
                            <div class="bg-white/5 border border-white/10 rounded-xl p-3">
                                <div class="flex justify-between text-xs mb-2">
                                    <span class="text-slate-300">Arrecadação do mês</span>
                                    <span class="text-urbie-300">78%</span>
                                </div>
                                <div class="w-full h-2 bg-white/10 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-urbie-500 to-urbie-400 rounded-full" style="width: 78%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating badge --}}
                    <div class="absolute -bottom-4 -left-6 bg-white rounded-xl shadow-xl p-3 flex items-center gap-2.5 border border-slate-100">
                        <div class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <div class="text-xs text-slate-500">Assembleia</div>
                            <div class="text-xs font-semibold text-slate-800">Quórum atingido ✓</div>
                        </div>
                    </div>

                    <div class="absolute -top-4 -right-4 bg-white rounded-xl shadow-xl p-3 border border-slate-100">
                        <div class="text-xs text-slate-500 mb-0.5">Extrato enviado</div>
                        <div class="text-xs font-bold text-slate-800">47 de 48 unidades</div>
                        <div class="w-full h-1.5 bg-slate-100 rounded-full mt-1.5 overflow-hidden">
                            <div class="h-full bg-urbie-500 rounded-full" style="width: 97%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Wave --}}
    <div class="absolute bottom-0 inset-x-0">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 80L1440 80L1440 40C1200 80 960 0 720 40C480 80 240 0 0 40L0 80Z" fill="white"/>
        </svg>
    </div>
</section>


{{-- ========================================
     LOGOS / SOCIAL PROOF
     ======================================== --}}
<section class="py-14 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-slate-400 text-sm font-medium mb-8">Confiado por condomínios de todo o Brasil</p>
        <div class="flex flex-wrap justify-center items-center gap-10 opacity-40 grayscale">
            @foreach(['Residencial Aurora','Edifício Planalto','Condomínio Vila Nova','Torres da Cidade','Residencial Horizonte'] as $name)
            <span class="text-slate-600 font-semibold text-sm tracking-wide uppercase">{{ $name }}</span>
            @endforeach
        </div>
    </div>
</section>


{{-- ========================================
     FUNCIONALIDADES
     ======================================== --}}
<section id="funcionalidades" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-urbie-600 text-sm font-semibold tracking-wide uppercase mb-3 block">Funcionalidades</span>
            <h2 class="section-title mb-4">Tudo que seu condomínio precisa</h2>
            <p class="section-subtitle">Uma plataforma completa desenvolvida pensando no síndico, na administradora e no morador. Sem planilhas, sem papel, sem dor de cabeça.</p>
        </div>

        {{-- Feature cards grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            @php
            $features = [
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
                    'title' => 'Gestão de Edifícios e Unidades',
                    'desc' => 'Cadastre edifícios, blocos, unidades, moradores, proprietários, veículos e pets. Histórico completo de cada unidade.',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>',
                    'title' => 'Financeiro Completo',
                    'desc' => 'Conta geral do condomínio, contas por unidade, DRE, fluxo de caixa, previsão orçamentária e conciliação bancária.',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
                    'title' => 'Extrato Condominial',
                    'desc' => 'Gere e envie automaticamente o extrato mensal para cada unidade com taxas, multas, reembolsos e histórico de pagamentos.',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>',
                    'title' => 'Assembleias Online',
                    'desc' => 'Convoque, realize e documente assembleias de forma digital. Votações eletrônicas, quórum automático, atas geradas automaticamente.',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
                    'title' => 'Gestão de RH',
                    'desc' => 'Controle de funcionários, folha de pagamento, férias, horas extras, controle de ponto e obrigações trabalhistas.',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>',
                    'title' => 'Fornecedores e Contratos',
                    'desc' => 'Gestão de fornecedores, cotações, contratos, ordens de serviço e histórico de manutenções preventivas e corretivas.',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>',
                    'title' => 'Comunicação Integrada',
                    'desc' => 'Mural de avisos, circulares, notificações push no app, e-mail automático e edital do condomínio digitalizado.',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>',
                    'title' => 'Cobrança Automática',
                    'desc' => 'Geração de boletos, Pix e integração bancária. Régua de cobrança automática para inadimplentes com notificações configuráveis.',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2v-2H6v2a2 2 0 002 2zM5.07 15A7 7 0 0012 5a7 7 0 016.93 10H5.07z"/>',
                    'title' => 'App para Moradores',
                    'desc' => 'App iOS e Android para moradores verem extratos, reservar áreas comuns, abrir chamados, votar em assembleias e se comunicar.',
                ],
            ];
            @endphp

            @foreach($features as $feature)
            <div class="card group"
                 x-data x-intersect.once="$el.classList.add('animate-fade-in-up')">
                <div class="feature-icon group-hover:bg-urbie-600 group-hover:text-white transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $feature['icon'] !!}
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-slate-900 mb-2">{{ $feature['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $feature['desc'] }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>


{{-- ========================================
     COMO FUNCIONA
     ======================================== --}}
<section id="como-funciona" class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-urbie-600 text-sm font-semibold tracking-wide uppercase mb-3 block">Como funciona</span>
            <h2 class="section-title mb-4">Comece em minutos</h2>
            <p class="section-subtitle">Configuração simples, migração assistida e suporte humano desde o primeiro dia.</p>
        </div>

        <div class="grid md:grid-cols-4 gap-8 relative">
            {{-- Connecting line (desktop) --}}
            <div class="hidden md:block absolute top-10 left-[12.5%] right-[12.5%] h-px bg-gradient-to-r from-transparent via-urbie-200 to-transparent"></div>

            @foreach([
                ['01', 'Cadastro rápido', 'Crie sua conta, informe os dados do condomínio e configure as unidades em poucos minutos.'],
                ['02', 'Importe seus dados', 'Migre moradores, histórico financeiro e contratos com a ajuda da nossa equipe especializada.'],
                ['03', 'Configure e personalize', 'Defina taxas, regras de cobrança, permissões e o visual do seu portal do morador.'],
                ['04', 'Pronto! Gerencie tudo', 'Comece a usar o sistema completo com suporte em tempo real por chat, e-mail e telefone.'],
            ] as [$num, $title, $desc])
            <div class="relative text-center" x-data x-intersect.once="$el.classList.add('animate-fade-in-up')">
                <div class="w-20 h-20 rounded-2xl bg-urbie-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-5 shadow-lg shadow-urbie-200 relative z-10">
                    {{ $num }}
                </div>
                <h3 class="font-semibold text-slate-900 mb-2">{{ $title }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ========================================
     HIGHLIGHT — FINANCEIRO
     ======================================== --}}
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Text --}}
            <div x-data x-intersect.once="$el.classList.add('animate-fade-in-left')">
                <span class="text-urbie-600 text-sm font-semibold tracking-wide uppercase mb-3 block">Financeiro inteligente</span>
                <h2 class="section-title mb-6">Controle total das finanças do condomínio</h2>
                <p class="section-subtitle mb-8">Chega de planilhas. O Urbie centraliza toda a movimentação financeira — da conta geral ao extrato individual de cada unidade.</p>

                <ul class="space-y-4 mb-8">
                    @foreach([
                        'Lançamento de receitas e despesas com categorias',
                        'Rateio automático por unidade (fração ideal, igual, fator)',
                        'Previsão orçamentária anual com alertas de desvio',
                        'Contas a pagar e a receber com controle de vencimentos',
                        'Fundo de reserva e fundo de obras separados',
                        'Relatórios e DRE em um clique',
                    ] as $item)
                    <li class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-urbie-100 flex items-center justify-center mt-0.5 shrink-0">
                            <svg class="w-3 h-3 text-urbie-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-600 text-sm">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="#contato" class="btn-primary">
                    Quero conhecer o financeiro
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            {{-- Visual --}}
            <div class="bg-slate-50 rounded-3xl p-6 border border-slate-100" x-data x-intersect.once="$el.classList.add('animate-fade-in-right')">
                {{-- Extrato mockup --}}
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="bg-urbie-600 px-5 py-4">
                        <div class="text-white text-xs font-medium opacity-75">Extrato Condominial</div>
                        <div class="text-white font-bold mt-0.5">Apto 201 — Março/2026</div>
                    </div>
                    <div class="p-5 space-y-3">
                        @foreach([
                            ['Taxa ordinária', 'R$ 850,00', 'debit'],
                            ['Fundo de reserva', 'R$ 85,00', 'debit'],
                            ['Água (consumo individual)', 'R$ 42,50', 'debit'],
                            ['Multa — barulho (art. 12)', 'R$ 100,00', 'debit'],
                            ['Crédito — reembolso obra', '- R$ 50,00', 'credit'],
                        ] as [$label, $value, $type])
                        <div class="flex justify-between items-center py-2 border-b border-slate-50 last:border-0">
                            <span class="text-slate-600 text-sm">{{ $label }}</span>
                            <span class="font-semibold text-sm {{ $type === 'credit' ? 'text-green-600' : 'text-slate-800' }}">{{ $value }}</span>
                        </div>
                        @endforeach
                        <div class="pt-2 flex justify-between items-center">
                            <span class="font-bold text-slate-900">Total a pagar</span>
                            <span class="font-bold text-urbie-600 text-lg">R$ 1.027,50</span>
                        </div>
                        <div class="flex gap-2 pt-2">
                            <button class="flex-1 btn-primary py-2.5 text-xs justify-center">Gerar Boleto</button>
                            <button class="flex-1 btn-secondary py-2.5 text-xs justify-center">Copiar Pix</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ========================================
     ASSEMBLEIA ONLINE
     ======================================== --}}
<section class="py-24 bg-gradient-to-br from-urbie-950 to-urbie-900 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Visual --}}
            <div class="order-last lg:order-first" x-data x-intersect.once="$el.classList.add('animate-fade-in-left')">
                <div class="bg-white/5 border border-white/10 rounded-2xl p-5 backdrop-blur-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-white font-semibold">Assembleia Ordinária — Mar/2026</div>
                        <span class="px-2.5 py-1 bg-green-500/20 text-green-400 text-xs font-semibold rounded-full border border-green-500/20">Ao vivo</span>
                    </div>

                    {{-- Progress --}}
                    <div class="bg-white/10 rounded-xl p-4 mb-4">
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-slate-300">Quórum</span>
                            <span class="text-white font-semibold">32/48 presentes (66%)</span>
                        </div>
                        <div class="w-full h-3 bg-white/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-green-500 to-green-400 rounded-full" style="width: 66%"></div>
                        </div>
                        <div class="text-xs text-green-400 mt-1">✓ Quórum mínimo atingido (50%+1)</div>
                    </div>

                    {{-- Voting item --}}
                    <div class="bg-white/5 border border-white/10 rounded-xl p-4 mb-3">
                        <div class="text-xs text-urbie-300 mb-2 font-medium">PAUTA 2 — EM VOTAÇÃO</div>
                        <p class="text-white text-sm font-medium mb-4">Aprovação da reforma da fachada no valor de R$ 35.000,00</p>
                        <div class="grid grid-cols-3 gap-2">
                            @foreach([['Sim','green','24'],['Não','red','5'],['Abstenção','slate','3']] as [$label, $color, $count])
                            <button class="py-2.5 rounded-xl border {{ $color === 'green' ? 'bg-green-500/20 border-green-500/30 text-green-300' : ($color === 'red' ? 'bg-red-500/20 border-red-500/30 text-red-300' : 'bg-white/5 border-white/10 text-slate-400') }} text-sm font-semibold transition-all">
                                {{ $label }}
                                <div class="text-xs font-bold mt-0.5">{{ $count }}</div>
                            </button>
                            @endforeach
                        </div>
                    </div>

                    <div class="text-xs text-slate-400 text-center">Votação encerra em 02:47</div>
                </div>
            </div>

            {{-- Text --}}
            <div x-data x-intersect.once="$el.classList.add('animate-fade-in-right')">
                <span class="text-urbie-300 text-sm font-semibold tracking-wide uppercase mb-3 block">Assembleia Digital</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-6">Assembleias sem burocracia e com total validade jurídica</h2>
                <p class="text-slate-400 leading-relaxed mb-8">Convoque, realize e documente assembleias 100% online. O sistema controla o quórum, registra votos e gera a ata assinada digitalmente — tudo conforme o Código Civil e a LGPD.</p>

                <ul class="space-y-3 mb-8">
                    @foreach([
                        'Edital de convocação automático por e-mail e push',
                        'Votação eletrônica com certificação digital',
                        'Transmissão ao vivo integrada',
                        'Ata gerada automaticamente com todos os votos',
                        'Arquivo digital com validade jurídica',
                    ] as $item)
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-urbie-500/20 border border-urbie-500/30 flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3 text-urbie-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        <span class="text-slate-300 text-sm">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="#contato" class="btn-white">
                    Saiba mais sobre assembleias
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>


{{-- ========================================
     MÉTRICAS
     ======================================== --}}
<section class="py-16 bg-white border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            @foreach([
                ['500+', 'Condomínios ativos'],
                ['48.000+', 'Unidades gerenciadas'],
                ['99,9%', 'Uptime garantido'],
                ['< 2 min', 'Suporte em tempo real'],
            ] as [$num, $label])
            <div x-data x-intersect.once="$el.classList.add('animate-fade-in-up')">
                <div class="text-3xl md:text-4xl font-bold text-urbie-600 mb-2">{{ $num }}</div>
                <div class="text-slate-500 text-sm">{{ $label }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ========================================
     PLANOS
     ======================================== --}}
<section id="planos" class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-6">
            <span class="text-urbie-600 text-sm font-semibold tracking-wide uppercase mb-3 block">Planos</span>
            <h2 class="section-title mb-4">Preços simples e transparentes</h2>
            <p class="section-subtitle">Sem taxa de setup, sem fidelidade. Cancele quando quiser.</p>
        </div>

        {{-- Toggle anual/mensal --}}
        <div class="flex items-center justify-center gap-3 mb-12"
             x-data="{ anual: true }">
            <span class="text-sm" :class="anual ? 'text-slate-400' : 'text-slate-900 font-medium'">Mensal</span>
            <button
                @click="anual = !anual"
                class="w-12 h-6 rounded-full transition-colors duration-300 relative"
                :class="anual ? 'bg-urbie-600' : 'bg-slate-300'"
            >
                <span class="w-4 h-4 rounded-full bg-white absolute top-1 transition-all duration-300"
                      :class="anual ? 'left-7' : 'left-1'"></span>
            </button>
            <span class="text-sm" :class="anual ? 'text-slate-900 font-medium' : 'text-slate-400'">
                Anual
                <span class="ml-1.5 px-2 py-0.5 bg-green-100 text-green-700 text-xs font-semibold rounded-full">-20%</span>
            </span>

            {{-- Plans --}}
            <div class="hidden"><!-- x-data scope --></div>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto" x-data="{ anual: true }">

            @foreach([
                [
                    'name' => 'Starter',
                    'desc' => 'Para condomínios pequenos',
                    'monthly' => 'R$ 199',
                    'yearly' => 'R$ 159',
                    'highlight' => false,
                    'features' => ['Até 50 unidades', 'Financeiro completo', 'Extrato mensal automático', 'App para moradores', 'Suporte por e-mail'],
                ],
                [
                    'name' => 'Professional',
                    'desc' => 'O mais completo para o dia a dia',
                    'monthly' => 'R$ 399',
                    'yearly' => 'R$ 319',
                    'highlight' => true,
                    'features' => ['Até 200 unidades', 'Tudo do Starter', 'Assembleia online', 'Gestão de RH', 'Fornecedores e contratos', 'Suporte via chat e telefone'],
                ],
                [
                    'name' => 'Enterprise',
                    'desc' => 'Para grandes administradoras',
                    'monthly' => 'Sob consulta',
                    'yearly' => 'Sob consulta',
                    'highlight' => false,
                    'features' => ['Unidades ilimitadas', 'Múltiplos condomínios', 'API para integração', 'SLA personalizado', 'Gerente de conta dedicado', 'Treinamento presencial'],
                ],
            ] as $plan)
            <div class="relative {{ $plan['highlight'] ? 'bg-urbie-600 text-white shadow-xl shadow-urbie-200 scale-105' : 'bg-white' }} rounded-2xl p-7 border {{ $plan['highlight'] ? 'border-urbie-500' : 'border-slate-100' }}"
                 x-data x-intersect.once="$el.classList.add('animate-fade-in-up')">

                @if($plan['highlight'])
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
                    <span class="px-4 py-1 bg-amber-400 text-amber-900 text-xs font-bold rounded-full">Mais Popular</span>
                </div>
                @endif

                <div class="mb-6">
                    <div class="font-bold text-lg mb-1 {{ $plan['highlight'] ? 'text-white' : 'text-slate-900' }}">{{ $plan['name'] }}</div>
                    <div class="text-sm {{ $plan['highlight'] ? 'text-urbie-200' : 'text-slate-500' }}">{{ $plan['desc'] }}</div>
                </div>

                <div class="mb-6" x-data="{ anual: true }">
                    <div class="text-3xl font-bold {{ $plan['highlight'] ? 'text-white' : 'text-slate-900' }}">
                        {{ $plan['monthly'] }}
                        @if($plan['monthly'] !== 'Sob consulta')
                        <span class="text-sm font-normal {{ $plan['highlight'] ? 'text-urbie-200' : 'text-slate-400' }}">/mês</span>
                        @endif
                    </div>
                </div>

                <ul class="space-y-2.5 mb-8">
                    @foreach($plan['features'] as $feature)
                    <li class="flex items-center gap-2.5 text-sm">
                        <svg class="w-4 h-4 shrink-0 {{ $plan['highlight'] ? 'text-urbie-200' : 'text-urbie-500' }}" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="{{ $plan['highlight'] ? 'text-urbie-100' : 'text-slate-600' }}">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="#contato" class="block text-center py-3 rounded-xl font-semibold text-sm transition-all {{ $plan['highlight'] ? 'bg-white text-urbie-700 hover:bg-urbie-50' : 'bg-urbie-600 text-white hover:bg-urbie-700' }}">
                    {{ $plan['name'] === 'Enterprise' ? 'Falar com vendas' : 'Começar agora' }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ========================================
     DEPOIMENTOS
     ======================================== --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-urbie-600 text-sm font-semibold tracking-wide uppercase mb-3 block">Depoimentos</span>
            <h2 class="section-title mb-4">O que nossos clientes dizem</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                [
                    'quote' => 'O Urbie transformou completamente a gestão do nosso condomínio. Antes levávamos dias para fechar o mês financeiro. Agora fazemos em minutos.',
                    'name' => 'Carlos Menezes',
                    'role' => 'Síndico há 8 anos',
                    'condo' => 'Residencial Aurora — SP',
                    'stars' => 5,
                ],
                [
                    'quote' => 'A assembleia online foi um divisor de águas. Conseguimos atingir 80% de quórum na primeira votação. Os moradores adoraram a praticidade.',
                    'name' => 'Ana Paula Ribeiro',
                    'role' => 'Síndica profissional',
                    'condo' => 'Torres da Cidade — RJ',
                    'stars' => 5,
                ],
                [
                    'quote' => 'Gerencio 12 condomínios pela plataforma. O suporte é incrível e o sistema é muito intuitivo. Recomendo sem hesitar para qualquer administradora.',
                    'name' => 'Roberto Alves',
                    'role' => 'Administrador',
                    'condo' => 'Alves Gestão Condominial — MG',
                    'stars' => 5,
                ],
            ] as $t)
            <div class="card" x-data x-intersect.once="$el.classList.add('animate-fade-in-up')">
                <div class="flex mb-4">
                    @for($i = 0; $i < $t['stars']; $i++)
                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="text-slate-600 text-sm leading-relaxed mb-5 italic">"{{ $t['quote'] }}"</p>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                    <div class="w-9 h-9 rounded-full bg-urbie-100 flex items-center justify-center text-urbie-600 font-bold text-sm">
                        {{ substr($t['name'], 0, 1) }}
                    </div>
                    <div>
                        <div class="font-semibold text-slate-900 text-sm">{{ $t['name'] }}</div>
                        <div class="text-slate-400 text-xs">{{ $t['role'] }} · {{ $t['condo'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ========================================
     CONTATO / CTA
     ======================================== --}}
<section id="contato" class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-start">

            {{-- Left --}}
            <div>
                <span class="text-urbie-600 text-sm font-semibold tracking-wide uppercase mb-3 block">Fale conosco</span>
                <h2 class="section-title mb-4">Pronto para descomplicar<br>seu condomínio?</h2>
                <p class="section-subtitle mb-8">Agende uma demonstração gratuita e veja como o Urbie pode transformar a gestão do seu condomínio.</p>

                <div class="space-y-5">
                    @foreach([
                        ['<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>', '(11) 4000-0000', 'Seg–Sex, 8h–18h'],
                        ['<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>', 'contato@urbie.com.br', 'Resposta em até 2h'],
                        ['<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>', 'Chat ao vivo no sistema', 'Disponível para clientes'],
                    ] as [$icon, $contact, $note])
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-urbie-100 flex items-center justify-center text-urbie-600 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $icon !!}</svg>
                        </div>
                        <div>
                            <div class="font-medium text-slate-900 text-sm">{{ $contact }}</div>
                            <div class="text-slate-400 text-xs">{{ $note }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Form --}}
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-slate-100">
                <h3 class="font-semibold text-slate-900 mb-5">Solicitar demonstração gratuita</h3>

                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-medium text-slate-700 mb-1.5">Nome completo *</label>
                            <input type="text" name="name" required placeholder="João Silva"
                                   class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:ring-2 focus:ring-urbie-500 focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-slate-700 mb-1.5">E-mail *</label>
                            <input type="email" name="email" required placeholder="joao@email.com"
                                   class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:ring-2 focus:ring-urbie-500 focus:border-transparent transition-all">
                        </div>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-medium text-slate-700 mb-1.5">WhatsApp</label>
                            <input type="tel" name="phone" placeholder="(11) 99999-9999"
                                   class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:ring-2 focus:ring-urbie-500 focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-slate-700 mb-1.5">Nº de unidades</label>
                            <select name="units" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-600 focus:outline-none focus:ring-2 focus:ring-urbie-500 focus:border-transparent transition-all bg-white">
                                <option value="">Selecione...</option>
                                <option>Até 50</option>
                                <option>50 a 200</option>
                                <option>200 a 500</option>
                                <option>Mais de 500</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-700 mb-1.5">Qual é seu papel?</label>
                        <select name="role" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-600 focus:outline-none focus:ring-2 focus:ring-urbie-500 focus:border-transparent transition-all bg-white">
                            <option value="">Selecione...</option>
                            <option>Síndico</option>
                            <option>Síndico profissional</option>
                            <option>Administradora</option>
                            <option>Conselheiro</option>
                            <option>Outro</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-700 mb-1.5">Mensagem (opcional)</label>
                        <textarea name="message" rows="3" placeholder="Conte um pouco sobre seu condomínio ou dúvidas..."
                                  class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:ring-2 focus:ring-urbie-500 focus:border-transparent transition-all resize-none"></textarea>
                    </div>

                    <button type="submit" class="btn-primary w-full py-3.5 justify-center text-sm">
                        Solicitar demonstração gratuita
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </button>
                    <p class="text-center text-xs text-slate-400">Sem compromisso. Nossa equipe entra em contato em até 2h.</p>
                </form>
            </div>
        </div>
    </div>
</section>


{{-- ========================================
     FINAL CTA
     ======================================== --}}
<section class="py-20 bg-gradient-to-r from-urbie-700 to-urbie-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Descomplicar começa agora</h2>
        <p class="text-urbie-200 text-lg mb-8 max-w-xl mx-auto">Junte-se a centenas de síndicos que já simplificaram a gestão do seu condomínio com o Urbie.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#contato" class="btn-white py-4 px-8 text-base justify-center">
                Solicitar demo gratuita
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#planos" class="btn-secondary border-white text-white hover:bg-urbie-800 py-4 px-8 text-base justify-center">
                Ver planos
            </a>
        </div>
    </div>
</section>

@endsection

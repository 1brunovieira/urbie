# Urbie

Sistema completo de administração de condomínios.

## Estrutura do Projeto

```
urbie/
├── site/      # Landing page + Marketing site (Laravel + Blade + Tailwind)
├── admin/     # Painel administrativo (em desenvolvimento)
└── api/       # API REST para integração com app mobile (em desenvolvimento)
```

## Módulos Planejados

- Cadastro de edifícios, blocos, unidades
- Cadastro de moradores, veículos e pets
- Gestão financeira (conta geral e contas individuais por unidade)
- Extrato condominial mensal
- Taxas ordinárias, extraordinárias, multas, reembolsos
- Gestão de RH
- Contabilidade e fornecedores
- Receitas diversas
- Assembleia online
- Edital e atas condominiais

## Stack Tecnológica

- **Backend**: PHP 8.3 + Laravel 11
- **Frontend**: Blade + Tailwind CSS v4 + Alpine.js v3
- **Build**: Vite
- **Banco de dados**: MySQL 8
- **Servidor**: Amazon EC2 + Apache
- **API**: Laravel Sanctum (pronta para integração com app mobile)

## Desenvolvimento

Cada subprojeto possui seu próprio README com instruções específicas.

---

© 2026 Urbie. Todos os direitos reservados.

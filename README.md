Versão para python

fashion_pdv_project/
├── fashion_pdv_project/   <-- Diretório de configuração do projeto
│   ├── __init__.py
│   ├── settings.py        <-- Configurações do projeto
│   ├── urls.py            <-- URLs do projeto
│   ├── wsgi.py
│   └── asgi.py
├── dashboard/             <-- Nosso app Django
│   ├── __init__.py
│   ├── admin.py
│   ├── apps.py
│   ├── migrations/
│   │   └── __init__.py
│   ├── models.py          <-- (Não usaremos agora, mas é onde ficariam os modelos de dados)
│   ├── static/            <-- Arquivos estáticos do app
│   │   └── dashboard/
│   │       └── style.css  <-- Nosso CSS
│   ├── templates/         <-- Templates HTML do app
│   │   └── dashboard/
│   │       └── dashboard.html <-- Nosso template HTML
│   ├── tests.py
│   ├── urls.py            <-- URLs específicas do app
│   └── views.py           <-- Lógica das views (controladores)
└── manage.py              <-- Utilitário de gerenciamento do Django

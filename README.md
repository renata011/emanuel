# Trabalho Cadastro de Pacientes
Instale o github 
https://git-scm.com/download/win
Escolha sua versão WINDOWS 32bits ou 64bits

Instale o composer - baixe no site https://getcomposer.org/Composer-Setup.exe

# Baixe o projeto.

Você precisa estar na raiz do c:\ 

CD\ "<enter>"
git clone https://github.com/paulo2782/emanuel.git

Depois de instalado vá no CMD - (PROMPT DE COMANDO) Digite: composer install
depois de instalado crie o banco de dados no phpmyadmin coloque o nome do banco

emanuel

3)Volte no terminal (PROMPT DE COMANDO) Rode as migration

php artisan migrate

Crie a chave para o sistema
php artisan key:generate

Rode o servidor
php artisan serve

Acesse o navegador pelo link que aparece no terminal
ex.: http://localhost:8000

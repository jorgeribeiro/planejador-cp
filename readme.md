# Planejador CP

## Sobre

Aplicação feita para auxiliar estudantes do curso de Ciência da Computação da UFMA a decidir entre turmas de forma a cumprir a carga horária do curso.

O curso possui uma estrutura específica, onde até o 6º período o estudante possui n cadeiras obrigatórias a cumprir, e a partir daí precisa escolher entre um grupo de disciplinas eletivas de forma a cumprir a carga horária optativa. O sistema [SIGAA](https://sigaa.ufma.br) não descreve em detalhes quantas disciplinas faltam, mostrando apenas a quantidade de horas pendentes, o que pode gerar confusão.

## Tecnologias
- PHP
- MySQL
- Laravel
- Bootstrap
- Vue.js ou Angular ou React.js (a definir)

## Dependências
- PHP >= 5.6.4

## Instalação
Construindo... Porém é certeza que precisa do gerenciador de dependências [Composer](https://getcomposer.org/). Se estiver interessado pode adiantar a instalação. Com o PHP instalado, rode os comandos:
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

## Referências
- [COCOM - Coordenação de Ciência da Computação - UFMA](http://www.deinf.ufma.br/cocom/site/)
- [SIGAA](https://sigaa.ufma.br)

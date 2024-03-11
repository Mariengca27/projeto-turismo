## Primeiro: 

1º Precisa baixar o XAMPP localmente + Composer local:
- [Link XAMPP](https://www.apachefriends.org/pt_br/index.html)
- [Link Componser](https://getcomposer.org/)



Importante lembrar que precisam estar sicronizados nas versões PHP x Composer no ambiente local e de desenvolvimento;



2º Ler a documentação do Laravel:  
 - [Laravel Documentação](https://laravel.com/docs/10.x/installation)

 

## Para Rodar o projeto:

1º Baixar do github

2º Pegar o arquivo **".env.example"** e copiar o conteudo em um novo arquivo com o nome **".env"**.

3º Rodar o comando para instalar o Composer:

```sh
composer install
```


4º Rodar o comando para gerar a key específica do projeto:

```sh
php artisan key:generate  
```

5º Rodar o projeto no VSCode: 

```sh
php artisan serve
```

6º Verificar na porta específica se obteve sucesso e o projeto está rodando. 




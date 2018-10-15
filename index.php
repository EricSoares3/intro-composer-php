<?php
// COMANDO PARA RODAR A BIBLIOTECA NA LINHA DE COMANDO : php -S localhost:8080 = 'numero da porta que deseja utilizar'


// fazendo a requizição da biblioteca, por meio do autoload ( o qual irá carregar tudo que
// houver dessa biblioteca para poder já ser utilizado.. )
require  'vendor/autoload.php';

// Utilizção de uma das classes que essa biblioteca possui
// Cria slugs apartir de textos      
$slugifier = new \Slug\Slugifier();

// Texto qualquer, para exemplo
$titulo =  'Produto Incrível com Várias Cores Disponíveis';

// classe utilizada para gerar o slug
$slug = $slugifier->slugify($titulo);

// Exibindo títilo sem o uso da biblioteca..
echo '<p>Título original: ' .$titulo ."</p>";

// Exibindo títilo com o uso da biblioteca..
echo '<p>URL do produto (slug): ' .$slug ."</p>";
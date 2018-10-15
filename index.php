<?php

require  'vendor/autoload.php';

$slugifier = new \Slug\Slugifier();

$titulo = new 'Produto Incrível com Várias Cores Disponíveis';

$slug = $slugifier->slugify($titulo);

echo '<p>Título original: ' .$titulo ."</p>";

echo '<p>URL do produto (slug): ' .$slug ."</p>";
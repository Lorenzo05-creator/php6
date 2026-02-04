<?php

require_once 'post.php';


$tech = new Categoria('Tecnologia');
$life = new Categoria('Lifestyle');


$post1 = new Post(
    'Introduzione a PHP',
    $tech,
    ['php', 'backend', 'programmazione']
);

$post2 = new Post(
    'Vivere meglio con nemo',
    $life,
    ['benessere', 'minimalismo']
);


$post1->mostraArticolo();
$post2->mostraArticolo();


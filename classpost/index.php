<?php

require_once 'post.php';


$tech = new CATEGORIA('Tecnologia');
$life = new CATEGORIA('Lifestyle');


$post1 = new POST(
    'Introduzione a PHP',
    $tech,
    ['php', 'backend', 'programmazione']
);

$post2 = new POST(
    'Vivere meglio con nemo',
    $life,
    ['benessere', 'minimalismo']
);


$post1->mostraArticolo();
$post2->mostraArticolo();

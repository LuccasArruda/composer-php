<?php

require_once '../vendor/autoload.php';

use Alura\BuscadorCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_url' => 'http://alura.com.br']);



$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach($cursos as $curso){
    echo $curso->textContent . PHP_EOL;
}
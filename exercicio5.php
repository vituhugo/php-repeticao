<?php
$frutas = ["maçã", "banana", "uva"];

$frutas[0]; // "maçã"

// Exercício 5;
$medalistas = [
        [
            "nome" => "João da Silva",
            "medatalha" => "Prata"
        ],
        [
            "nome" => "Wagner Albuquerque",
            "medalha" => "Bronze"
        ],
        [
            "nome" => "Henrique Oliveira",
            "medalha" => "Ouro"
        ]
    ];

foreach($medalistas as $medalista) {
    echo "Nome do medalista é: ".$medalista[0]. "\n";
    echo "Aa medalha é: ".$medalista[1]. "\n";
}
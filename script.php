<?php
//exit;
//continue ignora a interação;
//break interrompe o for ou foreach;
//return;


//[
    //0 => "banana",
    //indice => valor
//]

$frutas = ["banana","maçã","abacaxi"]; // sizeof($array) = 3
foreach($frutas as $fruta) {
    if ($fruta === "maçã") {
    break;   
    }
    echo "Nome das frutas: ". $fruta. "\n";
}

exit;

for ($x = 0 ; $x < 30 ; $x++) {
    //Faz o que quiser.
}

//Array interando 

$frutas = ["banana","maçã","abacaxi"]; // sizeof($array) = 3
for ($indice = 0; $indice < count($frutas) ; $indice++) {
    echo "Nome das frutas: ". $frutas[$indice]. "\n";
    // Exemplo de como é processado na primeira interação:
    // echo "Nome das frutas: ". $furtas[0];
    // echo "Nome das frutas: ". "banana";
    // echo "Nome das frutas: banana";
}

//Array Foreach
echo "\n\nArray com foreach: \n";
foreach($frutas as $fruta) {
    echo "Nome das frutas: ". $fruta. "\n";
}

//Array Foreach com indice
echo "\n\nArray com foreach: \n";
foreach($frutas as $indice => $fruta) {
    echo "Nome da fruta: ". $fruta. " no indice $indice. \n";
}





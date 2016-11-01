<?php 

echo "Array são coleção de dados que podem ser armazenados em uma mesma variável<br /><br />";

echo "Utilizando o conceito de chave e valor <br />";

// utilizando o conceito de chave e valor
$meuArray = array("Nome" => "Cleiton Corrêa", 
				  "Idade" => 30,
				  "Profissão" => "Web Master");

echo "<pre>";
echo print_r($meuArray);
echo "</pre>";

echo "Perconrrendo o array com foreach<br /><br />";

foreach ($meuArray as $key => $value) {
	echo "{$key}: {$value}<br />";

}

echo "<hr>";
echo "Utilizando índice padrão para numerar os valores do array<br /><br />";
//Os indices são enumerados automaticamente pelo PHP, atribuindo apenas valores para cada índice
$arraySimples = array('Pera', 'Limão', 'Morango');

echo "<pre>";
echo print_r($arraySimples);
echo "</pre>";

echo "<hr>";

echo "Outra forma de se declarar o valores para o array.<br /><br />";
//Tambem podemos utilizar dessa maneira

$fruta[] = "PHP";
$fruta[] = "Java script";
$fruta[] = "Python";
$fruta[] = "C++";

echo "Percorrendo o array com foreach e imprimindo apenas os valores, sem índices.<br /><br />";

foreach ($fruta as $value) {
	echo $value.'<br />';
}

echo "<hr />";
echo "Podemos utilizar WHILE para percorrer um array e exibir seus valores<br /><br />";

$arr = array("one", "two", "three");
reset($arr);
while (list(, $value) = each($arr)) {
    echo "Value: $value<br />\n";
}

echo "<hr />";
echo "Outra maneira de se declarar um array.<br /><br />";

$outroArray["Nome"] = "Cleiton";
$outroArray["Experiencia"] = "Programação em PHP";
$outroArray["Especialidade"] = "Programação Web";

foreach ($outroArray as $indices => $value) {
	echo "{$indices} : {$value}<br />";
}

echo "<hr />";
echo "Outra forma de se percorrer os arrays.<br /><br />";


$a = array(1, 2, 3, 17);

$i = 0;

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

?>
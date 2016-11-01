<?php
/* foreach example 4: multi-dimensional arrays */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $key=> $v2) {
        echo "{$key} :   $v2<br />";
    }
}

echo "<br />";
echo "<hr>";
echo "Outra forma de se construir matrizes e percorre-las<br /><br />";

$carros =  array("Palio" => array(
	                             "Marca" => "Fiat",
	                             "Ano"   =>  2016
	                             ),
                "Corsa" => array(
                                 "Marca" => "Wolkswager",
                                 "Ano"   => 2010
                	            )

 );

$i = count($carros);

foreach ($carros as $carro => $detalhes) {
	echo "Modelo:   {$carro}";
	foreach ($detalhes as $key => $value) {
		echo " {$key}: {$value}";
	}

	echo "<br />";
}

echo "<br />";
echo "<hr>";
echo "Outra forma muito interessante<br /><br />";

$array = [
    ["Linguagem de Programação", "PHP"],
    ["Especíalidade", "WEB Master"],
];

foreach ($array as list($a, $b)) {
    // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo "$a =  $b <br />";
}

echo "<br />";
echo "<br />";
echo "<hr>";

function randomElement(array $array)
{
    if (count($array) === 0)
    {
        trigger_error('Seu array esta vazio.',  E_USER_WARNING);
        return null;
    }

    $rand = mt_rand(0, count($array) - 1);
    $array_keys = array_keys($array);
    
    return $array[$array_keys[$rand]];
}

echo var_dump(randomElement($array));


?>
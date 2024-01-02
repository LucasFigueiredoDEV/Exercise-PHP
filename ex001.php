/*Escreva um script que pede o raio de um círculo, e em seguida exiba
o perímetro e área do círculo.
Para saber o valor do pi, use: M_PI (ele armazena o valor de pi) */

<?php 
    $raio = 30;
    $pi = M_PI;

    $perimetro = ($raio * 2);
    $area = $pi * ($raio ** 2);
    
    echo "O valor do perimetro é igual a $perimetro <br>";
    echo "O valor da área é igual a $area";
?>

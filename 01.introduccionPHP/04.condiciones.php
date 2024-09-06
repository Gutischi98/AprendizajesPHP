<?php

//condiciones
$a = 15;
$b = 10;

if ($a > $b) {
    echo  "a es mayor que b<br>";
} else if ($a == $b) {
    echo "a es igual que b<br>";
}else{
    echo "a es menor que b<br>";
}


//switch:

$dia = "sabado";
switch ($dia) {
    case "lunes":
        echo "hoy es lunes, paremos el goce, hay que estudiar y trabajar<br>";
        break;
    case "sabado":
        echo "hoy es sabado y se sale<br>";
        break;

    default:
        echo "se trabaja y se estudia";
}


//ciclos:

//while:
$n = 1;

while($n < 5){
    $n++;
    echo "$n <nr>"; //si se coloca el echo antes de la variable, mostrara el estado actual  de la variable, si se coloca al final,  mostrara el valor final de la variable
}

echo"<br>";



//ciclo dowhile:
$p = 5;
do{
    echo $p;
    $p++;
}
while($p <= 5);



echo"<br>";
echo"<br>";
echo"<br>";


//for:
for($i = 0;  $i < 5; $i++){
    echo "$i <br>";
}

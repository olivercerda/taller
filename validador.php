<?php
$run = $_POST['run'];
$largo = strlen($run);
$digito = $_POST['dv'];
$contar = 2;
$acumulador=0;
while($run<>0) {
$cont = ($run % 10)*$contar;
$acumulador = $acumulador + $cont;
$run= $run / 10;
$contar = $contar + 1;
    if ($contar==8){
        $contar=2;
    }
}
$division = $acumulador %11;
if($division==0) {
    $division = 11;
    }
$dig=11- $division;
$dig2 = strval($dig);
if($dig2 == 10){
    $dig2= "K";
}
if ($digito== $dig2){
    echo ("RUN validado");

}else {
    echo ("RUN Invalido");
}
?>
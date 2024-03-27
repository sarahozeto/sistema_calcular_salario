<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Sistema para cálculo </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="psc.css">
</head>
<body>

<div id="teste">

<form method="post">
    <h1> -- CÁLCULO DE SALÁRIO -- </h1>
<br>        
<label for="inputZip" class="form-label">Informe seu nome:</label>
<br>
<input type="text" class="form-control" name="nome">

<br><br>

<label for="inputZip" class="form-label">Digite qual foi o valor de suas metas semanais:</label>
<br>
<input type="number" class="form-control" name="valorsemanal1"><br>
<input type="number" class="form-control" name="valorsemanal2"><br>
<input type="number" class="form-control" name="valorsemanal3"><br>
<input type="number" class="form-control" name="valorsemanal4"><br>

<br><br><br>
    <button type="submit" class="btn btn-primary">Calcular</button>
<br><br>

<?php
    $nome = filter_input(INPUT_POST, "nome"); 
    $semana1 = filter_input(INPUT_POST, "valorsemanal1");
    $semana2 = filter_input(INPUT_POST, "valorsemanal2");
    $semana3 = filter_input(INPUT_POST, "valorsemanal3");
    $semana4 = filter_input(INPUT_POST, "valorsemanal4");
    $mes = $semana1 + $semana2 + $semana3 + $semana4;
    $salariomin = 1927.02;
    $metamensal = 80000;
    $bonusmensal = true;
    $salariofinal = $salariomin;
    
    $semanas = [$semana1, $semana2, $semana3, $semana4];
    
    foreach($semanas as $semana){
        if($semana < 20000) {
            $bonusmensal = false;
        } else {
            $salariofinal += 200;
            $salariofinal += ($semana - 20000) * 0.05;
        }
    }
    if($bonusmensal){
        $salariofinal += ($mes - $metamensal) * 0.1;
    }

    echo "o salário do vendedor $nome será $salariofinal";
    
?>
</form>
</div>

<!-- INFORMAÇÕES PRINCIPAIS:
 - Salário final = Salário mínimo + valor sobre meta semanal + valor sobre o excedente de meta semanal + valor de excedente de meta mensal 
Para o cumprimento de meta semanal: receberá  1% sobre o valor da meta.
Para o excedente de meta semanal: Receberá 5% sobre o excedente da meta semanal.
Para o excedente de meta mensal: Receberá 10% sobre o excedente de meta mensal.-->

</body>
</html>
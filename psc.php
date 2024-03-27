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
<h1> -- CÁLCULO DE SALÁRIO -- </h1>

<form method="post">
    <div id="teste">
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
</div>
</form>

<!-- INFORMAÇÕES PRINCIPAIS:
 - Salário final = Salário mínimo + valor sobre meta semanal + valor sobre o excedente de meta semanal + valor de excedente de meta mensal 
Para o cumprimento de meta semanal: receberá  1% sobre o valor da meta.
Para o excedente de meta semanal: Receberá 5% sobre o excedente da meta semanal.
Para o excedente de meta mensal: Receberá 10% sobre o excedente de meta mensal.-->

<?php
    $nome = filter_input(INPUT_POST, "nome"); 
    $semana1 = filter_input(INPUT_POST, "valorsemanal1");
    $semana2 = filter_input(INPUT_POST, "valorsemanal2");
    $semana3 = filter_input(INPUT_POST, "valorsemanal3");
    $semana4 = filter_input(INPUT_POST, "valorsemanal4");
    $salariomin = 1927.02;
    $metamensal = 80000;

    $semanas = [$semana1, $semana2, $semana3, $semana4];

    foreach($semanas as $semana){
        if($semana  < 20000) {
            echo "burro";
        } else {
            echo "legal";
        }
    }
    
?>
</body>
</html>
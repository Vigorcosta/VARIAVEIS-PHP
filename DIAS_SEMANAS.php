<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DIAS DE SEMANAS</title>
</head>

<body>
	
<?php

	
// America/Rio_Branco;
// America/Maceio;
// America/Belem;
// America/Manaus;
// America/Bahia;
// America/Fortaleza;
// America/Sao_Paulo;
// America/Recife;
// America/Cuiaba;
// America/Campo_Grande;
// America/Noronha;
// America/Porto_Velho;
// America/Boa_Vista;
// America_Araguaina;
// Brazil/Acre;
// Brazil/deNoronha;
// Brazil/East;
// Brazil/West.	
	
//Local	
date_default_timezone_set('America/Sao_Paulo');
	
//VARIAVEL	
$data = date('D');
$mes = date('M');
$dia = date('d');
$ano = date('Y');

$semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terca-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado'
);

$mes_extenso = array(
    'Jan' => 'Janeiro',
    'Feb' => 'Fevereiro',
    'Mar' => 'Marco',
    'Apr' => 'Abril',
    'May' => 'Maio',
    'Jun' => 'Junho',
    'Jul' => 'Julho',
    'Aug' => 'Agosto',
    'Nov' => 'Novembro',
    'Sep' => 'Setembro',
    'Oct' => 'Outubro',
    'Dec' => 'Dezembro'
);

	
//DIA DE SEMANA, DATA DE MES DE /ANO
echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";

	
	
	
?>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>
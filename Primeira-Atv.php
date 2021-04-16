<!DOCTYPE html>
<html>
<head>
	<title>1° Atividade de Php</title>
<style type="text/css">
h3{
	text-align: center;
}
a{
	color: brown;	
}
b{
	color: green;
}
u{
	color: blue;
}
</style>
</head>
<body>
<?php
	$nome = 'Abner';
	$idade = '16';
	$email = 'abnergmtomaz@gmail.com';

echo '<h3>Hello World</h3>';

echo '<h3>Olá <u>'.$nome.'</u>, bem vindo!<br>Você tem <a>'.$idade.'</a> anos, e seu email é: <b>"'.$email.'<b>"</h3>'
?>
<!-- Prof, eu não sei porque, mas quando eu abri o text já estava em negrito, então pra deixar a 2 completa eu deixei o nome sublinhado :)-->
</body>
</html>
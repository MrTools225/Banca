<?php
/* function random($car) {
$string = "";
$chaine = "A1a2B3b4C5c6D7d8E9e1F0fGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuvVwWxXyYZz";
srand((double)microtime()*1000000);
for($i=0; $i<$car; $i++) {
$string .= $chaine[rand()%strlen($chaine)];
}
return $string;
}

// APPEL
// Génère une chaine de longueur 20
$chaine = random(28);
$chaines = random(30);
*/

	$characts    = 'abcdefghijklmnopqrstuvwxyz';
    $characts   .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';	
	$characts   .= '1234567890'; 
	$code_aleatoire      = ''; 

	for($i=0;$i < 10;$i++)    //10 est le nombre de caractères
	{ 
        $code_aleatoire .= substr($characts,rand()%(strlen($characts)),1); 
	}
echo $code_aleatoire; 

header('Location: ./auth/login1.php?id='.$code_aleatoire); ?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<script language="javascript">
var page = "./auth"          
top.location = page;
</script> 
</head>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
/* fonction Recursive*/
function factorielle($fact)  
{  
  if($fact <= 1) {  
    return 1;  
  }  
  else{  
    return $fact * factorielle($fact - 1);  
  }  
}  

/* Définir une variable et lui attribuer une valeur pour trouver la factorielle.*/
$fact = 6;  
echo "Factorielle de $fact est : " .factorielle($fact); /*Appeller la fonction */ 
?>  
</body>
</html>